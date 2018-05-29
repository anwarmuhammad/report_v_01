
@extends('layouts.app')
@section('content')
@include('includes.sidebar')
<div class="wrapper">
<div class="main-panel">
    @include('includes.navbar')
    <div class="content">
        <div class="container-fluid">
<div class="row">
    <div class="col-lg-12 col-md-12 col-xs-12">
        <div class="card card-nav-tabs">
            <div class="card-header" data-background-color="blue">
                <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                        <span class="nav-tabs-title"> <i class="material-icons">input</i></span>
                        <ul class="nav nav-tabs" data-tabs="tabs">
                            <li class="active">
                                <a href="#quran" data-toggle="tab">
                                    Quran
                                    <div class="ripple-container"></div>
                                </a>
                            </li>
                            <li class="">
                                <a href="#hadith" data-toggle="tab">
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
                            <li class="">
                                <a href="#study" data-toggle="tab">
                                    Study
                                    <div class="ripple-container"></div>
                                </a>
                            </li>
                            <li class="">
                                <a href="#salat" data-toggle="tab">
                                    Salat
                                    <div class="ripple-container"></div>
                                </a>
                            </li>
                            <li class="">
                                <a href="#dawat" data-toggle="tab">
                                    Dawat
                                    <div class="ripple-container"></div>
                                </a>
                            </li>
                            <li class="">
                                <a href="#contact" data-toggle="tab">
                                    Contact
                                    <div class="ripple-container"></div>
                                </a>
                            </li>
                            <li class="">
                                <a href="#distribution" data-toggle="tab">
                                    Distribution
                                    <div class="ripple-container"></div>
                                </a>
                            </li>
                            <li class="">
                                <a href="#report" data-toggle="tab">
                                    Increment
                                    <div class="ripple-container"></div>
                                </a>
                            </li>
                            <li class="">
                                <a href="#baitulmaal" data-toggle="tab">
                                    Baitulmaal
                                    <div class="ripple-container"></div>
                                </a>
                            </li>
                            <li class="">
                                <a href="#misc" data-toggle="tab">
                                   Misc
                                    <div class="ripple-container"></div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-content col-md-4">
                <div class="tab-content">
                    <div class="tab-pane " id="quran">
                        <div class="panel panel-default">
                            <div class="panel-heading text-center" style="background-color: #1b6d85;color:white"><strong>Quran</strong></div>

                            <div class="panel-body">
                                <form class="form-horizontal" method="POST" action="{{url('quran')}}">
                                    {{ csrf_field() }}

                                    
                                    <div class="form-group">

                                          <div class="col-md-8 col-md-offset-2">
                                            <input id="" type="number" class="form-control" name="quran_read" value="" placeholder="Read (Ayat)" required autofocus>

                                        </div>
                                    </div>
                                    
                                       <div class="form-group">
                                          <div class="col-md-8 col-md-offset-2">
                                            <input id="" type="number" class="form-control" name="quran_memorize" value="" placeholder="Memorize(Ayat)" required autofocus>

                                        </div>
                                    </div>

                                    <div class="form-group">

                                          <div class="col-md-8 col-md-offset-2">
                                            <input id="" type="number" class="form-control" name="quran_dars" value="" placeholder="Dars (Ayat)" required autofocus>

                                        </div>
                                    </div>



                                    <div class="form-group">
                                        <div class="col-md-8 col-md-offset-4">
                                            <button type="submit" class="btn" onclick="demo.showNotification('top','right')" style="background-color: #1b6d85;color:white">
                                                Save
                                            </button>




                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="hadith">
                        <div class="panel panel-default">
                            <div class="panel-heading text-center" style="background-color: #1b6d85;color:white""><strong>Hadith</strong></div>

                            <div class="panel-body">
                                <form class="form-horizontal" method="POST" action="{{url('hadith')}}">
                                    {{ csrf_field() }}

                                    <div class="form-group">

                                         <div class="col-md-8 col-md-offset-2">
                                            <input id="" type="number" class="form-control" name="hadith_read" value="" placeholder="Read (Ayat)" required autofocus>

                                        </div>
                                    </div>
                                  
                                    <div class="form-group">

                                          <div class="col-md-8 col-md-offset-2">
                                            <input id="" type="number" class="form-control" name="hadith_memorize" value="" placeholder="Memorize (Ayat)" required autofocus>

                                        </div>
                                    </div>
                                    <div class="form-group">

                                          <div class="col-md-8 col-md-offset-2">
                                            <input id="" type="number" class="form-control" name="hadith_dars" value="" placeholder=" Dars (Ayat)" required autofocus>

                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="col-md-8 col-md-offset-4">
                                            <button type="submit" class="btn  " onclick="demo.showNotification('top','right')" style="background-color: #1b6d85;color:white">
                                                Save
                                            </button>


                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="literature">
                        <div class="panel panel-default">
                            <div class="panel-heading text-center" style="background-color: #1b6d85;color:white"><strong>Literature</strong></div>

                            <div class="panel-body">
                                <form class="form-horizontal" method="POST" action="{{url('literature')}}">
                                    {{ csrf_field() }}
                                    
                                    <div class="form-group">

                                       <div class="col-md-8 col-md-offset-2">
                                            <input id="" type="number" class="form-control" name="literature_islamic" value="" placeholder="Islamic" required autofocus>

                                        </div>
                                    </div>
                                   
                                    <div class="form-group">

                                        <div class="col-md-8 col-md-offset-2">
                                            <input id="" type="number" class="form-control" name="literature_others" value="" placeholder="Others" required autofocus>

                                        </div>
                                    </div>
                                    
                                    <div class="form-group">

                                       <div class="col-md-8 col-md-offset-2">
                                            <input id="" type="number" class="form-control" name="literature_note" value="" placeholder="Note" required autofocus>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-8 col-md-offset-4">
                                            <button type="submit" class="btn " onclick="demo.showNotification('top','right')" style="background-color: #1b6d85;color:white">
                                                Save
                                            </button>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        </table>
                    </div>

                    <div class="tab-pane" id="study">
                        <div class="panel panel-default">
                            <div class="panel-heading text-center" style="background-color: #1b6d85;color:white"><strong>Study</strong></div>

                            <div class="panel-body">
                                <form class="form-horizontal" method="POST" action="{{url('study')}}">
                                    {{ csrf_field() }}
                                    
                                    <div class="form-group">

                                        <div class="col-md-8 col-md-offset-2">
                                           <input id="" type="number" class="form-control" name="class" value="" placeholder="Total Class" required autofocus>

                                        </div>
                                    </div>
                                   
                                    <div class="form-group">

                                        <div class="col-md-8 col-md-offset-2">
                                            <input id="" type="number" class="form-control" name="attendance" value="" placeholder="Total Attendance" required autofocus>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-8 col-md-offset-4">
                                            <button type="submit" class="btn " onclick="demo.showNotification('top','right')" style="background-color: #1b6d85;color:white">
                                                Save
                                            </button>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        </table>
                    </div>
                    <div class="tab-pane" id="salat">
                        <div class="panel panel-default">
                            <div class="panel-heading text-center" style="background-color: #1b6d85;color:white"><strong>Salat</strong></div>

                            <div class="panel-body">
                                <form class="form-horizontal" method="POST" action="{{url('salat')}}">
                                    {{ csrf_field() }}
                                    
                                    <div class="form-group">

                                        <div class="col-md-8 col-md-offset-2">
                                            <input id="" type="number" class="form-control" name="jamaat" value="" placeholder="jamaat" required autofocus>

                                        </div>
                                    </div>
                                   
                                    <div class="form-group">

                                        <div class="col-md-8 col-md-offset-2">
                                            <input id="" type="number" class="form-control" name="kadha" value="" placeholder="kadha" required autofocus>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-8 col-md-offset-4">
                                            <button type="submit" class="btn" onclick="demo.showNotification('top','right')" style="background-color: #1b6d85;color:white">
                                                Save
                                            </button>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        </table>
                    </div>
                    <div class="tab-pane" id="dawat">
                        <div class="panel panel-default">
                            <div class="panel-heading text-center" style="background-color: #1b6d85;color:white"><strong>Dawat</strong></div>

                            <div class="panel-body">
                                <form class="form-horizontal" method="POST" action="{{url('dawat')}}">
                                    {{ csrf_field() }}
                                   
                                    <div class="form-group">

                                        <div class="col-md-8 col-md-offset-2">
                                            <input id="" type="number" class="form-control" name="dawat_total_days" value="" placeholder="Total Days" required autofocus>

                                        </div>
                                    </div>
                                   
                                    <div class="form-group">

                                        <div class="col-md-8 col-md-offset-2">
                                            <input id="" type="number" class="form-control" name="dawat_total_hours" value="" placeholder="Total Hours" required autofocus>

                                        </div>
                                    </div>
                                  
                                    <div class="form-group">

                                        <div class="col-md-8 col-md-offset-2">
                                            <input id="" type="number" class="form-control" name="dawat_total_person" value="" placeholder="Total Persons" required autofocus>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-8 col-md-offset-4">
                                            <button type="submit" class="btn btn-primary " onclick="demo.showNotification('top','right')">
                                                Save
                                            </button>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        </table>
                    </div>

                    <div class="tab-pane" id="contact">
                        <div class="panel panel-default">
                            <div class="panel-heading text-center" style="background-color: #1b6d85;color:white"><strong>Contact</strong></div>

                            <div class="panel-body">
                                <form class="form-horizontal" method="POST" action="{{url('contact')}}">
                                    {{ csrf_field() }}
                                   
                                    <div class="form-group">

                                        <div class="col-md-8 col-md-offset-2">
                                            <input id="" type="number" class="form-control" name="member" value="" placeholder=" Member" required autofocus>

                                        </div>
                                    </div>
                                   
                                    <div class="form-group">

                                        <div class="col-md-8 col-md-offset-2">
                                            <input id="" type="number" class="form-control" name="associate" value="" placeholder="Associate" required autofocus>

                                        </div>
                                    </div>
                                    
                                    <div class="form-group">

                                        <div class="col-md-8 col-md-offset-2">
                                            <input id="" type="number" class="form-control" name="worker" value="" placeholder="Worker" required autofocus>

                                        </div>
                                    </div>
                                   
                                    <div class="form-group">

                                        <div class="col-md-8 col-md-offset-2">
                                            <input id="" type="number" class="form-control" name="supporter" value="" placeholder=" Supporter" required autofocus>

                                        </div>
                                    </div>
                                   
                                    <div class="form-group">

                                        <div class="col-md-8 col-md-offset-2">
                                            <input id="" type="number" class="form-control" name="friend" value="" placeholder="Friend" required autofocus>

                                        </div>
                                    </div>

                                    
                                    <div class="form-group">

                                        <div class="col-md-8 col-md-offset-2">
                                            <input id="" type="number" class="form-control" name="schl_student" value="" placeholder=" Schl Student" required autofocus>
                                          
                                        </div>
                                    </div>
                    
                                    <div class="form-group">

                                        <div class="col-md-8 col-md-offset-2">
                                            <input id="" type="number" class="form-control" name="brl_student" value="" placeholder="Student" required autofocus>

                                        </div>
                                    </div>
                                    
                                    <div class="form-group">

                                        <div class="col-md-8 col-md-offset-2">
                                            <input id="" type="number" class="form-control" name="well_wisher" value="" placeholder="well Wisher" required autofocus>

                                        </div>
                                    </div>
                                   
                                    <div class="form-group">

                                        <div class="col-md-8 col-md-offset-2">
                                            <input id="" type="number" class="form-control" name="teacher" value="" placeholder=" Teacher" required autofocus>

                                        </div>
                                    </div>
                                   
                                    <div class="form-group">

                                        <div class="col-md-8 col-md-offset-2">
                                            <input id="" type="number" class="form-control" name="vip" value="" placeholder="VIP" required autofocus>

                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="col-md-8 col-md-offset-4">
                                            <button type="submit" class="btn" onclick="demo.showNotification('top','right')" style="background-color: #1b6d85;color:white">
                                                Save
                                            </button>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        </table>
                    </div>

                    <div class="tab-pane" id="distribution">
                        <div class="panel panel-default">
                            <div class="panel-heading text-center" style="background-color: #1b6d85;color:white"><strong>Distribution</strong></div>

                            <div class="panel-body">
                                <form class="form-horizontal" method="POST" action="{{url('distribution')}}">
                                    {{ csrf_field() }}
                                   
                                    <div class="form-group">

                                        <div class="col-md-8 col-md-offset-2">
                                            <input id="" type="number" class="form-control" name="distribution_islamic_book" value="" placeholder=" Books" required autofocus>

                                        </div>
                                    </div>
                                    
                                    <div class="form-group">

                                        <div class="col-md-8 col-md-offset-2">
                                            <input id="" type="number" class="form-control" name="distribution_kishor_mag" value="" placeholder="Kishor Mag" required autofocus>

                                        </div>
                                    </div>
                                   
                                    <div class="form-group">

                                        <div class="col-md-8 col-md-offset-2">
                                            <input id="" type="number" class="form-control" name="distribution_english_mag" value="" placeholder="Eng.Mag" required autofocus>

                                        </div>
                                    </div>
                                   
                                    <div class="form-group">

                                        <div class="col-md-8 col-md-offset-2">
                                            <input id="" type="number" class="form-control" name="distribution_ch_sangbad" value="" placeholder=" Sangbad" required autofocus>

                                        </div>
                                    </div>
                                    
                                    <div class="form-group">

                                        <div class="col-md-8 col-md-offset-2">
                                            <input id="" type="number" class="form-control" name="distribution_perspective" value="" placeholder="Perspective" required autofocus>

                                        </div>
                                    </div>

                    
                                    <div class="form-group">

                                        <div class="col-md-8 col-md-offset-2">
                                            <input id="" type="number" class="form-control" name="distribution_porichiti" value="" placeholder=" Porichiti" required autofocus>

                                        </div>
                                    </div>
                                    
                                    <div class="form-group">

                                        <div class="col-md-8 col-md-offset-2">
                                            <input id="" type="number" class="form-control" name="distribution_class_routine" value="" placeholder="Routine" required autofocus>

                                        </div>
                                    </div>
                                    
                                    <div class="form-group">

                                        <div class="col-md-8 col-md-offset-2">
                                            <input id="" type="number" class="form-control" name="distribution_card" value="" placeholder="Sticker" required autofocus>

                                        </div>
                                    </div>
                                    
                                    <div class="form-group">

                                        <div class="col-md-8 col-md-offset-2">
                                            <input id="" type="number" class="form-control" name="distribution_gift" value="" placeholder=" gift" required autofocus>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-8 col-md-offset-4">
                                            <button type="submit" class="btn " onclick="demo.showNotification('top','right')" style="background-color: #1b6d85;color:white">
                                                Save
                                            </button>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        </table>
                    </div>

                    <div class="tab-pane" id="report">
                        <div class="panel panel-default">
                            <div class="panel-heading text-center" style="background-color: #1b6d85;color:white"><strong>Increment</strong></div>

                            <div class="panel-body">
                                <form class="form-horizontal" method="POST" action="{{url('report')}}">
                                    {{ csrf_field() }}
                                   
                                    <div class="form-group">

                                        <div class="col-md-8 col-md-offset-2">
                                            <input id="" type="number" class="form-control" name="report_member" value="" placeholder="Member" required autofocus>

                                        </div>
                                    
                                    <div class="form-group">

                                        <div class="col-md-8 col-md-offset-2">
                                            <input id="" type="number" class="form-control" name="report_associate" value="" placeholder=" Associate" required autofocus>

                                        </div>
                                    </div>
                                    
                                    <div class="form-group">

                                        <div class="col-md-8 col-md-offset-2">
                                            <input id="" type="number" class="form-control" name="report_worker" value="" placeholder="Eng.Mag" required autofocus>

                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="col-md-8 col-md-offset-2">
                                            <input id="" type="number" class="form-control" name="report_friend" value="" placeholder=" Friend" required autofocus>

                                        </div>
                                    </div>
                                    
                                    <div class="form-group">

                                        <div class="col-md-8 col-md-offset-2">
                                            <input id="" type="number" class="form-control" name="report_member_applicant" value="" placeholder="Member Applicant" required autofocus>

                                        </div>
                                    </div>

                                   
                                    <div class="form-group">

                                        <div class="col-md-8 col-md-offset-2">
                                            <input id="" type="number" class="form-control" name="report_associate_applicant" value="" placeholder=" Associate Applicant" required autofocus>

                                        </div>
                                    </div>
                                    
                                    <div class="form-group">

                                        <div class="col-md-8 col-md-offset-2">
                                            <input id="" type="number" class="form-control" name="report_supporter" value="" placeholder="Supporter" required autofocus>

                                        </div>
                                    </div>
                                    
                                    <div class="form-group">

                                        <div class="col-md-8 col-md-offset-2">
                                            <input id="" type="number" class="form-control" name="report_well_wisher" value="" placeholder="Well Wisher" required autofocus>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-8 col-md-offset-4">
                                            <button type="submit" class="btn" onclick="demo.showNotification('top','right')" style="background-color: #1b6d85;color:white">
                                                Save
                                            </button>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        </table>
                    </div>
                      </div>

                    <div class="tab-pane" id="baitulmaal">
                        <div class="panel panel-default">
                            <div class="panel-heading text-center" style="background-color: #1b6d85;color:white"><strong>Baitul Maal</strong></div>

                            <div class="panel-body">
                                <form class="form-horizontal" method="POST" action="{{url('baitulmaal')}}">
                                    {{ csrf_field() }}
                                    
                                    <div class="form-group">

                                        <div class="col-md-8 col-md-offset-2">
                                            <input id="" type="number" class="form-control" name="baitul_maal_iyanat" value="" placeholder="Iynat" required autofocus>

                                        </div>
                                    </div>
                                   
                                    <div class="form-group">
                                        <div class="col-md-8 col-md-offset-2">
                                            <input id="" type="number" class="form-control" name="baitul_maal_student_welfare" value=""
                                            placeholder="Student Wellfare" required autofocus>

                                        </div>
                                    </div>
                                   
                                    <div class="form-group">

                                        <div class="col-md-8 col-md-offset-2">
                                            <input id="" type="number" class="form-control" name="baitul_maal_kolshi" value="" placeholder="Kolshi" required autofocus>

                                        </div>
                                    </div>
                                  
                                    <div class="form-group">
                                          <div class="col-md-8 col-md-offset-2">
                                            <input id="" type="number" class="form-control" name="baitul_maal_table_bank" value="" placeholder="Table Bank" required autofocus>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-8 col-md-offset-4">
                                            <button type="submit" class="btn" onclick="demo.showNotification('top','right')" style="background-color: #1b6d85;color:white">
                                                Save
                                            </button>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        </table>
                    </div>

                    <div class="tab-pane " id="misc">
                        <div class="panel panel-default">
                            <div class="panel-heading text-center" style="background-color: #1b6d85;color:white"><strong>Misc</strong></div>
                            <div class="panel-body">
                                <form class="form-horizontal" method="POST" action="{{url('misc')}}">
                                    {{ csrf_field() }}
                              <table class="table table-bordered">
                            <tbody>
                            <tr>

                                <td>
                                    <div class="checkbox">
                                        <label>


                                            <input type="checkbox" name="misc_self_analysis" >


                                        </label>
                                    </div>
                                </td>

                                <td>Self-Analysis</td>

                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="misc_physical_exercise" >
                                        </label>
                                    </div>
                                </td>

                                <td>Physical Exercise</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="misc_mahram_contact" >
                                        </label>
                                    </div>
                                </td>

                                <td>Mahram Contact</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="misc_non_muslim_friend" >
                                        </label>
                                    </div>
                                </td>

                                <td>Non-Muslim Frnd</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="misc_other_org" >
                                        </label>
                                    </div>
                                </td>

                                <td> Other Organizations</td>
                            </tr>
                            </tbody>
                          </table>

                                    <div class="form-group">
                                        <div class="col-md-8 col-md-offset-4">
                                            <button type="submit" class="btn" onclick="demo.showNotification('top','right')" style="background-color: #1b6d85;color:white">
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
    </div>

        <hr>
        <hr>
        <hr>
        <hr>
        <hr>
        <hr>
         <hr>
        <hr>
        <hr>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-chart" data-background-color="blue">
                            <div class="text-center">
                                <br>
                                <br>
                                <h4 >Mentor Suggestions</h4>
                                <i class="material-icons">explore</i>
                            </div>
                        </div>
                        <div class="card-content">
                            <h4 class="Primary Text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium eum recusandae sint sit voluptas voluptatum? Cum eius, nesciunt? Ad, eius ipsa iusto labore praesentium quam qui quos. Excepturi, nam, voluptate.</h4>

                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                updated 4 minutes ago
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
    @endsection



