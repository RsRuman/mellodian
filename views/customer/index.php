<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mellodian || Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
<!-- Navigation Bar -->
<header class="bg-blue-600 text-white">
    <div class="container mx-auto flex justify-between items-center py-4 px-6">
        <h1 class="text-xl font-bold">Mellodian Community Park</h1>
        <nav>
            <ul class="flex space-x-4">
                <li><a href="#" class="hover:text-blue-300">Events</a></li>
                <li><a href="#" class="hover:text-blue-300">Logout</a></li>
            </ul>
        </nav>
    </div>
</header>

<!-- Main Content -->
<main class="container mx-auto py-8 px-6">
    <!-- Welcome Message -->
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Welcome, Customer!</h2>
        <p class="text-gray-600">Browse and book tickets for exciting Christmas events.</p>
    </div>

    <!-- Events Section -->
    <section>
        <h3 class="text-xl font-bold text-gray-800 mb-4">Upcoming Events</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Event Card 1 -->
            <div class="bg-white shadow rounded-lg p-4">
                <h4 class="text-lg font-bold text-gray-800">Christmas Circus</h4>
                <p class="text-gray-600">Experience the magic of Christmas with an indoor circus.</p>
                <p class="text-gray-800 font-semibold mt-2">Price: $20 per ticket</p>
                <button class="mt-4 w-full bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Book Now</button>
            </div>

            <!-- Event Card 2 -->
            <div class="bg-white shadow rounded-lg p-4">
                <h4 class="text-lg font-bold text-gray-800">Sweeney Steam Ride</h4>
                <p class="text-gray-600">Enjoy a nostalgic ride on our old steam engines.</p>
                <p class="text-gray-800 font-semibold mt-2">Price: $15 per ticket</p>
                <button class="mt-4 w-full bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Book Now</button>
            </div>

            <!-- Event Card 3 -->
            <div class="bg-white shadow rounded-lg p-4">
                <h4 class="text-lg font-bold text-gray-800">Water Sports Adventure</h4>
                <p class="text-gray-600">Dive into fun with our range of water activities.</p>
                <p class="text-gray-800 font-semibold mt-2">Price: $30 per ticket</p>
                <button class="mt-4 w-full bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Book Now</button>
            </div>
        </div>
    </section>
</main>
</body>
</html>