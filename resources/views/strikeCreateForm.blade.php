


<section class="text-gray-700 body-font">
    <div class="container px-8 mx-auto pt-36 lg:px-4">
        <div class="flex flex-col w-full mx-auto mb-12 text-left lg:w-2/3 lg:text-center">
            <h1 class="mb-6 text-2xl font-semibold tracking-tighter text-blue-800 sm:text-5xl title-font">
                create
                <br class="md:hidden">
                a new strike here
            </h1>
            <p class="mx-auto text-base font-medium leading-relaxed text-gray-700 lg:w-2/3">
                The name field is the user's connectyu username and the users image is the link of their connectyu
                profile image
            </p>
        </div>

        <form wire:submit.prevent="createstrikes"
              class="flex flex-col w-full px-0 mx-auto lg:w-2/3 sm:flex-row md:px-8">
            <input
                class="flex-grow w-full px-4 py-2 mb-4 mr-4 text-base text-purple-700 bg-gray-100 border border-gray-400 rounded-lg
                   focus:outline-none focus:border-purple-500 sm:mb-0 focus:bg-white"
                placeholder="username" type="text"
                wire:model="name">
            @error('name') <span class="error">{{ $message }}</span> @enderror

            <input
                wire:model="value"
                class="flex-grow w-full px-4 py-2 mb-4 mr-4 text-base text-purple-700 bg-gray-100 border
                border-gray-400 rounded-lg focus:outline-none focus:border-purple-500 sm:mb-0 focus:bg-white"
                placeholder="Strike" type="number" min="1" max="3"
                required>
            @error('value') <span class="error">{{ $message }}</span> @enderror

            <input type="url"  wire:model="image"
                class="flex-grow w-full px-4 py-2 mb-4 mr-4 text-base text-purple-700 bg-gray-100 border border-gray-400
                 rounded-lg focus:outline-none focus:border-purple-500 sm:mb-0 focus:bg-white"
                placeholder="image link"  >
            @error('image') <span class="error">{{ $message }}</span> @enderror
            <button type="submit"
                    class="w-1/2 px-8 py-2 font-semibold text-white transition duration-500 ease-in-out transform
                    rounded-lg shadow-xl bg-gradient-to-r from-blue-700 hover:from-blue-600 to-blue-600 hover:to-blue-700
                     focus:shadow-outline focus:outline-none">
                save
            </button>
        </form>
    </div>
</section>

