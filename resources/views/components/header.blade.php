<div class=" flex justify-end space-x-3 px-20 pt-10">
    <a href="{{ route('dashboard') }}"
        class="px-4 py-2 rounded bg-red-700 text-sm text-white font-semibold hover:bg-red-600 focus:bg-red-600 {{ request()->routeIs('blogs.index') ? '': 'hidden' }}" >
        Create Blog
    </a>
    <a href="/" class="flex items-center px-3 py-1 rounded  bg-red-50 {{ request()->routeIs('blogs.index') ? 'hidden': '' }}"><i class='bx bxs-chevron-left'></i>
        Back</a>
</div>