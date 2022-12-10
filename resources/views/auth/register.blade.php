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
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                <br>
                <span class="text-danger name-err"></span>
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                <br>
                <span class="text-danger email-err"></span>
            </div>

            <!-- Profile Image -->
            <div class="mt-4">
                <x-input-label for="profile_pic" :value="__('Profile Pic')" />
                <x-text-input id="image" class="block mt-1 w-full" type="file" name="image" :value="old('image')" required />
                <x-input-error :messages="$errors->get('image')" class="mt-2" />
                <br>
                <span class="text-danger pic-err"></span>

                <img class="mt-3" src="" width="60px" height="60px" alt="" id="addPic">
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="pass" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                <br>
                <span class="text-danger pass-err"></span>
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="cpass" class="block mt-1 w-full" type="password" name="password_confirmation" required />

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
                // alert('asasass')
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
                    $("#addPic").hide();

                        $(".pic-err").html(
                            "Only formats are allowed : " + fileExtension.join(", ")
                        );
                    } else {
                        $(".pic-err").html(" ");
                    }
                });
                // alert('assasa')
                $("#name").on("keyup", function() {
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
                $("#pass").on("keyup", function() {
                    function validatePwd($pwd) {
                        var pwdReg =
                            /^.*(?=.*[a-zA-Z])(?=.*[0-7])(?=.*[\d\x])(?=.*[@$!]).*$/;
                        return pwdReg.test($pwd);
                    }
                    if ($(this).val() === "") {
                        $(".pass-err").html("Password field cannot be NULL");
                    } else if (!validatePwd($(this).val())) {
                        $(".pass-err").html(
                            "Password must contain at least 8 characters 1 upppercase, 1 lowercase and special character"
                        );
                    } else {
                        $(".pass-err").html("");
                    }
                });
                $('#cpass').on('keyup', function() {
                    if ($(this).val() !== $('#pass').val()) {
                        $(".cpass-err").html("Confirm Password field must match");
                    } else {
                        $(".cpass-err").html("");
                    }
                });
            });
        </script>
    </x-auth-card>
</x-guest-layout>