
@extends('layouts.base')

@section('root')

<!-- NAVBAR START -->
@include('web.partials._topnav')
@include('web.partials._header_with_logo')
@include('web.partials._navbar')
@include('web.partials._slider')
@include('web.partials._admission_going_on')
@include('web.partials._recent_news')
@include('web.partials._admission_advirtise')


@include('web.partials._notice_board')
@include('web.partials._achivements')

<!-- NAVBAR END -->

<!-- START HERO -->

@include('web.partials._footer')


@endsection