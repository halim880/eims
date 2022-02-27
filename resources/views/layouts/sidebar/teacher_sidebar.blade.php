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
                <a href="{{route('student.dashboard')}}" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> Dashboard </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{route('student.notice')}}" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> Notices </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{route('student.courses')}}" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> Cources </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{route('student.classes')}}" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> Classes </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{route('student.exam')}}" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> Exam </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{route('student.assignments')}}" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> Assignments </span>
                </a>
            </li>
    
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#teacherResult" aria-expanded="false" aria-controls="teacherResult" class="side-nav-link">
                    <i class="uil-briefcase"></i>
                    <span> Result </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="teacherResult">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('teacher.results.table')}}">Results Table</a>
                        </li>
                        <li>
                            <a href="{{route('teacher.result.entry')}}"> Result Entry<span class="badge rounded-pill badge-success-lighten font-10 float-end">New</span></a>
                        </li>
                    </ul>
                </div>
            </li>

        </ul>

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>