<x-guest-layout>
    {{-- <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card> --}}
    <section class="padding-y bg-light">
        <div class="container">
            <!-- =========== COMPONENT LOGIN 1=========== -->
            <div class="card mx-auto" style="max-width: 500px;">
                <div class="card-body">
                    <x-jet-validation-errors class="mb-4 status_error" />
                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h4 class="mb-4">Sign in</h4>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3"> <label class="form-label">Email</label>
                            <input name="email" :value="old('email')" class="form-control" placeholder="ex. name@gmail.com" type="email" required autofocus />
                        </div>
                        <!-- col end.// -->
                        <div class="mb-3"> <label class="form-label">Password</label> <a class="float-end"
                                href="https://bootstrap-ecommerce.com/components.html#">Forgot?</a>
                            <input class="form-control" placeholder="********" name="password" type="password" required autocomplete="current-password" />
                        </div>
                        <!-- col end.// -->
                        <div class="mb-3"> <label class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" value="" checked="" />
                            <span class="form-check-label"> Remember </span> </label>
                        </div>
                        <button class="btn w-100 btn-primary mb-3" type="submit"> Sign in </button>
                    </form>
                    <!-- form end.// -->
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                    <p class="text-divider my-4">New to shop?</p> <a href="{{ url('register') }}"
                        class="btn w-100 btn-light">Create new account</a>
                </div>
                <!-- card-body end.// -->
            </div>
            <!-- card end.// -->
        </div>
    </section>

</x-guest-layout>
