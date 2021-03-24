

<section class="text-gray-900 body-font  ">
    <div class="container  mx-auto pt-2 px-lg-4  bg-green-400 pb-5  ">
       <div class=" p-3">
           <div class="flex flex-col w-full mb-12 text-left lg:text-center ">

               <h1 class="mb-6 text-2xl font-semibold tracking-tighter text-black sm:text-4xl title-font">
                   ConnectYu Videos page
               </h1>
               <p class="mx-auto text-base font-monospace font-weight-bold leading-relaxed text-yellow-900 lg:w-2/3">
                   search for your video in the box below EG. How to create a blog post
               </p>
               <div class="flex items-end justify-center w-full mx-auto mt-3 ">
                   <div class=" relative px-2 w-full mr-lg-4 text-left lg:w-full md:w-full">
                       <input type="text" id="hero-field" name="hero-field" wire:model="search"
                              class="flex-grow w-full px-lg-4 py-2 mb-3 mr-lg-4 text-base text-black-900 transition duration-1000
                           ease-in-out transform rounded-lg bg-white-300
              focus:outline-none focus:border-purple-500 sm:mb-0 focus:bg-white
              focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2"
                              placeholder="enter you topic here">
                   </div>

               </div>
           </div>
           <div class="w-full my-lg-4 font-bold ">
               @foreach($videos as $video)
                   <div x-data={show:false} class="rounded-sm flex flex-col ">
                       <div class="border border-b-0 bg-green-200 px-lg-10 py-2 px-2 flex" id="headingOne">
                           <div @click="show=!show" class="focus:outline-none shadow cursor-pointer inline-block font-weight-bold text-black-900
                             hover:text-black flex border border-white-400 rounded p-2 pl-3 pr-1 bg-green-300 w-full"
                                type="button">
                               {{$video->title}}
                           </div>
                           @auth()
                               <button onclick="confirm('Confirm submission?') "
                                       wire:click="destroy({{$video->id}})"
                                       class="focus:outline-none shadow cursor-pointer inline-block text-black-900
                                    hover:text-black flex border border-gray-400 rounded p-2 pl-3 pr-1 bg-green-500"
                                       type="button">
                                   Delete
                               </button>


                           @endauth
                       </div>
                       <div x-show="show" class="border border-b-0 bg-green-100"  wire:ignore>
                           <div class="h-25">
                               <x-embed url="{{$video->video}}" aspect-ratio="16:9" />
                           </div>

                       </div>
                   </div>

               @endforeach
           </div>
       </div>
       </div>
    </div>
</section>
