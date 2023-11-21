<x-app-layout>

    <div class="w-full md:w-[80%] mx-auto px-5  py-10 space-y-8">
        <div>
            <h1 class="text-3xl font-bold uppercase tracking-widest underline mb-2">{{ $blog->title }}</h1>
            <p> By<span class="italic  font-semibold"> {{ $blog->author }} </span> on {{ $blog->created_at }}</p>
        </div>

        <div class="w-full  h-96 overflow-hidden rounded-lg">
            <img class="w-full object-contain  "
                src="https://images.unsplash.com/photo-1700496462947-f772a716de6f?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzNHx8fGVufDB8fHx8fA%3D%3D"
                alt="">
        </div>
        <section>
            <p>{{ $blog->content }}</p>
        </section>
    </div>
</x-app-layout>
