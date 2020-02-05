<!DOCTYPE html>
<html>

<head>
    <title>addTask</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href="{{asset('css/task.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    

<body>
<a href="/displaySubject"><button class="btn btn-info"><---Back</button></a>
    <div class="testbox">
        <form method="POST" action="/add">
            {{ csrf_field() }}
            <div class="banner">
                <h1>UDoNote</h1>
            </div>
            <p>Task Information</p>
            <input id="name" type="hidden" name="subject_id" value="{{$id}}" />
            <div class="item">
                <label for="name">Task<span>*</span></label>
                <input id="name" type="text" name="task" required autocomplete="off" />
            </div>
            <div class="item">
                <label>Description<span>*</span></label>
                <input id="email" type="text" name="description" required autocomplete="off" />
            </div>
            <div class="item">
                <label for="bdate">Need to Pass<span>*</span></label>
                <input id="bdate" type="date" name="date" required autocomplete="off" />
                <i class="fas fa-calendar-alt"></i>
            </div>
            <div class="btn-block">
                <button type="submit">SUBMIT</button>
            </div>
        </form>
    </div>
</body>

</html>