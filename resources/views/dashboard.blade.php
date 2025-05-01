<x-app-layout>
    <?php
    session_start();

    // Mock user data for demonstration (replace with actual login logic)



    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    </head>

    <body class="bg-gray-100">

        <!-- Header -->
        <hr class="border-t-2 border-gray-300 mb-4">

        <h1 class="text-4xl font-extrabold text-white leading-tight text-center bg-gradient-to-r from-blue-500 via-indigo-600 to-purple-700 p-6 shadow-xl rounded-xl">
            Dashboard
        </h1>

        <hr class="border-t-2 border-gray-300 mt-4">

        <h2 class="text-3xl font-semibold text-gray-700 leading-tight mt-10 ml-6">
            <span class="text-indigo-600">Welcome,</span> {{ Auth::user()->name }}!
        </h2>



        <main class="max-w-7xl mx-auto py-10 px-6 space-y-12">

            <!-- Images Section -->
            <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <img src="https://s35691.pcdn.co/wp-content/uploads/2022/07/video-conference-vector-id1281074138.jpg" alt="Image 1" class="rounded-lg shadow-xl">
                <img src="https://s39613.pcdn.co/wp-content/uploads/2021/03/light-bulbs-drawn-on-colorful-sticky-notes-picture-id1226583757.jpg" alt="Image 2" class="rounded-lg shadow-xl">
                <img src="https://cdn.elearningindustry.com/wp-content/uploads/2020/02/online-discussion-forums-engage-your-learners-800x449.jpg" alt="Image 3" class="rounded-lg shadow-xl">
            </section>

            <!-- Features Section -->
            <section>
                <h2 class="text-2xl font-semibold text-gray-700 mb-4 ">Features</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

                    <div class="bg-gradient-to-r from-blue-50 to-indigo-100 p-6 rounded-2xl shadow-2xl transition-transform hover:scale-[1.01] duration-300">
                        <!-- Header -->
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-2xl font-extrabold text-indigo-700 flex items-center gap-2">
                                <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 8h2a2 2 0 012 2v9a2 2 0 01-2 2h-6l-4 4v-4H7a2 2 0 01-2-2v-2" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 3h6v6M21 3l-6 6" />
                                </svg>
                                Discussions
                            </h3>
                        </div>

                        <!-- Discussion Messages -->
                        <div class="space-y-3 text-left">
                            <div class="bg-white border border-indigo-200 p-3 rounded-lg shadow-sm">
                                <p class="text-sm text-gray-800"><strong>Alice:</strong> Can anyone explain the merge sort logic?</p>
                            </div>
                            <div class="bg-white border border-indigo-200 p-3 rounded-lg shadow-sm">
                                <p class="text-sm text-gray-800"><strong>Ravi:</strong> I found a great PDF on Operating Systems, sharing here!</p>
                            </div>
                            <div class="bg-white border border-indigo-200 p-3 rounded-lg shadow-sm">
                                <p class="text-sm text-gray-800"><strong>Sara:</strong> What topics are included in the midterm?</p>
                            </div>
                        </div>

                        <!-- CTA -->
                        <div class="mt-6 text-center">
                            <p class="text-sm text-indigo-700 mb-2">Want to join the conversation?</p>
                            <a href="{{ route('discussions') }}" class="inline-block bg-indigo-600 text-white px-5 py-2 rounded-full shadow-lg hover:bg-indigo-700 transition duration-300">
                                Join Now
                            </a>
                        </div>
                    </div>

                    <div class="bg-gradient-to-br from-white via-blue-50 to-indigo-100 p-6 rounded-2xl shadow-2xl hover:scale-[1.01] transition-transform duration-300">
                        <!-- Header -->
                        <div class="flex items-center justify-center mb-6">
                            <svg class="w-7 h-7 text-indigo-600 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 20h9" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 3.5A2.121 2.121 0 0014.379 2H5a2 2 0 00-2 2v12a2 2 0 002 2h6l4 4V5.621A2.121 2.121 0 0016.5 3.5z" />
                            </svg>
                            <h3 class="text-2xl font-extrabold text-indigo-700">Study Notes</h3>
                        </div>

                        <!-- Note Cards -->
                        <div class="space-y-5">
                            <!-- Note 1 -->
                            <div class="bg-white rounded-xl shadow-sm p-4 flex items-start space-x-4 hover:bg-blue-50 transition duration-300">
                                <img src="https://play-lh.googleusercontent.com/vSNQds6F5roxdN4-a16JnQ9dWQVSZZ8OH4-iMAcNLaFQd3ItZWU8rOPOql4Ew5Hh1esX" alt="OS Notes" class="w-20 h-24 object-cover rounded-lg border border-gray-200">
                                <div class="text-left">
                                    <h4 class="text-lg font-semibold text-indigo-800 mb-1">Operating System Notes</h4>
                                    <p class="text-sm text-gray-700">Complete unit-wise breakdown of OS topics like scheduling, memory, and file systems.</p>
                                </div>
                            </div>

                            <!-- Note 2 -->
                            <div class="bg-white rounded-xl shadow-sm p-4 flex items-start space-x-4 hover:bg-blue-50 transition duration-300">
                                <img src="https://play-lh.googleusercontent.com/vSNQds6F5roxdN4-a16JnQ9dWQVSZZ8OH4-iMAcNLaFQd3ItZWU8rOPOql4Ew5Hh1esX" alt="DBMS Notes" class="w-20 h-24 object-cover rounded-lg border border-gray-200">
                                <div class="text-left">
                                    <h4 class="text-lg font-semibold text-indigo-800 mb-1">DBMS Cheatsheet</h4>
                                    <p class="text-sm text-gray-700">Quick reference guide for ER diagrams, normalization, and SQL queries.</p>
                                </div>
                            </div>
                        </div>

                        <!-- CTA Button -->
                        <div class="mt-6 text-center">
                            <a href="{{ route('notes') }}" class="inline-block bg-indigo-600 text-white px-6 py-2 rounded-full shadow-lg hover:bg-indigo-700 transition duration-300">
                                View All Notes
                            </a>
                        </div>
                    </div>


                    <div class="w-full">
                        <a href="{{ route('feedback') }}">
                            <div class="w-full bg-gradient-to-r from-indigo-500 to-purple-600 text-white p-6 rounded-2xl shadow-2xl hover:scale-[1.02] transition-transform duration-300">
                                <div class="flex items-center justify-center mb-4">
                                    <svg class="w-12 h-12 text-white opacity-90" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 10h.01M12 10h.01M16 10h.01M21 12c0 4.97-4.03 9-9 9a9 9 0 110-18 9 9 0 019 9z" />
                                    </svg>
                                </div>
                                <h3 class="text-2xl font-extrabold mb-2 text-center">We Value Your Feedback</h3>
                                <p class="text-md opacity-90 text-center">Help us improve your experience by sharing your thoughts.</p>
                            </div>
                        </a>
                    </div>



                </div>

            </section>

            <!-- Footer -->
            <footer class="text-center text-gray-500 text-sm pt-10">
                &copy; <?php echo date('Y'); ?> Study Group Platform. All rights reserved.
            </footer>

        </main>
    </body>

    </html>

</x-app-layout>