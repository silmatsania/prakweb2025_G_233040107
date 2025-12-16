<x-layout>
    <x-slot:title>Edit Category</x-slot:title>

    <div class="max-w-2xl mx-auto py-8">
        <div class="flex items-center gap-4 mb-6">
            <a href="{{ route('categories.index') }}" class="text-slate-500 hover:text-slate-800 transition">
                &larr; Back
            </a>
            <h1 class="text-3xl font-bold text-slate-800">Edit Category</h1>
        </div>

        <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-slate-100 p-8">
            <form action="{{ route('categories.update', $category->slug) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="space-y-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-slate-700 mb-1">Category Name</label>
                        <input type="text" name="name" id="name" value="{{ old('name', $category->name) }}" 
                            class="w-full rounded-lg border-slate-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 border px-4 py-2"
                            placeholder="e.g. Technology">
                        @error('name')
                            <p class="mt-1 text-sm text-rose-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="slug" class="block text-sm font-medium text-slate-700 mb-1">Slug</label>
                        <input type="text" name="slug" id="slug" value="{{ old('slug', $category->slug) }}" 
                            class="w-full rounded-lg border-slate-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 border px-4 py-2"
                            placeholder="e.g. technology">
                        @error('slug')
                            <p class="mt-1 text-sm text-rose-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="pt-4 flex justify-end gap-4">
                        <a href="{{ route('categories.index') }}" class="px-6 py-2.5 rounded-lg border border-slate-300 text-slate-700 hover:bg-slate-50 font-medium transition">
                            Cancel
                        </a>
                        <button type="submit" class="px-6 py-2.5 rounded-lg bg-indigo-600 text-white hover:bg-indigo-700 font-medium shadow-md transition">
                            Update Category
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-layout>
