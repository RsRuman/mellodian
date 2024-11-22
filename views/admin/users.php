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
                <li><a href="#" class="hover:underline">Logout</a></li>
            </ul>
        </nav>
    </div>
</header>

<!-- Main Content -->
<div class="container mx-auto py-10 px-6">
    <div class="relative flex flex-col w-full h-full overflow-scroll text-slate-300 bg-slate-800 shadow-md rounded-lg bg-clip-border">
        <table class="w-full text-left table-auto min-w-max">
            <thead>
            <tr>
                <th class="p-4 border-b border-slate-600 bg-slate-700">
                    <p class="text-sm font-normal leading-none text-slate-300">
                        S/N
                    </p>
                </th>
                <th class="p-4 border-b border-slate-600 bg-slate-700">
                    <p class="text-sm font-normal leading-none text-slate-300">
                        Name
                    </p>
                </th>
                <th class="p-4 border-b border-slate-600 bg-slate-700">
                    <p class="text-sm font-normal leading-none text-slate-300">
                        Email
                    </p>
                </th>
                <th class="p-4 border-b border-slate-600 bg-slate-700">
                    <p class="text-sm font-normal leading-none text-slate-300">
                        Phone
                    </p>
                </th>
                <th class="p-4 border-b border-slate-600 bg-slate-700">
                    <p class="text-sm font-normal leading-none text-slate-300">
                        Actions
                    </p>
                </th>
            </tr>
            </thead>
            <tbody>
            <?php
            $sn = 1;
            foreach ($users as $user):
                ?>
                <tr class="hover:bg-slate-700">
                    <td class="p-4 w-1 border-b border-slate-700 bg-slate-900">
                        <p class="text-sm text-slate-100 font-semibold">
                            <?php echo htmlspecialchars($sn); ?>
                        </p>
                    </td>
                    <td class="p-4 border-b border-slate-700 bg-slate-800">
                        <p class="text-sm text-slate-300">
                            <?php echo htmlspecialchars($user['name']); ?>
                        </p>
                    </td>
                    <td class="p-4 border-b border-slate-700 bg-slate-900">
                        <p class="text-sm text-slate-300">
                            <?php echo htmlspecialchars($user['email']); ?>
                        </p>
                    </td>
                    <td class="p-4 border-b border-slate-700 bg-slate-800">
                        <p class="text-sm text-slate-300">
                            <?php echo htmlspecialchars($user['phone']); ?>
                        </p>
                    </td>
                    <td class="p-4 border-b border-slate-700 bg-slate-900">
                        <a href="edit_user.php?id=<?php echo $user['id']; ?>" class="text-blue-500">Edit</a>
                    </td>
                </tr>
                <?php
                $sn++;
            endforeach;
            ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
