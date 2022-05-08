@extends('layouts.app')

@section('content')
    <div class="flex flex-col w-full border-t border-t-gray-500 items-center">
        <div class="mt-12">
            <p class="text-3xl font-bold">Create your DM account</p>
        </div>

        <div class="mt-12 w-1/3">
            <form action="{{route('user.create')}}" method="post" class="flex flex-col border border-2 border-gray-500 p-2 rounded-lg font-bold">
                @csrf
                <label for="name"></label>
                <input type="text" name="name" id="name" placeholder="Name" class="bg-gray-200 text-xl h-10 rounded-lg m-3 p-2 mt-4">
                @error('name')
                <p class="text-xl text-red-400">{{$message}}</p>
                @enderror

                <label for="email"></label>
                <input type="text" name="email" id="email" placeholder="Email" class="bg-gray-200 text-xl h-10 rounded-lg m-3 p-2">
                @error('email')
                <p class="text-xl text-red-400">{{$message}}</p>
                @enderror


                <label for="password"></label>
                <input type="password" name="password" id="password" placeholder="Password" class="bg-gray-200 text-xl h-10 rounded-lg m-3 p-2">
                @error('password')
                <p class="text-xl text-red-400">{{$message}}</p>
                @enderror


                <label for="confirmation"></label>
                <input type="password" name="confirmation" id="confirmation" placeholder="Confirm Your Password" class="bg-gray-200 text-xl h-10 rounded-lg m-3 p-2">
                @error('confirmation')
                <p class="text-xl text-red-400">{{$message}}</p>
                @enderror

                <a href="{{route('user.login.page')}}" class="text-base underline relative left-1/2">Already Have An Account?</a>

                <button type="submit" class="mt-6 text-xl rounded-lg bg-gray-200 p-4 py-2 font-bold hover:bg-gray-400 hover:text-white">Submit</button>
            </form>
        </div>

    </div>
@endsection
