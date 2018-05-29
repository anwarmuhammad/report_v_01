
@extends('layouts.app')
@section('content')

    @include('includes.sidebar')


<div class="wrapper">

    <div class="main-panel">
        @include('includes.navbar')
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card card-nav-tabs">
                            <div class="card-header" data-background-color="purple">
                                <div class="nav-tabs-navigation">
                                    <div class="nav-tabs-wrapper">
                                        <span class="nav-tabs-title">Tasks:</span>
                                        <ul class="nav nav-tabs" data-tabs="tabs">
                                            <li class="active">
                                                <a href="#quran" data-toggle="tab"  >
                                                    Quran
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#hadith" data-toggle="tab" >
                                                    Hadith
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#literature" data-toggle="tab">
                                                    Literature
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                            <div class="card-content col-md-4">
                                <div class="tab-content">
                                    <div class="tab-pane active " id="quran">
                                        <div class="panel panel-default">
                                            <div class="panel-heading text-center" style="background-color: #9D37B3;color:white"><strong>Quran</strong></div>

                                            <div class="panel-body">
                                                <form class="form-horizontal" method="POST" action="{{url('task1')}}">
                                                    {{ csrf_field() }}

                                                    <label for="" class="col-md-4 control-label" ><span class="nav-tabs-title"><h3>Read:</h3></span>
                                                    </label>
                                                    <div class="form-group">

                                                        <div class="col-md-6">
                                                            <input id="" type="number" class="form-control" name="quran_read" value="" placeholder="Ayat" required autofocus>

                                                        </div>
                                                    </div>
                                                    <label for="email" class="col-md-4 control-label" ><span class="nav-tabs-title"><h3>Memorize:</h3></span>
                                                    </label>
                                                    <div class="form-group">

                                                        <div class="col-md-6">
                                                            <input id="" type="number" class="form-control" name="quran_memorize" value="" placeholder="Ayat" required autofocus>

                                                        </div>
                                                    </div>


                                                    <div class="form-group">
                                                        <div class="col-md-8 col-md-offset-4">
                                                            <button type="submit" class="btn btn-primary">
                                                                Save
                                                            </button>


                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane active" id="hadith">
                                        <div class="panel panel-default">
                                            <div class="panel-heading text-center" style="background-color: #9D37B3;color:white"><strong>Hadith</strong></div>

                                            <div class="panel-body">
                                                <form class="form-horizontal" method="POST" action="{{url('task2')}}">
                                                    {{ csrf_field() }}

                                                    <label for="" class="col-md-4 control-label" ><span class="nav-tabs-title"><h3>Read:</h3></span>
                                                    </label>
                                                    <div class="form-group">

                                                        <div class="col-md-6">
                                                            <input id="" type="number" class="form-control" name="hadith_read" value="" placeholder="Ayat" required autofocus>

                                                        </div>
                                                    </div>
                                                    <label for="email" class="col-md-4 control-label" ><span class="nav-tabs-title"><h3>Memorize:</h3></span>
                                                    </label>
                                                    <div class="form-group">

                                                        <div class="col-md-6">
                                                            <input id="" type="number" class="form-control" name="hadith_memorize" value="" placeholder="Ayat" required autofocus>

                                                        </div>
                                                    </div>


                                                    <div class="form-group">
                                                        <div class="col-md-8 col-md-offset-4">
                                                            <button type="submit" class="btn btn-primary">
                                                                Save
                                                            </button>


                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane active" id="literature">
                                        <div class="panel panel-default">
                                            <div class="panel-heading text-center" style="background-color: #9D37B3;color:white"><strong>Literature</strong></div>

                                            <div class="panel-body">
                                                <form class="form-horizontal" method="POST" action="{{url('task3')}}">
                                                    {{ csrf_field() }}
                                                    <label for="" class="col-md-4 control-label" ><span class="nav-tabs-title"><h3>Read:</h3></span>
                                                    </label>
                                                    <div class="form-group">

                                                        <div class="col-md-6">
                                                            <input id="" type="number" class="form-control" name="literature_islamic" value="" placeholder="Ayat" required autofocus>

                                                        </div>
                                                    </div>
                                                    <label for="email" class="col-md-4 control-label" ><span class="nav-tabs-title"><h3>Memorize:</h3></span>
                                                    </label>
                                                    <div class="form-group">

                                                        <div class="col-md-6">
                                                            <input id="" type="number" class="form-control" name="literature_others" value="" placeholder="Ayat" required autofocus>

                                                        </div>
                                                    </div>


                                                    <div class="form-group">
                                                        <div class="col-md-8 col-md-offset-4">
                                                            <button type="submit" class="btn btn-primary">
                                                                Save
                                                            </button>


                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </div>
                         </div>
                        </div>

                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-chart" data-background-color="green">
                                <div class="ct-chart" id="dailySalesChart"></div>
                            </div>
                            <div class="card-content">
                                <h4 class="title">This Month</h4>
                                <p class="category">
                                    <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase.</p>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons">access_time</i> updated 4 minutes ago
                                </div>
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
</div>

@endsection
