<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <div class="d-flex">

                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                    <i class="fa fa-circle-check fs-4 text-success ms-2 mt-2" style="display: none;" id="name-tick"></i>
                    <i class="fa-solid fa-circle-xmark fs-4 text-danger ms-2 mt-2" style="display: none;" id="name-cross"></i>
                </div>
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                <br>
                <span class="text-danger name-err"></span>
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <div class="d-flex">

                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                    <i class="fa fa-circle-check fs-4 text-success ms-2 mt-2" style="display: none;" id="email-tick"></i>
                    <i class="fa-solid fa-circle-xmark fs-4 text-danger ms-2 mt-2" style="display: none;" id="email-cross"></i>
                </div>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                <br>
                <span class="text-danger email-err"></span>
            </div>

            <!-- Profile Image -->
            <div class="mt-4">
                <x-input-label for="profile_pic" :value="__('Profile Pic')" />
                <div class="d-flex">
                    <x-text-input id="image" class="block mt-1 w-full" type="file" name="image" :value="old('image')" required />
                    <i class="fa fa-circle-check fs-4 text-success ms-2 mt-2" style="display: none;" id="pic-tick"></i>
                    <i class="fa-solid fa-circle-xmark fs-4 text-danger ms-2 mt-2" style="display: none;" id="pic-cross"></i>
                </div>
                <x-input-error :messages="$errors->get('image')" class="mt-2" />
                <br>
                <span class="text-danger pic-err"></span>

                <img class="mt-3" src="" width="60px" height="60px" alt="" id="addPic">
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <div class="d-flex">
                    <x-text-input id="pass" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                    <i class="fa-sharp fa-solid fa-eye-slash mt-3 fs-6" style="margin-left: -30px;" id="eye"></i>
                    <i class="fa fa-circle-check fs-4 text-success ms-3 mt-2" style="display: none;" id="pass-tick"></i>
                    <i class="fa-solid fa-circle-xmark fs-4 text-danger ms-3 mt-2" style="display: none;" id="pass-cross"></i>
                </div>

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                <br>
                <span class="text-danger pass-err"></span>
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <div class="d-flex">
                    <x-text-input id="cpass" class="block mt-1 w-full" type="password" name="password_confirmation" required />
                    <i class="fa-sharp fa-solid fa-eye-slash mt-3 fs-6" style="margin-left: -30px;" id="ceye"></i>
                    <i class="fa fa-circle-check fs-4 text-success ms-3 mt-2" style="display: none;" id="cpass-tick"></i>
                    <i class="fa-solid fa-circle-xmark fs-4 text-danger ms-3 mt-2" style="display: none;" id="cpass-cross"></i>
                </div>

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                <br>
                <span class="text-danger cpass-err"></span>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-danger-button class="ml-4">
                    {{ __('Register') }}
                </x-danger-button>
            </div>
        </form>

        <script>
            $(document).ready(function() {
                $("#addPic").hide();
                $("#image").on("change", function() {
                    document.getElementById("addPic").src = window.URL.createObjectURL(
                        this.files[0]
                    );
                    $("#addPic").show();
                    var fileExtension = ["jpeg", "jpg", "png"];
                    if (
                        $.inArray(
                            $(this).val().split(".").pop().toLowerCase(),
                            fileExtension
                        ) == -1
                    ) {
                        $('#pic-cross').show();
                        $('#pic-tick').hide();

                        $("#addPic").hide();

                        $(".pic-err").html(
                            "Only formats are allowed : " + fileExtension.join(", ")
                        );
                    } else {
                        $('#pic-cross').hide();
                        $('#pic-tick').show();

                        $(".pic-err").html(" ");
                    }
                });
                $("#name").on("keyup", function() {
                    if ($(this).val() === "") {
                        $('#name-cross').show();
                        $('#name-tick').hide();

                        $(".name-err").html("Name field cannot be NULL");
                    } else {
                        $('#name-cross').hide();
                        $('#name-tick').show();

                        $(".name-err").html("");
                    }
                });
                $("#email").on("keyup", function() {
                    function validateEmail($email) {
                        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                        return emailReg.test($email);
                    }
                    if ($(this).val() === "") {
                        $('#email-cross').show();
                        $('#email-tick').hide();

                        $(".email-err").html("An email field cannot be NULL");
                    } else if (!validateEmail($(this).val())) {
                        $('#email-cross').show();
                        $('#email-tick').hide();

                        $(".email-err").html("Invalid Email Format");
                    } else {
                        $('#email-cross').hide();
                        $('#email-tick').show();

                        $(".email-err").html("");
                    }
                });
                $("#pass").on("keyup", function() {
                    function validatePwd($pwd) {
                        var pwdReg =
                            /^.*(?=.*[a-zA-Z])(?=.*[0-7])(?=.*[\d\x])(?=.*[@$!]).*$/;
                        return pwdReg.test($pwd);
                    }
                    if ($(this).val() === "") {
                        $('#pass-cross').show();
                        $('#pass-tick').hide();

                        $(".pass-err").html("Password field cannot be NULL");
                    } else if (!validatePwd($(this).val())) {
                        $('#pass-cross').show();
                        $('#pass-tick').hide();

                        $(".pass-err").html(
                            "Password must contain at least 8 characters 1 upppercase, 1 lowercase and special character"
                        );
                    } else {
                        $('#pass-cross').hide();
                        $('#pass-tick').show();

                        $(".pass-err").html("");
                    }
                });
                $('#cpass').on('keyup', function() {
                    if ($(this).val() !== $('#pass').val()) {
                        $('#cpass-cross').show();
                        $('#cpass-tick').hide();

                        $(".cpass-err").html("Confirm Password field must match");
                    } else {
                        $('#cpass-cross').hide();
                        $('#cpass-tick').show();

                        $(".cpass-err").html("");
                    }
                });
            });
            $('#eye').click(function() {
            if ($(this).hasClass('fa-eye-slash')) {
                $(this).removeClass('fa-eye-slash');
                $(this).addClass('fa-eye');
                $('#pass').attr('type', 'text')
            } else {
                $(this).removeClass('fa-eye');
                $(this).addClass('fa-eye-slash');
                $('#pass').attr('type', 'password')
            }
        })
            $('#ceye').click(function() {
            if ($(this).hasClass('fa-eye-slash')) {
                $(this).removeClass('fa-eye-slash');
                $(this).addClass('fa-eye');
                $('#cpass').attr('type', 'text')
            } else {
                $(this).removeClass('fa-eye');
                $(this).addClass('fa-eye-slash');
                $('#cpass').attr('type', 'password')
            }
        })
        </script>
    </x-auth-card>
</x-guest-layout>