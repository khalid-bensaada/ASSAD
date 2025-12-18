<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Zoo ASSAD - View Reservations</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Spline+Sans:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <!-- Material Symbols -->
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <!-- Tailwind Config -->
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#36e27b",
                        "background-light": "#f6f8f7",
                        "background-dark": "#112117",
                        "surface-light": "#ffffff",
                        "surface-dark": "#1a2c22",
                        "text-main": "#111714",
                        "text-secondary": "#648772",
                        "danger": "#ef4444",
                    },
                    fontFamily: {
                        "display": ["Spline Sans", "sans-serif"]
                    },
                    borderRadius: { "DEFAULT": "1rem", "lg": "2rem", "xl": "3rem", "full": "9999px" },
                },
            },
        }
    </script>
    <style>
        body {
            font-family: "Spline Sans", sans-serif;
        }
    </style>
</head>

<body
    class="bg-background-light dark:bg-background-dark text-text-main min-h-screen flex flex-col font-display antialiased transition-colors duration-200">
    <!-- Navigation -->
    <header
        class="sticky top-0 z-50 bg-surface-light/90 dark:bg-surface-dark/90 backdrop-blur-md border-b border-gray-100 dark:border-gray-800">
        <div class="px-4 md:px-10 py-3 flex items-center justify-between max-w-[1440px] mx-auto w-full">
            <div class="flex items-center gap-4">
                <div class="size-8 text-primary">
                    <svg fill="currentColor" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M24 4C25.7818 14.2173 33.7827 22.2182 44 24C33.7827 25.7818 25.7818 33.7827 24 44C22.2182 33.7827 14.2173 25.7818 4 24C14.2173 22.2182 22.2182 14.2173 24 4Z">
                        </path>
                    </svg>
                </div>
                <h2 class="text-text-main dark:text-white text-xl font-bold tracking-tight">Zoo ASSAD</h2>
            </div>
            <div class="flex items-center gap-6">
                <nav class="hidden md:flex gap-6">
                    <a class="text-text-main dark:text-gray-200 text-sm font-medium hover:text-primary transition-colors"
                        href="#">Home</a>
                    <a class="text-text-main dark:text-gray-200 text-sm font-medium hover:text-primary transition-colors"
                        href="#">Tours</a>
                </nav>
                <button
                    class="bg-primary hover:bg-green-400 text-black px-6 py-2 rounded-full text-sm font-bold transition-all shadow-lg shadow-primary/20 flex items-center gap-2">
                    <span class="material-symbols-outlined text-[18px]">logout</span>
                    <span class="hidden sm:inline">Logout</span>
                </button>
            </div>
        </div>
    </header>
    <main class="flex-1 w-full max-w-[1440px] mx-auto px-4 md:px-10 py-8 md:py-12 flex flex-col gap-8">
        <!-- Page Heading & Stats -->
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6">
            <div class="flex flex-col gap-2 max-w-2xl">
                <div class="flex items-center gap-2 text-primary font-medium text-sm mb-1">
                    <span class="material-symbols-outlined text-[20px]">admin_panel_settings</span>
                    <span>Guide Dashboard</span>
                </div>
                <h1 class="text-text-main dark:text-white text-4xl md:text-5xl font-black tracking-tight leading-tight">
                    Current Reservations
                </h1>
                <p class="text-text-secondary dark:text-gray-400 text-lg leading-normal">
                    Manage upcoming tour bookings, verify visitor details, and update reservation status.
                </p>
            </div>
            <!-- Quick Stats Cards -->
            <div class="flex gap-4 overflow-x-auto pb-2 md:pb-0">
                <div
                    class="bg-white dark:bg-surface-dark p-4 rounded-2xl border border-gray-100 dark:border-gray-800 min-w-[140px] flex flex-col gap-1 shadow-sm">
                    <span
                        class="text-text-secondary dark:text-gray-500 text-xs font-bold uppercase tracking-wider">Today</span>
                    <span class="text-3xl font-black text-text-main dark:text-white">24</span>
                    <span class="text-xs text-primary font-medium">Coming up</span>
                </div>
                <div
                    class="bg-white dark:bg-surface-dark p-4 rounded-2xl border border-gray-100 dark:border-gray-800 min-w-[140px] flex flex-col gap-1 shadow-sm">
                    <span
                        class="text-text-secondary dark:text-gray-500 text-xs font-bold uppercase tracking-wider">Pending</span>
                    <span class="text-3xl font-black text-text-main dark:text-white">8</span>
                    <span class="text-xs text-orange-400 font-medium">Action needed</span>
                </div>
            </div>
        </div>
        <!-- Controls Section: Search & Filters -->
        <div
            class="bg-surface-light dark:bg-surface-dark rounded-3xl p-4 md:p-6 shadow-sm border border-gray-100 dark:border-gray-800 flex flex-col lg:flex-row gap-4 items-center justify-between">
            <!-- Search Bar -->
            <div class="w-full lg:max-w-md relative group">
                <div
                    class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 group-focus-within:text-primary transition-colors">
                    <span class="material-symbols-outlined">search</span>
                </div>
                <input
                    class="w-full h-12 md:h-14 pl-12 pr-4 bg-gray-100 dark:bg-gray-800/50 border-none rounded-2xl text-text-main dark:text-white placeholder:text-gray-400 focus:ring-2 focus:ring-primary/50 focus:bg-white dark:focus:bg-gray-800 transition-all outline-none"
                    placeholder="Search by visitor name or booking ID..." type="text" />
            </div>
            <!-- Filters -->
            <div class="flex items-center gap-3 w-full lg:w-auto overflow-x-auto pb-2 lg:pb-0 no-scrollbar">
                <span class="text-sm font-medium text-text-secondary whitespace-nowrap hidden sm:block">Filter
                    by:</span>
                <button
                    class="flex items-center gap-2 h-10 px-4 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-full hover:border-primary dark:hover:border-primary hover:text-primary transition-all whitespace-nowrap group">
                    <span
                        class="material-symbols-outlined text-[18px] text-gray-500 group-hover:text-primary">tour</span>
                    <span class="text-sm font-medium text-text-main dark:text-gray-200 group-hover:text-primary">All
                        Tours</span>
                    <span class="material-symbols-outlined text-[18px] text-gray-400">arrow_drop_down</span>
                </button>
                <button
                    class="flex items-center gap-2 h-10 px-4 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-full hover:border-primary dark:hover:border-primary hover:text-primary transition-all whitespace-nowrap group">
                    <span
                        class="material-symbols-outlined text-[18px] text-gray-500 group-hover:text-primary">calendar_today</span>
                    <span
                        class="text-sm font-medium text-text-main dark:text-gray-200 group-hover:text-primary">Today</span>
                    <span class="material-symbols-outlined text-[18px] text-gray-400">arrow_drop_down</span>
                </button>
                <button
                    class="flex items-center gap-2 h-10 px-4 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-full hover:border-primary dark:hover:border-primary hover:text-primary transition-all whitespace-nowrap group">
                    <span
                        class="material-symbols-outlined text-[18px] text-gray-500 group-hover:text-primary">filter_list</span>
                    <span
                        class="text-sm font-medium text-text-main dark:text-gray-200 group-hover:text-primary">Status</span>
                    <span class="material-symbols-outlined text-[18px] text-gray-400">arrow_drop_down</span>
                </button>
            </div>
        </div>
        <!-- Reservations Table -->
        <div
            class="bg-white dark:bg-surface-dark rounded-3xl shadow-sm border border-gray-100 dark:border-gray-800 overflow-hidden flex-1">
            <div class="overflow-x-auto">
                <table class="w-full min-w-[900px] border-collapse text-left">
                    <thead>
                        <tr class="bg-gray-50/50 dark:bg-gray-800/30 border-b border-gray-100 dark:border-gray-800">
                            <th
                                class="py-5 px-6 text-sm font-bold text-text-secondary dark:text-gray-400 uppercase tracking-wider w-[25%]">
                                Visitor Details</th>
                            <th
                                class="py-5 px-6 text-sm font-bold text-text-secondary dark:text-gray-400 uppercase tracking-wider w-[15%]">
                                Date</th>
                            <th
                                class="py-5 px-6 text-sm font-bold text-text-secondary dark:text-gray-400 uppercase tracking-wider w-[20%]">
                                Tour Type</th>
                            <th
                                class="py-5 px-6 text-sm font-bold text-text-secondary dark:text-gray-400 uppercase tracking-wider w-[15%]">
                                People</th>
                            <th
                                class="py-5 px-6 text-sm font-bold text-text-secondary dark:text-gray-400 uppercase tracking-wider w-[10%]">
                                Status</th>
                            <th
                                class="py-5 px-6 text-sm font-bold text-text-secondary dark:text-gray-400 uppercase tracking-wider w-[15%] text-right">
                                Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 dark:divide-gray-800">
                        <!-- Row 1: Pending -->
                        <tr class="group hover:bg-gray-50 dark:hover:bg-gray-800/40 transition-colors">
                            <td class="py-4 px-6">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="size-10 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center font-bold text-sm">
                                        AJ</div>
                                    <div>
                                        <div class="font-bold text-text-main dark:text-white">Alice Johnson</div>
                                        <div class="text-xs text-text-secondary">#RES-29381</div>
                                    </div>
                                </div>
                            </td>
                            <td class="py-4 px-6">
                                <div class="flex items-center gap-2 text-text-main dark:text-gray-200">
                                    <span
                                        class="material-symbols-outlined text-[18px] text-gray-400">calendar_month</span>
                                    <span class="font-medium text-sm">Oct 24, 2023</span>
                                </div>
                            </td>
                            <td class="py-4 px-6">
                                <div
                                    class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-orange-50 dark:bg-orange-900/20 text-orange-700 dark:text-orange-300 text-sm font-semibold">
                                    <span class="material-symbols-outlined text-[16px]">pets</span>
                                    Lion Encounter
                                </div>
                            </td>
                            <td class="py-4 px-6">
                                <span class="text-text-secondary text-sm font-medium">4 Adults</span>
                            </td>
                            <td class="py-4 px-6">
                                <span
                                    class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-yellow-100 dark:bg-yellow-900/30 text-yellow-800 dark:text-yellow-200 text-xs font-bold uppercase tracking-wide">
                                    <span class="size-1.5 rounded-full bg-yellow-500 animate-pulse"></span>
                                    Pending
                                </span>
                            </td>
                            <td class="py-4 px-6">
                                <div class="flex items-center justify-end gap-2">
                                    <button
                                        class="size-9 rounded-full bg-gray-100 dark:bg-gray-700 hover:bg-red-100 hover:text-red-600 dark:hover:bg-red-900/30 dark:hover:text-red-400 text-gray-500 flex items-center justify-center transition-all"
                                        title="Cancel">
                                        <span class="material-symbols-outlined text-[20px]">close</span>
                                    </button>
                                    <button
                                        class="h-9 px-4 rounded-full bg-primary hover:bg-green-400 text-black text-sm font-bold flex items-center gap-1 transition-all shadow-md shadow-primary/20"
                                        title="Confirm">
                                        <span class="material-symbols-outlined text-[18px]">check</span>
                                        Confirm
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <!-- Row 2: Confirmed -->
                        <tr class="group hover:bg-gray-50 dark:hover:bg-gray-800/40 transition-colors">
                            <td class="py-4 px-6">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="size-10 rounded-full bg-purple-100 text-purple-600 flex items-center justify-center font-bold text-sm">
                                        BS</div>
                                    <div>
                                        <div class="font-bold text-text-main dark:text-white">Bob Smith</div>
                                        <div class="text-xs text-text-secondary">#RES-29382</div>
                                    </div>
                                </div>
                            </td>
                            <td class="py-4 px-6">
                                <div class="flex items-center gap-2 text-text-main dark:text-gray-200">
                                    <span
                                        class="material-symbols-outlined text-[18px] text-gray-400">calendar_month</span>
                                    <span class="font-medium text-sm">Oct 25, 2023</span>
                                </div>
                            </td>
                            <td class="py-4 px-6">
                                <div
                                    class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-blue-50 dark:bg-blue-900/20 text-blue-700 dark:text-blue-300 text-sm font-semibold">
                                    <span class="material-symbols-outlined text-[16px]">water_drop</span>
                                    Penguin Feed
                                </div>
                            </td>
                            <td class="py-4 px-6">
                                <span class="text-text-secondary text-sm font-medium">2 Adults, 2 Kids</span>
                            </td>
                            <td class="py-4 px-6">
                                <span
                                    class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-green-100 dark:bg-green-900/30 text-green-800 dark:text-green-200 text-xs font-bold uppercase tracking-wide">
                                    Confirmed
                                </span>
                            </td>
                            <td class="py-4 px-6">
                                <div class="flex items-center justify-end gap-2">
                                    <button
                                        class="size-9 rounded-full hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-400 flex items-center justify-center transition-all"
                                        title="More Options">
                                        <span class="material-symbols-outlined text-[20px]">more_vert</span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <!-- Row 3: Cancelled -->
                        <tr
                            class="group hover:bg-gray-50 dark:hover:bg-gray-800/40 transition-colors opacity-60 hover:opacity-100">
                            <td class="py-4 px-6">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="size-10 rounded-full bg-gray-200 text-gray-600 flex items-center justify-center font-bold text-sm">
                                        CD</div>
                                    <div>
                                        <div
                                            class="font-bold text-text-main dark:text-white line-through decoration-gray-400">
                                            Charlie Davis</div>
                                        <div class="text-xs text-text-secondary">#RES-29383</div>
                                    </div>
                                </div>
                            </td>
                            <td class="py-4 px-6">
                                <div class="flex items-center gap-2 text-text-main dark:text-gray-200">
                                    <span
                                        class="material-symbols-outlined text-[18px] text-gray-400">calendar_month</span>
                                    <span class="font-medium text-sm">Oct 26, 2023</span>
                                </div>
                            </td>
                            <td class="py-4 px-6">
                                <div
                                    class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 text-sm font-semibold">
                                    <span class="material-symbols-outlined text-[16px]">forest</span>
                                    Safari Ride
                                </div>
                            </td>
                            <td class="py-4 px-6">
                                <span class="text-text-secondary text-sm font-medium">1 Adult</span>
                            </td>
                            <td class="py-4 px-6">
                                <span
                                    class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-gray-100 dark:bg-gray-700 text-gray-500 dark:text-gray-400 text-xs font-bold uppercase tracking-wide">
                                    Cancelled
                                </span>
                            </td>
                            <td class="py-4 px-6">
                                <div class="flex items-center justify-end gap-2">
                                    <span class="text-xs text-gray-400 italic">No actions available</span>
                                </div>
                            </td>
                        </tr>
                        <!-- Row 4: Pending -->
                        <tr class="group hover:bg-gray-50 dark:hover:bg-gray-800/40 transition-colors">
                            <td class="py-4 px-6">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="size-10 rounded-full bg-pink-100 text-pink-600 flex items-center justify-center font-bold text-sm">
                                        DP</div>
                                    <div>
                                        <div class="font-bold text-text-main dark:text-white">Diana Prince</div>
                                        <div class="text-xs text-text-secondary">#RES-29384</div>
                                    </div>
                                </div>
                            </td>
                            <td class="py-4 px-6">
                                <div class="flex items-center gap-2 text-text-main dark:text-gray-200">
                                    <span
                                        class="material-symbols-outlined text-[18px] text-gray-400">calendar_month</span>
                                    <span class="font-medium text-sm">Oct 26, 2023</span>
                                </div>
                            </td>
                            <td class="py-4 px-6">
                                <div
                                    class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-orange-50 dark:bg-orange-900/20 text-orange-700 dark:text-orange-300 text-sm font-semibold">
                                    <span class="material-symbols-outlined text-[16px]">pets</span>
                                    Lion Encounter
                                </div>
                            </td>
                            <td class="py-4 px-6">
                                <span class="text-text-secondary text-sm font-medium">3 Adults</span>
                            </td>
                            <td class="py-4 px-6">
                                <span
                                    class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-yellow-100 dark:bg-yellow-900/30 text-yellow-800 dark:text-yellow-200 text-xs font-bold uppercase tracking-wide">
                                    <span class="size-1.5 rounded-full bg-yellow-500 animate-pulse"></span>
                                    Pending
                                </span>
                            </td>
                            <td class="py-4 px-6">
                                <div class="flex items-center justify-end gap-2">
                                    <button
                                        class="size-9 rounded-full bg-gray-100 dark:bg-gray-700 hover:bg-red-100 hover:text-red-600 dark:hover:bg-red-900/30 dark:hover:text-red-400 text-gray-500 flex items-center justify-center transition-all"
                                        title="Cancel">
                                        <span class="material-symbols-outlined text-[20px]">close</span>
                                    </button>
                                    <button
                                        class="h-9 px-4 rounded-full bg-primary hover:bg-green-400 text-black text-sm font-bold flex items-center gap-1 transition-all shadow-md shadow-primary/20"
                                        title="Confirm">
                                        <span class="material-symbols-outlined text-[18px]">check</span>
                                        Confirm
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <!-- Row 5: Confirmed -->
                        <tr class="group hover:bg-gray-50 dark:hover:bg-gray-800/40 transition-colors">
                            <td class="py-4 px-6">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="size-10 rounded-full bg-teal-100 text-teal-600 flex items-center justify-center font-bold text-sm">
                                        EW</div>
                                    <div>
                                        <div class="font-bold text-text-main dark:text-white">Evan Wright</div>
                                        <div class="text-xs text-text-secondary">#RES-29385</div>
                                    </div>
                                </div>
                            </td>
                            <td class="py-4 px-6">
                                <div class="flex items-center gap-2 text-text-main dark:text-gray-200">
                                    <span
                                        class="material-symbols-outlined text-[18px] text-gray-400">calendar_month</span>
                                    <span class="font-medium text-sm">Oct 27, 2023</span>
                                </div>
                            </td>
                            <td class="py-4 px-6">
                                <div
                                    class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-green-50 dark:bg-green-900/20 text-green-700 dark:text-green-300 text-sm font-semibold">
                                    <span class="material-symbols-outlined text-[16px]">visibility</span>
                                    Reptile House
                                </div>
                            </td>
                            <td class="py-4 px-6">
                                <span class="text-text-secondary text-sm font-medium">2 Adults</span>
                            </td>
                            <td class="py-4 px-6">
                                <span
                                    class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-green-100 dark:bg-green-900/30 text-green-800 dark:text-green-200 text-xs font-bold uppercase tracking-wide">
                                    Confirmed
                                </span>
                            </td>
                            <td class="py-4 px-6">
                                <div class="flex items-center justify-end gap-2">
                                    <button
                                        class="size-9 rounded-full hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-400 flex items-center justify-center transition-all"
                                        title="More Options">
                                        <span class="material-symbols-outlined text-[20px]">more_vert</span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Pagination -->
            <div
                class="bg-white dark:bg-surface-dark px-6 py-4 border-t border-gray-100 dark:border-gray-800 flex items-center justify-between">
                <span class="text-sm text-text-secondary dark:text-gray-400">Showing <span
                        class="font-bold text-text-main dark:text-white">1-5</span> of <span
                        class="font-bold text-text-main dark:text-white">24</span> reservations</span>
                <div class="flex items-center gap-2">
                    <button
                        class="size-8 rounded-full border border-gray-200 dark:border-gray-700 flex items-center justify-center text-gray-400 hover:text-text-main hover:border-gray-400 disabled:opacity-50 transition-all">
                        <span class="material-symbols-outlined text-[18px]">chevron_left</span>
                    </button>
                    <button
                        class="size-8 rounded-full bg-primary text-black font-bold text-sm flex items-center justify-center shadow-sm">1</button>
                    <button
                        class="size-8 rounded-full border border-gray-200 dark:border-gray-700 flex items-center justify-center text-text-secondary hover:text-text-main hover:border-gray-400 transition-all">2</button>
                    <button
                        class="size-8 rounded-full border border-gray-200 dark:border-gray-700 flex items-center justify-center text-text-secondary hover:text-text-main hover:border-gray-400 transition-all">3</button>
                    <span class="text-gray-400 text-sm">...</span>
                    <button
                        class="size-8 rounded-full border border-gray-200 dark:border-gray-700 flex items-center justify-center text-gray-400 hover:text-text-main hover:border-gray-400 transition-all">
                        <span class="material-symbols-outlined text-[18px]">chevron_right</span>
                    </button>
                </div>
            </div>
        </div>
    </main>
    <!-- Footer Simulation -->
    <footer class="mt-auto py-6 border-t border-gray-200 dark:border-gray-800 bg-surface-light dark:bg-surface-dark">
        <div class="max-w-[1440px] mx-auto px-10 text-center">
            <p class="text-sm text-text-secondary dark:text-gray-500">© 2023 Zoo ASSAD. All rights reserved. • Guide
                Portal v2.1</p>
        </div>
    </footer>
</body>

</html>