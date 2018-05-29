@extends('layouts.app')
@section('content')

    @include('includes.sidebar')

    <div class="wrapper">

    <div class="main-panel">
        @include('includes.navbar')
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header" data-background-color="blue">
                                <h4 class="title">Edit Profile</h4>
                                <p class="category">Complete your profile</p>
                            </div>
                            <div class="card-content">
                                <form>
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group label-floating">
                                                <label class="control-label">{{ Auth::user()->user_name }} </label>
                                                <input type="text" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group label-floating">
                                                <label class="control-label">{{ Auth::user()->email }} </label>
                                                <input type="email" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label">{{ Auth::user()->name }} </label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group label-floating">
                                                <label class="control-label">{{ Auth::user()->phone }}</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group label-floating">
                                                <label class="control-label">City</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Country</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Postal Code</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>About Me</label>
                                                <div class="form-group label-floating">

                                                    <textarea class="form-control" rows="5"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-profile">
                            <div class="card-avatar">
                                <a href="#pablo">
                                    <img class="img" src="admin/img/faces/marc.jpg" />
                                </a>
                            </div>
                            <div class="content">
                                <h6 class="category text-gray">Super Admin</h6>
                                <h4 class="card-title">Follower of Prophet Muhammad</h4>
                                <p class="card-content">
                                    Don't be scared of the truth because we need to restart the human foundation in truth ....
                                    <a href="#pablo" class="btn btn-primary btn-round">Follow</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">

                <p class="copyright text-center">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
                    <a href="#"> Report</a>
                </p>
            </div>
        </footer>
    </div>
</div>
@endsection