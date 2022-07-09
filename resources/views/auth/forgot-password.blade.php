<x-guest-layout>
    {{-- <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Email Password Reset Link') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card> --}}
    <section class="padding-y bg-light">
        <div class="container">
            <!-- =========== COMPONENT LOGIN 1=========== -->
            <div class="card mx-auto" style="max-width: 500px;">
                <div class="card-body">
                    <div class="mb-4 text-sm text-gray-600">
                        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                    </div>

                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif

                    <x-jet-validation-errors class="mb-4 status-error" />

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="mb-3"> <label class="form-label">{{ __('Email') }}</label>
                            <input class="form-control" placeholder="example@mail.com" type="email" name="email" :value="old('email')" required autofocus />
                        </div>
                        <!-- col end.// -->
                        <button class="btn w-100 btn-primary mb-3" type="submit"> {{ __('Email Password Reset Link') }} </button>
                    </form>
                    <!-- form end.// -->
                </div>
                <!-- card-body end.// -->
            </div>
            <!-- card end.// -->
        </div>
    </section>
</x-guest-layout>
