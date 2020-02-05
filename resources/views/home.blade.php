<link href="{{ asset('css/subjects.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<div class="card-body">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif


    <div id="try" class="bs-example">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="#" class="navbar-brand">
                <img src="images/logo.png" height="70" alt="CoolBrand">
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="http://localhost:8000/home" class="nav-item nav-link active">Home</a>
                    <a href="http://localhost:8000//profile" class="nav-item nav-link">Profile</a>
                    <a href="http://localhost:8000//displaySubject" class="nav-item nav-link">Subjects</a>
                </div>
                <form class="form-inline ml-auto">

                </form>
                <div class="navbar-nav">
                    <a href="http://localhost:8000/sendhtmlemail" class="nav-item nav-link"><span
                            class="glyphicon glyphicon-log-in"></span>Log-Out</a>
                </div>
            </div>
        </nav>


        <p id="welcome">
            <b> Welcome.</b>
        </p>
        <span id="foot">Enjoy taking it down</span>
        <br>
        <!-- <button style="margin-left:46%" class="btn btn-primary btn-lg active ">Click to Continue</button> -->
    </div>
    <br><br><br><br><br><br>
</div>

</body>
</div>