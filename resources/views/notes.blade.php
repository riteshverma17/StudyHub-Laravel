<x-app-layout>
    <?php
    session_start();



    ?>

    @if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded mb-6">
        {{ session('success') }}
    </div>
    @endif





    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Notes</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    </head>

    <body class="bg-gray-100">

        <!-- Header -->
        <hr class="border-t-2 border-gray-300 mb-6">

        <h1 class="text-4xl font-extrabold text-white leading-tight text-center bg-gradient-to-r from-indigo-500 to-purple-600 p-6 shadow-lg rounded-xl">
            Notes
        </h1>

        <hr class="border-t-2 border-gray-300 mt-4 mb-8">

        <!-- Introductory Message -->
        <div class="text-center mt-6 text-lg text-gray-700 bg-gradient-to-r from-blue-50 to-indigo-100 p-6 rounded-lg shadow-xl border border-gray-300">
            <p class="font-semibold">Upload and access important study notes. Share your materials, insights, and summaries to help yourself and others in the learning journey!</p>
        </div>


        <main class="max-w-7xl mx-auto py-10 px-6 space-y-12">
            <div class="flex space-x-12">
                <!-- Upload Note Section -->
                <div class="w-full md:w-1/3 mx-auto">
                    <h2 class="text-3xl font-extrabold mb-6 text-center text-gray-800">Upload a New Note</h2>

                    {{-- Upload Form --}}
                    <form action="{{ route('notes.store') }}" method="POST" enctype="multipart/form-data" class="bg-gradient-to-r from-blue-50 to-indigo-100 shadow-lg p-8 rounded-lg mb-10">
                        @csrf

                        <div class="mb-6">
                            <label class="block text-gray-700 font-semibold mb-2">Title</label>
                            <input type="text" name="title" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 transition duration-300">
                        </div>

                        <div class="mb-6">
                            <label class="block text-gray-700 font-semibold mb-2">Description</label>
                            <textarea name="description" rows="4" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 transition duration-300"></textarea>
                        </div>

                        <div class="mb-6">
                            <label class="block text-gray-700 font-semibold mb-2">Upload PDF</label>
                            <input type="file" name="pdf" accept="application/pdf" required class="block w-full text-sm text-gray-700 file:border-none file:bg-indigo-500 file:text-white file:px-6 file:py-2 file:rounded-lg hover:file:bg-indigo-600 transition duration-300">
                        </div>

                        <button type="submit" class="bg-indigo-600 text-white px-6 py-3 rounded-lg w-full hover:bg-indigo-700 transition duration-300">
                            Upload Note
                        </button>
                    </form>
                </div>


                <!-- Uploaded Notes Section -->
                <div class="w-full md:w-2/3 mx-auto">
                    <h2 class="text-3xl font-extrabold mb-6 text-center text-gray-800">Uploaded Notes</h2>

                    {{-- Search Bar --}}
                    <div class="mb-6 flex justify-center">
                        <input type="text" id="searchInput" class="w-full md:w-1/2 px-4 py-3 border border-gray-300 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-indigo-500 transition duration-300" placeholder="Search notes by title or description">
                    </div>

                    {{-- Notes List --}}
                    <div id="notesList" class="max-h-96 overflow-y-auto space-y-6">
                        @forelse($notes as $note)
                        <div class="bg-white p-6 rounded-lg shadow-xl hover:shadow-2xl transition duration-300">
                            <div class="flex items-center space-x-6">
                                <!-- Default Image -->
                                <img src="https://play-lh.googleusercontent.com/vSNQds6F5roxdN4-a16JnQ9dWQVSZZ8OH4-iMAcNLaFQd3ItZWU8rOPOql4Ew5Hh1esX" alt="Note Image" class="w-28 h-28 object-cover rounded-lg shadow-md">
                                <div>
                                    <!-- Note Title -->
                                    <h3 class="text-2xl font-semibold text-gray-800">{{ $note->title }}</h3>
                                    <p class="text-gray-600 mb-2 text-lg">{{ $note->description }}</p>

                                    <!-- Download Link -->
                                    <a href="{{ asset('storage/' . $note->pdf_path) }}" download class="inline-block text-blue-600 hover:underline font-medium text-lg">
                                        Download PDF
                                    </a>
                                </div>
                            </div>

                            <!-- Delete Button -->
                            <div class="mt-6 text-right">
                                <form action="{{ route('notes.destroy', $note->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Are you sure you want to delete this note?')" class="text-red-600 hover:text-red-800 font-medium text-lg">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                        @empty
                        <p class="text-center text-gray-600">No notes uploaded yet.</p>
                        @endforelse
                    </div>
                </div>

            </div>
        </main>

        <script>
            // Search functionality
            const searchInput = document.getElementById('searchInput');
            const notesList = document.getElementById('notesList');
            const notesItems = notesList.querySelectorAll('.bg-white');

            searchInput.addEventListener('input', function() {
                const query = searchInput.value.toLowerCase();
                notesItems.forEach(function(note) {
                    const title = note.querySelector('h3').textContent.toLowerCase();
                    const description = note.querySelector('p').textContent.toLowerCase();
                    if (title.includes(query) || description.includes(query)) {
                        note.style.display = '';
                    } else {
                        note.style.display = 'none';
                    }
                });
            });
        </script>


        <!-- Footer -->
        <footer class="text-center text-gray-500 text-sm pt-10">
            &copy; <?php echo date('Y'); ?>  All rights reserved.
        </footer>

    </body>


    </html>


</x-app-layout>