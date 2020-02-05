<!DOCTYPE html>
<html>

<head>
    <title>editTask</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href="{{asset('css/task.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    

<body>
<a href="/displaySubject"><button class="btn btn-info"><---Back</button></a>
    <div class="testbox">
        <form method="POST" action="{{ url('editTask', $tasks->id) }}" autocomplete="off">
            {{ csrf_field() }}
            <div class="banner">
                <h1>UDoNote</h1>
            </div>
            <p>Edit Task</p>
            <div class="item">
                <label for="task">Task<span>*</span></label>
                <input id="task" type="text" name="task" required value="{{ old('task', $tasks->task) }}"
                    autocomplete="off" />
            </div>
            <div class="item">
                <label>Description<span>*</span></label>
                <input type="text" name="description" required value="{{ old('description', $tasks->description) }}"
                    autocomplete="off" />
            </div>
            <div class="item">
                <label for="date">Need to Pass<span>*</span></label>
                <input id="date" type="date" name="date" required value="{{ old('date', $tasks->date) }}"
                    autocomplete="off" />
                <i class="fas fa-calendar-alt"></i>
            </div>
            <div class="btn-block">
                <button type="submit">Update</button>
            </div>
        </form>
    </div>
</body>

</html>