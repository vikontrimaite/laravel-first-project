@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="w-6/12 bg-white p-6 rounded-lg">
        <form action="{{ route('register') }}" method="post">
            @csrf 
            <!-- @csrf padaro, kad funkcija dd() veiktų prie register controller -->
            <div class="mb-4">
                <label for="name" class="sr-only">Name</label>
                <input type="text" name="name" id="name" placeholder="John Doe"
                    class="bg-gray-100 border-2 w-full p-4 rounder-lg @error('name') border-red-500 @enderror" value="{{ old('name') }}">

                    <!-- handle errors, if there is no input value or otherwise bad that is not completed as stated in RegisterController in store() func -->
                    <!-- aukščiau esantis @error('name') border-red-500 @enderror padaro, kad borderis būna raudonos spalvos, jei išmetamas error (nėra vardo) -->
                    <!-- mt = margin top -->
                    @error('name')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror

            </div>

            <div class="mb-4">
                <label for="username" class="sr-only">Username</label>
                <input type="text" name="username" id="username" placeholder="JohnCool"
                    class="bg-gray-100 border-2 w-full p-4 rounder-lg @error('name') border-red-500 @enderror" value="{{ old('username') }}">

                    @error('username')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
            </div>

            <div class="mb-4">
                <label for="email" class="sr-only">Email</label>
                <input type="text" name="email" id="email" placeholder="John@Doe.com"
                    class="bg-gray-100 border-2 w-full p-4 rounder-lg @error('name') border-red-500 @enderror" value="{{ old('email') }}">

                    @error('email')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="sr-only">Password</label>
                <input type="password" name="password" id="password" placeholder="secretpassword"
                    class="bg-gray-100 border-2 w-full p-4 rounder-lg @error('name') border-red-500 @enderror" value="">

                    @error('password')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="sr-only">Password again</label>
                <input type="password" name="password_confirmation" id="password_confirmation"
                    placeholder="secretpassword again" class="bg-gray-100 border-2 w-full p-4 rounder-lg @error('name') border-red-500 @enderror" value="">

                    @error('password_confirmation')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
            </div>

            <div>
                <button type="submit" class="bg-yellow-500 text-white px-4 py-3 rounded font-medium w-full">Register</button>
            </div>
        </form>
    </div>
</div>
@endsection
