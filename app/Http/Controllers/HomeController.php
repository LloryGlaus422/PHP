<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Task;
use Illuminate\Http\Request;
use Auth;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use App\User;
use Session;
use Mail;
use App\Notifications\UDoNotify;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        session(['email' => Auth::user()->email]);
        session(['first_name' => Auth::user()->first_name]);
        return view('home');
    }

    public static function logout() {   
    
        Auth::logout();
        Session::flush();
        return redirect('/login');
     }

    public function getSubject(Request $request){
        $id = Auth::id();
        $subjects = Subject::where('human_id',$id)->with('subject')->get();
        return view('subjects',compact('subjects'));
    }
        
    public function store(Request $request)
        {
            $id = Auth::id();
            $request['human_id'] = $id;
            $this->validate(request(), [
                'subjects' => 'required'
            ]);
            $user = Subject::create(request(['human_id','subjects']));
            session(['subject_id'=>$user->id]);
            return redirect()->to('/displaySubject');
    }

    public function delete($id){
        DB::table('subjects') ->where('id',$id)->delete();
        return redirect()->to('/displaySubject');
     }




// Task
     public function taskList(){
        return view('tasks');
        }
        
        public function addTask(Request $request){
            // $id = $request->session()->get('subject_id'); 
            $id = $request->subject_id;              
            $request->validate([
                'task' => 'required',
                'description' => 'required',
                'date' => 'required'
            ]);
            $data = array('subject_id' => $id, 'task' => $request->task,'description'=>$request->description,'date'=>$request->date);
            $task = Task::create($data);
            return redirect()->to('/task/'.$id);
        }

        public function getData(Request $request,$id ){
            //$id = $request->session()->get('subject_id');
            $task = Task::where('subject_id',$id)->get();
            //return $task;
            if(count($task) == 0){
               return view('tasks',['task' =>'','subject_id' => $id]);
            }
           return view('tasks',['task' =>$task,'subject_id' => $task[0]->subject_id]);
            
        }

    ////////////--------------

        public function deleteData($id){
            DB::table('tasks')->where('id',$id)->delete();
            return redirect('/task/'.$id);
        }


        public function editTask($id)
        {
            $tasks = Task::find($id);
            return view('editTask',compact('tasks'));
        }
        public function updateTask(Request $request, $id){
            $request->validate([
                'task' => 'required',
                'description' => 'required',
                'date' => 'required'
            ]);
            $task = $request->input('task');
            $description = $request->input('description');
            $date = $request->input('date');
            DB::update('update tasks set task = ?,description = ?,date=? where id = ?',[$task,$description,$date,$id]);
            return redirect('/displaySubject');
        }

        public function search(Request $request){
            $search = $request->get('search');
            $id = Auth::user()->id;
            $subjects = Subject::join('users','users.id','=','subjects.human_id')
                    ->where ( 'subjects', 'LIKE', '%' . $search . '%')->get();
            if(count($subjects) > 0){
                return view('subjects', compact('subjects'));
            }else{
                return view('subjects', compact('subjects'))->withMessage('No Details found !');
            }
        }

        


        // Swal
        public function myNotification($type)
    {
        switch ($type) {
            case 'message':
                alert()->message('Sweet Alert with message.');
                break;
            case 'basic':
                alert()->basic('Sweet Alert with basic.','Basic');
                break;
            case 'info':
                alert()->info('Sweet Alert with info.');
                break;
            case 'success':
                alert()->success('Sweet Alert with success.','Welcome to ItSolutionStuff.com')->autoclose(3500);
                break;
            case 'error':
                alert()->error('Sweet Alert with error.');
                break;
            case 'warning':
                alert()->warning('Sweet Alert with warning.');
                break;
            default:
                # code...
                break;
        }


        return view('my-notification');
    }
       

    // Email
    public function html_email() {
        $data = array('name'=>session('first_name'));
        Mail::send('mail', $data, function($message) {
           $message->to(session('email'), 'Tutorials Point')->subject
              ('Assignments');
           $message->from('bustamantetanya123@gmail.com','UDoNote');
        });
       return redirect('/logout');
        
     }


     public function subjects() {
        $data = array('name'=>session('first_name'));
        Mail::send('mail2', $data, function($message) {
           $message->to(session('email'), 'Tutorials Point')->subject
              ('Assignments');
           $message->from('bustamantetanya123@gmail.com','UDoNote');
        });
       return redirect('/displaySubject');
        
     }
}
