<section class="text-gray-700 body-font bg-success">
    <div class="container px-8 py-2mx-auto lg:px-4">
        <div class="flex flex-col w-full mb-1 text-left lg:text-center">
            {{--header for the strikes dashboard --}}
            <h1 class="mb-6 text-2xl font-semibold tracking-tighter text-green sm:text-5xl title-font">
                Users
                <br class="md:hidden">
                Dashboard Edit Area.
            </h1>
            {{--            the search area for the admin dasshboard--}}
            <div class="flex items-end justify-center w-full mx-auto mt-4 lg:w-1/2 py-4">
                <div class="relative w-2/4 mb-2 mr-4 text-left lg:w-full xl:w-1/2 md:w-full">
                    <input type="text" id="hero-field" name="hero-field" placeholder=" search for name here "
                           class="flex-grow w-full px-4 py-2 mb-4 mr-4 text-base text-black transition
                               duration-1000 ease-in-out transform rounded-lg bg-green-200 focus:outline-none
                               focus:border-purple-500 sm:mb-0 focus:bg-white focus:shadow-outline focus:ring-2
                               ring-offset-current ring-offset-2"
                           wire:model="search">
                </div>
            </div>

            {{--            the admin dashboard table--}}
            <div class="flex flex-col ">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-green-100">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-weight-bolder text-gray-900 uppercase tracking-wider">
                                        Name
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-weight-bolder text-gray-900 uppercase tracking-wider">
                                        Email
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-weight-bolder text-gray-900 uppercase tracking-wider">
                                        Delete
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-weight-bolder text-gray-900 uppercase tracking-wider">
                                        Action
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-weight-bolder text-gray-900 uppercase tracking-wider">
                                        Action
                                    </th>
                                </tr>
                                </thead>


                                @foreach($users as $user)
                                    <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">

                                            <div class="flex items-center">

                                                <div class="ml-4">
                                                    <div class="text-1xl font-weight-bolder text-gray-900">
                                                        {{$user->name}}

                                                    </div>
                                                </div>
                                            </div>

                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">users email</div>
                                            <div class="text-sm text-gray-500">{{$user->email}}</div>
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                           <span onclick="confirm('Confirm submission?') "
                                                 wire:click="destroy({{$user->id}})"
                                                 class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">delete</span>
                                        </td>
                                    </tr>
                                    </tbody>

                                @endforeach


                            </table>
                            {{$users->links()}}

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>
