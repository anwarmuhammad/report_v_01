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
                                <h4 class="title">Mentor List</h4>
                                <p class="category">Here is a subtitle for this table</p>
                            </div>
                            <div class="card-content table-responsive">
                                <table class="table">
                                    <thead class="text-primary">
                                    <th>Following</th>
                                    <th>Email</th>
                                    
                                    </thead>
                                    <tbody>

                                    @foreach($mentors as $mentor)
                                        <tr>
                                           
                                            <td>{{$mentor->user_name}}</td>
                                             <td>{{$mentor->email}}</td>
          
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

