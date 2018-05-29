@extends('layouts.app')
@section('content')

    @include('includes.sidebar')

    <div class="wrapper">

    <div class="main-panel">
        @include('includes.navbar')
        <div class="content">
            <div class="container-fluid">
                @if (Auth::check())
                        <div class="row">
                           <div class="col-lg-4 col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-heading text-center" style="background-color: #1b6d85;color:white">Quran</div>
                                    <div class="panel-body">
                                                    <table class="table table-responsive table-bordered">
                                                        <thead><tr>
                                                            <th colspan="">Date</th>
                                                            <th colspan="">Read</th>
                                                            <th colspan="">Memorize</th>
                                                            <th colspan="">Dars</th>

                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($user->quran as $quran1)
                                                            <tr>
                                                                <td colspan="">
                                                                     {{$quran1->created_at->format('d/m/y')}}
                                                                </td>
                                                                <td colspan="">
                                                                    {{$quran1->quran_read}}
                                                                </td>
                                                                <td colspan="">
                                                                    {{$quran1->quran_memorize}}
                                                                </td>
                                                                <td colspan="">
                                                                    {{$quran1->quran_dars}}
                                                                </td>



                                                            </tr>


                                                        @endforeach</tbody>
                                                    </table>
                                </div>
                            </div>
                            </div>

                            <div class="col-lg-4 col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-heading text-center" style="background-color: #1b6d85;color:white">Hadith</div>

                                    <div class="panel-body ">

                                                <table class=" table table-responsive table-bordered">
                                                    <thead><tr>
                                                        <th colspan="">Date</th>
                                                        <th colspan="">Read</th>
                                                        <th colspan="">Memorize</th>
                                                        <th colspan="">Dars</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($user->hadith as $hadith)
                                                        <tr>
                                                            <td colspan="">
                                                                {{$hadith->created_at->format('d/m/y')}}
                                                            </td>
                                                            <td colspan="">
                                                                {{$hadith->hadith_read}}
                                                            </td>
                                                            <td colspan="">
                                                                {{$hadith->hadith_memorize}}
                                                            </td>
                                                            <td colspan="">
                                                                {{$hadith->hadith_dars}}
                                                            </td>

                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-heading text-center" style="background-color: #1b6d85;color:white">Literature</div>

                                    <div class="panel-body ">

                                        <table class=" table table-responsive table-bordered">
                                            <thead><tr>
                                                <th colspan="">Date</th>
                                                <th colspan="">Islamic</th>
                                                <th colspan="">Others</th>
                                                <th colspan="">Note</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($user->literature as $literatures)
                                                <tr>
                                                    <td colspan="">
                                                        {{$literatures->created_at->format('d/m/y')}}
                                                    </td>
                                                    <td colspan="">
                                                        {{$literatures->literature_islamic}}
                                                    </td>
                                                    <td colspan="">
                                                        {{$literatures->literature_others}}
                                                    </td>
                                                    <td colspan="">
                                                        {{$literatures->literature_note}}
                                                    </td>

                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>


                        </div>

                    <div class="row">

                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-heading text-center" style="background-color: #1b6d85;color:white">Study</div>

                                <div class="panel-body">
                                    <table class="table table-responsive table-bordered">
                                        <thead>
                                        <tr>
                                            <th colspan="2">Date</th>
                                            <th colspan="">Class</th>
                                            <th colspan="">Attendance</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($user->study as $study)
                                            <tr>
                                                <td colspan="2">
                                                    {{$study->created_at->format('d/m/Y')}}
                                                </td>
                                                <td colspan="">
                                                    {{$study->class}}
                                                </td>
                                                <td colspan="">
                                                    {{$study->attendance}}
                                                </td>

                                            </tr>


                                        @endforeach</tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-heading text-center" style="background-color: #1b6d85;color:white">Salat</div>

                                <div class="panel-body ">

                                    <table class=" table table-responsive table-bordered">
                                        <thead><tr>
                                            <th colspan="">Date</th>
                                            <th colspan="">Jamaat</th>
                                            <th colspan="">Kadha</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($user->salat as $salat)
                                            <tr>
                                                <td colspan="">
                                                    {{$salat->created_at->format('d/m/y')}}
                                                </td>
                                                <td colspan="">
                                                    {{$salat->jamaat}}
                                                </td>
                                                <td colspan="">
                                                    {{$salat->kadha}}
                                                </td>


                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-heading text-center" style="background-color: #1b6d85;color:white">Dawat</div>

                                <div class="panel-body ">

                                    <table class=" table table-responsive table-bordered">
                                        <thead><tr>

                                            <th colspan="">Total Days</th>
                                            <th colspan="">Total Hours</th>
                                            <th colspan="">Persons</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($user->dawat as $dawat)
                                            <tr>

                                                <td colspan="">
                                                    {{$dawat->dawat_total_days}}
                                                </td>
                                                <td colspan="">
                                                    {{$dawat->dawat_total_hours}}
                                                </td>
                                                <td colspan="">
                                                    {{$dawat->dawat_total_person}}
                                                </td>

                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class=" col-sm-6 col-md-9">
                            <div class="panel panel-default">
                                <div class="panel-heading text-center" style="background-color: #1b6d85;color:white">Increment</div>
                                <div class="panel-body table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th colspan="2">Date</th>
                                            <th colspan="">Member</th>
                                            <th colspan="">Associate</th>
                                            <th colspan="">Worker</th>
                                            <th colspan="">friend</th>
                                            <th colspan="">Member Applicant</th>
                                            <th colspan="">Associate Applicant</th>
                                            <th colspan="">Supporter</th>
                                            <th colspan="">Well Wisher</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($user->report as $report)
                                            <tr>
                                                <td colspan="2">
                                                    {{$report->created_at->format('d/m/Y')}}
                                                </td>
                                                <td colspan="">
                                                    {{$report->report_member}}
                                                </td>
                                                <td colspan="">
                                                    {{$report->report_associate}}
                                                </td>
                                                <td colspan="">
                                                    {{$report->report_worker}}
                                                </td>
                                                <td colspan="">
                                                    {{$report->report_friend}}
                                                </td>
                                                <td colspan="">
                                                    {{$report->report_member_applicant}}
                                                </td>
                                                <td colspan="">
                                                    {{$report->report_associate_applicant}}
                                                </td>
                                                <td colspan="">
                                                    {{$report->report_supporter}}
                                                </td>
                                                <td colspan="">
                                                    {{$report->report_well_wisher}}
                                                </td>

                                            </tr>


                                        @endforeach</tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="panel panel-default">
                                <div class="panel-heading text-center" style="background-color: #1b6d85;color:white">Org. Work</div>
                                <div class="panel-body">
                                    <table class="table table-responsive table-bordered">
                                        <thead>
                                        <tr>
                                            <th colspan="">Total Days</th>
                                            <th colspan="">Total Hours</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($user->orgwork as $orgwork)
                                            <tr>
                                                <td colspan="2">
                                                    {{$report->org_work_total_days}}
                                                </td>
                                                <td colspan="">
                                                    {{$report->org_work_total_hours}}
                                                </td>

                                            </tr>


                                        @endforeach</tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading text-center" style="background-color: #1b6d85;color:white">Distribution</div>
                                <div class="panel-body table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th colspan="2">Date</th>
                                            <th colspan="">Islamic Books</th>
                                            <th colspan="">Kishor Mag</th>
                                            <th colspan="">English Mag</th>
                                            <th colspan="">Ch. Sangbad</th>
                                            <th colspan="">Perspective</th>
                                            <th colspan="">Porichiti</th>
                                            <th colspan="">Class Routine</th>
                                            <th colspan="">Sticker</th>
                                            <th colspan="">Gift</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($user->distribution as $distribution)
                                            <tr>
                                                <td colspan="2">
                                                    {{$distribution->created_at->format('d/m/Y')}}
                                                </td>
                                                <td colspan="">
                                                    {{$distribution->distribution_islamic_book}}
                                                </td>
                                                <td colspan="">
                                                    {{$distribution->distribution_kishor_mag}}
                                                </td>
                                                <td colspan="">
                                                    {{$distribution->distribution_english_mag}}
                                                </td>
                                                <td colspan="">
                                                    {{$distribution->distribution_ch_sangbad}}
                                                </td>
                                                <td colspan="">
                                                    {{$distribution->distribution_perspective}}
                                                </td>
                                                <td colspan="">
                                                    {{$distribution->distribution_porichiti}}
                                                </td>
                                                <td colspan="">
                                                    {{$distribution->distribution_class_routine}}
                                                </td>
                                                <td colspan="">
                                                    {{$distribution->distribution_card}}
                                                </td>
                                                <td colspan="">
                                                    {{$distribution->distribution_gift}}
                                                </td>

                                            </tr>


                                        @endforeach</tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading text-center" style="background-color: #1b6d85;color:white">Contact</div>
                                <div class="panel-body table-responsive ">
                                    <table class="table table-bordered ">
                                        <thead>
                                        <tr>
                                            <th colspan="2">Date</th>
                                            <th colspan="">Member</th>
                                            <th colspan="">Associate</th>
                                            <th colspan="">Worker</th>
                                            <th colspan="">Supporter</th>
                                            <th colspan="">Friend</th>
                                            <th colspan="">Schl.Student</th>
                                            <th colspan="">Brl. Student</th>
                                            <th colspan="">Well Wisher</th>
                                            <th colspan="">Teacher</th>
                                            <th colspan="">VIP</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($user->contact as $contact)
                                            <tr>
                                                <td colspan="2">
                                                    {{$contact->created_at->format('d/m/Y')}}
                                                </td>
                                                <td colspan="">
                                                    {{$contact->member}}
                                                </td>
                                                <td colspan="">
                                                    {{$contact->associate}}
                                                </td>
                                                <td colspan="">
                                                    {{$contact->worker}}
                                                </td>
                                                <td colspan="">
                                                    {{$contact->supporter}}
                                                </td>
                                                <td colspan="">
                                                    {{$contact->friend}}
                                                </td>
                                                <td colspan="">
                                                    {{$contact->schl_student}}
                                                </td>
                                                <td colspan="">
                                                    {{$contact->brl_student}}
                                                </td>
                                                <td colspan="">
                                                    {{$contact->well_wisher}}
                                                </td>
                                                <td colspan="">
                                                    {{$contact->teacher}}
                                                </td>
                                                <td colspan="">
                                                    {{$contact->vip}}
                                                </td>




                                            </tr>


                                        @endforeach</tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-heading text-center" style="background-color: #1b6d85;color:white">Baitul Maal</div>
                                <div class="panel-body table-responsive">
                                    <table class="table  table-bordered">
                                        <thead>
                                        <tr>
                                            <th colspan="2">Date</th>
                                            <th colspan="">Iynat</th>
                                            <th colspan="">Student Wellfare</th>
                                            <th colspan="">Kolshi</th>
                                            <th colspan="">Table Bank</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($user->baitulmaal as $baitulmaal)
                                            <tr>
                                                <td colspan="2">
                                                    {{$baitulmaal->created_at->format('d/m/Y')}}
                                                </td>
                                                <td colspan="">
                                                    {{$baitulmaal->baitul_maal_iyanat}}
                                                </td>
                                                <td colspan="">
                                                    {{$baitulmaal->baitul_maal_student_welfare}}
                                                </td>
                                                <td colspan="">
                                                    {{$baitulmaal->baitul_maal_kolshi }}
                                                </td>

                                                <td colspan="">
                                                    {{$baitulmaal->baitul_maal_table_bank}}
                                                </td>



                                            </tr>

                                        @endforeach</tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-heading text-center" style="background-color: #1b6d85;color:white">Misc</div>
                                <div class="panel-body table-responsive">
                                    <table class="table table-bordered">

                                        <tbody>

                                        <tr>
                                            <td>Self Analysis</td>
                                            @foreach($user->misc as $misc)

                                            <td>
                                                <div class="checkbox">
                                                    <label>

                                                        <input type="checkbox" id="" name="" {{$misc->misc_self_analysis ? 'checked' : ''}} disabled>


                                                    </label>
                                                </div>
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr>
                                            <td>Physical Exercise</td>
                                            @foreach($user->misc as $misc)

                                                <td>
                                                    <div class="checkbox">
                                                        <label>

                                                            <input type="checkbox" id="" name="" {{$misc->misc_physical_exercise ? 'checked' : ''}} disabled>


                                                        </label>
                                                    </div>
                                                </td>
                                            @endforeach
                                        </tr>
                                        <tr>
                                            <td>Mahram Contact</td>
                                            @foreach($user->misc as $misc)

                                                <td>
                                                    <div class="checkbox">
                                                        <label>

                                                            <input type="checkbox" id="" name="" {{$misc->misc_mahram_contact ? 'checked' : ''}} disabled>


                                                        </label>
                                                    </div>
                                                </td>
                                            @endforeach
                                        </tr>
                                        <tr>
                                            <td>Non-Muslim Friend</td>
                                            @foreach($user->misc as $misc)

                                                <td>
                                                    <div class="checkbox">
                                                        <label>

                                                            <input type="checkbox" id="" name="" {{$misc->misc_non_muslim_friend ? 'checked' : ''}} disabled>


                                                        </label>
                                                    </div>
                                                </td>
                                            @endforeach
                                        </tr>
                                        <tr>
                                            <td>Other Organization</td>
                                            @foreach($user->misc as $misc)

                                                <td>
                                                    <div class="checkbox">
                                                        <label>

                                                            <input type="checkbox" id="" name="" {{$misc->misc_other_org ? 'checked' : ''}} disabled>


                                                        </label>
                                                    </div>
                                                </td>
                                            @endforeach
                                        </tr>




                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    </div>


                @else
                    {{--<h3>You need to log in. <a href="/login">Click here to login</a></h3>--}}
                    <h3> login Plz  <a href="{{ url('/login') }}">Click here to login</a></h3>


                @endif

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