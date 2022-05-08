<div class="p-0 m-0 w-full flex justify-between m-5 h-auto sticky top-0 w-full z-50 bg-white">
    <a href="/">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mt-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path d="M12 14l9-5-9-5-9 5 9 5z" />
            <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
        </svg>
    </a>

    <div class="flex m-2 font-bold mt-5">
        <p class="m-4 mt-0 p-2 hover:bg-gray-200 rounded-lg">Categories</p>
        <p class="m-4 mt-0 p-2 hover:bg-gray-200 rounded-lg">Deals</p>
        <p class="m-4 mt-0 p-2 hover:bg-gray-200 rounded-lg">What's New</p>
        <p class="m-4 mt-0 p-2 hover:bg-gray-200 rounded-lg">Pickup & Delivery</p>
    </div>

    <!--搜索框-->
    <div class="h-12 m-3 w-1/4 mt-4">
        <form class="w-full h-full rounded-lg m-0.5 p-1 bg-gray-200">
            <input type="text" placeholder="Search" class="h-full w-full bg-gray-200 border-none">
        </form>
    </div>


    @auth
        <p class="mt-7 font-bold">Welcome Back!<span class="ml-2">{{auth()->user()->name}}</span></p>
        <div class="group relative">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 m-2 mt-6 mr-16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
            </div>

            <div class="hidden group-hover:block bg-gray-200 absolute">
                <a href="#"><p class="hover:bg-gray-300 p-2 mt-1 border-b border-gray-800">Address</p></a>
                <a href="{{route('user.logout')}}"><p class="hover:bg-gray-300 p-2 mt-1 border-b border-gray-800">Log Out</p></a>
            </div>
        </div>

    @else
        <a href="{{route('user.register.page')}}">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 m-2 mt-6 mr-16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg>
        </a>
    @endauth


</div>
