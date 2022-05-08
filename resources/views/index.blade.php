@extends('layouts.app')

@section('content')
    <div class="w-5/6 relative left-1/12">

        <div class="p-0 m-0 w-full h-1/5 relative">
            <div class="group absolute top-1/4 left-12">
                <p class="font-bold text-6xl text-purple-900 group-hover:underline">There's still time</p>
                <p class="text-2xl group-hover:underline font-bold">to find the perfect gift for Mom</p>
            </div>
            <div>
                <img src="{{asset('img/bg1.webp')}}" alt="Image is missed">
            </div>
        </div>


        <div class="p-0 m-0 w-full h-3/5 relative">
            <div class="group absolute top-1/3 left-12">
                <p class="font-bold text-6xl text-purple-900 group-hover:underline">Make</p>
                <p class="font-bold text-6xl text-purple-900 group-hover:underline">Mom's day</p>
                <p class="text-2xl group-hover:underline font-bold">Explore gift ideas to celebrate</p>
                <p class="text-2xl group-hover:underline font-bold">the best mom ever</p>
            </div>
            <div>
                <img src="{{asset('img/bg2.webp')}}" alt="Image is missed">
            </div>
        </div>

    </div>
@endsection
