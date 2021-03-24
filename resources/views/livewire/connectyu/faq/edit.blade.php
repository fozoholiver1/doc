<section class="text-gray-700 body-font bg-green-200">
    <div class="container px-8 py-2 mx-auto lg:px-4">
        <div class="flex flex-col w-full mb-2 text-left lg:text-center">

            <h1 class="mb-6 text-2xl font-semibold tracking-tighter text-black sm:text-5xl title-font">
                Create A
                <br class="md:hidden">
                Connectyu FAQ
            </h1>

            <form method="post" action="/faqs/{{$faq->id}}" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="w-full p-2">

                    <div class="w-full p-2">
                        <input type="text"
                               id="password" name="question" placeholder="topic of your tutorial"
                               value="{{$faq->topic}}"
                               class="w-full px-4 py-2 mr-4 text-base text-blue-700 bg-gray-100 border-transparent rounded-lg focus:border-gray-
                       500 focus:bg-white focus:ring-0">
                    </div>

                    <div>
                        <!-- top-most div don't attach livewire-->
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm text-xl font-bold mb-2" for="order">
                                Page Content
                            </label>
                            @trix($faq, 'answer')
                        </div>
                    </div>


                    <input type="submit"
                           class="w-full px-8 py-2 font-semibold text-white transition duration-500 ease-in-out transform bg-black rounded-lg hover:bg-gray-800 hover:to-black focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">
                </div>

            </form>
        </div>

    </div>

</section>

