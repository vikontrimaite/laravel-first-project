@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="w-6/12 bg-white p-6 rounded-lg">

        <!-- flashing message / temporarly message -->
        @if (session()->has('status'))
            <div class="bg-red-600 border-2 w-full p-4 rounder-lg mb-6 text-white text-center">
                {{ session('status') }}
            </div>
        @endif

        <form action="{{ route('login') }}" method="post">
            @csrf

            <div class="mb-4">
                <label for="email" class="">Email</label>
                <input type="text" name="email" id="email" placeholder="John@Doe.com"
                    class="bg-gray-100 border-2 w-full p-4 rounder-lg @error('name') border-red-500 @enderror"
                    value="{{ old('email') }}">

                @error('email')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="">Password</label>
                <input type="password" name="password" id="password" placeholder="secretpassword"
                    class="bg-gray-100 border-2 w-full p-4 rounder-lg @error('name') border-red-500 @enderror" value="">

                @error('password')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-4">
                    <div class="flex items-center">
                        <input type="checkbox" name="remember" id="remember" class="mr-2">
                        <label for="remember">Remember me</label>
                    </div>
                </div>

            <div>
                <button type="submit"
                    class="bg-yellow-500 text-white px-4 py-3 rounded font-medium w-full">Login</button>
            </div>
        </form>
    </div>
</div>
@endsection
