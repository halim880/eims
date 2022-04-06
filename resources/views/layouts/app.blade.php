@extends('layouts.base')

@section('root')


    {{-- @livewire('layouts.backend.system-admin.sidebar') --}}

    @if (Auth::user()->is_student)
        @include('layouts.sidebar.student_sidebar')        
    @elseif (Auth::user()->is_provost)
        @include('layouts.sidebar.hostel_sidebar')
    @elseif (Auth::user()->is_teacher)
        @include('layouts.sidebar.teacher_sidebar')
    @elseif (Auth::user()->is_admin)
        @include('layouts.sidebar.admin_sidebar')
    @elseif (Auth::user()->is_librarian)
        @include('layouts.sidebar.library_sidebar')
    @elseif (Auth::user()->is_data_entry)
        @include('layouts.sidebar.data_entry_sidebar')
    @endif

    <div class="content-page">
        <div class="content">
            <!-- Topbar Start -->
            @include('layouts.topbar')

            {{$slot}}

        </div>
        <!-- content -->
    </div>
@endsection