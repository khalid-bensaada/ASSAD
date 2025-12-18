<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Manage Users - Zoo ASSAD</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#19e63c",
                        "primary-dark": "#14b830",
                        "background-light": "#f6f8f6",
                        "background-dark": "#112114",
                        "surface-light": "#ffffff",
                        "surface-dark": "#1a2e1d",
                        "text-main": "#0e1b10",
                        "text-muted": "#4e975a",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"],
                        "body": ["Inter", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
</head>

<body
    class="bg-background-light dark:bg-background-dark text-text-main dark:text-gray-100 font-display transition-colors duration-200">
    <div class="relative flex h-auto min-h-screen w-full flex-col overflow-x-hidden">
        <!-- Top Navigation -->
        <header
            class="sticky top-0 z-50 flex items-center justify-between whitespace-nowrap border-b border-[#e7f3e9] dark:border-[#2a4030] bg-surface-light/95 dark:bg-background-dark/95 backdrop-blur-sm px-6 py-3 shadow-sm">
            <div class="flex items-center gap-4">
                <div
                    class="size-8 text-primary flex items-center justify-center bg-green-50 dark:bg-green-900/20 rounded-lg p-1">
                    <span class="material-symbols-outlined text-[28px]">pets</span>
                </div>
                <h2 class="text-text-main dark:text-white text-lg font-bold leading-tight tracking-tight">Zoo ASSAD</h2>
            </div>
            <div class="hidden md:flex items-center gap-8">
                <nav class="flex items-center gap-6">
                    <a class="text-text-main dark:text-gray-200 text-sm font-medium hover:text-primary transition-colors"
                        href="#">Dashboard</a>
                    <a class="text-text-main dark:text-gray-200 text-sm font-medium hover:text-primary transition-colors"
                        href="#">Animals</a>
                    <a class="text-text-main dark:text-gray-200 text-sm font-medium hover:text-primary transition-colors"
                        href="#">Tickets</a>
                    <a class="text-primary text-sm font-bold border-b-2 border-primary py-1" href="#">Staff</a>
                    <a class="text-text-main dark:text-gray-200 text-sm font-medium hover:text-primary transition-colors"
                        href="#">Settings</a>
                </nav>
            </div>
            <div class="flex items-center gap-4">
                <button
                    class="flex items-center justify-center p-2 rounded-full hover:bg-gray-100 dark:hover:bg-surface-dark transition-colors md:hidden">
                    <span class="material-symbols-outlined">menu</span>
                </button>
                <div class="hidden md:block">
                    <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 ring-2 ring-primary/20"
                        data-alt="Portrait of the current user logged in"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA0_fhs6ETBfYMt7MRLkjSTFlpaWb-EUL0bg9IKi6Zw_F5q-zJBT15V2VX6MUq88QyczYTv-zYKKwIjzlzacesyZbeCSF316QIvIaG4XrZorEqZ4dXClY89gJUSVYPD5BTSHg-ceBNy2noX9vKnRA-fkU_adnDJ9vhhN60v3P3VWnR0rcdormsEhxeKweVP2_tcbj_vY1b8WLYDw8wEvKSZm3hvjVPYWkK7YAhYB69HyvYDCdf_ERfojrt3393fAZ_0H3iXR_0x_18");'>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content -->
        <main class="flex-1 px-4 md:px-10 py-8 max-w-[1200px] mx-auto w-full">
            <!-- Page Heading -->
            <div class="flex flex-wrap justify-between items-end gap-4 mb-8">
                <div class="flex flex-col gap-2">
                    <h1 class="text-text-main dark:text-white text-3xl md:text-4xl font-black tracking-tight">Manage
                        Users</h1>
                    <p class="text-text-muted dark:text-gray-400 text-base font-medium flex items-center gap-2">
                        <span class="material-symbols-outlined text-lg">badge</span>
                        Staff &amp; Member Directory
                    </p>
                </div>
                <button
                    class="flex items-center justify-center gap-2 rounded-xl h-11 px-6 bg-primary hover:bg-primary-dark text-black text-sm font-bold shadow-lg shadow-primary/20 transition-all hover:scale-105 active:scale-95"
                    onclick="alert('Open Add User Modal')">
                    <span class="material-symbols-outlined text-[20px]">add</span>
                    <span>Add New User</span>
                </button>
            </div>
            <!-- Search and Filter Bar -->
            <div
                class="bg-surface-light dark:bg-surface-dark p-4 rounded-xl border border-gray-200 dark:border-[#2a4030] shadow-sm mb-6">
                <div class="flex flex-col md:flex-row gap-4 items-center justify-between">
                    <!-- Search -->
                    <div class="w-full md:flex-1">
                        <label class="relative flex w-full items-center">
                            <span
                                class="absolute left-4 text-text-muted dark:text-gray-500 material-symbols-outlined">search</span>
                            <input
                                class="w-full h-11 pl-11 pr-4 rounded-lg bg-background-light dark:bg-background-dark border-none ring-1 ring-gray-200 dark:ring-gray-700 focus:ring-2 focus:ring-primary text-text-main dark:text-white placeholder-text-muted dark:placeholder-gray-500 transition-all"
                                placeholder="Search by name, email, or zoo ID..." type="text" />
                        </label>
                    </div>
                    <!-- Filters -->
                    <div class="flex gap-2 w-full md:w-auto overflow-x-auto pb-1 md:pb-0 no-scrollbar">
                        <div class="relative group">
                            <button
                                class="flex h-10 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-background-light dark:bg-background-dark border border-gray-200 dark:border-gray-700 px-4 hover:border-primary dark:hover:border-primary transition-colors">
                                <span class="text-sm font-medium">Role: All</span>
                                <span class="material-symbols-outlined text-lg">keyboard_arrow_down</span>
                            </button>
                        </div>
                        <div class="relative group">
                            <button
                                class="flex h-10 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-background-light dark:bg-background-dark border border-gray-200 dark:border-gray-700 px-4 hover:border-primary dark:hover:border-primary transition-colors">
                                <span class="text-sm font-medium">Status: All</span>
                                <span class="material-symbols-outlined text-lg">keyboard_arrow_down</span>
                            </button>
                        </div>
                        <button
                            class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-background-light dark:bg-background-dark border border-gray-200 dark:border-gray-700 hover:text-primary transition-colors"
                            title="More Filters">
                            <span class="material-symbols-outlined">filter_list</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Data Table -->
            <div
                class="bg-surface-light dark:bg-surface-dark rounded-xl border border-gray-200 dark:border-[#2a4030] shadow-sm overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full min-w-[800px] text-left border-collapse">
                        <thead>
                            <tr
                                class="border-b border-gray-100 dark:border-[#2a4030] bg-gray-50/50 dark:bg-background-dark/50">
                                <th class="px-6 py-4 text-xs font-bold text-text-muted uppercase tracking-wider">Name
                                </th>
                                <th class="px-6 py-4 text-xs font-bold text-text-muted uppercase tracking-wider">Email
                                </th>
                                <th class="px-6 py-4 text-xs font-bold text-text-muted uppercase tracking-wider">Role
                                </th>
                                <th class="px-6 py-4 text-xs font-bold text-text-muted uppercase tracking-wider">Status
                                </th>
                                <th
                                    class="px-6 py-4 text-xs font-bold text-text-muted uppercase tracking-wider text-right">
                                    Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100 dark:divide-[#2a4030]">
                            <!-- Row 1: Sarah Jenkins (Active Guide) -->
                            <tr class="group hover:bg-gray-50 dark:hover:bg-background-dark/30 transition-colors">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="size-9 rounded-full bg-cover bg-center"
                                            data-alt="Portrait of Sarah Jenkins"
                                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCArf-b87QizFxBzwCqDxzs0sLAdQgqBGw5RsSN-UCr9_dc85OBhB8Qci-ED4IuzfMzdElsfkmhlYcTgN0sEk48NTeuuZkHk6nlk1HB1xevvSOAGuzirL8X8QRvxkXN1i48bxtEagYX1G7ZchT610JTyhy9t0tqaFiDPqg52D5Qj77gLxUARreQqxETDJC4bNxEqayHjzmBc7EcWYCcNbHArXnenAUO8Ie5KZQUyllti4HDclX8NS0B4Q_TlwVe2FB3KxTGcBQcC3E");'>
                                        </div>
                                        <div>
                                            <p class="font-semibold text-text-main dark:text-white">Sarah Jenkins</p>
                                            <p class="text-xs text-text-muted">ID: #ZOO-8821</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-400">sarah.j@zoo.assad.com
                                </td>
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md text-xs font-medium bg-blue-50 text-blue-700 dark:bg-blue-900/30 dark:text-blue-300">
                                        <span class="material-symbols-outlined text-[14px]">tour</span> Guide
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-green-50 text-green-700 dark:bg-green-900/30 dark:text-green-400 border border-green-200 dark:border-green-800">
                                        <span class="size-1.5 rounded-full bg-green-500"></span> Active
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <button
                                        class="text-red-600 hover:text-red-700 dark:text-red-400 dark:hover:text-red-300 text-sm font-bold hover:bg-red-50 dark:hover:bg-red-900/20 px-3 py-1.5 rounded-lg transition-colors"
                                        onclick="confirm('Deactivate Sarah Jenkins?')">
                                        Deactivate
                                    </button>
                                </td>
                            </tr>
                            <!-- Row 2: Mark Chen (Admin) -->
                            <tr class="group hover:bg-gray-50 dark:hover:bg-background-dark/30 transition-colors">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="size-9 rounded-full bg-blue-100 dark:bg-blue-900 flex items-center justify-center text-blue-600 dark:text-blue-300 font-bold text-sm">
                                            MC</div>
                                        <div>
                                            <p class="font-semibold text-text-main dark:text-white">Mark Chen</p>
                                            <p class="text-xs text-text-muted">ID: #ZOO-1029</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-400">mark.c@zoo.assad.com</td>
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md text-xs font-medium bg-purple-50 text-purple-700 dark:bg-purple-900/30 dark:text-purple-300">
                                        <span class="material-symbols-outlined text-[14px]">shield_person</span> Admin
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-green-50 text-green-700 dark:bg-green-900/30 dark:text-green-400 border border-green-200 dark:border-green-800">
                                        <span class="size-1.5 rounded-full bg-green-500"></span> Active
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <button
                                        class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white text-sm font-medium hover:bg-gray-100 dark:hover:bg-gray-700 px-3 py-1.5 rounded-lg transition-colors">
                                        Edit
                                    </button>
                                </td>
                            </tr>
                            <!-- Row 3: Emily Doe (Inactive Staff) -->
                            <tr class="group hover:bg-gray-50 dark:hover:bg-background-dark/30 transition-colors">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="size-9 rounded-full bg-cover bg-center"
                                            data-alt="Portrait of Emily Doe"
                                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDYAY7uoZDiCUpM4yl-6NM_wK_5ja4_aPIRJrAUWwfUgaaOBU4eHueI2FxBIVzjGtYt_ltn0Pp6_5AnCSZwJMl7dQdr_ZfDAb83ppkWIEADBHwy6vEInq-IF9TOoCQcC4v9Hq8jmMIouZUsVw2355k0bfs44K327Y_D5-p_x9mp5khHaWGd7c-ZBRaOgpTVYP9YG2W-sOjDFWo8OJNK8ZP6J8J2vM_YnwyBXyGqKMoaDil-2ZS9s9cYrrNNc4__no1YuhJ_zy1jg-s");'>
                                        </div>
                                        <div>
                                            <p class="font-semibold text-text-main dark:text-white">Emily Doe</p>
                                            <p class="text-xs text-text-muted">ID: #ZOO-3392</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-400">emily.d@zoo.assad.com
                                </td>
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md text-xs font-medium bg-gray-100 text-gray-700 dark:bg-gray-800 dark:text-gray-300">
                                        <span class="material-symbols-outlined text-[14px]">badge</span> Staff
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-600 dark:bg-gray-800 dark:text-gray-400 border border-gray-200 dark:border-gray-700">
                                        <span class="size-1.5 rounded-full bg-gray-400"></span> Inactive
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <button
                                        class="text-primary hover:text-primary-dark font-bold text-sm hover:bg-primary/10 px-3 py-1.5 rounded-lg transition-colors"
                                        onclick="confirm('Activate Emily Doe?')">
                                        Activate
                                    </button>
                                </td>
                            </tr>
                            <!-- Row 4: David Smith (Pending Guide) -->
                            <tr
                                class="group hover:bg-gray-50 dark:hover:bg-background-dark/30 transition-colors bg-yellow-50/30 dark:bg-yellow-900/5">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="size-9 rounded-full bg-orange-100 dark:bg-orange-900 flex items-center justify-center text-orange-600 dark:text-orange-300 font-bold text-sm">
                                            DS</div>
                                        <div>
                                            <p class="font-semibold text-text-main dark:text-white">David Smith</p>
                                            <p class="text-xs text-text-muted">ID: #APP-9921</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-400">david.s@zoo.assad.com
                                </td>
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md text-xs font-medium bg-blue-50 text-blue-700 dark:bg-blue-900/30 dark:text-blue-300 opacity-75">
                                        <span class="material-symbols-outlined text-[14px]">tour</span> Guide
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-yellow-50 text-yellow-700 dark:bg-yellow-900/30 dark:text-yellow-400 border border-yellow-200 dark:border-yellow-800 animate-pulse">
                                        <span class="material-symbols-outlined text-[14px]">hourglass_empty</span>
                                        Pending
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <button
                                        class="bg-primary hover:bg-primary-dark text-black text-xs font-bold px-4 py-2 rounded-lg shadow-sm hover:shadow transition-all transform active:scale-95"
                                        onclick="confirm('Approve David Smith as Guide?')">
                                        Approve Guide
                                    </button>
                                </td>
                            </tr>
                            <!-- Row 5: Lisa Ray (Vet Assistant) -->
                            <tr class="group hover:bg-gray-50 dark:hover:bg-background-dark/30 transition-colors">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="size-9 rounded-full bg-cover bg-center"
                                            data-alt="Portrait of Lisa Ray"
                                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDUiaLQTnsH-deilQhTuQ0RjXb8qPITRLFvSmP3VoqzBz9JWK_7uNGF5E2iZ7Df5gZ5fPV0O5gZV9_eQsp9ywH_glnRfhAHTaVzyFveM37Sve2l44r0tq9iSiiXFkPq6XiSVAxpwlXBRxDmIJJeQmvF4FpBcGxxOnUaNF3TGRsxjjH-6kRTq7FJ4nBjqHY4HnukAUTIBQ-ycHKjgxQWR8j6ljtl5Etbsx1kucLQJcLIkW6bPqNS6_5ctVMlTqKUSehUWsBGxIj4MWk");'>
                                        </div>
                                        <div>
                                            <p class="font-semibold text-text-main dark:text-white">Lisa Ray</p>
                                            <p class="text-xs text-text-muted">ID: #ZOO-4451</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-400">lisa.r@zoo.assad.com</td>
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md text-xs font-medium bg-teal-50 text-teal-700 dark:bg-teal-900/30 dark:text-teal-300">
                                        <span class="material-symbols-outlined text-[14px]">medical_services</span> Vet
                                        Assistant
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-green-50 text-green-700 dark:bg-green-900/30 dark:text-green-400 border border-green-200 dark:border-green-800">
                                        <span class="size-1.5 rounded-full bg-green-500"></span> Active
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <button
                                        class="text-red-600 hover:text-red-700 dark:text-red-400 dark:hover:text-red-300 text-sm font-bold hover:bg-red-50 dark:hover:bg-red-900/20 px-3 py-1.5 rounded-lg transition-colors"
                                        onclick="confirm('Deactivate Lisa Ray?')">
                                        Deactivate
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Pagination -->
                <div class="flex items-center justify-between px-6 py-4 border-t border-gray-100 dark:border-[#2a4030]">
                    <p class="text-sm text-gray-600 dark:text-gray-400">
                        Showing <span class="font-medium text-text-main dark:text-white">1</span> to <span
                            class="font-medium text-text-main dark:text-white">5</span> of <span
                            class="font-medium text-text-main dark:text-white">124</span> results
                    </p>
                    <div class="flex gap-2">
                        <button
                            class="px-3 py-1 rounded-lg border border-gray-200 dark:border-gray-700 text-sm font-medium text-gray-600 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-800 disabled:opacity-50"
                            disabled="">Previous</button>
                        <button
                            class="px-3 py-1 rounded-lg border border-gray-200 dark:border-gray-700 text-sm font-medium text-gray-600 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-800">Next</button>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>