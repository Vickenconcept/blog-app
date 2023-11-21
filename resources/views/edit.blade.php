<x-app-layout>

    <div class="h-screen flex justify-center items-center">
        <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 ">

            <form class="space-y-6" action="{{ route('blogs.update', ['blog' => $blog->id]) }}" method="post">
                @method('PUT')

                @csrf

                <h5 class="text-xl font-medium text-gray-900 ">Edit blog</h5>
                <div>
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 ">
                        Title</label>
                    <input type="title" name="title" id="title"
                    value="{{$blog->title }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 "
                        placeholder="hello">
                    @error('title')
                        <div class="mb-4  text-red-700" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <label for="content" class="block mb-2 text-sm font-medium text-gray-900 ">
                        Content</label>

                    <textarea id="content" rows="4" class="bg-gray-50  focus:ring-transparent form-control" name="content"
                        autocomplete="false">{{$blog->content }}</textarea>

                </div>
                <div>
                    <label for="author" class="  block mb-2 text-sm font-medium text-gray-900 ">
                        Author</label>
                    <input type="author" name="author" id="author" placeholder="describe your blog " value="{{$blog->author }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 ">
                </div>

                <button type="submit"
                    class="w-full text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
                    Save</button>

            </form>
        </div>

    </div>
</x-app-layout>
