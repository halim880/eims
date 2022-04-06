<div class="leftside-menu">

    <!-- LOGO -->
    <a href="index.html" class="logo text-center logo-light mt-3">
        <h1>EIMS</h1>
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
                <a href="{{route('library.dashboard')}}" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> Dashboard </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarStudents" aria-expanded="false" aria-controls="sidebarStudents" class="side-nav-link">
                    <i class="uil-briefcase"></i>
                    <span> Student </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarStudents">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('library.students')}}">Student Table</a>
                        </li>
                        <li>
                            <a href="{{route('library.student.entry')}}"> Add Student<span class="badge rounded-pill badge-success-lighten font-10 float-end">New</span></a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarNotice" aria-expanded="false" aria-controls="sidebarNotice" class="side-nav-link">
                    <i class="uil-briefcase"></i>
                    <span> Book </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarNotice">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('library.Books')}}">Books Table</a>
                        </li>
                        <li>
                            <a href="{{route('library.Book.entry')}}">Book Entry<span class="badge rounded-pill badge-success-lighten font-10 float-end">New</span></a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarManageIssue" aria-expanded="false" aria-controls="sidebarManageIssue" class="side-nav-link">
                    <i class="uil-briefcase"></i>
                    <span> Manage Issue </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarManageIssue">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('library.manage_issue')}}">Issue / Return Book</a>
                        </li>
                        <li>
                            <a href="{{route('library.recent_issue')}}">Recent Issue</a>
                        </li>
                        <li>
                            <a href="{{route('library.due_books')}}">Due books</a>
                        </li>
                        <li>
                            <a href="{{route('library.check_issue')}}">Library Clearance</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>