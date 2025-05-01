<x-app-layout>
    <?php
    session_start();


    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Discussion</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    </head>

    <body class="bg-gray-100">

        <!-- Header -->
        <hr class="border-t-2 border-gray-300 mb-6">

        <h1 class="text-4xl font-extrabold text-white leading-tight text-center bg-gradient-to-r from-indigo-500 to-purple-600 p-6 shadow-lg rounded-xl">
            Discussion
        </h1>

        <hr class="border-t-2 border-gray-300 mt-4 mb-8">

        <!-- Introductory Message -->
        <div class="text-center mt-6 text-lg text-gray-700 bg-gradient-to-r from-blue-50 to-indigo-100 p-6 rounded-lg shadow-xl border border-gray-300">
            <p class="font-semibold">Here you can post your views, doubts, ideas, and anything related to your learning journey. Feel free to ask questions and share your thoughts!</p>
        </div>

        <main class="max-w-7xl mx-auto py-10 px-6 space-y-8">

            <!-- Discussion Messages -->
            <div class="border border-gray-300 rounded-lg p-6 h-64 overflow-y-auto bg-gray-50 shadow-lg mb-8">
                @foreach ($discussions as $discussion)
                <div class="bg-white p-4 rounded-lg mb-4 shadow-md hover:shadow-lg transition-shadow duration-300">
                    <strong class="text-indigo-600">{{ $discussion->user->name }}:</strong>
                    <p class="text-gray-800 mt-1">{{ $discussion->message }}</p>
                    <div class="text-sm text-gray-500 mt-2">
                        <em>{{ $discussion->created_at->format('g:i A') }}</em>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Input Box -->
            <form action="{{ route('discussions.store') }}" method="POST" class="flex mt-6 space-x-3">
                @csrf
                <input type="text" name="message" required class="flex-grow p-4 rounded-lg border border-gray-300 shadow-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Type your message...">
                <button type="submit" class="bg-indigo-600 text-white px-6 py-3 rounded-full hover:bg-indigo-700 transition duration-300 shadow-lg">Send</button>
            </form>

        </main>

        <!-- Footer -->
        <footer class="text-center text-gray-500 text-sm pt-12 pb-6">
            &copy; <?php echo date('Y'); ?>All rights reserved.
        </footer>

    </body>


    </html>

</x-app-layout>