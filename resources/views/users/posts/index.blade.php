@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="w-8/12 bg-white p-6 rounded-lg">
    <h1 class="font-bold">User's info</h1>
        <ul>
            <li>id: {{ $user->id }}</li>
            <li>name: {{ $user->name }}</li>
            <li>username: {{ $user->username }}</li>
            <li>email: {{ $user->email }}</li>
        </ul>

        <h1 class="font-bold mt-5">User's posts</h1>
        <ul>
            <li>{{ $user->posts }}
            </li>
        </ul>

    </div>
</div>
@endsection
