<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
<!-- Navbar -->
<header class="bg-blue-600 text-white p-4 shadow">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-xl font-bold">Admin Dashboard</h1>
        <nav>
            <ul class="flex space-x-4">
                <li><a href="/users" class="hover:underline">Users</a></li>
                <li><a href="#" class="hover:underline">Logout</a></li>
            </ul>
        </nav>
    </div>
</header>

<!-- Main Content -->
<div class="container mx-auto py-10 px-6">
    <!-- Overview Section -->
    <section class="mb-10">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Overview</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Statistic Cards -->
            <div class="bg-white shadow rounded-lg p-6">
                <h3 class="text-gray-700 font-bold text-lg">Total Events</h3>
                <p class="text-4xl font-semibold text-blue-600 mt-4">15</p>
            </div>
            <div class="bg-white shadow rounded-lg p-6">
                <h3 class="text-gray-700 font-bold text-lg">Total Bookings</h3>
                <p class="text-4xl font-semibold text-blue-600 mt-4">1,245</p>
            </div>
            <div class="bg-white shadow rounded-lg p-6">
                <h3 class="text-gray-700 font-bold text-lg">Total Users</h3>
                <p class="text-4xl font-semibold text-blue-600 mt-4">782</p>
            </div>
        </div>
    </section>

    <!-- Management Section -->
    <section>
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Manage</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- User Management -->
            <div class="bg-white shadow rounded-lg p-6">
                <h3 class="text-gray-700 font-bold text-lg">User Management</h3>
                <p class="text-gray-600 mt-2">
                    View and manage all registered users.
                </p>
                <a
                    href="#"
                    class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600"
                >
                    Manage Users
                </a>
            </div>

            <!-- Event Management -->
            <div class="bg-white shadow rounded-lg p-6">
                <h3 class="text-gray-700 font-bold text-lg">Event Management</h3>
                <p class="text-gray-600 mt-2">Create, update, or delete events.</p>
                <a
                    href="#"
                    class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600"
                >
                    Manage Events
                </a>
            </div>

            <!-- Booking Management -->
            <div class="bg-white shadow rounded-lg p-6">
                <h3 class="text-gray-700 font-bold text-lg">Booking Management</h3>
                <p class="text-gray-600 mt-2">View and manage ticket bookings.</p>
                <a
                    href="#"
                    class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600"
                >
                    Manage Bookings
                </a>
            </div>
        </div>
    </section>
</div>
</body>
</html>