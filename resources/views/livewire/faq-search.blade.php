<div class="flex flex-col w-full mb-12 text-left lg:text-center ">

    <h1 class="mb-6 text-2xl font-semibold tracking-tighter text-black sm:text-4xl title-font">
        ConnectYu FAQ page
    </h1>
    <p class="mx-auto text-base font-medium leading-relaxed text-green-900 lg:w-2/3">
        search for your question in the box below in the box below EG. How to create a blog post
    </p>
    <div class="flex items-end justify-center w-full mx-auto mt-3 lg:w-1/2">
        <div class="relative w-100 mr-4 text-left lg:w-full xl:w-1/2 md:w-full">
            <input type="text" id="hero-field" name="hero-field" wire:model="search"
                   class="flex-grow w-full px-4 py-2 mb-4 mr-4 text-base text-black-900 transition duration-1000
                           ease-in-out transform rounded-lg bg-green-200
                                  focus:outline-none focus:border-purple-500 sm:mb-0 focus:bg-white
                          focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2"
                   placeholder="enter you topic here">
        </div>

    </div>
</div>
<div class="w-full my-4">
    @foreach($faqs as $faq)
        <ul x-data={show:false} class="rounded-sm flex flex-col ">
            <div class="border border-b-0 bg-green-200 px-10 py-2 flex" id="headingOne">
                <div @click="show=!show" class="focus:outline-none shadow cursor-pointer delay-700 inline-block text-black-900
                    hover:text-black flex border border-gray-400 rounded p-2 pl-3 pr-1 bg-green-500"
                     type="button">
                    {{$faq->question}}
                </div>
                @auth()
                    <button onclick="confirm('Confirm submission?') "
                            wire:click="destroy({{$faq->id}})"
                            class="focus:outline-none shadow cursor-pointer inline-block text-black-900
                    hover:text-black flex border border-gray-400 rounded p-2 pl-3 pr-1 bg-green-500"
                            type="button">
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
            <div x-show="show" class="border border-b-0 ">
                @trix($faq, 'answer' ,$config = ['hideToolbar' =>'true'])

            </div>
        </ul>

    @endforeach
</div>
</div>
