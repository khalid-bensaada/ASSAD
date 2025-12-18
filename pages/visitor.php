<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Zoo ASSAD - Visitor Home</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Spline+Sans:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600;700&amp;display=swap"
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
                        "primary-dark": "#2cc168",
                        "background-light": "#f6f8f7",
                        "background-dark": "#112117",
                        "text-main": "#111714",
                        "text-muted": "#648772",
                    },
                    fontFamily: {
                        "display": ["Spline Sans", "Noto Sans", "sans-serif"],
                        "body": ["Spline Sans", "Noto Sans", "sans-serif"],
                    },
                    borderRadius: { "DEFAULT": "1rem", "lg": "2rem", "xl": "3rem", "full": "9999px" },
                },
            },
        }
    </script>
</head>

<body
    class="bg-background-light dark:bg-background-dark text-text-main dark:text-gray-100 font-display transition-colors duration-200">
    <div class="relative flex min-h-screen w-full flex-col group/design-root overflow-x-hidden">
        <!-- Top Navigation Bar -->
        <nav
            class="sticky top-0 z-50 w-full bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-md border-b border-gray-200 dark:border-gray-800">
            <div class="px-4 md:px-10 lg:px-40 flex justify-center py-3">
                <div class="flex max-w-[960px] flex-1 items-center justify-between">
                    <div class="flex items-center gap-3 text-text-main dark:text-white cursor-pointer"
                        onclick="alert('Redirecting to Home...')">
                        <div class="p-2 bg-primary/20 rounded-full text-green-700 dark:text-green-400">
                            <span class="material-symbols-outlined text-2xl">pets</span>
                        </div>
                        <h2 class="text-lg font-bold leading-tight tracking-[-0.015em]">Zoo ASSAD</h2>
                    </div>
                    <div class="flex gap-2">
                        <button
                            class="flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-10 px-4 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 text-text-main dark:text-white text-sm font-bold leading-normal tracking-[0.015em] hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors"
                            onclick="alert('Navigating to Profile...')">
                            <span class="truncate">Profile</span>
                        </button>
                        <button
                            class="flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-10 px-4 bg-primary hover:bg-primary-dark transition-colors text-black text-sm font-bold leading-normal tracking-[0.015em]"
                            onclick="alert('Logging out...')">
                            <span class="truncate">Logout</span>
                        </button>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Main Content Layout -->
        <main class="flex-1 px-4 md:px-10 lg:px-40 py-5 flex justify-center">
            <div class="flex flex-col max-w-[960px] flex-1 gap-8">
                <!-- Page Heading -->
                <header class="flex flex-wrap justify-between gap-3 p-4 animate-fade-in">
                    <div class="flex min-w-72 flex-col gap-2">
                        <p class="text-text-main dark:text-white text-4xl font-black leading-tight tracking-[-0.033em]">
                            Welcome back, Alex!</p>
                        <p class="text-text-muted dark:text-gray-400 text-lg font-normal leading-normal">Ready for your
                            wild adventure today?</p>
                    </div>
                </header>
                <!-- Featured Animal Card -->
                <section class="p-4 @container">
                    <div
                        class="group relative flex flex-col items-stretch justify-start rounded-xl @xl:flex-row @xl:items-start shadow-sm hover:shadow-lg transition-shadow duration-300 bg-white dark:bg-gray-900 border border-gray-100 dark:border-gray-800 overflow-hidden">
                        <!-- Image Container -->
                        <div class="w-full @xl:w-1/2 aspect-video @xl:aspect-auto bg-center bg-no-repeat bg-cover min-h-[300px]"
                            data-alt="Majestic lion resting on a rock in a sunny savannah environment"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDZ5EGG9D0B9x99qrb8weuHvFT0RwAInvf1RY-_r3C750DvcgKCsAXqz_vMDv0zbLRddgPrpmKmXPM1Z0y4nJz-UV5ZYDIoebyNxYWjt4pqgLqDegYujD2UIxnzvDWOfHnNntEDzmOBV4d8baynyjgVQOwOo6Rhk1XpWmCCJGJY88ztcC5fISAZ-6X9DDUA-lMD-1KHsBWn28LD1KRLgeaCPQ9232MbvbPzQjiEHuB9BrrFVeq_BX165MzhXM5GiUgfo4Tx8xia8HU");'>
                            <div
                                class="absolute top-4 left-4 bg-black/30 backdrop-blur-sm text-white px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider">
                                Featured
                            </div>
                        </div>
                        <!-- Content Container -->
                        <div
                            class="flex w-full @xl:w-1/2 min-w-72 grow flex-col items-start justify-center gap-4 p-6 @xl:p-8">
                            <div>
                                <div class="flex items-center gap-2 mb-2">
                                    <span class="material-symbols-outlined text-primary text-xl">stars</span>
                                    <p class="text-primary dark:text-primary font-bold text-sm uppercase tracking-wide">
                                        Star of the Zoo</p>
                                </div>
                                <h3
                                    class="text-text-main dark:text-white text-2xl md:text-3xl font-bold leading-tight tracking-tight mb-2">
                                    Meet Asaad, the Lion of Atlas</h3>
                                <p class="text-text-muted dark:text-gray-400 text-base leading-relaxed">
                                    Discover the majesty of our most famous resident. Asaad is a rare Atlas Lion, known
                                    for his impressive mane and regal roar. Learn about his habitat and conservation
                                    story.
                                </p>
                            </div>
                            <button
                                class="mt-2 flex cursor-pointer items-center justify-center overflow-hidden rounded-full h-12 px-6 bg-primary hover:bg-primary-dark transition-transform hover:scale-105 active:scale-95 text-black text-base font-bold leading-normal shadow-md shadow-primary/20"
                                onclick="alert('Opening Asaad\'s Story...')">
                                <span class="truncate">Read Story</span>
                                <span class="material-symbols-outlined ml-2 text-sm">arrow_forward</span>
                            </button>
                        </div>
                    </div>
                </section>
                <!-- Quick Actions / Features Section -->
                <section class="px-4 py-6">
                    <div class="flex flex-col gap-6">
                        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
                            <div class="flex flex-col gap-2">
                                <h2 class="text-text-main dark:text-white text-2xl md:text-3xl font-bold leading-tight">
                                    Plan Your Visit</h2>
                                <p class="text-text-muted dark:text-gray-400 text-base max-w-[600px]">
                                    Explore everything our zoo has to offer, from our diverse animal kingdom to guided
                                    experiences.
                                </p>
                            </div>
                            <button
                                class="flex shrink-0 cursor-pointer items-center justify-center rounded-full h-10 px-5 border border-gray-300 dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-800 text-text-main dark:text-white text-sm font-bold transition-colors"
                                onclick="alert('Opening Map...')">
                                <span class="material-symbols-outlined mr-2 text-[18px]">map</span>
                                <span>Interactive Map</span>
                            </button>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <!-- Card 1: Animals -->
                            <div
                                class="group flex flex-col gap-4 rounded-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900 p-6 hover:border-primary/50 transition-colors duration-300 relative overflow-hidden">
                                <div
                                    class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
                                    <span class="material-symbols-outlined text-[100px] text-primary">pets</span>
                                </div>
                                <div
                                    class="size-12 rounded-full bg-primary/10 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-black transition-colors duration-300">
                                    <span class="material-symbols-outlined text-2xl">pets</span>
                                </div>
                                <div class="flex flex-col gap-2 z-10">
                                    <h2 class="text-text-main dark:text-white text-xl font-bold leading-tight">Our
                                        Animals</h2>
                                    <p class="text-text-muted dark:text-gray-400 text-sm leading-normal mb-4">Meet our
                                        diverse range of species from around the world in their natural habitats.</p>
                                    <button
                                        class="self-start text-primary dark:text-primary font-bold text-sm flex items-center gap-1 group-hover:gap-2 transition-all"
                                        onclick="alert('Viewing all animals...')">
                                        View All Animals <span
                                            class="material-symbols-outlined text-sm">arrow_forward</span>
                                    </button>
                                </div>
                            </div>
                            <!-- Card 2: Guided Tours -->
                            <div
                                class="group flex flex-col gap-4 rounded-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900 p-6 hover:border-primary/50 transition-colors duration-300 relative overflow-hidden">
                                <div
                                    class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
                                    <span class="material-symbols-outlined text-[100px] text-primary">explore</span>
                                </div>
                                <div
                                    class="size-12 rounded-full bg-primary/10 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-black transition-colors duration-300">
                                    <span class="material-symbols-outlined text-2xl">explore</span>
                                </div>
                                <div class="flex flex-col gap-2 z-10">
                                    <h2 class="text-text-main dark:text-white text-xl font-bold leading-tight">Guided
                                        Tours</h2>
                                    <p class="text-text-muted dark:text-gray-400 text-sm leading-normal mb-4">Join an
                                        expert for an exclusive look behind the scenes and learn deeper insights.</p>
                                    <button
                                        class="self-start text-primary dark:text-primary font-bold text-sm flex items-center gap-1 group-hover:gap-2 transition-all"
                                        onclick="alert('Exploring tours...')">
                                        Explore Tours <span
                                            class="material-symbols-outlined text-sm">arrow_forward</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Footer -->
                <footer class="mt-8 border-t border-gray-200 dark:border-gray-800 px-4 py-8">
                    <div class="flex flex-col items-center gap-6 text-center">
                        <div class="flex flex-wrap items-center justify-center gap-6">
                            <a class="text-text-muted dark:text-gray-500 hover:text-primary transition-colors text-sm font-medium"
                                href="#" onclick="event.preventDefault(); alert('Privacy Policy')">Privacy Policy</a>
                            <a class="text-text-muted dark:text-gray-500 hover:text-primary transition-colors text-sm font-medium"
                                href="#" onclick="event.preventDefault(); alert('Terms of Service')">Terms of
                                Service</a>
                            <a class="text-text-muted dark:text-gray-500 hover:text-primary transition-colors text-sm font-medium"
                                href="#" onclick="event.preventDefault(); alert('Contact Support')">Support</a>
                        </div>
                        <div class="flex justify-center gap-6">
                            <a class="text-text-muted dark:text-gray-500 hover:text-primary dark:hover:text-primary transition-colors"
                                href="#">
                                <span class="material-symbols-outlined">public</span>
                            </a>
                            <a class="text-text-muted dark:text-gray-500 hover:text-primary dark:hover:text-primary transition-colors"
                                href="#">
                                <span class="material-symbols-outlined">mail</span>
                            </a>
                        </div>
                        <p class="text-text-muted dark:text-gray-600 text-xs">© 2023 Zoo ASSAD. All rights reserved.</p>
                    </div>
                </footer>
            </div>
        </main>
    </div>
    <script>
        // Simple logic to toggle dark mode for demonstration if needed, though not explicitly requested as a button.
        // We ensure the class is set on html as per instructions.
        document.documentElement.classList.add('light'); 
    </script>
</body>

</html>