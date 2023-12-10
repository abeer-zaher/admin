<!DOCTYPE html>
<html lang="en" dir="rtl">
@php
    use Carbon\Carbon;
@endphp

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!--favicon-->
    <link rel="icon" href="{{ asset('assets/warsaw-logo.png') }}" type="image/png" />
    <!-- loader-->
    <link href="{{ asset('assets/admin/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets/admin/js/pace.min.js') }}"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap.min.css') }}" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Roboto&display=swap" />
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/icons.css') }}" />
    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/app.css') }}" />


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@800;1000&display=swap" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;800;1000&display=swap');
    </style>

</head>

<body class="bg-lock-screen">

    <!-- wrapper -->
    <div class="wrapper">

        <div class="authentication-lock-screen d-flex align-items-center justify-content-center">
            <div class="card shadow-none bg-transparent">
                <div class="card-body p-md-5 text-center">

                    <h2 id="time" class="text-white"> </h2>
                    <h5 class="text-white"> {{ Carbon::now()->format('D ,F d ,Y') }} </h5>
                    <div class="">
                        <img src="{{ asset('assets/admin/images/icons/user.png') }}" class="mt-5" width="120"
                            alt="" />
                    </div>
                    <p class="mt-2 text-white">{{ __('Administrator') }}</p>

                    <br>

                    <div class="form-body">

                        <form method="POST" action="{{ route('login') }}" class="row g-3">
                            @csrf



                            <div class="col-12">
                                <label for="email" class="form-label text-white">{{ __('Email Address') }}</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Email Address">
                            </div>


                            <div class="col-12">
                                <label for="password" class="form-label text-white">{{ __('Password') }}</label>
                                <div class="input-group" id="show_hide_password">
                                    <input type="password" class="form-control border-end-0" id="password"
                                        name="password" placeholder="Enter Password">
                                        <a href="javascript:;"
                                        class="input-group-text bg-transparent"><i class="bx bx-hide"></i></a>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary"><i
                                            class="bx bxs-lock-open"></i>{{ __('Sign in') }}</button>
                                </div>
                            </div>

                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end wrapper -->

</body>

</html>

<script src="{{asset('assets/admin/js/jquery.min.js')}}"></script>

<script>
    function time() {
        var now = new Date();
        //     var mm = now.getYear();
        var h = now.getHours();
        var m = now.getMinutes();
        var s = now.getSeconds();
        document.getElementById("time").innerHTML = "" + h + ":" + m + ":" + s;
    }
    setInterval(() => {
        time()
    }, 1000);

    $(document).ready(function() {
        $("#show_hide_password a").on('click', function(event) {
            event.preventDefault();
            if ($('#show_hide_password input').attr("type") == "text") {
                $('#show_hide_password input').attr('type', 'password');
                $('#show_hide_password i').addClass("bx-hide");
                $('#show_hide_password i').removeClass("bx-show");
            } else if ($('#show_hide_password input').attr("type") == "password") {
                $('#show_hide_password input').attr('type', 'text');
                $('#show_hide_password i').removeClass("bx-hide");
                $('#show_hide_password i').addClass("bx-show");
            }
        });
    });
</script>
