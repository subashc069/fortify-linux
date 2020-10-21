@extends('auth.template')

@section('content')
<div class="w-full max-w-xs mx-auto">
    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{ route('password.update') }}" method="POST">
        @csrf
        <input type="hidden" name="token" value="{{ $request->route('token') }}">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                Username
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" type="text" placeholder="email">
            @error('email')
               <p class="text-red-500 text-xs italic"><strong>{{ $message }}</strong></p>
            @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Password
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" name="password" type="password" placeholder="**************">
            @error('password')
               <p class="text-red-500 text-xs italic"><strong>{{ $message }}</strong></p>
            @enderror
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password_confirmation">
                Confirm Password
            </label>
            <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password_confirmation" name="password_confirmation" type="password" placeholder="******************">
            <p class="text-red-500 text-xs italic">Confirm Your Password</p>
            @error('password_confirmation')
                <p class="text-red-500 text-xs italic"><strong>{{ $message }}</strong></p>
            @enderror
        </div>
        <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Reset Password
            </button>
        </div>
    </form>
    <p class="text-center text-gray-500 text-xs">
        &copy;2020 Acme Corp. All rights reserved.
    </p>
</div>
@endsection