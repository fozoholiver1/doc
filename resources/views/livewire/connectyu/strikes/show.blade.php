@guest
    <section class="text-green-700 body-font bg-green-100">
        <div class="container px-5 mx-auto pt-3 lg:px-4">
            <div class="flex flex-col w-full mb-12 text-left lg:text-center">

                <h1 class="mb-6 text-2xl font-semibold tracking-tighter text-green-800 sm:text-6xl title-font">
                    Enter your
                    <br class="">
                    name in the box below.
                </h1>
                <p class="mx-auto text-base font-medium leading-relaxed text-green-700 lg:w-2/3">
                    the result will have your name with the number of strikes by the side .</p>
                <livewire:strike-search/>
            </div>
        </div>
        </div>
    </section>
@endguest
@auth
    <section class="text-gray-700 body-font bg-white-500">
        <div class="container px-8 mx-auto pt-4 lg:px-4">
            <div class="flex flex-col w-full mx-auto mb-1 text-left lg:w-2/3 lg:text-center">
                <h1 class="mb-2 text-2xl font-semibold tracking-tighter text-green-800 sm:text-5xl title-font">
                    create
                    <br class="md:hidden">
                    a new strike here
                </h1>

            </div>
        </div>
        <livewire:forms.create-strike/>
    </section>




<livewire:strike-table/>
@endauth
