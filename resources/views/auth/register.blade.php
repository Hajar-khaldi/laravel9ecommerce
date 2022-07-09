<x-guest-layout>
    {{-- <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card> --}}
    <section class="padding-y bg-light">
        <div class="container">
            <!-- ================ COMPONENT SIGNUP ================= -->
            <div class="card card mx-auto" style="max-width: 500px;">
                <article class="card-body">
                    <h4 class="mb-4">Create account</h4>
                    <x-jet-validation-errors class="mb-4 status_error" />

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row gx-3">
                            <div class="col mb-4"> <label class="form-label">Name</label>
                                <input type="text" name="name" :value="old('name')" required autofocus autocomplete="name" class="form-control" placeholder="">
                            </div>
                            <!-- col end.// -->
                            {{-- <div class="col mb-4"> <label class="form-label">Last name</label>
                                <input type="text" class="form-control" placeholder="">
                            </div> --}}
                            <!-- col end.// -->
                        </div>
                        <!-- row end.// -->
                        <div class="row gx-3">
                            <div class="col mb-3"> <label class="form-label">Email</label>
                                <input  type="email" name="email" :value="old('email')" required class="form-control" placeholder="example@mail.com">
                            </div>
                        </div>
                            <!-- col end.// -->
                            {{-- <div class="col-6 mb-3"> <label class="form-label">Phone</label>
                                <input type="text" class="form-control" placeholder="+2126545343340">
                            </div> --}}
                            <!-- col end.// -->
                        <div class="row gx-3">
                            <div class="col-6 mb-3"> <label class="form-label">Password</label>
                                <input class="form-control" placeholder="********" type="password" name="password" required autocomplete="new-password" />
                            </div>
                            <div class="col-6 mb-3"> <label class="form-label">Confirm password</label>
                                <input class="form-control" placeholder="********" type="password" name="password_confirmation" required autocomplete="new-password" />
                            </div>
                        </div>
                        <!-- row end.// -->

                        <button class="btn btn-primary w-100" type="submit">Register now</button>
                        <div class="row mt-3 mb-4 align-items-center">
                            <div class="col">
                                <label class="form-check me-auto">
                                    <input class="form-check-input" type="checkbox" value="">
                                    <span class="form-check-label"> I agree with Terms and Conditions </span>
                                </label>
                            </div>
                        </div>
                    </form>
                    <!-- form end.// -->
                    <hr>
                    <p class="mb-0">Already have an account? <a href="{{ url('login') }}">Sign in</a></p>
                </article>
                <!-- card-body end .// -->
            </div>
            <!-- card end.// -->
            <!-- ============== COMPONENT SIGNUP END.// ============== -->
        </div>
    </section>
</x-guest-layout>
