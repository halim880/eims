<div class="leftside-menu">

    <!-- LOGO -->
    <a href="index.html" class="logo text-center logo-light mt-3">
        <h1>EIMS</h1>
    </a>

    <div class="h-100" id="leftside-menu-container" data-simplebar="">
        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-title side-nav-item">{{Auth::user()->hostel->name}}</li>

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
                <a data-bs-toggle="collapse" href="#sidebarNotice" aria-expanded="false" aria-controls="sidebarNotice" class="side-nav-link">
                    <i class="uil-briefcase"></i>
                    <span> Notice </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarNotice">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('hostel.notices')}}">Notice Table</a>
                        </li>
                        <li>
                            <a href="{{route('hostel.notice.create')}}">Create New Notice<span class="badge rounded-pill badge-success-lighten font-10 float-end">New</span></a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarPayment" aria-expanded="false" aria-controls="sidebarPayment" class="side-nav-link">
                    <i class="uil-briefcase"></i>
                    <span> Payment </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarPayment">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('hostel.notices')}}">Receive Payment</a>
                        </li>
                        <li>
                            <a href="{{route('hostel.payments')}}">Payment History<span class="badge rounded-pill badge-success-lighten font-10 float-end">New</span></a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a href="{{route('hostel.applications')}}" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> Applications </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{route('hostel.clearance')}}" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> Hostel Clearance </span>
                </a>
            </li>

        </ul>

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>