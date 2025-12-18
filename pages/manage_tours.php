<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Zoo ASSAD - Manage Tours</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css2?family=Spline+Sans:wght@300;400;500;600;700&amp;family=Noto+Sans:wght@400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <!-- Material Icons -->
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
                        "primary-dark": "#2ec269",
                        "background-light": "#f6f8f7",
                        "background-dark": "#112117",
                        "surface-light": "#ffffff",
                        "surface-dark": "#1c3024",
                        "text-main": "#111714",
                        "text-secondary": "#648772",
                    },
                    fontFamily: {
                        "display": ["Spline Sans", "sans-serif"],
                        "body": ["Noto Sans", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "1rem",
                        "lg": "1.5rem",
                        "xl": "2rem",
                        "2xl": "2.5rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
</head>

<body
    class="bg-background-light dark:bg-background-dark font-display text-text-main antialiased min-h-screen flex flex-col transition-colors duration-200">
    <!-- Navbar -->
    <header
        class="sticky top-0 z-50 bg-surface-light dark:bg-surface-dark border-b border-[#f0f4f2] dark:border-[#2a3e32] px-4 py-3 md:px-10 shadow-sm">
        <div class="max-w-[1440px] mx-auto flex items-center justify-between">
            <div class="flex items-center gap-4 text-text-main dark:text-white">
                <div class="size-8 rounded-full bg-primary flex items-center justify-center text-text-main">
                    <span class="material-symbols-outlined text-xl">pets</span>
                </div>
                <h2 class="text-lg md:text-xl font-bold leading-tight tracking-[-0.015em]">Zoo ASSAD</h2>
            </div>
            <div class="flex items-center gap-4 md:gap-6">
                <button
                    class="hidden md:flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-10 px-6 bg-[#f0f4f2] hover:bg-[#e0e8e4] dark:bg-[#2a3e32] dark:hover:bg-[#354b3d] text-text-main dark:text-white text-sm font-bold transition-colors"
                    onclick="alert('Logged out')">
                    Logout
                </button>
                <div class="flex items-center gap-3 cursor-pointer group">
                    <div class="hidden md:flex flex-col items-end">
                        <span class="text-sm font-bold text-text-main dark:text-white">Jane Cooper</span>
                        <span class="text-xs text-text-secondary">Senior Guide</span>
                    </div>
                    <div class="bg-center bg-no-repeat bg-cover rounded-full size-10 border-2 border-transparent group-hover:border-primary transition-all"
                        data-alt="Profile picture of a zoo guide"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD0B2WtA56hTTyQgeLuvlnpH2Lb0XdaVff6t_omRL3slGzXQIYJQA7k6_1v7kHQPc1hYHQLx921Lhm24XNQYPKlNxtK5w-CWvBwaSupcb8hBaWV5SQiBwvSKq9OVBI6MohR61z0C237n-q2EU1R8q2GG0kXZl0koGJ5CyKXBCdM1pP-nDbZDLTmxfSGZc5bVjhkbC2QKDdUHX4Ldos1Sj0Vr-ldynSru7JT2ixO9Yh3w8B8R_4WYhhyqrDmJD-StvRKl6bQXwrzMrA");'>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Layout -->
    <main class="flex-1 w-full max-w-[1440px] mx-auto p-4 md:p-6 lg:p-10 flex flex-col gap-6 lg:flex-row">
        <!-- Left Column: Tour Management (Wider) -->
        <section class="flex flex-col gap-6 lg:w-7/12 xl:w-2/3">
            <!-- Page Heading -->
            <div class="flex flex-col gap-2">
                <h1 class="text-3xl md:text-4xl font-black text-text-main dark:text-white tracking-[-0.033em]">Tour
                    Management</h1>
                <p class="text-text-secondary text-base font-medium">Manage your schedules, details, and visitors.</p>
            </div>
            <!-- Stats Row -->
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                <div
                    class="flex flex-col gap-1 rounded-xl p-5 bg-white dark:bg-surface-dark border border-[#dce5df] dark:border-[#2a3e32] shadow-sm">
                    <div
                        class="size-10 rounded-full bg-[#f0f4f2] dark:bg-[#2a3e32] flex items-center justify-center mb-2">
                        <span class="material-symbols-outlined text-primary-dark dark:text-primary">tour</span>
                    </div>
                    <p class="text-text-secondary text-sm font-semibold">Total Tours</p>
                    <p class="text-text-main dark:text-white text-2xl font-bold">12</p>
                </div>
                <div
                    class="flex flex-col gap-1 rounded-xl p-5 bg-white dark:bg-surface-dark border border-[#dce5df] dark:border-[#2a3e32] shadow-sm">
                    <div
                        class="size-10 rounded-full bg-[#f0f4f2] dark:bg-[#2a3e32] flex items-center justify-center mb-2">
                        <span
                            class="material-symbols-outlined text-primary-dark dark:text-primary">calendar_month</span>
                    </div>
                    <p class="text-text-secondary text-sm font-semibold">Upcoming</p>
                    <p class="text-text-main dark:text-white text-2xl font-bold">5</p>
                </div>
                <div
                    class="flex flex-col gap-1 rounded-xl p-5 bg-white dark:bg-surface-dark border border-[#dce5df] dark:border-[#2a3e32] shadow-sm col-span-2 md:col-span-1">
                    <div
                        class="size-10 rounded-full bg-[#f0f4f2] dark:bg-[#2a3e32] flex items-center justify-center mb-2">
                        <span class="material-symbols-outlined text-primary-dark dark:text-primary">groups</span>
                    </div>
                    <p class="text-text-secondary text-sm font-semibold">Total Visitors</p>
                    <p class="text-text-main dark:text-white text-2xl font-bold">145</p>
                </div>
            </div>
            <!-- Tours List Header -->
            <div class="flex flex-wrap items-center justify-between gap-4 pt-4">
                <h2 class="text-xl font-bold text-text-main dark:text-white">Your Upcoming Tours</h2>
                <button
                    class="flex items-center gap-2 bg-primary hover:bg-primary-dark text-text-main font-bold py-2.5 px-6 rounded-full transition-colors shadow-sm shadow-primary/30"
                    onclick="document.getElementById('modal-create-tour').showModal()">
                    <span class="material-symbols-outlined text-[20px]">add</span>
                    Create New Tour
                </button>
            </div>
            <!-- Tour Cards List -->
            <div class="flex flex-col gap-4">
                <!-- Tour Card 1 (Selected) -->
                <div
                    class="group relative flex flex-col md:flex-row gap-4 p-5 rounded-2xl bg-white dark:bg-surface-dark border-2 border-primary shadow-md transition-all cursor-pointer">
                    <div
                        class="absolute top-4 right-4 flex gap-2 opacity-100 md:opacity-0 group-hover:opacity-100 transition-opacity z-10">
                        <button
                            class="size-8 rounded-full bg-gray-100 dark:bg-gray-700 hover:bg-white dark:hover:bg-gray-600 flex items-center justify-center text-text-main dark:text-white shadow-sm"
                            title="Edit">
                            <span class="material-symbols-outlined text-[18px]">edit</span>
                        </button>
                        <button
                            class="size-8 rounded-full bg-red-50 dark:bg-red-900/30 hover:bg-red-100 dark:hover:bg-red-900/50 flex items-center justify-center text-red-600 dark:text-red-400 shadow-sm"
                            onclick="confirm('Are you sure you want to delete this tour?')" title="Delete">
                            <span class="material-symbols-outlined text-[18px]">delete</span>
                        </button>
                    </div>
                    <div class="w-full md:w-48 h-32 md:h-auto rounded-xl bg-cover bg-center shrink-0"
                        data-alt="Lion relaxing in the savanna enclosure"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBjNVvsfv_KZTZFocyun42yFFwIKE_QKCfhDSQxQKO8sbQUZB1dnIvZe7Vad-p6CKFYwx4JncvMTfz9oLbE3HxHxSWNjP-XYXGahVMzYLoHVWkZLejghKz59Sqrwko7UpVw3NB7iIuOdS3aMslY7Atj9CQMSJLW85tXx1GoTvXoGAQQ_vBzWd9EVocKQVyFLs4ufBeoWDe8NrO5xqoztsMddYqYCt1LXkeXU4CFBxzguHPRJgqb8ul9RX16WRV9S6isHS0w7Ibwn64");'>
                    </div>
                    <div class="flex flex-col justify-between flex-1 gap-3">
                        <div>
                            <div class="flex items-start justify-between mb-1">
                                <h3 class="text-lg font-bold text-text-main dark:text-white">Savanna Kingdom Safari</h3>
                                <span
                                    class="bg-primary/20 text-green-800 dark:text-green-200 text-xs font-bold px-2.5 py-1 rounded-full whitespace-nowrap hidden md:inline-block">Selected</span>
                            </div>
                            <p class="text-text-secondary text-sm line-clamp-2">An immersive journey through the African
                                plains featuring lions, giraffes, and zebras.</p>
                        </div>
                        <div class="flex flex-wrap gap-3 mt-auto">
                            <span
                                class="inline-flex items-center gap-1.5 text-xs font-medium bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-300 px-3 py-1.5 rounded-full">
                                <span class="material-symbols-outlined text-[16px]">schedule</span> 2h 30m
                            </span>
                            <span
                                class="inline-flex items-center gap-1.5 text-xs font-medium bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-300 px-3 py-1.5 rounded-full">
                                <span class="material-symbols-outlined text-[16px]">calendar_today</span> Oct 24, 10:00
                                AM
                            </span>
                            <span
                                class="inline-flex items-center gap-1.5 text-xs font-medium bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-300 px-3 py-1.5 rounded-full">
                                <span class="material-symbols-outlined text-[16px]">group</span> 18/25
                            </span>
                            <span
                                class="inline-flex items-center gap-1.5 text-xs font-medium bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-300 px-3 py-1.5 rounded-full">
                                <span class="material-symbols-outlined text-[16px]">translate</span> English
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Tour Card 2 -->
                <div
                    class="group relative flex flex-col md:flex-row gap-4 p-5 rounded-2xl bg-white dark:bg-surface-dark border border-[#f0f4f2] dark:border-[#2a3e32] hover:border-primary/50 transition-all cursor-pointer">
                    <div
                        class="absolute top-4 right-4 flex gap-2 opacity-100 md:opacity-0 group-hover:opacity-100 transition-opacity z-10">
                        <button
                            class="size-8 rounded-full bg-gray-100 dark:bg-gray-700 hover:bg-white dark:hover:bg-gray-600 flex items-center justify-center text-text-main dark:text-white shadow-sm">
                            <span class="material-symbols-outlined text-[18px]">edit</span>
                        </button>
                        <button
                            class="size-8 rounded-full bg-red-50 dark:bg-red-900/30 hover:bg-red-100 dark:hover:bg-red-900/50 flex items-center justify-center text-red-600 dark:text-red-400 shadow-sm">
                            <span class="material-symbols-outlined text-[18px]">delete</span>
                        </button>
                    </div>
                    <div class="w-full md:w-48 h-32 md:h-auto rounded-xl bg-cover bg-center shrink-0 grayscale group-hover:grayscale-0 transition-all"
                        data-alt="Colorful tropical birds on a branch"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuChwYMfYl8Iur4SidR1BRAk9guh0QqrRnp2BbTbAOmdgzI39cB_uGzQKHH3AcvljlsbGq1BnehJ4E2Qd7Vh2K1wTj8pN_oCwVeI9s1ezZomEeHND8X-aqFyAtlnT_2JAe5RXnzqnDSmX5VlZacLNZqYovo36XS8qHaGrcPuNM0UaGnKOzH819ZKEmXKoBwK8i-IbkkQPnHeVpxI3ZDcIVKweTh_2ffv54CzW-iNakksOUBvBlNEawXjSgCCKLUqJdkQjv9QOnovEz0");'>
                    </div>
                    <div class="flex flex-col justify-between flex-1 gap-3">
                        <div>
                            <h3 class="text-lg font-bold text-text-main dark:text-white mb-1">Rainforest Expedition</h3>
                            <p class="text-text-secondary text-sm line-clamp-2">Discover the hidden gems of our indoor
                                rainforest ecosystem.</p>
                        </div>
                        <div class="flex flex-wrap gap-3 mt-auto">
                            <span
                                class="inline-flex items-center gap-1.5 text-xs font-medium bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-300 px-3 py-1.5 rounded-full">
                                <span class="material-symbols-outlined text-[16px]">schedule</span> 1h 45m
                            </span>
                            <span
                                class="inline-flex items-center gap-1.5 text-xs font-medium bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-300 px-3 py-1.5 rounded-full">
                                <span class="material-symbols-outlined text-[16px]">calendar_today</span> Oct 25, 2:00
                                PM
                            </span>
                            <span
                                class="inline-flex items-center gap-1.5 text-xs font-medium bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-300 px-3 py-1.5 rounded-full">
                                <span class="material-symbols-outlined text-[16px]">group</span> 12/20
                            </span>
                            <span
                                class="inline-flex items-center gap-1.5 text-xs font-medium bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-300 px-3 py-1.5 rounded-full">
                                <span class="material-symbols-outlined text-[16px]">translate</span> French
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Tour Card 3 -->
                <div
                    class="group relative flex flex-col md:flex-row gap-4 p-5 rounded-2xl bg-white dark:bg-surface-dark border border-[#f0f4f2] dark:border-[#2a3e32] hover:border-primary/50 transition-all cursor-pointer">
                    <div
                        class="absolute top-4 right-4 flex gap-2 opacity-100 md:opacity-0 group-hover:opacity-100 transition-opacity z-10">
                        <button
                            class="size-8 rounded-full bg-gray-100 dark:bg-gray-700 hover:bg-white dark:hover:bg-gray-600 flex items-center justify-center text-text-main dark:text-white shadow-sm">
                            <span class="material-symbols-outlined text-[18px]">edit</span>
                        </button>
                    </div>
                    <div class="w-full md:w-48 h-32 md:h-auto rounded-xl bg-cover bg-center shrink-0 grayscale group-hover:grayscale-0 transition-all"
                        data-alt="Penguins playing near water"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAI4nSU2gh1kMdpSfg4_6KPBsUULRjG-b6Noov8-u9SD1atJiAG23fEXTQRROXi4cNpTCJfh4eQQCCL--SO0FTtKouumrGiSNVVtOm4EZLyNZuVZIwxjcdFGE-rEG5BcVw4VJHzKVQUNE35RB-HjugtNBp-G27HuL-THTeC-3ym_jTlLT7cXLULV7FzKG8QBWLKPjYN65Yaf2j0uPoXunbytcExgZxqRkC64Tm-3UlmOUGgxmM9IiAhPDIquWkJOKBgSbOWeO1JSek");'>
                    </div>
                    <div class="flex flex-col justify-between flex-1 gap-3">
                        <div>
                            <h3 class="text-lg font-bold text-text-main dark:text-white mb-1">Polar Bear Encounters</h3>
                            <p class="text-text-secondary text-sm line-clamp-2">A chilly adventure visiting our arctic
                                friends.</p>
                        </div>
                        <div class="flex flex-wrap gap-3 mt-auto">
                            <span
                                class="inline-flex items-center gap-1.5 text-xs font-medium bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-300 px-3 py-1.5 rounded-full">
                                <span class="material-symbols-outlined text-[16px]">schedule</span> 1h 00m
                            </span>
                            <span
                                class="inline-flex items-center gap-1.5 text-xs font-medium bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-300 px-3 py-1.5 rounded-full">
                                <span class="material-symbols-outlined text-[16px]">calendar_today</span> Oct 26, 9:00
                                AM
                            </span>
                            <span
                                class="inline-flex items-center gap-1.5 text-xs font-medium bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-300 px-3 py-1.5 rounded-full">
                                <span class="material-symbols-outlined text-[16px]">translate</span> German
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Right Column: Step Management (Sticky) -->
        <aside class="flex flex-col gap-6 lg:w-5/12 xl:w-1/3">
            <div class="sticky top-24 flex flex-col gap-4">
                <!-- Steps Header -->
                <div
                    class="bg-surface-light dark:bg-surface-dark p-6 rounded-[2rem] border border-[#dce5df] dark:border-[#2a3e32] shadow-sm">
                    <div class="flex items-center justify-between mb-6">
                        <div>
                            <p class="text-xs font-bold text-text-secondary uppercase tracking-wider mb-1">Route
                                Planning</p>
                            <h2 class="text-xl font-bold text-text-main dark:text-white">Savanna Kingdom Safari</h2>
                        </div>
                        <div
                            class="size-10 rounded-full bg-green-50 dark:bg-green-900/30 flex items-center justify-center text-primary-dark dark:text-primary">
                            <span class="material-symbols-outlined">map</span>
                        </div>
                    </div>
                    <!-- Add Step Button -->
                    <button
                        class="w-full flex items-center justify-center gap-2 bg-[#f0f4f2] hover:bg-[#e0e8e4] dark:bg-[#2a3e32] dark:hover:bg-[#354b3d] text-text-main dark:text-white font-bold h-12 rounded-full transition-colors mb-6 border border-transparent hover:border-primary/20"
                        onclick="document.getElementById('add-step-form').classList.toggle('hidden')">
                        <span class="material-symbols-outlined text-[20px]">add_location_alt</span>
                        Add New Stop
                    </button>
                    <!-- Add Step Form (Hidden by default, simulated toggle) -->
                    <div class="hidden mb-6 bg-white dark:bg-black/20 p-4 rounded-xl border border-dashed border-primary/50"
                        id="add-step-form">
                        <div class="space-y-3">
                            <input
                                class="w-full h-10 px-4 rounded-lg bg-background-light dark:bg-surface-dark border-transparent focus:border-primary focus:ring-0 text-sm"
                                placeholder="Stop Name (e.g. Lion's Den)" type="text" />
                            <textarea
                                class="w-full p-4 rounded-lg bg-background-light dark:bg-surface-dark border-transparent focus:border-primary focus:ring-0 text-sm"
                                placeholder="Short description for the guide..." rows="2"></textarea>
                            <div class="flex gap-2">
                                <button
                                    class="flex-1 h-9 rounded-full text-xs font-bold bg-gray-200 dark:bg-gray-700 text-gray-600 dark:text-gray-300"
                                    onclick="document.getElementById('add-step-form').classList.add('hidden')">Cancel</button>
                                <button class="flex-1 h-9 rounded-full text-xs font-bold bg-primary text-text-main"
                                    onclick="alert('Step added!'); document.getElementById('add-step-form').classList.add('hidden')">Save
                                    Stop</button>
                            </div>
                        </div>
                    </div>
                    <!-- Steps Timeline -->
                    <div class="relative pl-4 space-y-0">
                        <!-- Vertical Line -->
                        <div class="absolute left-[27px] top-4 bottom-4 w-0.5 bg-gray-200 dark:bg-gray-700 -z-10"></div>
                        <!-- Step 1 -->
                        <div class="group relative flex gap-4 pb-6 last:pb-0">
                            <div class="flex flex-col items-center">
                                <div
                                    class="size-6 rounded-full bg-primary text-text-main text-xs font-bold flex items-center justify-center shadow-[0_0_0_4px_white] dark:shadow-[0_0_0_4px_#1c3024]">
                                    1</div>
                            </div>
                            <div
                                class="flex-1 bg-white dark:bg-black/20 p-3 rounded-xl border border-transparent hover:border-gray-200 dark:hover:border-gray-700 transition-colors cursor-move">
                                <div class="flex justify-between items-start mb-1">
                                    <h4 class="font-bold text-text-main dark:text-white text-sm">Main Gate Gathering
                                    </h4>
                                    <div class="flex gap-1 opacity-0 group-hover:opacity-100 transition-opacity">
                                        <button class="text-gray-400 hover:text-primary"><span
                                                class="material-symbols-outlined text-[16px]">edit</span></button>
                                        <button class="text-gray-400 hover:text-red-500"><span
                                                class="material-symbols-outlined text-[16px]">close</span></button>
                                    </div>
                                </div>
                                <p class="text-xs text-text-secondary leading-relaxed">Check tickets and brief visitors
                                    on safety rules. Hand out maps.</p>
                            </div>
                        </div>
                        <!-- Step 2 -->
                        <div class="group relative flex gap-4 pb-6 last:pb-0">
                            <div class="flex flex-col items-center">
                                <div
                                    class="size-6 rounded-full bg-white dark:bg-surface-dark border-2 border-primary text-text-main dark:text-white text-xs font-bold flex items-center justify-center shadow-[0_0_0_4px_white] dark:shadow-[0_0_0_4px_#1c3024]">
                                    2</div>
                            </div>
                            <div
                                class="flex-1 bg-white dark:bg-black/20 p-3 rounded-xl border border-transparent hover:border-gray-200 dark:hover:border-gray-700 transition-colors cursor-move">
                                <div class="flex justify-between items-start mb-1">
                                    <h4 class="font-bold text-text-main dark:text-white text-sm">Zebra Grazing Fields
                                    </h4>
                                    <div class="flex gap-1 opacity-0 group-hover:opacity-100 transition-opacity">
                                        <button class="text-gray-400 hover:text-primary"><span
                                                class="material-symbols-outlined text-[16px]">edit</span></button>
                                        <button class="text-gray-400 hover:text-red-500"><span
                                                class="material-symbols-outlined text-[16px]">close</span></button>
                                    </div>
                                </div>
                                <p class="text-xs text-text-secondary leading-relaxed">Discussion about herd dynamics
                                    and migration patterns.</p>
                            </div>
                        </div>
                        <!-- Step 3 -->
                        <div class="group relative flex gap-4 pb-6 last:pb-0">
                            <div class="flex flex-col items-center">
                                <div
                                    class="size-6 rounded-full bg-white dark:bg-surface-dark border-2 border-primary text-text-main dark:text-white text-xs font-bold flex items-center justify-center shadow-[0_0_0_4px_white] dark:shadow-[0_0_0_4px_#1c3024]">
                                    3</div>
                            </div>
                            <div
                                class="flex-1 bg-white dark:bg-black/20 p-3 rounded-xl border border-transparent hover:border-gray-200 dark:hover:border-gray-700 transition-colors cursor-move">
                                <div class="flex justify-between items-start mb-1">
                                    <h4 class="font-bold text-text-main dark:text-white text-sm">Lion's Rock</h4>
                                    <div class="flex gap-1 opacity-0 group-hover:opacity-100 transition-opacity">
                                        <button class="text-gray-400 hover:text-primary"><span
                                                class="material-symbols-outlined text-[16px]">edit</span></button>
                                        <button class="text-gray-400 hover:text-red-500"><span
                                                class="material-symbols-outlined text-[16px]">close</span></button>
                                    </div>
                                </div>
                                <p class="text-xs text-text-secondary leading-relaxed">Observe the pride during feeding
                                    time. Ensure distance.</p>
                            </div>
                        </div>
                        <!-- Step 4 -->
                        <div class="group relative flex gap-4 pb-6 last:pb-0">
                            <div class="flex flex-col items-center">
                                <div
                                    class="size-6 rounded-full bg-white dark:bg-surface-dark border-2 border-primary text-text-main dark:text-white text-xs font-bold flex items-center justify-center shadow-[0_0_0_4px_white] dark:shadow-[0_0_0_4px_#1c3024]">
                                    4</div>
                            </div>
                            <div
                                class="flex-1 bg-white dark:bg-black/20 p-3 rounded-xl border border-transparent hover:border-gray-200 dark:hover:border-gray-700 transition-colors cursor-move">
                                <div class="flex justify-between items-start mb-1">
                                    <h4 class="font-bold text-text-main dark:text-white text-sm">Giraffe Center</h4>
                                    <div class="flex gap-1 opacity-0 group-hover:opacity-100 transition-opacity">
                                        <button class="text-gray-400 hover:text-primary"><span
                                                class="material-symbols-outlined text-[16px]">edit</span></button>
                                        <button class="text-gray-400 hover:text-red-500"><span
                                                class="material-symbols-outlined text-[16px]">close</span></button>
                                    </div>
                                </div>
                                <p class="text-xs text-text-secondary leading-relaxed">Interactive feeding session.
                                    Allow photos.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Map Preview (Optional Visual) -->
                <div
                    class="bg-surface-light dark:bg-surface-dark rounded-[2rem] h-48 overflow-hidden border border-[#dce5df] dark:border-[#2a3e32] relative group">
                    <div class="absolute inset-0 bg-cover bg-center opacity-80 group-hover:opacity-100 transition-opacity"
                        data-alt="Illustrated map of the safari zone" data-location="Safari Park Map"
                        style='background-image: url("https://placeholder.pics/svg/300");'></div>
                    <div class="absolute bottom-4 left-4 right-4">
                        <button
                            class="w-full bg-white/90 dark:bg-black/80 backdrop-blur-sm text-text-main dark:text-white font-bold py-2 rounded-full text-sm shadow-sm hover:bg-white transition-colors">
                            View Full Map
                        </button>
                    </div>
                </div>
            </div>
        </aside>
    </main>
    <!-- Modal: Create Tour -->
    <dialog
        class="bg-transparent p-0 w-full h-full max-w-full max-h-full backdrop:bg-black/50 open:flex items-center justify-center fixed inset-0 z-50"
        id="modal-create-tour">
        <form
            class="w-full max-w-lg bg-surface-light dark:bg-surface-dark rounded-3xl p-6 md:p-8 shadow-2xl relative border border-[#f0f4f2] dark:border-[#2a3e32] m-4"
            method="dialog">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-2xl font-black text-text-main dark:text-white tracking-tight">Create New Tour</h3>
                <button
                    class="size-8 rounded-full bg-gray-100 dark:bg-gray-800 flex items-center justify-center hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors">
                    <span class="material-symbols-outlined text-text-main dark:text-white">close</span>
                </button>
            </div>
            <div class="space-y-4 max-h-[70vh] overflow-y-auto pr-2 custom-scrollbar">
                <div class="flex flex-col gap-1">
                    <label class="text-xs font-bold uppercase text-text-secondary">Tour Title</label>
                    <input
                        class="w-full h-12 px-4 rounded-xl bg-background-light dark:bg-black/20 border-transparent focus:border-primary focus:ring-0"
                        placeholder="e.g. Night Safari" type="text" />
                </div>
                <div class="flex flex-col gap-1">
                    <label class="text-xs font-bold uppercase text-text-secondary">Description</label>
                    <textarea
                        class="w-full p-4 rounded-xl bg-background-light dark:bg-black/20 border-transparent focus:border-primary focus:ring-0"
                        placeholder="Describe the experience..." rows="3"></textarea>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="flex flex-col gap-1">
                        <label class="text-xs font-bold uppercase text-text-secondary">Date &amp; Time</label>
                        <input
                            class="w-full h-12 px-4 rounded-xl bg-background-light dark:bg-black/20 border-transparent focus:border-primary focus:ring-0 text-sm text-gray-500"
                            type="datetime-local" />
                    </div>
                    <div class="flex flex-col gap-1">
                        <label class="text-xs font-bold uppercase text-text-secondary">Duration</label>
                        <input
                            class="w-full h-12 px-4 rounded-xl bg-background-light dark:bg-black/20 border-transparent focus:border-primary focus:ring-0"
                            placeholder="e.g. 2 hours" type="text" />
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="flex flex-col gap-1">
                        <label class="text-xs font-bold uppercase text-text-secondary">Price ($)</label>
                        <input
                            class="w-full h-12 px-4 rounded-xl bg-background-light dark:bg-black/20 border-transparent focus:border-primary focus:ring-0"
                            placeholder="25.00" type="number" />
                    </div>
                    <div class="flex flex-col gap-1">
                        <label class="text-xs font-bold uppercase text-text-secondary">Max Capacity</label>
                        <input
                            class="w-full h-12 px-4 rounded-xl bg-background-light dark:bg-black/20 border-transparent focus:border-primary focus:ring-0"
                            placeholder="20" type="number" />
                    </div>
                </div>
                <div class="flex flex-col gap-1">
                    <label class="text-xs font-bold uppercase text-text-secondary">Language</label>
                    <select
                        class="w-full h-12 px-4 rounded-xl bg-background-light dark:bg-black/20 border-transparent focus:border-primary focus:ring-0">
                        <option>English</option>
                        <option>French</option>
                        <option>German</option>
                        <option>Spanish</option>
                    </select>
                </div>
            </div>
            <div class="mt-8 flex gap-3">
                <button
                    class="flex-1 h-12 rounded-full font-bold bg-transparent border border-gray-200 dark:border-gray-700 text-text-main dark:text-white hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">Cancel</button>
                <button
                    class="flex-1 h-12 rounded-full font-bold bg-primary text-text-main hover:bg-primary-dark transition-colors shadow-lg shadow-primary/20"
                    onclick="alert('Tour Created!');">Create Tour</button>
            </div>
        </form>
    </dialog>
</body>

</html>