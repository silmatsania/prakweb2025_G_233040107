<x-layout>
    <x-slot:title>
        Edit Student - Laravel CRUD
    </x-slot:title>

    <div class="max-w-2xl mx-auto">
        <div class="flex items-center gap-4 mb-6">
            <a href="{{ route('students.index') }}" class="text-slate-500 hover:text-slate-800 transition">
                &larr; Back
            </a>
            <h1 class="text-3xl font-bold text-slate-800">Edit Student</h1>
        </div>

        <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-slate-100 p-8">
            <form action="{{ route('students.update', $student->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="space-y-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-slate-700 mb-1">Full Name</label>
                        <input type="text" name="name" id="name" value="{{ old('name', $student->name) }}" 
                            class="w-full rounded-lg border-slate-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 @error('name') border-rose-500 @enderror px-4 py-2 border"
                            placeholder="e.g. John Doe">
                        @error('name')
                            <p class="mt-1 text-sm text-rose-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="nim" class="block text-sm font-medium text-slate-700 mb-1">NIM (Student ID)</label>
                        <input type="text" name="nim" id="nim" value="{{ old('nim', $student->nim) }}" 
                            class="w-full rounded-lg border-slate-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 @error('nim') border-rose-500 @enderror px-4 py-2 border"
                            placeholder="e.g. 233040001">
                        @error('nim')
                            <p class="mt-1 text-sm text-rose-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="major" class="block text-sm font-medium text-slate-700 mb-1">Major</label>
                            <input type="text" name="major" id="major" value="{{ old('major', $student->major) }}" 
                                class="w-full rounded-lg border-slate-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 @error('major') border-rose-500 @enderror px-4 py-2 border"
                                placeholder="e.g. Informatics">
                            @error('major')
                                <p class="mt-1 text-sm text-rose-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-slate-700 mb-1">Email Address</label>
                            <input type="email" name="email" id="email" value="{{ old('email', $student->email) }}" 
                                class="w-full rounded-lg border-slate-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 @error('email') border-rose-500 @enderror px-4 py-2 border"
                                placeholder="john@example.com">
                            @error('email')
                                <p class="mt-1 text-sm text-rose-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label for="address" class="block text-sm font-medium text-slate-700 mb-1">Address</label>
                        <textarea name="address" id="address" rows="3" 
                            class="w-full rounded-lg border-slate-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 border px-4 py-2"
                            placeholder="Student's address...">{{ old('address', $student->address) }}</textarea>
                    </div>

                    <div class="pt-4 flex justify-end gap-4">
                        <a href="{{ route('students.index') }}" class="px-6 py-2.5 rounded-lg border border-slate-300 text-slate-700 hover:bg-slate-50 font-medium transition">
                            Cancel
                        </a>
                        <button type="submit" class="px-6 py-2.5 rounded-lg bg-indigo-600 text-white hover:bg-indigo-700 font-medium shadow-md transition">
                            Update Student
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</x-layout>
