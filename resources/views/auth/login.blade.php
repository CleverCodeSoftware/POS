<x-guest-layout>
    <x-auth-card>
        <!-- <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot> -->

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="p-3">
                <h2 class="mb-2">Iniciar sesión</h2>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="floating-label form-group">
                            <input class="floating-input form-control" type="text" placeholder=" " 
                            name="username" :value="old('username')" style="height:55px;" required autofocus>
                            <x-label for="username" :value="__('Username')"/>
                            <!-- <x-input id="email" class="floating-input form-control" type="email" name="email" :value="old('email')" required autofocus /> -->
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="floating-label form-group">
                            <input class="floating-input form-control" type="password" placeholder=" "
                                style="height:55px;" type="password"
                                name="password"
                                required autocomplete="current-password">
                            <label>Contraseña</label>
                        </div>
                    </div>
                    <div class="col-lg-12" >
                        <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" class="custom-control-input" 
                            id="remember_me"  name="remember" style="z-index: 99999;">
                            <label class="custom-control-label control-label-1" 
                            for="remember"
                            style="z-index: 99999;">Recuérdame</label>
                        </div>
                    </div>
                    <!-- <div class="col-lg-6">
                        <a href="auth-recoverpw.html" class="text-primary float-right">Forgot Password?</a>
                    </div> -->
                </div>
                <!-- <button type="submit" class="btn btn-primary">Ingresar</button>                                    -->
            </div>
            <!-- Email Address -->
            <!-- <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div> -->

            <!-- Password -->
            <!-- <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div> -->

            <!-- Remember Me -->
            <!-- <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div> -->

            <!-- <div class="flex items-center justify-end mt-4"> -->
                <!-- @if (Route::has('password.request')) -->
                    <!-- <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}"> -->
                        <!-- {{ __('Forgot your password?') }} -->
                    <!-- </a> -->
                <!-- @endif -->

            <x-button class="ml-3">
                {{ __('Ingresar') }}
            </x-button>
            <!-- </div> -->
        </form>
    </x-auth-card>
</x-guest-layout>
