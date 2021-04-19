@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="w-8/12 bg-white p-6 rounded-lg">
        <div>
            <h1 class="font-bold mb-2">HOME</h1>
            <p>Welcome to Posts page!</p>
            <p>This is a website created with Laravel where only registered users can make posts!</p>
        </div>
        <div class="mt-5">
            <p class="font-bold">
                Since you are here already, go ahead and explore it:
            </p>
            <ul>
                <li>Register a new user</li>
                <li>Login in to your account</li>
                <li>Make a new post</li>
                <li>Delete your post</li>
            </ul>

        </div>

    </div>
</div>
@endsection
