@extends('layouts.base')

@section('root')
<div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-xxl-4 col-lg-5">
              <div class="card">
                  <!-- Logo -->
                  {{-- <div class="card-header pt-4 pb-4 text-center">
                    <span class="text-white font-20">{{config('app.name')}}</span>
                  </div> --}}

                  <div class="card-body p-4">
                      <div class="text-center w-75 m-auto">
                          <h4 class="text-dark-50 text-center pb-0 fw-bold">Login as Teacher</h4>
                      </div>

                      @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                      <form action="{{route('teacher.login')}}" method="POST">
                        @csrf
                          <div class="mb-3">
                              <label for="email" class="form-label">Email</label>
                              <input class="form-control" type="email" id="email" name="email" autocomplete="off" placeholder="e.g example@gmail.com">
                          </div>

                          <div class="mb-3">
                              <a href="pages-recoverpw.html" class="text-muted float-end"><small>Forgot your password?</small></a>
                              <label for="password" class="form-label">Password</label>
                              <div class="input-group input-group-merge">
                                  <input type="password" id="password" class="form-control" placeholder="Enter your password" name="password" autocomplete="off">
                                  <div class="input-group-text" data-password="false">
                                      <span class="password-eye"></span>
                                  </div>
                              </div>
                          </div>

                          <div class="mb-3 mb-3">
                              <div class="form-check">
                                  <input type="checkbox" class="form-check-input" id="checkbox-signin" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                  <label class="form-check-label" for="checkbox-signin">Remember me</label>
                              </div>
                          </div>

                          <div class="mb-3 mb-0 text-center">
                              <button class="btn btn-success" type="submit"> Login </button>
                          </div>
                      </form>
                  </div> <!-- end card-body -->
              </div>
          </div> <!-- end col -->
      </div>
      <!-- end row -->
  </div>
  <!-- end container -->
</div>
@endsection


<style>
  .card-header{
    background: var(--primaryColor) !important;
  }
</style>