



<div class=" items-end justify-center w-full mx-auto mt-str lg:w-1/2">
    <div class="relative w-full mr-4 text-left lg:w-full xl:w-1/2 md:w-full">
        <input type="text" id="hero-field" name="hero-field"
               wire:model="search"
               placeholder=" your connectyu name"
               class="flex-grow w-full px-4 py-2 mb-4 mr-4 text-base
                           text-purple-700 bg-gray-100 border border-gray-400
                           rounded-lg focus:outline-none focus:border-purple-500
                           sm:mb-0 focus:bg-white">
    </div>

    @if($search)
        @foreach($strikes as $strike)
            <a href="https://www.connectyu.com/{{$strike->name}}">
                <ul class="flex items-end justify-center w-full mx-auto mt-4 lg:w-1/2  ">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center ">
                                <div class="flex-shrink-0 h-10 w-10">
                                    <img class="h-10 w-10 rounded-full"
                                         src="{{$strike->image}}"
                                         alt="">
                                </div>
                                <div class="ml-5">

                                    <div class="texfont-medium text-gray-900 font-weight-bolder ">
                                        {{$strike->name}}

                                    </div>
                                </div>
                            </div>
                        </td>


                        <td class="px-4 py-4 whitespace-nowrap text-sm text-red-900">
                            <div class=" font-medium text-red-900 ml-5 sm:text-4xl">
                                @if($strike->value ===1)
                                 x
                                @elseif($strike->value===2 )
                                    x x
                                @else
                                    xxx
                                    @endif
                            </div>
                        </td>
                    </tr>

                </ul>
            </a>
        @endforeach
    @endif
</div>
