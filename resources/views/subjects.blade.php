<link href="{{ asset('css/subjects.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>


<div class="bs-example">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a href="#" class="navbar-brand">
            <img src="http://localhost:8000/images/logo.png" height="70" alt="CoolBrand">
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="http://localhost:8000/home" class="nav-item nav-link active">Home</a>
                <a href="http://localhost:8000//profile" class="nav-item nav-link">Profile</a>
                <a href="/sendSubjectemail" class="nav-item nav-link">Subjects</a>
            </div>
            <form class="form-inline ml-auto" action="/search" method="GET">
                <input type="search" class="form-control mr-sm-2" placeholder="Search" name="search" autocomplete="off">
                <button type="submit" style="margin-right:50px" class="btn btn-outline-light">Search</button>
            </form>
            <div class="navbar-nav">
                <a href="http://localhost:8000//logout" class="nav-item nav-link"><span
                        class="glyphicon glyphicon-log-in"></span>Log-Out</a>
            </div>
        </div>
    </nav>
</div>
<center>
    <h2 class="h2"><b>Subjects</b></h2>
</center>
<center>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        Add Subjects
    </button>
</center>
<center>
    @foreach($subjects as $getsub)
    <div class="column">
        <div class="card" style="width: 18rem;">
            <center> <img class="card-img-top" src="http://localhost:8000/images/logo.png" style="width:200px"
                    alt="Card image cap">
            </center>
            <div class="card-body">
                <h5 class="card-title">{{$getsub['subjects']}}</h5>
                <a href="{{url('/task/'.$getsub['id'])}}"><button class="btn btn-success">View</button></a>
                </br></br>
                <a href="{{url('/deleteSubject/'.$getsub['id'])}}"> <button class="btn btn-danger">Delete</button></a>
            </div>
        </div>
    </div>
    @endforeach
</center>


<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add Subjects</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form method="post" action="{{url('/display')}}">
                    {{csrf_field()}}
                    <input class="form-control" type="text" id="addSub" name="subjects" placeholder="Add Subject.."
                        autocomplete="off">
                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

@include('sweet::alert')


</body>