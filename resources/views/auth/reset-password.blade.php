<x-guest-layout>
    {{-- <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Reset Password') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card> --}}
    <section class="padding-y bg-light">
        <div class="container">
            <!-- ================ COMPONENT SIGNUP ================= -->
            <div class="card card mx-auto" style="max-width: 500px;">
                <article class="card-body">
                    <x-jet-validation-errors class="mb-4 status_error" />

                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $request->route('token') }}">
                        <div class="row gx-3">
                            <div class="col mb-3"><x-jet-label for="email" class="form-label" value="{{ __('Email') }}" />
                            <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email', $request->email)" required autofocus />
                            </div>
                        </div>
                        {{-- <div class="row gx-3">
                            <div class="col mb-3"> <label class="form-label">Email</label>
                                <input   id="email" class="form-control" type="email" name="email" :value="old('email', $request->email)" required autofocus />
                            </div>
                        </div> --}}
                        <div class="row gx-3">
                            <div class="col-6 mb-3"> <label class="form-label">Password</label>
                                <input class="form-control" placeholder="********" type="password" name="password" required autocomplete="new-password" />
                            </div>
                            <div class="col-6 mb-3"> <label class="form-label">Confirm password</label>
                                <input class="form-control" placeholder="********" type="password" name="password_confirmation" required autocomplete="new-password" />
                            </div>
                        </div>
                        <!-- row end.// -->

                        <button class="btn btn-primary w-100" type="submit">{{ __('Reset Password') }}</button>
                    </form>
                    <!-- form end.// -->
                </article>
                <!-- card-body end .// -->
            </div>
            <!-- card end.// -->
            <!-- ============== COMPONENT SIGNUP END.// ============== -->
        </div>
    </section>
</x-guest-layout>
