@extends('auth.template')

@section('content')
<div class="w-full max-w-xs mx-auto">
    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{ route('password.email') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                Email
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" type="text" placeholder="email">
            @error('email')
               <p class="text-red-500 text-xs italic"><strong>{{ $message }}</strong></p>
            @enderror
        </div>
        
        <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Send Password Reset Link
            </button>
        </div>
    </form>
    <p class="text-center text-gray-500 text-xs">
        &copy;2020 Acme Corp. All rights reserved.
    </p>
</div>
@endsection