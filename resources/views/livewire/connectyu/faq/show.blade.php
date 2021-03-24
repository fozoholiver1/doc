<section class="text-gray-900 body-font  bg-green-400 ">
    <div class="container px-lg-8 mx-auto  pt-2 lg:px-4  pb-5">
        <div class="flex flex-col w-full mb-12 text-left lg:text-center ">

            <h1 class="mb-6 text-2xl font-semibold tracking-tighter text-black sm:text-4xl title-font">
                ConnectYu FAQ page
            </h1>
            <p class="mx-auto text-base font-medium leading-relaxed text-green-900 lg:w-2/3">
                search for Frequently Asked Question in the box below in the box below EG. How to create a blog post
            </p>
            <div class="flex items-end justify-center w-full  mt-3 lg:w-full">
                <div class="relative px-4 w-full mr-lg-4 text-left lg:w-full md:w-full">
                    <input type="text" id="hero-field" name="hero-field" wire:model="search"
                           class="flex-grow w-full  py-2 mb-4 mr-4 text-base text-black-900 transition duration-1000
                           ease-in-out transform rounded-lg bg-white-300
              focus:outline-none focus:border-purple-500 sm:mb-0 focus:bg-white
              focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2"
                           placeholder="enter you topic here">
                </div>

            </div>
        </div>
        <div class="w-full my-4">
            @foreach($faqs as $faq)
                <div x-data={show:false} class="rounded-sm flex flex-col ">
                    <div class="border border-b-0 bg-green-200 px-lg-10 py-2 px-2 flex w-full" id="headingOne">
                        <div @click="show=!show" class="focus:outline-none shadow cursor-pointer inline-block text-black-900
                              hover:text-black flex border font-bold border-gray-400 rounded p-2 pl-3 pr-1 bg-green-300 w-full"
                             type="button">
                            {{$faq->question}}
                        </div>
                        @auth()
                            <button onclick="confirm('Confirm submission?') "
                                    wire:click="destroy({{$faq->id}})"
                                    class="focus:outline-none shadow cursor-pointer inline-block text-black-900
                                     hover:text-black flex border border-gray-400 rounded p-2 pl-3 pr-1 bg-green-500"
                                    type="butshoton">
                                Delete
                            </button>

                            <a href="/faqs/{{$faq->id}}">
                                <button class="focus:outline-none shadow cursor-pointer inline-block text-black-900
                                     hover:text-black flex border border-gray-400 rounded p-2 pl-3 pr-1 bg-green-500"
                                        type="button">
                                    edit
                                </button>
                            </a>
                        @endauth
                    </div>
                    <div x-show="show" class="border border-b-0  bg-green-100 " wire:ignore>
                        {!! $faq->trixRichText->first()->content !!}

                    </div>
                </div>
            @endforeach
        </div>

    {{$faqs->links()}}
    </div>
    </div>
</section>
