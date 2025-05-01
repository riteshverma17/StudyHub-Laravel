<x-app-layout>
    <?php
    session_start();



    ?>

    @if(session('success'))
    <div class="bg-green-500 text-white p-4 rounded-lg mb-6">
        {{ session('success') }}
    </div>
    @endif






    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Feedback</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    </head>

    <body class="bg-gray-100">

        <!-- Header -->
        <hr class="border-t-2 border-gray-300">
        <h1 class="text-4xl font-extrabold text-white leading-tight text-center bg-gradient-to-r from-indigo-600 to-purple-600 p-6 shadow-xl rounded-lg">
            Feedback
        </h1>
        <hr class="border-t-2 border-gray-300">

        <!-- Introductory Message -->
        <div class="text-center mt-8 text-xl text-gray-700 shadow-xl p-6 rounded-lg border border-gray-300 bg-white">
            <p>We truly value your feedback! Share your thoughts, suggestions, or questions with us to help us improve.</p>
        </div>


        <main class="max-w-7xl mx-auto py-10 px-6 space-y-12">

            <!-- Feedback Section -->
            <div class="max-w-lg mx-auto bg-white p-8 rounded-xl shadow-2xl">
                <h1 class="text-3xl font-extrabold text-gray-800 mb-6">Send Us Feedback</h1>

                @if(session('success'))
                <div class="bg-green-100 text-green-800 p-3 rounded mb-6 text-center">
                    {{ session('success') }}
                </div>
                @endif

                <form method="POST" action="{{ route('feedback.send') }}" class="space-y-6">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-lg text-gray-700">Name</label>
                        <input type="text" name="name" class="w-full border border-gray-300 p-4 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-indigo-500 transition" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-lg text-gray-700">Email</label>
                        <input type="email" name="email" class="w-full border border-gray-300 p-4 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-indigo-500 transition" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-lg text-gray-700">Message</label>
                        <textarea name="message" class="w-full border border-gray-300 p-4 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-indigo-500 transition" rows="6" required></textarea>
                    </div>

                    <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-500 transition duration-300">
                        Submit
                    </button>
                </form>
            </div>
        </main>

        <!-- Footer -->
        <footer class="text-center text-gray-500 text-sm pt-10">
            &copy; <?php echo date('Y'); ?> Study Group Platform. All rights reserved.
        </footer>

    </body>


    </html>


</x-app-layout>