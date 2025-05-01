<!DOCTYPE html>
<html lang="en"> <!-- Removed class="dark" for default light mode -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Study Hub</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
        }
    </script>

    <!-- Dark Mode Toggle Script -->
    <script>
        function toggleDarkMode() {
            document.documentElement.classList.toggle('dark');
        }
    </script>
</head>

<body class="bg-gray-100 text-gray-800 transition-all duration-300 min-h-screen flex flex-col">

    <!-- Header -->
  <!-- Header -->
<header class="bg-white shadow-lg py-6 px-8 flex justify-between items-center">
    <h1 class="text-2xl font-bold text-blue-600 tracking-wide">Study Hub</h1>
</header>

<!-- Main Content -->
<main class="flex-grow bg-gray-50">
    <!-- Hero Section -->
    <section class="mt-20 flex flex-col justify-center items-center px-6 py-20 text-center">
        <h2 class="text-6xl font-extrabold text-blue-600 mb-8 tracking-tight">Welcome to Study Hub</h2>
        <p class="text-xl text-gray-700 mb-12">Join study groups, share notes, and collaborate in real time!</p>

        <div class="flex flex-col sm:flex-row justify-center gap-6">
            <a href="{{ route('login') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-lg shadow-lg transition duration-300 transform hover:scale-105">
                Login
            </a>
            <a href="{{ route('register') }}" class="bg-green-600 hover:bg-green-700 text-white px-8 py-4 rounded-lg shadow-lg transition duration-300 transform hover:scale-105">
                Sign Up
            </a>
            <a href="{{ route('login') }}" class="bg-gray-800 hover:bg-gray-900 text-white px-8 py-4 rounded-lg shadow-lg transition duration-300 transform hover:scale-105">
                Get Started
            </a>
        </div>
    </section>

    <!-- About Section -->
    <section class="mt-20 px-8 py-20 bg-gradient-to-r from-blue-50 via-blue-100 to-blue-200">
        <div class="max-w-6xl mx-auto text-center">
            <h3 class="text-5xl font-bold text-blue-600 mb-8">About Study Hub</h3>
            <p class="text-lg text-gray-700 mb-12">
                Study Hub is the perfect place for students to collaborate, share ideas, and learn together. 
                Form study groups, exchange notes, discuss challenging topics, and grow your knowledge with like-minded learners from around the world.
                Empower your academic journey with meaningful conversations and real-time collaboration!
            </p>

            <!-- Image Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <img src="https://th.bing.com/th/id/OIP.ZlK-C5Wq9dJ2cLkUUVV4PgHaE7?rs=1&pid=ImgDetMain0" 
                    alt="Students Discussing" 
                    class="rounded-lg shadow-lg transition duration-300 transform hover:scale-105">
                <img src="https://tse2.mm.bing.net/th/id/OIP.E8kGokNsvVrJu-WJBhPmegHaEq?rs=1&pid=ImgDetMain" 
                    alt="Study Group" 
                    class="rounded-lg shadow-lg transition duration-300 transform hover:scale-105">
                <img src="https://d2myx53yhj7u4b.cloudfront.net/sites/default/files/ic-og-OnlineCollaborationSoftware-FacebookLinkedIn.jpg" 
                    alt="Online Collaboration" 
                    class="rounded-lg shadow-lg transition duration-300 transform hover:scale-105">
            </div>
        </div>
    </section>
</main>

<!-- Footer -->
<footer class="bg-white text-center text-sm py-6 mt-16 shadow-md">
    <p class="text-gray-600">&copy; {{ date('Y') }} Study Hub. All rights reserved.</p>
</footer>

</body>
</html>
