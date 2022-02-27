<div class="leftside-menu">

    <!-- LOGO -->
    <a href="index.html" class="logo text-center logo-light mt-3">
        <span class="logo-lg">
            <img src="{{asset('assets/images/logo.png')}}" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="assets/images/logo_sm.png" alt="" height="16">
        </span>
    </a>

    <!-- LOGO -->
    <a href="index.html" class="logo text-center logo-dark">
        <span class="logo-lg">
            <img src="assets/images/logo-dark.png" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="assets/images/logo_sm_dark.png" alt="" height="16">
        </span>
    </a>

    <div class="h-100" id="leftside-menu-container" data-simplebar="">
        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-title side-nav-item">Navigation</li>

            <li class="side-nav-item">
                <a href="{{route('hostel.dashboard')}}" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> Dashboard </span>
                </a>
            </li>


            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarMembers" aria-expanded="false" aria-controls="sidebarMembers" class="side-nav-link">
                    <i class="uil-briefcase"></i>
                    <span> Student </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarMembers">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('hostel.students')}}">Student Table</a>
                        </li>
                        <li>
                            <a href="{{route('hostel.student.create')}}"> Add Student<span class="badge rounded-pill badge-success-lighten font-10 float-end">New</span></a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a href="{{route('hostel.notice')}}" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> Notice </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{route('hostel.payments')}}" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> Payments </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{route('hostel.applications')}}" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> Applications </span>
                </a>
            </li>

        </ul>

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>