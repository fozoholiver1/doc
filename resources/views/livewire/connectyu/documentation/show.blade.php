<section class="text-gray-900 body-font pb-5 ">
    <div class="container mx-auto pt-2 lg:px-4  bg-green-400">
        <div class="flex flex-col w-full py-lg-5 mb-5 text-left lg:text-center ">

            <h1 class="mb-6 px-2 text-3xl font-semibold tracking-tighter text-black sm:text-4xl title-font">
                ConnectYu Tutorial page
            </h1>
            <p class="mx-auto px-2 text-base font-weight-bold  leading-relaxed text-black-900 lg:w-1/2">
                search for your tutorial in the box below EG. How to create a blog post
            </p>
            <div class="flex items-end justify-center w-full  mt-3 lg:w-full py-lg-5">
                <div class="relative px-4 w-full mr-lg-4 text-left lg:w-full md:w-full">
                    <input type="text" id="hero-field" name="hero-field" wire:model="search"
                           class="flex-grow w-full px-lg-4 py-2 mb-4 mr-lg-4 text-base text-black-900 transition duration-1000
                           ease-in-out transform rounded-lg bg-white-300
              focus:outline-none focus:border-purple-500 sm:mb-0 focus:bg-white
              focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2"
                           placeholder="enter you topic here">
                </div>

            </div>
        </div>
        <div class="w-full my-4 "    id="scene">
            @foreach($documentations as $documentation)
                <div x-data={show:false} class="rounded-sm flex flex-col " data-depth="0.2">
                    <div class="border border-b-0  bg-green-200 px-lg-10 py-2 px-2 flex" id="headingOne">
                        <div @click="show=!show" class="focus:outline-none shadow cursor-pointer inline-block font-weight-bold text-black-900
                             hover:text-black flex border border-white-400 rounded p-2 pl-3 pr-1 bg-green-300 w-full font-bold "
                             type="button" data-depth="0.6">
                            {{$documentation->topic}}
                        </div>
                        @auth()
                            <button onclick="confirm('Confirm submission?') "
                                    wire:click="destroy({{$documentation->id}})"
                                    class="focus:outline-none shadow cursor-pointer inline-block text-black-900
                                    hover:text-black flex border border-gray-400 rounded p-2 pl-3 pr-1 bg-green-500"
                                    type="button">
                                Delete
                            </button>

                            <a href="/documentations/{{$documentation->id}}">
                                <button class="focus:outline-none shadow cursor-pointer inline-block text-black-900
                                    hover:text-black flex border border-gray-400 rounded p-2 pl-3 pr-1 bg-green-500"
                                        type="button">
                                    edit
                                </button>
                            </a>
                        @endauth
                    </div>
                    <div x-show="show" class="border border-b-0 bg-green-50 text-black-900  " wire:ignore>
                        {!!$documentation->trixRichText->first()->content!!}
                    </div>
                </div>

            @endforeach
        </div>
       <div wire:ignore >
           {{ $documentations->links() }}
       </div>
    </div>
    </div>
</section>

