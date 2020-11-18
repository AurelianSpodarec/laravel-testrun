<nav class="flex items-center justify-between flex-wrap bg-teal-500 p-6">

        <div>
            <a href="" class="flex items-center flex-shrink-0 text-white mr-6">
                <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"></path></svg>
                <span class="font-semibold text-xl tracking-tight">Logo</span>
            </a>
        </div>
        <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
            <div class="text-sm lg:flex-grow">
            <a href="/" class="{{ Request::is('/') ? 'text-white' : 'text-teal-200' }}  block mt-4 lg:inline-block lg:mt-0  hover:text-white mr-4">
                Home
            </a>
            <a href="/rent" class="{{ Request::is('buildings') ? 'text-white' : 'text-teal-200' }} block mt-4 lg:inline-block lg:mt-0  hover:text-white mr-4">
                Rent
            </a>
            </div>
            <div>
                @if (Auth::guest())
                <a href="/login" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">
                    Login
                </a>
                <a href="/register" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">
                    Register
                </a>
                @else
                    <div>
                        Logged in as {{ Auth::user()->name }}
                    </div>
                @endif
            </div>
        </div>

</nav>
