<x-layout>
    <x-slot name="title">
        Student Details - Laravel CRUD
    </x-slot>

    <div class="max-w-2xl mx-auto">
        <div class="flex items-center gap-4 mb-6">
            <a href="{{ route('students.index') }}" class="text-slate-500 hover:text-slate-800 transition">
                &larr; Back
            </a>
            <h1 class="text-3xl font-bold text-slate-800">Student Details</h1>
        </div>

        <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-slate-100">
            <div class="bg-indigo-600 p-8 text-white relative overflow-hidden">
                <div class="absolute top-0 right-0 -mt-4 -mr-4 w-24 h-24 bg-white/10 rounded-full blur-xl"></div>
                <div class="relative z-10">
                    <h2 class="text-3xl font-bold mb-1">{{ $student->name }}</h2>
                    <p class="text-indigo-100">{{ $student->major }} Student</p>
                </div>
            </div>
            
            <div class="p-8 space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="p-4 bg-slate-50 rounded-lg border border-slate-100">
                        <h3 class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-1">NIM</h3>
                        <p class="text-lg font-semibold text-slate-800">{{ $student->nim }}</p>
                    </div>

                    <div class="p-4 bg-slate-50 rounded-lg border border-slate-100">
                        <h3 class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-1">Current Major</h3>
                        <p class="text-lg font-semibold text-slate-800">{{ $student->major }}</p>
                    </div>
                </div>

                <div class="space-y-4">
                    <div class="flex items-start gap-4 p-4 rounded-lg hover:bg-slate-50 transition border border-transparent hover:border-slate-100">
                        <div class="p-2 bg-indigo-50 text-indigo-600 rounded-lg">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-medium text-slate-900">Email Address</h3>
                            <p class="text-slate-600">{{ $student->email }}</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-4 rounded-lg hover:bg-slate-50 transition border border-transparent hover:border-slate-100">
                        <div class="p-2 bg-indigo-50 text-indigo-600 rounded-lg">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-medium text-slate-900">Address</h3>
                            <p class="text-slate-600">
                                {{ $student->address ?? 'No address provided' }}
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-4 rounded-lg hover:bg-slate-50 transition border border-transparent hover:border-slate-100">
                        <div class="p-2 bg-indigo-50 text-indigo-600 rounded-lg">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-medium text-slate-900">Joined Date</h3>
                            <p class="text-slate-600">{{ $student->created_at->format('F j, Y') }}</p>
                            <p class="text-xs text-slate-400 mt-1">Last updated: {{ $student->updated_at->diffForHumans() }}</p>
                        </div>
                    </div>
                </div>

                <div class="pt-6 mt-6 border-t border-slate-100 flex justify-end gap-3">
                    <a href="{{ route('students.edit', $student->id) }}" class="px-6 py-2.5 rounded-lg bg-indigo-600 text-white hover:bg-indigo-700 font-medium shadow-md transition">
                        Edit Student
                    </a>
                    <form action="{{ route('students.destroy', $student->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this student?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-6 py-2.5 rounded-lg border border-rose-200 text-rose-600 hover:bg-rose-50 font-medium transition">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</x-layout>
