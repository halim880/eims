<div class="leftside-menu">

    <!-- LOGO -->
    <a href="index.html" class="logo text-center logo-light mt-3">
        {{-- <span class="logo-lg">
            <img src="{{asset('assets/images/logo.png')}}" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="assets/images/logo_sm.png" alt="" height="16">
        </span> --}}
        <h3>EIMS</h3>
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
                <a href="{{route('admin.dashboard')}}" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> Dashboard </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarAdmission" aria-expanded="false" aria-controls="sidebarAdmission" class="side-nav-link">
                    <i class="uil-briefcase"></i>
                    <span> Admission </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarAdmission">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('admin.admission.applications')}}">Applications</a>
                        </li>
                        <li>
                            <a href="{{route('admin.session')}}">Create New Session</a>
                        </li>
                        <li>
                            <a href="{{route('admin.session.manage')}}">Manage Session<span class="badge rounded-pill badge-success-lighten font-10 float-end">New</span></a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarNotice" aria-expanded="false" aria-controls="sidebarNotice" class="side-nav-link">
                    <i class="uil-briefcase"></i>
                    <span> Notice </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarNotice">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="sdfs">Create Notice</a>
                        </li>
                        <li>
                            <a href="hene">Published Notices<span class="badge rounded-pill badge-success-lighten font-10 float-end">New</span></a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#admin-teacher" aria-expanded="false" aria-controls="admin-teacher" class="side-nav-link">
                    <i class="uil-briefcase"></i>
                    <span> Teacher </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="admin-teacher">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('admin.teacher.entry')}}">Teacher Entry</a>
                        </li>
                        <li>
                            <a href="ghj">Teachers<span class="badge rounded-pill badge-success-lighten font-10 float-end">New</span></a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#admin-student" aria-expanded="false" aria-controls="admin-student" class="side-nav-link">
                    <i class="uil-briefcase"></i>
                    <span> Student </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="admin-student">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('admin.student.table')}}">Students Table</a>
                        </li>
                        <li>
                            <a href="{{route('admin.student.entry')}}">Student Entry <span class="badge rounded-pill badge-success-lighten font-10 float-end">New</span></a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarExam" aria-expanded="false" aria-controls="sidebarExam" class="side-nav-link">
                    <i class="uil-briefcase"></i>
                    <span> Exam </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarExam">
                    <ul class="side-nav-second-level">
                        
                        <li>
                            <a href="{{route('admin.exam')}}">Exams</a>
                        </li>
                        <li>
                            <a href="{{route('admin.exam.create')}}">Create Exam <span class="badge rounded-pill badge-success-lighten font-10 float-end">New</span></a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a href="dfsdf" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> Result </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="hjoh" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> Library </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarHostel" aria-expanded="false" aria-controls="sidebarHostel" class="side-nav-link">
                    <i class="uil-briefcase"></i>
                    <span> Hostel </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarHostel">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="ioiyh">Your Details</a>
                        </li>
                        <li>
                            <a href="opjhhy"> Apply for Sit<span class="badge rounded-pill badge-success-lighten font-10 float-end">New</span></a>
                        </li>
                    </ul>
                </div>
            </li>

        </ul>

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>