
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link href="{{ asset('css/subjects.css') }}" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<style>
body {
    margin-top: 20px;
    background: #f8f8f8
}
</style>
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
                <a href="http://localhost:8000//displaySubject" class="nav-item nav-link">Subjects</a>
            </div>
            <form class="form-inline ml-auto">

            </form>
            <div class="navbar-nav">
                <a href="http://localhost:8000//logout" class="nav-item nav-link"><span
                        class="glyphicon glyphicon-log-in"></span>Log-Out</a>
            </div>
        </div>
    </nav>
</div>
<div class="container">
    <div class="row flex-lg-nowrap">
        <div class="col">
            <div class="row">
                <div class="col mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="e-profile">
                                <div class="row">
                                    <div class="col-12 col-sm-auto mb-3">
                                        <div class="mx-auto" style="width: 140px;">
                                            <div class="d-flex justify-content-center align-items-center rounded">
                                                <img class="card-img-top"
                                                    src="https://upload.wikimedia.org/wikipedia/commons/f/f4/User_Avatar_2.png"
                                                    alt="Card image"
                                                    style="width:140px;margin-left:20px; margin-top:20px;">
                                                <form>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                                        <div class="text-center text-sm-left mb-2 mb-sm-0">
                                            <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">{{$user['first_name']}}</h4>
                                            <p class="mb-0">@ <span>{{$user['first_name']}}</span> </p>
                                        </div>
                                        <div class="text-center text-sm-right">
                                            <span class="badge badge-secondary">user</span>
                                            <div class="text-muted"><small>Joined <span>{{$user['created_at']}}</span>
                                                </small></div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a href="" class="active nav-link">Settings</a></li>
                                </ul>
                                <div class="tab-content pt-3">
                                    <div class="tab-pane active">
                                        <div class="row">
                                            <div class="col">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label>First Name</label>
                                                            <input class="form-control" type="text" name="first_name"
                                                                value="{{$user['first_name']}}">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label>Last Name</label>
                                                            <input class="form-control" type="text" name="last_name"
                                                                value="{{$user['last_name']}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            <input class="form-control" type="text" name="email"
                                                                value="{{$user['email']}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <col>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label>Age</label>
                                                            <input class="form-control" type="text" name="age"
                                                                value="{{$user['age']}}">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label>Gender:</label>

                                                            <input class="form-control" type="text" name="gender"
                                                                value="{{$user['gender']==1?'Male':'Female'}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-sm-6 mb-3">
                                                <div class="form-group">
                                                    <label>Address:</label>
                                                    <input class="form-control" type="text" name="address"
                                                        value="{{$user['address']}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-sm-6 mb-3">
                                                <div class="mb-2"><b>Change Password</b></div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label>Current Password</label>
                                                            <input class="form-control" type="password" name="password"
                                                                value="{{$user['password']}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-5 offset-sm-1 mb-3">
                                            <div class="mb-2"><b>Keeping in Touch</b></div>
                                            <div class="row">
                                                <div class="col">
                                                    <label>Email Notifications</label>
                                                    <div class="custom-controls-stacked px-2">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="notifications-blog" checked="">
                                                            <label class="custom-control-label"
                                                                for="notifications-blog">Email</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col d-flex justify-content-end">
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#basicExampleModal" style="width:auto">Edit
                                                Profile</button>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>

    </div>
</div>
</div>


<form method="POST" action="{{ url('/profile', $user->id) }}">
    @csrf
    <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label for="first_name">First Name</label>
                    <input type="text" class="form-control" name="first_name" value={{ $user->first_name }}>
                    <label for="last_name">Last Name:</label>
                    <input type="text" class="form-control" name="last_name" value={{ $user->last_name }}>
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" name="email" value={{ $user->email  }}>
                    <label for="age">Age:</label>
                    <input type="text" class="form-control" name="age" value={{ $user->age }}>
                    <label for="gender">Gender:</label>
                    <input type="radio" name="gender" value="1" {{ $user->gender == 1 ? 'checked' : '' }}> Male
                    <input type="radio" name="gender" value="2" {{ $user->gender == 2 ? 'checked' : '' }}> Female
                    <br>
                    <label for="address">Address:</label>
                    <input type="text" class="form-control" name="address" value={{ $user->address }}>
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" name="password" value={{ $user->password }}>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary submit">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    
</form>