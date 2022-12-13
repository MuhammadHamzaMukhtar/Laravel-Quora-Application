<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- bootstrap -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/css/toastr.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            toastr.options = {
                'timeOut': 5000,
                'closeButton': true,
                'progressBar': true,
                'loaderBg': '#9EC600',
                'showHideTransition': 'fade',
            }
            @if(Session::has('error'))
            toastr.error('{{ Session::get('
                error ') }}');
            @elseif(Session::has('success'))
            toastr.success('{{ Session::get('
                success ') }}');
            @endif

            $('#logout-item').click(function() {
                $('#logout-form').submit();
            })
        });
    </script>
    <script>
        $(document).ready(function() {
            // alert('askajsk')

            $("#name").on("keyup", function() {
                // alert('asassa')
                if ($(this).val() === "") {
                    $(".name-err").html("Name field cannot be NULL");
                } else {
                    $(".name-err").html("");
                }
            });
            $("#email").on("keyup", function() {
                function validateEmail($email) {
                    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                    return emailReg.test($email);
                }
                if ($(this).val() === "") {
                    $(".email-err").html("An email field cannot be NULL");
                } else if (!validateEmail($(this).val())) {
                    $(".email-err").html("Invalid Email Format");
                } else {
                    $(".email-err").html("");
                }
            });
            $("#password").on("keyup", function() {
                // alert('sas')
                function validatePwd($pwd) {
                    var pwdReg =
                        /^.*(?=.*[a-zA-Z])(?=.*[0-7])(?=.*[\d\x])(?=.*[@$!]).*$/;
                    return pwdReg.test($pwd);
                }
                if ($(this).val() === "") {
                    $("#pass-cross").show();
                    $("#pass-tick").hide();

                    $(".pass-err").html("Password field cannot be NULL");
                } else if (!validatePwd($(this).val())) {
                    $("#pass-cross").show();
                    $("#pass-tick").hide();

                    $(".pass-err").html(
                        "Password must contain at least 8 characters 1 upppercase, 1 lowercase and special character"
                    );
                } else {
                    $("#pass-cross").hide();
                    $("#pass-tick").show();

                    $(".pass-err").html("");
                }
            });
            $("#password_confirmation").on("keyup", function() {
                if ($(this).val() !== $("#password").val()) {
                    $("#cpass-cross").show();
                    $("#cpass-tick").hide();

                    $(".cpass-err").html("Confirm Password field must match");
                } else {
                    $("#cpass-cross").hide();
                    $("#cpass-tick").show();

                    $(".cpass-err").html("");
                }
            });
            $(".image").on("change", function() {
                // alert('asasass')x`
                document.getElementById("user-img").src =
                    window.URL.createObjectURL(this.files[0]);
                var fileExtension = ["jpeg", "jpg", "png"];
                if (
                    $.inArray(
                        $(this).val().split(".").pop().toLowerCase(),
                        fileExtension
                    ) == -1
                ) {
                    $('#user-img').hide();
                    $(".pic-err").html(
                        "Only formats are allowed : " + fileExtension.join(", ")
                    );
                } else {
                    $('#user-img').show();

                    $(".pic-err").html(" ");
                }
            });
            $(".current_password").on("keyup", function() {
                // alert('asasasa')
                var user_id = $(this).data("id");
                var old_pass = $(this).val();
                // alert(old_pass)
                $.ajaxSetup({
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                            "content"
                        ),
                    },
                });
                $.ajax({
                    type: "POST",
                    url: "/passwordAjax",
                    data: {
                        token: "{{ csrf_token() }}",
                        current_password: old_pass,
                    },
                    async: false,
                    success: function(data) {
                        // alert(data);
                        if (data === "false") {
                            $("#currentPass-cross").show();
                            $("#currentPass-tick").hide();

                            $(".current_pass_err").html(
                                "Please Enter Correct Current Password!"
                            );
                        } else {
                            $("#currentPass-cross").hide();
                            $("#currentPass-tick").show();

                            $(".current_pass_err").html(" ");
                        }
                    },
                });
            });
        });
    </script>
</body>

</html>