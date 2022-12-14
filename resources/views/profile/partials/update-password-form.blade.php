<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="current_password" :value="__('Current Password')" />
            <div class="d-flex">
                <x-text-input id="current_password" name="current_password" type="password" class="mt-1 block w-full current_password" autocomplete="current-password" />

                <i class="fa-sharp fa-solid fa-eye-slash mt-3 fs-6" style="margin-left: -30px;" id="currentPass-eye"></i>

                <i class="fa fa-circle-check text-success mt-2" style="font-size: 25px; margin-left: 20px; display: none;" id="currentPass-tick"></i>
                <i class="fa-solid fa-circle-xmark text-danger mt-2" style="font-size: 25px; margin-left: 20px; display: none" id="currentPass-cross"></i>
            </div>
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
            <span class="text-danger current_pass_err"></span>

        </div>

        <div>
            <x-input-label for="password" :value="__('New Password')" />
            <div class="d-flex">
                <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
                <i class="fa-sharp fa-solid fa-eye-slash mt-3 fs-6" style="margin-left: -30px;" id="pass-eye"></i>

                <i class="fa fa-circle-check text-success mt-2" style="font-size: 25px; margin-left: 20px; display: none;" id="pass-tick"></i>
                <i class="fa-solid fa-circle-xmark text-danger mt-2" style="font-size: 25px; margin-left: 20px; display: none" id="pass-cross"></i>
            </div>
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
            <span class="text-danger pass-err"></span>

        </div>

        <div>
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <div class="d-flex">
                <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
                <i class="fa-sharp fa-solid fa-eye-slash mt-3 fs-6" style="margin-left: -30px;" id="cpass-eye"></i>

                <i class="fa fa-circle-check text-success mt-2" style="font-size: 25px; margin-left: 20px; display: none;" id="cpass-tick"></i>
                <i class="fa-solid fa-circle-xmark text-danger mt-2" style="font-size: 25px; margin-left: 20px; display: none" id="cpass-cross"></i>
            </div>
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
            <span class="text-danger cpass-err"></span>

        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'password-updated')
            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="text-sm text-gray-600 dark:text-gray-400">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
    <script>
        $(document).ready(function(){
            $('#currentPass-eye').click(function() {
            if ($(this).hasClass('fa-eye-slash')) {
                $(this).removeClass('fa-eye-slash');
                $(this).addClass('fa-eye');
                $('#current_password').attr('type', 'text')
            } else {
                $(this).removeClass('fa-eye');
                $(this).addClass('fa-eye-slash');
                $('#current_password').attr('type', 'password')
            }
        })
        $('#pass-eye').click(function() {
            if ($(this).hasClass('fa-eye-slash')) {
                $(this).removeClass('fa-eye-slash');
                $(this).addClass('fa-eye');
                $('#password').attr('type', 'text')
            } else {
                $(this).removeClass('fa-eye');
                $(this).addClass('fa-eye-slash');
                $('#password').attr('type', 'password')
            }
        })
        $('#cpass-eye').click(function() {
            if ($(this).hasClass('fa-eye-slash')) {
                $(this).removeClass('fa-eye-slash');
                $(this).addClass('fa-eye');
                $('#password_confirmation').attr('type', 'text')
            } else {
                $(this).removeClass('fa-eye');
                $(this).addClass('fa-eye-slash');
                $('#password_confirmation').attr('type', 'password')
            }
        })
        })
    </script>
</section>