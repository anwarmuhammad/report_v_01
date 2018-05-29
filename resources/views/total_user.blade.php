@extends('layouts.app')
@section('content')

    @include('includes.sidebar')

    <div class="wrapper">

        <div class="main-panel">
            @include('includes.navbar')
            <div class="content">

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="blue">
                                    <h4 class="title">Total Users </h4>
                                    <p class="category">Here is a subtitle for this table</p>
                                </div>


                                   <div class="card-content table-responsive">
                                       <table class="table">
                                        <thead class="text-primary">
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th colspan="2">Action</th>
                                        </thead>
                                        <tbody>
                                     
                                             @foreach($users as $user)

                                              
                                         
                                        <tr>
                                            <td>{{$user->name }}</td>
                                            <td>{{$user->email }}</td>
                                            <td>{{$user->phone }} </td>
                                            @if (Auth::User()->isFollowing($user->id))
    <td>
        <form action="{{url('unfollow/' . $user->id)}}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}

            <button type="submit" id="delete-follow-{{ $user->target_id }}" class="btn btn-danger">
           Unfollow
            </button>
        </form>
    </td>
@else
    <td>
        <form action="{{url('follow/' . $user->id)}}" method="POST">
            {{ csrf_field() }}

            <button type="submit" id="follow-user-{{ $user->id }}" class="btn btn-success">
            Follow
            </button>
        </form>
    </td>
@endif

                                        </tr>

                    

                                             @endforeach

                                        </tbody>
                                    </table>
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


