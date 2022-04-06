<header>
    {{-- Navigation bar --}}
    <nav class="teal">
        <div class="nav-wrapper ">
          <a href="#!" class="brand-logo">Sylhet Engineering College</a>
          <a href="#" data-target="mobile-menu" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="{{route('page.home')}}">Home</a></li>
            <li><a href="{{route('page.notice')}}">Notice</a></li>
            <li><a href="{{route('page.department')}}">Departments</a></li>
            <li><a href="{{url('/admission-form')}}">Admission</a></li>
            <li><a href="{{route('page.blog')}}">Blog</a></li>
            <li><a href="{{route('page.events')}}">Events</a></li>
            @auth
                @if (Auth::user()->hasRole('student'))
                    <li><a href="{{url('teacher/dashboard')}}">Your Profile</a></li>
                @endif
                @if (Auth::user()->hasRole('student'))
                    <li><a href="{{url('student/dashboard')}}">Your Profile</a></li>
                @endif

                @if (Auth::user()->is_provost)
                    <li><a href="{{url('hostel/dashboard')}}">Dashboard</a></li>
                @endif

                @if (Auth::user()->is_librarian)
                    <li><a href="{{url('library/dashboard')}}">Dashboard</a></li>
                @endif

                @if (Auth::user()->hasRole('admin'))
                    <li><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
                @endif
            @endauth
          </ul>
        </div>
      </nav>
    
      <ul class="sidenav" id="mobile-menu">
            <li><a href="">Home</a></li>
            <li><a href="">Notice</a></li>
            <li><a href="">Departments</a></li>
            <li><a href="">Admission</a></li>
            <li><a href="">Blog</a></li>
            <li><a href="">Events</a></li>
      </ul>
</header>