<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Manage Habitats - Zoo ASSAD</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&amp;family=Noto+Sans:wght@400;500;600;700&amp;display=swap"
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
    <!-- Theme Configuration -->
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#36e27b",
                        "background-light": "#f6f8f7",
                        "background-dark": "#112117",
                    },
                    fontFamily: {
                        "display": ["Space Grotesk", "sans-serif"],
                        "body": ["Noto Sans", "sans-serif"],
                    },
                    borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
                },
            },
        }
    </script>
</head>

<body
    class="bg-background-light dark:bg-background-dark text-[#111714] dark:text-white font-display min-h-screen flex flex-col overflow-x-hidden">
    <!-- Top Navigation -->
    <header class="w-full border-b border-gray-200 dark:border-gray-800 bg-white dark:bg-[#1a2e22] sticky top-0 z-50">
        <div class="px-6 md:px-10 py-3 flex items-center justify-between">
            <div class="flex items-center gap-4">
                <div class="size-8 text-primary flex items-center justify-center">
                    <span class="material-symbols-outlined text-3xl">pets</span>
                </div>
                <h2 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">Zoo ASSAD</h2>
            </div>
            <nav class="hidden md:flex items-center gap-8">
                <a class="text-sm font-medium hover:text-primary transition-colors text-gray-600 dark:text-gray-300"
                    href="#">Dashboard</a>
                <a class="text-sm font-medium hover:text-primary transition-colors text-gray-600 dark:text-gray-300"
                    href="#">Animals</a>
                <a class="text-sm font-medium text-primary font-bold" href="#">Habitats</a>
                <a class="text-sm font-medium hover:text-primary transition-colors text-gray-600 dark:text-gray-300"
                    href="#">Staff</a>
            </nav>
            <div class="flex items-center gap-4">
                <button class="md:hidden text-gray-600 dark:text-gray-300">
                    <span class="material-symbols-outlined">menu</span>
                </button>
                <div class="bg-center bg-no-repeat bg-cover rounded-full size-10 border-2 border-primary/20"
                    data-alt="Profile picture of logged in admin user"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAP6akvW4AOJjIDJrwGEz0eppoFwEHRgt0vsa84z-tjf9gh6HMWdl7X40T_gMDrlxT-wRx7p6SKAPjzoLMnvr8UrJg-rU6iDhysJQtkVFtqu4chGo9wwcLghrS6IknMpHjztUh3-eg_8POwI2HOtfsVla8fdREK97LVVMov-0uWbboJDPpknZogxH27AzbxqWYL0BGJ4rhdzx7tS8Zd3QIHOiPd6D4eyXKJxvmbIGTMaY5GZGLjB304lN1nfXeCdFXkABUI486IlRs");'>
                </div>
            </div>
        </div>
    </header>
    <main class="flex-1 flex flex-col items-center py-8 px-4 md:px-10 lg:px-40">
        <div class="w-full max-w-6xl flex flex-col gap-6">
            <!-- Breadcrumbs -->
            <nav class="flex items-center gap-2 text-sm text-gray-500 dark:text-gray-400">
                <a class="hover:text-primary transition-colors" href="#">Home</a>
                <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                <a class="hover:text-primary transition-colors" href="#">Management</a>
                <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                <span class="text-gray-900 dark:text-white font-medium">Habitats</span>
            </nav>
            <!-- Page Heading & Actions -->
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
                <div class="flex flex-col gap-1">
                    <h1 class="text-3xl md:text-4xl font-bold tracking-tight text-gray-900 dark:text-white">Habitat
                        Administration</h1>
                    <p class="text-gray-500 dark:text-gray-400 text-base">Manage and oversee zoo habitat configurations
                        and zones.</p>
                </div>
                <button
                    class="bg-primary hover:bg-green-400 text-[#0d331a] transition-colors h-11 px-6 rounded-lg font-bold text-sm flex items-center gap-2 shadow-sm shadow-green-500/20"
                    onclick="alert('Simulated form modal opened.')">
                    <span class="material-symbols-outlined">add</span>
                    Add New Habitat
                </button>
            </div>
            <!-- Search Filter -->
            <div class="w-full md:max-w-md">
                <div
                    class="relative flex items-center w-full h-12 rounded-lg bg-white dark:bg-[#1a2e22] border border-gray-200 dark:border-gray-700 shadow-sm overflow-hidden focus-within:ring-2 focus-within:ring-primary focus-within:border-primary transition-all">
                    <div class="grid place-items-center h-full w-12 text-gray-400 dark:text-gray-500">
                        <span class="material-symbols-outlined">search</span>
                    </div>
                    <input
                        class="peer h-full w-full outline-none text-sm text-gray-700 dark:text-gray-200 pr-2 bg-transparent placeholder-gray-400 dark:placeholder-gray-500 font-normal"
                        id="search" placeholder="Search habitats by name or zone..." type="text" />
                </div>
            </div>
            <!-- Habitats Table -->
            <div
                class="w-full overflow-hidden rounded-xl border border-gray-200 dark:border-gray-800 bg-white dark:bg-[#1a2e22] shadow-sm">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="border-b border-gray-100 dark:border-gray-700/50 bg-gray-50/50 dark:bg-white/5">
                                <th
                                    class="p-4 text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400 w-1/4">
                                    Name</th>
                                <th
                                    class="p-4 text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400 w-1/6">
                                    Climate Type</th>
                                <th
                                    class="p-4 text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400 w-1/6">
                                    Zone</th>
                                <th
                                    class="p-4 text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400 w-1/3">
                                    Description</th>
                                <th
                                    class="p-4 text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400 w-24 text-right">
                                    Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100 dark:divide-gray-800">
                            <!-- Row 1 -->
                            <tr class="group hover:bg-primary/5 transition-colors">
                                <td class="p-4">
                                    <div class="flex items-center gap-3">
                                        <div class="size-10 rounded-lg bg-cover bg-center shrink-0"
                                            data-alt="Savanna landscape with dry grass and acacia trees"
                                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDEzk7Z35ezC7-ta-ieLIDon1OJwXkgraMf7lqpnCox-Tz0TN_vxufUVxav0Qpx3uVUCZZlxtoC5d5EAn5za3WAAdTiUEpCmxWniToVpnmscAP3GwuCUGEhGNH31EA8DA8HAtpIesodpB3HYEF-e01J9hdh5NpLEvUtgVtf1GueSlMOguswFsLRy_fkJZvfLe3FsSAg8gIJ1N063_p7ZuEEhv-qhmLwD90_GElMczDndbu-BKfLO6qBlMecklTa88E2VDenGzTHQ18");'>
                                        </div>
                                        <div>
                                            <p class="font-bold text-gray-900 dark:text-gray-100">Savanna Plains</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-4">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800 dark:bg-yellow-900/30 dark:text-yellow-300">
                                        Arid
                                    </span>
                                </td>
                                <td class="p-4 text-sm text-gray-600 dark:text-gray-300">Zone A</td>
                                <td class="p-4 text-sm text-gray-500 dark:text-gray-400 line-clamp-1">Open grassland for
                                    lions and giraffes.</td>
                                <td class="p-4">
                                    <div class="flex justify-end gap-2">
                                        <button
                                            class="p-2 text-gray-400 hover:text-primary hover:bg-primary/10 rounded-lg transition-colors"
                                            onclick="alert('Simulated form modal opened.')" title="Edit">
                                            <span class="material-symbols-outlined text-[20px]">edit</span>
                                        </button>
                                        <button
                                            class="p-2 text-gray-400 hover:text-red-500 hover:bg-red-50 dark:hover:bg-red-900/20 rounded-lg transition-colors"
                                            onclick="confirm('Are you sure you want to remove this habitat?')"
                                            title="Delete">
                                            <span class="material-symbols-outlined text-[20px]">delete</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Row 2 -->
                            <tr class="group hover:bg-primary/5 transition-colors">
                                <td class="p-4">
                                    <div class="flex items-center gap-3">
                                        <div class="size-10 rounded-lg bg-cover bg-center shrink-0"
                                            data-alt="Dense green tropical rainforest foliage"
                                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAw0Zq4fzm5KbOF27gVEcnBDGSItDyujRl_2nK0NjuTeIsPxv0vG2ZbAs8441cd0Qj-NLzA_VwUf0YEjoQ5obLapxUexFfd5GibLtZtFXdWwuod0gxjeeW4It1fi8hlpZG5PsCS5dAGH9Ryg22Jt-d5wsGOmFu7A5adMXPLBzifAVZ3zWnmcq6MV0P08OXdEnu2PXm_5CRYJs_MmfGRivJfenLiEpIUQ7HwNTnWh6dbN53V2sZnFIXzaZchn_wIB4WoroMHtia3ewI");'>
                                        </div>
                                        <div>
                                            <p class="font-bold text-gray-900 dark:text-gray-100">Amazon Rainforest</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-4">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-300">
                                        Tropical
                                    </span>
                                </td>
                                <td class="p-4 text-sm text-gray-600 dark:text-gray-300">Zone B</td>
                                <td class="p-4 text-sm text-gray-500 dark:text-gray-400 line-clamp-1">Dense vegetation
                                    and high humidity.</td>
                                <td class="p-4">
                                    <div class="flex justify-end gap-2">
                                        <button
                                            class="p-2 text-gray-400 hover:text-primary hover:bg-primary/10 rounded-lg transition-colors"
                                            onclick="alert('Simulated form modal opened.')" title="Edit">
                                            <span class="material-symbols-outlined text-[20px]">edit</span>
                                        </button>
                                        <button
                                            class="p-2 text-gray-400 hover:text-red-500 hover:bg-red-50 dark:hover:bg-red-900/20 rounded-lg transition-colors"
                                            onclick="confirm('Are you sure you want to remove this habitat?')"
                                            title="Delete">
                                            <span class="material-symbols-outlined text-[20px]">delete</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Row 3 -->
                            <tr class="group hover:bg-primary/5 transition-colors">
                                <td class="p-4">
                                    <div class="flex items-center gap-3">
                                        <div class="size-10 rounded-lg bg-cover bg-center shrink-0"
                                            data-alt="Snowy white arctic landscape with ice"
                                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCTuVEpGYE3OUGJ4amNXOyyR2V5xbWIGLfsUIFJPTF6D0gOwX4efud4WlCEOq1-eWGVDE67rPMPKDPMx9Ru7U6YKFI-N02cljcJZU5qoqkdB5b9sE5DY6DbKuolA3cDz61S6QGgiq_JeAOqY0X5vi4Ttit_NyOZQIac9DG32ovOPsAs_Ii_FRT3B4VDycRM8eGpH-kM2leDIpGgMKQX6nYP01Te2bLiMksFGfavzYhx3hoW1lJ1ufvab-_iagi-JHjc7mVIcCpLe8E");'>
                                        </div>
                                        <div>
                                            <p class="font-bold text-gray-900 dark:text-gray-100">Arctic Tundra</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-4">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800 dark:bg-blue-900/30 dark:text-blue-300">
                                        Polar
                                    </span>
                                </td>
                                <td class="p-4 text-sm text-gray-600 dark:text-gray-300">Zone C</td>
                                <td class="p-4 text-sm text-gray-500 dark:text-gray-400 line-clamp-1">Sub-zero enclosure
                                    for polar bears.</td>
                                <td class="p-4">
                                    <div class="flex justify-end gap-2">
                                        <button
                                            class="p-2 text-gray-400 hover:text-primary hover:bg-primary/10 rounded-lg transition-colors"
                                            onclick="alert('Simulated form modal opened.')" title="Edit">
                                            <span class="material-symbols-outlined text-[20px]">edit</span>
                                        </button>
                                        <button
                                            class="p-2 text-gray-400 hover:text-red-500 hover:bg-red-50 dark:hover:bg-red-900/20 rounded-lg transition-colors"
                                            onclick="confirm('Are you sure you want to remove this habitat?')"
                                            title="Delete">
                                            <span class="material-symbols-outlined text-[20px]">delete</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Row 4 -->
                            <tr class="group hover:bg-primary/5 transition-colors">
                                <td class="p-4">
                                    <div class="flex items-center gap-3">
                                        <div class="size-10 rounded-lg bg-cover bg-center shrink-0"
                                            data-alt="Tall green bamboo forest"
                                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC_TXJJdvqgiLERdGYBAPfKnyP_iiwhNm1wcilf7WAKyNfiWx4GI0GSG4SkIptsjRiQOFIFnJe2vQagc2yGfuMtTwOWOx-7ea9ZhA6Rfd2mgYhEN_30Ra02S0ObYZNfUKihUzj15AFC2B99BpDdHi6FHgLQLcTmi1OHtm-5YWU_Apu6wdYPeXUgBubTgkbrnoHUrYtG66p5jxjcMu0n9eFe0kpCemNiWe-nZJhG2u_oHhqS1NIOKzgDXSHCAPSNajwsP6uEisIewo4");'>
                                        </div>
                                        <div>
                                            <p class="font-bold text-gray-900 dark:text-gray-100">Bamboo Forest</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-4">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-teal-100 text-teal-800 dark:bg-teal-900/30 dark:text-teal-300">
                                        Temperate
                                    </span>
                                </td>
                                <td class="p-4 text-sm text-gray-600 dark:text-gray-300">Zone D</td>
                                <td class="p-4 text-sm text-gray-500 dark:text-gray-400 line-clamp-1">Mist-covered area
                                    for pandas.</td>
                                <td class="p-4">
                                    <div class="flex justify-end gap-2">
                                        <button
                                            class="p-2 text-gray-400 hover:text-primary hover:bg-primary/10 rounded-lg transition-colors"
                                            onclick="alert('Simulated form modal opened.')" title="Edit">
                                            <span class="material-symbols-outlined text-[20px]">edit</span>
                                        </button>
                                        <button
                                            class="p-2 text-gray-400 hover:text-red-500 hover:bg-red-50 dark:hover:bg-red-900/20 rounded-lg transition-colors"
                                            onclick="confirm('Are you sure you want to remove this habitat?')"
                                            title="Delete">
                                            <span class="material-symbols-outlined text-[20px]">delete</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Pagination / Table Footer -->
                <div
                    class="border-t border-gray-100 dark:border-gray-800 bg-gray-50 dark:bg-white/5 p-4 flex flex-col md:flex-row items-center justify-between gap-4">
                    <span class="text-sm text-gray-500 dark:text-gray-400">Showing 4 of 12 habitats</span>
                    <div class="flex items-center gap-2">
                        <button
                            class="px-3 py-1 rounded-md text-sm font-medium text-gray-500 bg-white border border-gray-200 hover:bg-gray-50 disabled:opacity-50 dark:bg-[#1a2e22] dark:border-gray-700 dark:text-gray-300"
                            disabled="">Previous</button>
                        <button
                            class="px-3 py-1 rounded-md text-sm font-medium text-gray-500 bg-white border border-gray-200 hover:bg-gray-50 dark:bg-[#1a2e22] dark:border-gray-700 dark:text-gray-300">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>