<x-app-layout>
    <div class="p-5 lg:p-20">


        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 ">
            @forelse ($blogs as $blog)
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow ">
                    <a href="{{ route('blogs.show', ['blog' => $blog->id]) }}">
                        <img class="rounded-t-lg"
                            src="https://plus.unsplash.com/premium_photo-1700056214664-4bd97cec12b4?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxN3x8fGVufDB8fHx8fA%3D%3D"
                            alt="" />
                    </a>
                    <div class="p-5">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 capitalize tracking-wider ">
                            {{ $blog->title }}</h5>
                        <p class="mb-3 font-normal text-gray-700 line-clamp-1">{{ $blog->content }}</p>
                        <a href="{{ route('blogs.show', ['blog' => $blog->id]) }}"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 ">
                            Read more
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                        <div class="flex justify-between">
                            <p class="italic mt-3 text-gray-400">By {{ $blog->author }} </p>
                            <div class="flex">
                                <a href="{{ route('blogs.edit', ['blog' => $blog->id]) }}">
                                    <button
                                        class="rounded-full bg-green-500 hover:bg-green-600  text-white px-2 py-1 hover:shadow hover:translate-y-1 duration-300 transition"><i
                                            class='bx bxs-edit-alt'></i></button>
                                </a>
                                <div class="relative " x-data="{ isOpen: false }">
                                    <button @click="isOpen = true"
                                        class="rounded-full bg-red-500 hover:bg-red-600  mr-2 text-white p-2 hover:shadow hover:translate-y-1 duration-300 transition"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5m6 4.125l2.25 2.25m0 0l2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                                        </svg>
                                    </button>
                                    <form action="{{ route('blogs.destroy', ['blog' => $blog->id]) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button x-show="isOpen" @click.away="isOpen = false"
                                            class="absolute bottom-10 right-0 whitespace-nowrap text-red-500 bg-red-100 border border-red-500 rounded-xl px-4 py-2"
                                            style="display: none">Are you sure ?</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        {{-- <span class="text-xs  text-gray-500">{{ $blog->created_at }}</span> --}}
                    </div>
                </div>

            @empty
                <div class=" mx-auto px-10 py-4 bg-white rounded-lg shadow-sm w-full col-span-3">
                    <div class="flex flex-col justify-center items-center py-12">
                        <svg class="w-24 h-24 text-gray-500 mb-4" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24">
                            <path
                                d="M5 3C4.5313 3 4.12549 3.32553 4.02381 3.78307L2.02381 12.7831C2.00799 12.8543 2 12.927 2 13V20C2 20.5523 2.44772 21 3 21H21C21.5523 21 22 20.5523 22 20V13C22 12.927 21.992 12.8543 21.9762 12.7831L19.9762 3.78307C19.8745 3.32553 19.4687 3 19 3H5ZM19.7534 12H15C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12H4.24662L5.80217 5H18.1978L19.7534 12Z">
                            </path>
                        </svg>
                        <p class="text-xl font-semibold text-gray-600 mb-2">You have no blog</p>
                        <p class="text-gray-500 text-center mb-6">Start up, by creating one</p>
                        <a href="{{ route('dashboard') }}"
                            class="px-4 py-2 rounded bg-red-700 text-white font-semibold hover:bg-red-600 focus:bg-red-600">
                            Create Blog
                        </a>
                    </div>
                </div>
            @endforelse


        </div>

    </div>
</x-app-layout>
