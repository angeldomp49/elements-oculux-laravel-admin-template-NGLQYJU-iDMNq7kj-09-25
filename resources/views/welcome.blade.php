@extends('layout.authentication')
@section('title', 'Form')


@section('content')
<div class="pattern">
    <span class="red"></span>
    <span class="indigo"></span>
    <span class="blue"></span>
    <span class="green"></span>
    <span class="orange"></span>
</div>

<div class="auth-main particles_js">
    <div class="auth_div vivify popIn">
        <div class="auth_brand">
            <a class="navbar-brand" href="javascript:void(0);">
                <img src="../assets/images/icon.svg" width="30" height="30" class="d-inline-block align-top mr-2"
                    alt="">Oculux</a>
        </div>
        <div class="card">
            <div class="body">
                <p class="lead">Llena los datos para continuar</p>
                <form class="form-auth-small m-t-20" action="{{ route('lead.store') }}" method="post">
                    @csrf 
                    <div class="form-group">
                        <label for="signin-email" class="control-label sr-only">Name</label>
                        <input type="text" name="name" class="form-control round" id="signin-email" value=""
                            placeholder="Name">
                        @error('name')
                            <ul class="parsley-errors-list filled text-left">
                                <li class="parsley-required">
                                    {{$message}}
                                </li>
                            </ul>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="signin-email" class="control-label sr-only">Last Name</label>
                        <input type="text" name="last_name" class="form-control round" id="signin-email" value=""
                            placeholder="Last Name">
                        @error('last_name')
                            <ul class="parsley-errors-list filled text-left">
                                <li class="parsley-required">
                                    {{$message}}
                                </li>
                            </ul>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="signin-email" class="control-label sr-only">Email</label>
                        <input type="email" name="email" class="form-control round" id="signin-email" value=""
                            placeholder="Email">
                        @error('email')
                            <ul class="parsley-errors-list filled text-left">
                                <li class="parsley-required">
                                    {{$message}}
                                </li>
                            </ul>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="signin-email" class="control-label sr-only">Address</label>
                        <input type="text" name="address" class="form-control round" id="signin-email" value=""
                            placeholder="Address">
                        @error('address')
                            <ul class="parsley-errors-list filled text-left">
                                <li class="parsley-required">
                                    {{$message}}
                                </li>
                            </ul>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="signin-email" class="control-label sr-only">Country</label>
                        <input type="text" name="country" class="form-control round" id="signin-email" value=""
                            placeholder="Country">
                        @error('country')
                            <ul class="parsley-errors-list filled text-left">
                                <li class="parsley-required">
                                    {{$message}}
                                </li>
                            </ul>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="signin-email" class="control-label sr-only">Source</label>
                        <input type="text" name="source" class="form-control round" id="signin-email" value=""
                            placeholder="Source">
                        @error('source')
                            <ul class="parsley-errors-list filled text-left">
                                <li class="parsley-required">
                                    {{$message}}
                                </li>
                            </ul>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="signin-email" class="control-label sr-only">Phone</label>
                        <input type="text" name="phone" class="form-control round" id="signin-email" value=""
                            placeholder="Phone">
                        @error('phone')
                            <ul class="parsley-errors-list filled text-left">
                                <li class="parsley-required">
                                    {{$message}}
                                </li>
                            </ul>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="signin-email" class="control-label sr-only">Cell Phone</label>
                        <input type="text" name="cellphone" class="form-control round" id="signin-email" value=""
                            placeholder="Cell Phone">
                        @error('cellphone')
                            <ul class="parsley-errors-list filled text-left">
                                <li class="parsley-required">
                                    {{$message}}
                                </li>
                            </ul>
                        @enderror
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-round btn-block">LOGIN</button>
                    
                </form>
            </div>
        </div>
    </div>
    <div id="particles-js"></div>
</div>
@stop

@section('page-styles')
    <link rel="stylesheet" href="{{ asset('assets/vendor/parsleyjs/css/parsley.css') }}">
@endsection

@section('page-script')
    @if(session('registered'))
        <script>
            alert('sended');
        </script>
    @endif
@endsection