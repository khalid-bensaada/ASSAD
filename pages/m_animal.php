<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Manage Animals - Zoo ASSAD</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;700;900&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500;700&amp;display=swap"
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
    <!-- Theme Config -->
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#11d45f",
                        "primary-dark": "#0ea64a",
                        "background-light": "#f8fcfa",
                        "background-dark": "#102217",
                        "surface-light": "#ffffff",
                        "surface-dark": "#1c3024",
                        "text-main": "#0d1b13",
                        "text-secondary": "#4c9a6b",
                        "border-light": "#e7f3ec",
                        "border-dark": "#2a4234",
                    },
                    fontFamily: {
                        "display": ["Work Sans", "Noto Sans", "sans-serif"],
                        "body": ["Noto Sans", "sans-serif"],
                    },
                    borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
                },
            },
        }
    </script>
</head>

<body
    class="bg-background-light dark:bg-background-dark text-text-main dark:text-white font-display transition-colors duration-200">
    <div class="relative flex min-h-screen flex-col overflow-x-hidden">
        <!-- Top Navigation -->
        <header
            class="flex items-center justify-between whitespace-nowrap border-b border-solid border-border-light dark:border-border-dark px-10 py-3 bg-surface-light dark:bg-surface-dark sticky top-0 z-50">
            <div class="flex items-center gap-4 text-text-main dark:text-white">
                <div class="size-8 text-primary">
                    <svg class="w-full h-full" fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13.8261 17.4264C16.7203 18.1174 20.2244 18.5217 24 18.5217C27.7756 18.5217 31.2797 18.1174 34.1739 17.4264C36.9144 16.7722 39.9967 15.2331 41.3563 14.1648L24.8486 40.6391C24.4571 41.267 23.5429 41.267 23.1514 40.6391L6.64374 14.1648C8.00331 15.2331 11.0856 16.7722 13.8261 17.4264Z"
                            fill="currentColor"></path>
                        <path clip-rule="evenodd"
                            d="M39.998 12.236C39.9944 12.2537 39.9875 12.2845 39.9748 12.3294C39.9436 12.4399 39.8949 12.5741 39.8346 12.7175C39.8168 12.7597 39.7989 12.8007 39.7813 12.8398C38.5103 13.7113 35.9788 14.9393 33.7095 15.4811C30.9875 16.131 27.6413 16.5217 24 16.5217C20.3587 16.5217 17.0125 16.131 14.2905 15.4811C12.0012 14.9346 9.44505 13.6897 8.18538 12.8168C8.17384 12.7925 8.16216 12.767 8.15052 12.7408C8.09919 12.6249 8.05721 12.5114 8.02977 12.411C8.00356 12.3152 8.00039 12.2667 8.00004 12.2612C8.00004 12.261 8 12.2607 8.00004 12.2612C8.00004 12.2359 8.0104 11.9233 8.68485 11.3686C9.34546 10.8254 10.4222 10.2469 11.9291 9.72276C14.9242 8.68098 19.1919 8 24 8C28.8081 8 33.0758 8.68098 36.0709 9.72276C37.5778 10.2469 38.6545 10.8254 39.3151 11.3686C39.9006 11.8501 39.9857 12.1489 39.998 12.236ZM4.95178 15.2312L21.4543 41.6973C22.6288 43.5809 25.3712 43.5809 26.5457 41.6973L43.0534 15.223C43.0709 15.1948 43.0878 15.1662 43.104 15.1371L41.3563 14.1648C43.104 15.1371 43.1038 15.1374 43.104 15.1371L43.1051 15.135L43.1065 15.1325L43.1101 15.1261L43.1199 15.1082C43.1276 15.094 43.1377 15.0754 43.1497 15.0527C43.1738 15.0075 43.2062 14.9455 43.244 14.8701C43.319 14.7208 43.4196 14.511 43.5217 14.2683C43.6901 13.8679 44 13.0689 44 12.2609C44 10.5573 43.003 9.22254 41.8558 8.2791C40.6947 7.32427 39.1354 6.55361 37.385 5.94477C33.8654 4.72057 29.133 4 24 4C18.867 4 14.1346 4.72057 10.615 5.94478C8.86463 6.55361 7.30529 7.32428 6.14419 8.27911C4.99695 9.22255 3.99999 10.5573 3.99999 12.2609C3.99999 13.1275 4.29264 13.9078 4.49321 14.3607C4.60375 14.6102 4.71348 14.8196 4.79687 14.9689C4.83898 15.0444 4.87547 15.1065 4.9035 15.1529C4.91754 15.1762 4.92954 15.1957 4.93916 15.2111L4.94662 15.223L4.95178 15.2312ZM35.9868 18.996L24 38.22L12.0131 18.996C12.4661 19.1391 12.9179 19.2658 13.3617 19.3718C16.4281 20.1039 20.0901 20.5217 24 20.5217C27.9099 20.5217 31.5719 20.1039 34.6383 19.3718C35.082 19.2658 35.5339 19.1391 35.9868 18.996Z"
                            fill="currentColor" fill-rule="evenodd"></path>
                    </svg>
                </div>
                <h2 class="text-lg font-bold leading-tight tracking-[-0.015em]">Zoo ASSAD Admin</h2>
            </div>
            <div class="flex flex-1 justify-end gap-8">
                <div class="hidden md:flex items-center gap-9">
                    <a class="text-text-main dark:text-gray-300 text-sm font-medium leading-normal hover:text-primary transition-colors"
                        href="#">Dashboard</a>
                    <a class="text-primary text-sm font-bold leading-normal" href="#">Animals</a>
                    <a class="text-text-main dark:text-gray-300 text-sm font-medium leading-normal hover:text-primary transition-colors"
                        href="#">Habitats</a>
                    <a class="text-text-main dark:text-gray-300 text-sm font-medium leading-normal hover:text-primary transition-colors"
                        href="#">Staff</a>
                </div>
                <div class="flex items-center gap-4">
                    <button
                        class="flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary text-text-main text-sm font-bold leading-normal tracking-[0.015em] hover:bg-primary-dark transition-colors">
                        <span class="truncate">Logout</span>
                    </button>
                    <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 border-2 border-primary"
                        data-alt="Admin profile picture"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBDbsi97uiWI7IxnmTngu8Sqq4RydPMpjerWAgJy1RiViqhKHlSlsEWEvoy55ZeexU5b41UmVz0ED4_ukAeaTJmEmUnz5mcxaRx2-B1hv2vmeLopuu-Czq1CytPFkSZpLxerjKjM4HgGotVhRvfyaIEKKzlQMljeD3Ihosc8esjtkjLFPZy2jQCd6YhigBEz0E-PFPWwjScKvb6LLzRYRS_QRFB9098UYSJvCDeRQTiJBjGzYVpzAxvzUnhM52XWL8l4UZPrAjb0aM");'>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content Wrapper -->
        <div class="layout-container flex h-full grow flex-col">
            <div class="px-4 sm:px-10 lg:px-40 flex flex-1 justify-center py-5">
                <div class="layout-content-container flex flex-col max-w-[1200px] flex-1">
                    <!-- Breadcrumbs -->
                    <div class="flex flex-wrap gap-2 px-4 py-2">
                        <a class="text-text-secondary text-base font-medium leading-normal hover:underline"
                            href="#">Dashboard</a>
                        <span class="text-text-secondary text-base font-medium leading-normal">/</span>
                        <span class="text-text-main dark:text-white text-base font-medium leading-normal">Manage
                            Animals</span>
                    </div>
                    <!-- Page Heading & Actions -->
                    <div class="flex flex-col md:flex-row justify-between gap-6 px-4 py-4 items-start md:items-end">
                        <div class="flex flex-col gap-2">
                            <h1
                                class="text-text-main dark:text-white text-4xl font-black leading-tight tracking-[-0.033em]">
                                Animal Inventory</h1>
                            <p class="text-text-secondary text-base font-normal leading-normal max-w-lg">Manage and
                                oversee the zoo's animal collection, including health status, habitat location, and
                                species details.</p>
                        </div>
                        <button
                            class="flex shrink-0 min-w-[84px] cursor-pointer items-center justify-center gap-2 overflow-hidden rounded-lg h-10 px-6 bg-primary text-text-main text-sm font-bold leading-normal tracking-[0.015em] hover:bg-primary-dark transition-all shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                            <span class="material-symbols-outlined text-[20px]">add</span>
                            <span class="truncate">Add New Animal</span>
                        </button>
                    </div>
                    <!-- Search and Filter Bar -->
                    <div class="flex flex-col lg:flex-row gap-4 px-4 py-4 items-center">
                        <!-- Search -->
                        <div class="w-full lg:w-1/2">
                            <label class="flex flex-col h-12 w-full">
                                <div
                                    class="flex w-full flex-1 items-stretch rounded-lg h-full group focus-within:ring-2 focus-within:ring-primary">
                                    <div
                                        class="text-text-secondary flex border-none bg-border-light dark:bg-surface-dark items-center justify-center pl-4 rounded-l-lg border-r-0">
                                        <span class="material-symbols-outlined">search</span>
                                    </div>
                                    <input
                                        class="flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-text-main dark:text-white focus:outline-0 border-none bg-border-light dark:bg-surface-dark h-full placeholder:text-text-secondary px-4 rounded-l-none border-l-0 pl-2 text-base font-normal leading-normal"
                                        placeholder="Search animals by name, species, or country..." />
                                </div>
                            </label>
                        </div>
                        <!-- Chips / Filters -->
                        <div
                            class="w-full lg:w-1/2 flex gap-3 overflow-x-auto pb-2 lg:pb-0 justify-start lg:justify-end no-scrollbar">
                            <button
                                class="flex h-10 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-primary text-text-main font-bold pl-4 pr-3 border border-transparent shadow-sm">
                                <span class="text-sm">All Habitats</span>
                                <span class="material-symbols-outlined text-[20px]">check</span>
                            </button>
                            <button
                                class="flex h-10 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-border-light dark:bg-surface-dark dark:text-gray-200 pl-4 pr-3 hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors">
                                <span class="text-sm font-medium">Savanna</span>
                            </button>
                            <button
                                class="flex h-10 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-border-light dark:bg-surface-dark dark:text-gray-200 pl-4 pr-3 hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors">
                                <span class="text-sm font-medium">Rainforest</span>
                            </button>
                            <button
                                class="flex h-10 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-border-light dark:bg-surface-dark dark:text-gray-200 pl-4 pr-3 hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors">
                                <span class="text-sm font-medium">Ice Shelf</span>
                            </button>
                        </div>
                    </div>
                    <!-- Animal Cards Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 p-4">
                        <!-- Card 1 -->
                        <div
                            class="group flex flex-col bg-surface-light dark:bg-surface-dark rounded-xl overflow-hidden border border-border-light dark:border-border-dark shadow-sm hover:shadow-lg transition-all hover:scale-[1.02] duration-300">
                            <div class="relative h-48 overflow-hidden">
                                <div
                                    class="absolute top-3 right-3 bg-white/90 dark:bg-black/60 backdrop-blur-sm px-2 py-1 rounded text-xs font-bold text-text-main dark:text-white flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[14px] text-primary">public</span>
                                    Tanzania
                                </div>
                                <div class="w-full h-full bg-gray-200 bg-center bg-cover"
                                    data-alt="Majestic Lion resting in savanna"
                                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDr6NTzcbJ8jVmfDeZsCbFwQizrzyoHe6dugf8-MBr7FlzvgGq8p9cf02OgUPrfNk4VwwoqsV55Nivq8slRfEaTVGLinWN46ODbJ6vMob4W3UyXuU3kPSbs6h8vAvwWYJZj8AvpaOd-rImyHVS6PUVx_T1vBbCahnO0v_Lo4RSYFZhuBCGnSuu7lFZn_L7k9GfY3CXANocByEQP5BFSEPIsyM-59-fgLLNi-pdgEKbVnY8qBysjZbKcON6m2ouJ6_39YGv10HpmfeQ');">
                                </div>
                            </div>
                            <div class="p-4 flex flex-col flex-1 gap-3">
                                <div>
                                    <div class="flex justify-between items-start">
                                        <h3 class="text-xl font-bold text-text-main dark:text-white">Simba</h3>
                                        <span
                                            class="px-2 py-0.5 rounded-full bg-amber-100 text-amber-800 text-xs font-bold border border-amber-200">Savanna</span>
                                    </div>
                                    <p class="text-text-secondary text-sm italic">Panthera leo</p>
                                </div>
                                <div
                                    class="mt-auto pt-4 flex gap-2 border-t border-border-light dark:border-border-dark">
                                    <button
                                        class="flex-1 flex items-center justify-center gap-2 h-9 rounded-lg border border-border-light dark:border-gray-600 bg-transparent text-text-main dark:text-gray-300 text-sm font-medium hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
                                        <span class="material-symbols-outlined text-[18px]">edit</span> Edit
                                    </button>
                                    <button
                                        class="flex items-center justify-center w-9 h-9 rounded-lg border border-red-100 bg-red-50 text-red-600 hover:bg-red-100 transition-colors"
                                        title="Delete">
                                        <span class="material-symbols-outlined text-[18px]">delete</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Card 2 -->
                        <div
                            class="group flex flex-col bg-surface-light dark:bg-surface-dark rounded-xl overflow-hidden border border-border-light dark:border-border-dark shadow-sm hover:shadow-lg transition-all hover:scale-[1.02] duration-300">
                            <div class="relative h-48 overflow-hidden">
                                <div
                                    class="absolute top-3 right-3 bg-white/90 dark:bg-black/60 backdrop-blur-sm px-2 py-1 rounded text-xs font-bold text-text-main dark:text-white flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[14px] text-primary">public</span>
                                    Antarctica
                                </div>
                                <div class="w-full h-full bg-gray-200 bg-center bg-cover"
                                    data-alt="Emperor penguin on ice"
                                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuD6JjWlTtAn_hjQ21x_DHnnQ76ZMcMCZD3vdRtEjFdbVTjjw3l0I5sDLB3ROnsbzYiS_Tw4nf46DPcEf4qEjijrxwCf9efg1pDN1-huhVTxHga0nGhxCp_xjGJRvJOs9ZRGEt6JQFmgWl3mpBV_g6Z6Hpy7IkfxiJBGQ5JTvmt5ETxq8x1mszZ9XemM5cg4OE6Tm3hvzm49lT6ILmgDkprZ6hDAEVULE1swK61Sagu63I_5zf8_HiaeOe7hobWTMB9u3d96-WufeS8');">
                                </div>
                            </div>
                            <div class="p-4 flex flex-col flex-1 gap-3">
                                <div>
                                    <div class="flex justify-between items-start">
                                        <h3 class="text-xl font-bold text-text-main dark:text-white">Pingu</h3>
                                        <span
                                            class="px-2 py-0.5 rounded-full bg-blue-100 text-blue-800 text-xs font-bold border border-blue-200">Ice
                                            Shelf</span>
                                    </div>
                                    <p class="text-text-secondary text-sm italic">Aptenodytes forsteri</p>
                                </div>
                                <div
                                    class="mt-auto pt-4 flex gap-2 border-t border-border-light dark:border-border-dark">
                                    <button
                                        class="flex-1 flex items-center justify-center gap-2 h-9 rounded-lg border border-border-light dark:border-gray-600 bg-transparent text-text-main dark:text-gray-300 text-sm font-medium hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
                                        <span class="material-symbols-outlined text-[18px]">edit</span> Edit
                                    </button>
                                    <button
                                        class="flex items-center justify-center w-9 h-9 rounded-lg border border-red-100 bg-red-50 text-red-600 hover:bg-red-100 transition-colors"
                                        title="Delete">
                                        <span class="material-symbols-outlined text-[18px]">delete</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Card 3 -->
                        <div
                            class="group flex flex-col bg-surface-light dark:bg-surface-dark rounded-xl overflow-hidden border border-border-light dark:border-border-dark shadow-sm hover:shadow-lg transition-all hover:scale-[1.02] duration-300">
                            <div class="relative h-48 overflow-hidden">
                                <div
                                    class="absolute top-3 right-3 bg-white/90 dark:bg-black/60 backdrop-blur-sm px-2 py-1 rounded text-xs font-bold text-text-main dark:text-white flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[14px] text-primary">public</span> China
                                </div>
                                <div class="w-full h-full bg-gray-200 bg-center bg-cover" data-alt="Red Panda in a tree"
                                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAxXmc9mJq5vZVbhxfGI95xIsHSWNMlaFugM9QhaiqGcfF17p2Dy9J3vdFpEjTYlVW5c3qrKfgOaGdvk0zLUwqVTCZOXXdLFEW4yKfJF5tJ5L9f84t_I-FpBWQEYIc2BuztxLgUCyj8n5WpVEGCJOzP_bdy2gbJ7KafOMoOXnXJb9q5DDsnSdE270KrDsARVaemIMyOPMlreTBbJgyPUC9l7yTJRwO3WAUzCskdDpC8eK_2ttj7PxpWwTTxsm3WqiTmy55VwNk7B7s');">
                                </div>
                            </div>
                            <div class="p-4 flex flex-col flex-1 gap-3">
                                <div>
                                    <div class="flex justify-between items-start">
                                        <h3 class="text-xl font-bold text-text-main dark:text-white">Rusty</h3>
                                        <span
                                            class="px-2 py-0.5 rounded-full bg-green-100 text-green-800 text-xs font-bold border border-green-200">Temperate</span>
                                    </div>
                                    <p class="text-text-secondary text-sm italic">Ailurus fulgens</p>
                                </div>
                                <div
                                    class="mt-auto pt-4 flex gap-2 border-t border-border-light dark:border-border-dark">
                                    <button
                                        class="flex-1 flex items-center justify-center gap-2 h-9 rounded-lg border border-border-light dark:border-gray-600 bg-transparent text-text-main dark:text-gray-300 text-sm font-medium hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
                                        <span class="material-symbols-outlined text-[18px]">edit</span> Edit
                                    </button>
                                    <button
                                        class="flex items-center justify-center w-9 h-9 rounded-lg border border-red-100 bg-red-50 text-red-600 hover:bg-red-100 transition-colors"
                                        title="Delete">
                                        <span class="material-symbols-outlined text-[18px]">delete</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Card 4 -->
                        <div
                            class="group flex flex-col bg-surface-light dark:bg-surface-dark rounded-xl overflow-hidden border border-border-light dark:border-border-dark shadow-sm hover:shadow-lg transition-all hover:scale-[1.02] duration-300">
                            <div class="relative h-48 overflow-hidden">
                                <div
                                    class="absolute top-3 right-3 bg-white/90 dark:bg-black/60 backdrop-blur-sm px-2 py-1 rounded text-xs font-bold text-text-main dark:text-white flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[14px] text-primary">public</span>
                                    Australia
                                </div>
                                <div class="w-full h-full bg-gray-200 bg-center bg-cover"
                                    data-alt="Koala hugging a tree branch"
                                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCOaBPp4OlCogaSRQCov4dYhMdlcNSje3Pr5RxhBQ9y7Z2IwfBEMky6eLfN0qLw0RmmrDgQVppde1wFGEAv4cBdXQ1pNvjxu1d_LuPDwkmCh9TELIGqU0A3VF_at_lF1U69nanyUU4-bdP0GX9BPx9rYnj9AYNTgivRa7jPyB5y3UNREKZpBKC0GnTUdv2KrsS_hDSzajWOMGPCg47LHHu4vuSp799ch8kKh4au8BhDheRvSBs2VLLXNNUsr4L_ZlNOkkwZsGSn0JE');">
                                </div>
                            </div>
                            <div class="p-4 flex flex-col flex-1 gap-3">
                                <div>
                                    <div class="flex justify-between items-start">
                                        <h3 class="text-xl font-bold text-text-main dark:text-white">Blinky</h3>
                                        <span
                                            class="px-2 py-0.5 rounded-full bg-teal-100 text-teal-800 text-xs font-bold border border-teal-200">Eucalyptus</span>
                                    </div>
                                    <p class="text-text-secondary text-sm italic">Phascolarctos cinereus</p>
                                </div>
                                <div
                                    class="mt-auto pt-4 flex gap-2 border-t border-border-light dark:border-border-dark">
                                    <button
                                        class="flex-1 flex items-center justify-center gap-2 h-9 rounded-lg border border-border-light dark:border-gray-600 bg-transparent text-text-main dark:text-gray-300 text-sm font-medium hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
                                        <span class="material-symbols-outlined text-[18px]">edit</span> Edit
                                    </button>
                                    <button
                                        class="flex items-center justify-center w-9 h-9 rounded-lg border border-red-100 bg-red-50 text-red-600 hover:bg-red-100 transition-colors"
                                        title="Delete">
                                        <span class="material-symbols-outlined text-[18px]">delete</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Card 5 -->
                        <div
                            class="group flex flex-col bg-surface-light dark:bg-surface-dark rounded-xl overflow-hidden border border-border-light dark:border-border-dark shadow-sm hover:shadow-lg transition-all hover:scale-[1.02] duration-300">
                            <div class="relative h-48 overflow-hidden">
                                <div
                                    class="absolute top-3 right-3 bg-white/90 dark:bg-black/60 backdrop-blur-sm px-2 py-1 rounded text-xs font-bold text-text-main dark:text-white flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[14px] text-primary">public</span>
                                    Brazil
                                </div>
                                <div class="w-full h-full bg-gray-200 bg-center bg-cover"
                                    data-alt="Large green anaconda in water"
                                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuA62KzejMU2ncPluIC0n0qhW2Rb_wKzfwIBi2wDE4Ev1jq3hQ-riXmZBllh9SAdEqQYH1cPUJgln_ft43D6c6LCL1mlejh3L5fHZme1MV4TVsLuT0Uu6yxTYJ0cn_XfrH1tlnl8LVBP73GnlMOSaaXNB9KyMd50g6MaEuo4XiPMsbPbuDyFAJymrbCqacUP8e1Aq65cC3KCCZWFewiPkRMtL3FiHq9X1yEM0IP5tXAnOltTAD1QAfoGNToQpmxHAhap-UQdR49kNzc');">
                                </div>
                            </div>
                            <div class="p-4 flex flex-col flex-1 gap-3">
                                <div>
                                    <div class="flex justify-between items-start">
                                        <h3 class="text-xl font-bold text-text-main dark:text-white">Nagini</h3>
                                        <span
                                            class="px-2 py-0.5 rounded-full bg-emerald-100 text-emerald-800 text-xs font-bold border border-emerald-200">Rainforest</span>
                                    </div>
                                    <p class="text-text-secondary text-sm italic">Eunectes murinus</p>
                                </div>
                                <div
                                    class="mt-auto pt-4 flex gap-2 border-t border-border-light dark:border-border-dark">
                                    <button
                                        class="flex-1 flex items-center justify-center gap-2 h-9 rounded-lg border border-border-light dark:border-gray-600 bg-transparent text-text-main dark:text-gray-300 text-sm font-medium hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
                                        <span class="material-symbols-outlined text-[18px]">edit</span> Edit
                                    </button>
                                    <button
                                        class="flex items-center justify-center w-9 h-9 rounded-lg border border-red-100 bg-red-50 text-red-600 hover:bg-red-100 transition-colors"
                                        title="Delete">
                                        <span class="material-symbols-outlined text-[18px]">delete</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Card 6 -->
                        <div
                            class="group flex flex-col bg-surface-light dark:bg-surface-dark rounded-xl overflow-hidden border border-border-light dark:border-border-dark shadow-sm hover:shadow-lg transition-all hover:scale-[1.02] duration-300">
                            <div class="relative h-48 overflow-hidden">
                                <div
                                    class="absolute top-3 right-3 bg-white/90 dark:bg-black/60 backdrop-blur-sm px-2 py-1 rounded text-xs font-bold text-text-main dark:text-white flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[14px] text-primary">public</span> Kenya
                                </div>
                                <div class="w-full h-full bg-gray-200 bg-center bg-cover"
                                    data-alt="African elephant walking"
                                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDwk90EfWDqZRmS7DasHM7DMNYh1mUOntJhEgWPt0QKkgim4JTU1Jkb-yVsm58-_Q09it_NzNmNz1YSzYD8nZEAKZobMo6ScD6YBLBn4EwkvnUB7mYeFVRiNsSc575RckA2ryPyOtceZ0KQKDaRBcQtUPr32Q9EWlHJGFtTKvIoKumBlBFkzOQzSzgeg3NIDiw-Knn-dXFZYbs9MkMWy-75tyVWGL4pSczJD_TdTZqOnNZRDkLHU0x9-TJjQ4TCztAvtK0Cuewa-ts');">
                                </div>
                            </div>
                            <div class="p-4 flex flex-col flex-1 gap-3">
                                <div>
                                    <div class="flex justify-between items-start">
                                        <h3 class="text-xl font-bold text-text-main dark:text-white">Jumbo</h3>
                                        <span
                                            class="px-2 py-0.5 rounded-full bg-amber-100 text-amber-800 text-xs font-bold border border-amber-200">Savanna</span>
                                    </div>
                                    <p class="text-text-secondary text-sm italic">Loxodonta</p>
                                </div>
                                <div
                                    class="mt-auto pt-4 flex gap-2 border-t border-border-light dark:border-border-dark">
                                    <button
                                        class="flex-1 flex items-center justify-center gap-2 h-9 rounded-lg border border-border-light dark:border-gray-600 bg-transparent text-text-main dark:text-gray-300 text-sm font-medium hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
                                        <span class="material-symbols-outlined text-[18px]">edit</span> Edit
                                    </button>
                                    <button
                                        class="flex items-center justify-center w-9 h-9 rounded-lg border border-red-100 bg-red-50 text-red-600 hover:bg-red-100 transition-colors"
                                        title="Delete">
                                        <span class="material-symbols-outlined text-[18px]">delete</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Pagination -->
                    <div class="flex items-center justify-between px-4 py-6">
                        <div class="text-sm text-text-secondary">
                            Showing <span class="font-bold text-text-main dark:text-white">1-6</span> of <span
                                class="font-bold text-text-main dark:text-white">48</span> animals
                        </div>
                        <div class="flex gap-2">
                            <button
                                class="flex h-9 min-w-9 items-center justify-center rounded-lg border border-border-light dark:border-gray-600 bg-surface-light dark:bg-surface-dark px-3 text-sm font-medium text-text-main dark:text-white hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors disabled:opacity-50">
                                Previous
                            </button>
                            <button
                                class="flex h-9 w-9 items-center justify-center rounded-lg bg-primary text-text-main text-sm font-bold shadow-sm">
                                1
                            </button>
                            <button
                                class="flex h-9 w-9 items-center justify-center rounded-lg border border-border-light dark:border-gray-600 bg-surface-light dark:bg-surface-dark text-text-main dark:text-white text-sm font-medium hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
                                2
                            </button>
                            <button
                                class="flex h-9 w-9 items-center justify-center rounded-lg border border-border-light dark:border-gray-600 bg-surface-light dark:bg-surface-dark text-text-main dark:text-white text-sm font-medium hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
                                3
                            </button>
                            <button
                                class="flex h-9 w-9 items-center justify-center rounded-lg border border-border-light dark:border-gray-600 bg-surface-light dark:bg-surface-dark text-text-main dark:text-white text-sm font-medium hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
                                ...
                            </button>
                            <button
                                class="flex h-9 min-w-9 items-center justify-center rounded-lg border border-border-light dark:border-gray-600 bg-surface-light dark:bg-surface-dark px-3 text-sm font-medium text-text-main dark:text-white hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
                                Next
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>