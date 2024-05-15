<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>{{ $judul }}</title>
    <!-- CSS files -->
    <link href="assets/dist/css/tabler.min.css?1692870487" rel="stylesheet" />
    <link href="assets/dist/css/tabler-flags.min.css?1692870487" rel="stylesheet" />
    <link href="assets/dist/css/tabler-payments.min.css?1692870487" rel="stylesheet" />
    <link href="assets/dist/css/tabler-vendors.min.css?1692870487" rel="stylesheet" />
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <link href="assets/dist/css/demo.min.css?1692870487" rel="stylesheet" />
    <link href="{{ asset('assets/extentions/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/extentions/sweetalert2/sweetalert2.min.js') }}" defer></script>
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
</head>

<body class=" d-flex flex-column">
    <script src="assets/dist/js/demo-theme.min.js?1692870487"></script>
    <div class="page page-center">
        <div class="container container-normal py-4">
            <div class="row align-items-center g-4">
                <div class="col-lg">
                    <div class="container-tight">
                        <div class="text-center">
                            <h1>Sispak-Sapi</h1>
                            <h5>Sistem Pakar Diagnosis Penyakit Sapi menggunakan metode <i>Forward Chaining dan
                                    Certainty
                                    Factor</i></h5>
                        </div>

                        <div class="card card-md">
                            <div class="card-body">
                                <h2 class="h2 text-center mb-4">Login to your account</h2>
                                <form action="{{ route('login.post') }}" method="post" name="handleAjax"
                                    id="handleAjax">
                                    @csrf
                                    {{-- Error Alert --}}
                                    <div id="errors-list"></div>

                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="text" name="email" id="email" class="form-control"
                                            placeholder="Masukkan Email" autofocus value="{{ old('email') }}" />
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label">Password</label>
                                        <input type="password" name="password" id="password" class="form-control"
                                            placeholder="Masukkan password">
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-footer">
                                        <button type="submit" id="submitLogin"
                                            class="btn btn-blue w-100">Login</button>
                                    </div>
                                </form>
                            </div>
                            <div class="hr-text">or</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col"><a href="auth/redirect" class="btn w-100">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/brand-github -->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-brand-google" width="44"
                                                height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="red"
                                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path
                                                    d="M20.945 11a9 9 0 1 1 -3.284 -5.997l-2.655 2.392a5.5 5.5 0 1 0 2.119 6.605h-4.125v-3h7.945z" />
                                            </svg>
                                            Login with Google
                                        </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg d-none d-lg-block">
                    <iframe src="https://lottie.host/embed/2f60ceca-c799-4293-960b-d10674d84d12/nb2I5XOTeV.json"
                        width="450px" height="450px"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="assets/dist/js/tabler.min.js?1692870487" defer></script>
    <script src="assets/dist/js/demo.min.js?1692870487" defer></script>
    <script src="{{ asset('assets/extentions/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/extentions/jquery.validate.min.js') }}"></script>
    <script type="text/javascript">
        $(function() {
            $("#handleAjax").validate({
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true,
                    },
                },
                messages: {
                    email: {
                        required: "Email tidak boleh kosong",
                        email: "Format email tidak valid"
                    },
                    password: {
                        required: "Password tidak boleh kosong",
                    },
                },

                submitHandler: function(form) {
                    $('#submitLogin').html(
                        '<i class="fa-solid fa-fw fa-spinner fa-spin"></i> Redirect to Dashboard, Please Wait...'
                    );
                    $("#submitLogin").attr("disabled", true);

                    $.ajax({
                        url: $(form).attr('action'),
                        data: $(form).serialize(),
                        type: "POST",

                        success: function(response) {
                            if (response.includes('dashboard')) {
                                window.location.href = response;
                            } else {
                                $('#errors-list').html('<div class="alert alert-danger">' +
                                    response + '</div>');
                            }
                        },
                        error: function(xhr, status, error) {
                            $('#errors-list').html(
                                '<div class="alert alert-danger">Terjadi kesalahan saat melakukan login. Silakan coba lagi nanti.</div>'
                            );
                        },
                        complete: function() {
                            // Reset tombol login setelah AJAX selesai
                            $('#submitLogin').html('Login');
                            $("#submitLogin").attr("disabled", false);
                        }
                    });
                }
            });

        });
    </script>


</body>

</html>
