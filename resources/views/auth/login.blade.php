@extends('layouts.auth')

@section('custom_css')
    <style>
        .video-background {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            z-index: -1;
            overflow: hidden;
        }

        #bgVideo {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -1;
        }

        .form-signin {
            position: relative;
            z-index: 1;
        }
    </style>
@endsection

@section('content')
    <div class="video-background">
        <video autoplay muted loop id="bgVideo">
            <source src="{{ asset('assets/video/background_video.mp4') }}" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>
    </div>

    <div class="card form-signin p-4 rounded shadow">
        <h5 class="mb-3 text-center">
            Login
        </h5>

        <form class="mb-3" id="formSubmit" method="POST" action="javascript:void(0)" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="mb-3">
                        <label class="form-label" for="email">
                            Email
                        </label>

                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="ti ti-mail"></i>
                            </span>

                            <input type="text" class="form-control" name="email" id="email"
                                placeholder="Masukan Email" autocomplete="off">
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="mb-3">
                        <label class="form-label" for="password">
                            Password
                        </label>

                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="ti ti-lock"></i>
                            </span>

                            <input type="password" class="form-control" name="password" id="password"
                                placeholder="Masukan Password" autocomplete="off">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary w-100" id="btnSubmit">
                        Simpan
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('custom_js')
    {{-- * Custom JS --}}
    <script src="{{ asset('assets/custom/auth/login.js') }}"></script>
@endsection
