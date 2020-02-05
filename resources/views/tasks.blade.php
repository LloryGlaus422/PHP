<!DOCTYPE html>
<html>

<head>
    <link href="{{asset('css/task.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui@3.0.0-beta.4/dist/css/coreui.min.css">
    <script src="https://unpkg.com/@coreui/coreui@3.0.0-beta.4/dist/js/coreui.min.js"></script>
</head>

<body>


    <center> <a href="/displaySubject"><button style="margin-top:30px;margin-left:20px" class="btn btn-info">
                <---Back</button></a>

                <a href="{{route('addTask', $subject_id)}}"><button class="btn btn-primary" style="margin-top:30px;">Add
                Task</button></a>
    </center>
    <br><br><br><br>
    <center>
        @if(strlen($task) != 0)
        @foreach ($task as $tasks)
        <center>
            <div class="column">
                <div class="card" style="width: 18rem;">
                    <center> <img class="card-img-top" src="http://localhost:8000/images/note.png" style="width:200px"
                            alt="Card image cap">
                    </center>
                    <div class="card-body">
                        <h5 class="card-title">Task : {{$tasks->task}}</h5>
                        <p>Description : {{$tasks->description}}</p>
                        <p>Need to pass : {{$tasks->date}}</p>
                        <a href="{{url('/editTask',$tasks->id)}}"><button class="btn btn-success">Update</button></a>
                        </br></br>
                        <a href="{{ url('/deleteTask', $tasks->id )}}"> <button
                                class="btn btn-danger">Delete</button></a>
                    </div>
                </div>
            </div>
        </center>
        @endforeach
        @endif
    </center>
    </div>
</body>

</html>