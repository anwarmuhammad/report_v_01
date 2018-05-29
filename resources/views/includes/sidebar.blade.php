<div class="sidebar" data-color="blue" data-image="admin/img/sidebar-1.jpg">
    <!--
Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

Tip 2: you can also add an image using data-image tag
-->
    <div class="logo">
        <a href="{{url('/home')}}" class="simple-text">
            Report
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="active">
                <a href="{{url('/home')}}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>

                <li class="">
                 <a href="{{url('/profile')}}">
                    <i class="material-icons">person</i>
                    <p>User Profile</p>
                </a>
            </li>

            <li>
                <a href="{{url('/home')}}">
                    <i class="material-icons">library_books</i>
                    <p>File Report</p>
                </a>
            </li>
            <li>
                <a href="{{url('/home')}}">
                    <i class="material-icons">library_books</i>
                    <p>Monthly Plan</p>
                </a>
            </li>
            <li>
                <a href="{{url('/summary')}}">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                    <p>Month Summary</p>
                </a>
            </li>


            <li>
                <a href="{{url('/statistics')}}">
                    <i class="material-icons">insert_chart</i>
                    <p>Statistics</p>
                </a>
            </li>

            <li>
                <a href="{{url('/mentor')}}">
                    <i class="material-icons">supervisor_account</i>
                    <p>Mentor List</p>
                </a>
            </li>
            @if(Auth::user()->role_id ==3)
            <li>
                <a href="{{url('/follower')}}">
                    <i class="material-icons">person</i>
                    <p>Follower List</p>
                </a>
            </li>
            @endif
            <li>
                <a href="{{url('/users')}}">
                    <i class="material-icons">person</i>
                    <p>User List</p>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="material-icons">content_paste</i>
                    <p>Advices</p>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="material-icons text-gray">notifications</i>
                    <p>Notifications</p>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="material-icons">help_outline</i>
                    <p>Help</p>
                </a>
            </li>


        </ul>
    </div>
</div>