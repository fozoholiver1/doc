

<div class="text-gray-700 bg-white body-font">
    <div class="flex flex-col flex-wrap p-5 mx-auto border-b md:items-center md:flex-row">
        <a href="/" class="pr-2 lg:pr-8 lg:px-6 focus:outline-none">
            <div class="inline-flex items-center">
                <div class="w-2 h-2 p-2 mr-2 rounded-full bg-gradient-to-tr from-cyan-400 to-lightBlue-500">
                </div>
                <img src="https://www.connectyu.com/themes/wondertag/img/icon.png" class="h-10 w-10 rounded-fullalt " alt="">
            </div>
        </a>
        <nav class="flex flex-wrap items-center justify-center text-base md:ml-auto ">
{{--            <a href="https://www.connectyu.com" class="mr-5 text-sm font-semibold text-gray-600 hover:text-gray-800">home </a>--}}
            <a href="/" class="mr-5 text-sm font-semibold text-gray-600 hover:text-gray-800"> Strike </a>
            <a href="/videos" class="mr-5 text-sm font-semibold text-gray-600 hover:text-gray-800">Videos </a>
            <a href="/faqs" class="mr-5 text-sm font-semibold text-gray-600 hover:text-gray-800">FAQs </a>
            <a href="/documents" class="mr-5 text-sm font-semibold text-gray-600 hover:text-gray-800">tutorials </a>
        @auth()
                <a href="/" class="mr-5 text-sm font-semibold text-gray-600 hover:text-gray-800">Create Strike </a>
                <a href="/videos/create" class="mr-5 text-sm font-semibold text-gray-600 hover:text-gray-800">Create Video </a>
                <a href="/documents/create" class="mr-5 text-sm font-semibold text-gray-600 hover:text-gray-800">create tutorials </a>
            <a href="/faqs/create" class="mr-5 text-sm font-semibold text-gray-600 hover:text-gray-800">create FAQ </a>
            @endauth
            <a href="http://connectyu.atwebpages.com/monetization.html#reference"
               class="mr-5 text-sm font-semibold text-gray-600 hover:text-gray-800">Monetization</a>
            <a href="https://www.connectyu.com/terms/about-us"
               class="mr-5 text-sm font-semibold text-gray-600 hover:text-gray-800">About</a>
        </nav>

        @if (Route::has('login'))

            @auth
                <a href="{{ url('/dashboard') }}">
                    <button
                        class="items-center px-8 py-2 font-semibold text-white transition duration-500
                                ease-in-out transform bg-black rounded-lg hover:bg-blueGray-900 focus:ring
                                 focus:outline-none">Dashboard
                </button>
                </a>
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                    this.closest('form').submit();">
                        {{ __('Logout') }}
                    </x-jet-responsive-nav-link>
                </form>
            @else
{{--                <a href="{{ route('login') }}">--}}
{{--                    <button--}}
{{--                        class="items-center px-8 py-2 font-semibold text-white transition duration-500--}}
{{--                                ease-in-out transform bg-black rounded-lg hover:bg-blueGray-900 focus:ring--}}
{{--                                focus:outline-none">Login--}}

{{--                    </button>--}}
{{--                </a>--}}
                {{--                                        @if (Route::has('register'))--}}
                {{--                    <a href="{{route('register')}}">--}}
                {{--                        <button--}}
                {{--                            class="items-center px-8 py-3 mt-4 font-semibold text-blue-700 transition duration-500 ease-in-out transform bg-white border rounded-lg lg:inline-flex focus:ring focus:outline-none">--}}
                {{--                            register--}}
                {{--                        </button>--}}
                {{--                    </a>--}}
                {{--                @endif--}}

            @endif

        @endif

    </div>
</div>



