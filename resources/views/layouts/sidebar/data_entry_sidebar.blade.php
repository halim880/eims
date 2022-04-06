<div class="leftside-menu">
    <a href="index.html" class="logo text-center logo-light mt-3">
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
                <a data-bs-toggle="collapse" href="#admin-student" aria-expanded="false" aria-controls="admin-student" class="side-nav-link">
                    <i class="uil-briefcase"></i>
                    <span> Student </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="admin-student">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('data_entry.student.table')}}">Students Table</a>
                        </li>
                        <li>
                            <a href="{{route('data_entry.student.entry')}}">Student Entry <span class="badge rounded-pill badge-success-lighten font-10 float-end">New</span></a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#admin-course" aria-expanded="false" aria-controls="admin-course" class="side-nav-link">
                    <i class="uil-briefcase"></i>
                    <span> Course </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="admin-course">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('data_entry.course.table')}}">Course table</a>
                        </li>
                        <li>
                            <a href="{{route('data_entry.course.entry')}}">Course Entry <span class="badge rounded-pill badge-success-lighten font-10 float-end">New</span></a>
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
                <div class="collapse" id="data_entry-teacher">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('data_entry.teacher.table')}}">Teacher table</a>
                        </li>
                        <li>
                            <a href="{{route('data_entry.teacher.entry')}}">Teacher Entry <span class="badge rounded-pill badge-success-lighten font-10 float-end">New</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#data_entry-student" aria-expanded="false" aria-controls="data_entry-student" class="side-nav-link">
                    <i class="uil-briefcase"></i>
                    <span> Hostel </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="data_entry-student">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('data_entry.teacher.table')}}">Students table</a>
                        </li>
                        <li>
                            <a href="{{route('data_entry.hostel.student.entry')}}">Student Entry <span class="badge rounded-pill badge-success-lighten font-10 float-end">New</span></a>
                        </li>
                    </ul>
                </div>
            </li>

            
        </ul>

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>