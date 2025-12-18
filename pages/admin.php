<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Zoo ASSAD - Admin Dashboard</title>
    <!-- Google Fonts: Manrope -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&amp;display=swap" rel="stylesheet" />
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
                        "primary": "#36e27b",
                        "primary-dark": "#2cc166",
                        "background-light": "#f6f8f7",
                        "background-dark": "#112117",
                        "card-light": "#ffffff",
                        "card-dark": "#1a2c22",
                        "text-main-light": "#111714",
                        "text-main-dark": "#f0f4f2",
                        "text-secondary-light": "#648772",
                        "text-secondary-dark": "#9ab0a3",
                    },
                    fontFamily: {
                        "display": ["Manrope", "sans-serif"]
                    },
                    borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
                },
            },
        }
    </script>
</head>

<body
    class="bg-background-light dark:bg-background-dark font-display text-text-main-light dark:text-text-main-dark min-h-screen flex flex-col transition-colors duration-200">
    <!-- Navbar -->
    <nav
        class="sticky top-0 z-50 w-full border-b border-gray-200 dark:border-gray-800 bg-card-light dark:bg-card-dark shadow-sm">
        <div class="px-4 md:px-10 py-3 flex items-center justify-between">
            <div class="flex items-center gap-4 cursor-pointer" onclick="window.location.reload()">
                <div
                    class="size-10 bg-primary/20 rounded-lg flex items-center justify-center text-primary-dark dark:text-primary">
                    <span class="material-symbols-outlined text-2xl">pets</span>
                </div>
                <h2 class="text-xl font-bold tracking-tight text-text-main-light dark:text-text-main-dark">Zoo ASSAD
                </h2>
            </div>
            <div class="flex items-center gap-4 md:gap-8">
                <!-- Theme Toggle (Optional but good for modern UI) -->
                <button
                    class="p-2 rounded-full hover:bg-gray-100 dark:hover:bg-gray-800 text-gray-500 transition-colors"
                    onclick="document.documentElement.classList.toggle('dark')">
                    <span class="material-symbols-outlined dark:hidden">dark_mode</span>
                    <span class="material-symbols-outlined hidden dark:block">light_mode</span>
                </button>
                <div class="hidden md:flex items-center gap-4">
                    <button
                        class="flex items-center gap-2 text-sm font-bold text-text-main-light dark:text-text-main-dark hover:text-primary transition-colors">
                        <span class="material-symbols-outlined">person</span>
                        Profile
                    </button>
                    <button
                        class="bg-primary hover:bg-primary-dark text-[#111714] text-sm font-bold py-2 px-6 rounded-lg transition-colors shadow-lg shadow-primary/30">
                        Logout
                    </button>
                </div>
                <!-- Mobile Menu Button -->
                <button class="md:hidden p-2 text-text-main-light dark:text-text-main-dark">
                    <span class="material-symbols-outlined">menu</span>
                </button>
                <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 border-2 border-primary cursor-pointer"
                    data-alt="User profile avatar showing a smiling person"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCaEYeiQItgn57RxCfqmyRZnoUhf2iWgE6Kvja0MfcYDn0L8kXiOOgmS1GQl-lm-kC9l_WyRfOXVvFAX9X3A51B-77-5avOX4XTQl4OOPq-wpg9iWlr-PVXMLiwTsS90bmYaC1QUPr1qH5HtgIHYtVGxXzXIlAlMLH-V8XpOOt1v5xG2Rnq6vys9fFKTk5hsa-PwwnLlXoZk2NzL9FY_bemay7Gpl052lYbKaBcH6cUNDG0dx6O2BaCUQFB-uH2nOBawFC6_U2DKKw");'>
                </div>
            </div>
        </div>
    </nav>
    <!-- Main Content -->
    <main class="flex-1 px-4 md:px-10 py-8 max-w-[1400px] mx-auto w-full">
        <!-- Page Header -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-8">
            <div>
                <h1 class="text-3xl md:text-4xl font-extrabold tracking-tight">Dashboard Overview</h1>
                <p class="text-text-secondary-light dark:text-text-secondary-dark mt-1 text-base">Welcome back,
                    Administrator. Here's what's happening at the zoo today.</p>
            </div>
            <button
                class="group flex items-center gap-2 bg-white dark:bg-card-dark border border-gray-200 dark:border-gray-700 hover:border-primary dark:hover:border-primary text-text-main-light dark:text-text-main-dark text-sm font-medium py-2.5 px-5 rounded-lg shadow-sm hover:shadow-md transition-all"
                id="refreshBtn">
                <span class="material-symbols-outlined text-lg group-hover:animate-spin">refresh</span>
                Refresh Statistics
            </button>
        </div>
        <!-- Stats Grid (Top Row) -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <!-- Card 1: Total Visitors -->
            <div
                class="bg-card-light dark:bg-card-dark p-6 rounded-xl shadow-sm border border-gray-100 dark:border-gray-800 hover:-translate-y-1 hover:shadow-lg transition-all duration-300 group">
                <div class="flex justify-between items-start mb-4">
                    <div class="p-3 bg-blue-50 dark:bg-blue-900/20 rounded-lg text-blue-600 dark:text-blue-400">
                        <span class="material-symbols-outlined">groups</span>
                    </div>
                    <span
                        class="flex items-center gap-1 text-xs font-bold text-primary bg-primary/10 px-2 py-1 rounded-full">
                        <span class="material-symbols-outlined text-sm">trending_up</span>
                        +12%
                    </span>
                </div>
                <h3 class="text-text-secondary-light dark:text-text-secondary-dark text-sm font-medium mb-1">Total
                    Visitors</h3>
                <p class="stat-value text-3xl font-bold text-text-main-light dark:text-text-main-dark"
                    data-base="12450">12,450</p>
                <p class="text-xs text-text-secondary-light dark:text-text-secondary-dark mt-2">Vs. previous month</p>
            </div>
            <!-- Card 2: Total Animals -->
            <div
                class="bg-card-light dark:bg-card-dark p-6 rounded-xl shadow-sm border border-gray-100 dark:border-gray-800 hover:-translate-y-1 hover:shadow-lg transition-all duration-300 group">
                <div class="flex justify-between items-start mb-4">
                    <div class="p-3 bg-green-50 dark:bg-green-900/20 rounded-lg text-green-600 dark:text-green-400">
                        <span class="material-symbols-outlined">pets</span>
                    </div>
                    <span
                        class="flex items-center gap-1 text-xs font-bold text-primary bg-primary/10 px-2 py-1 rounded-full">
                        <span class="material-symbols-outlined text-sm">trending_up</span>
                        +2%
                    </span>
                </div>
                <h3 class="text-text-secondary-light dark:text-text-secondary-dark text-sm font-medium mb-1">Total
                    Animals</h3>
                <p class="stat-value text-3xl font-bold text-text-main-light dark:text-text-main-dark" data-base="342">
                    342</p>
                <p class="text-xs text-text-secondary-light dark:text-text-secondary-dark mt-2">New arrivals included
                </p>
            </div>
            <!-- Card 3: Ticket Sales (Extra for balance) -->
            <div
                class="bg-card-light dark:bg-card-dark p-6 rounded-xl shadow-sm border border-gray-100 dark:border-gray-800 hover:-translate-y-1 hover:shadow-lg transition-all duration-300 group">
                <div class="flex justify-between items-start mb-4">
                    <div class="p-3 bg-yellow-50 dark:bg-yellow-900/20 rounded-lg text-yellow-600 dark:text-yellow-400">
                        <span class="material-symbols-outlined">confirmation_number</span>
                    </div>
                    <span
                        class="flex items-center gap-1 text-xs font-bold text-red-500 bg-red-100 dark:bg-red-900/30 px-2 py-1 rounded-full">
                        <span class="material-symbols-outlined text-sm">trending_down</span>
                        -1.5%
                    </span>
                </div>
                <h3 class="text-text-secondary-light dark:text-text-secondary-dark text-sm font-medium mb-1">Daily
                    Ticket Sales</h3>
                <p class="stat-value text-3xl font-bold text-text-main-light dark:text-text-main-dark" data-base="840">
                    840</p>
                <p class="text-xs text-text-secondary-light dark:text-text-secondary-dark mt-2">Tickets sold today</p>
            </div>
            <!-- Card 4: Active Staff (Extra for balance) -->
            <div
                class="bg-card-light dark:bg-card-dark p-6 rounded-xl shadow-sm border border-gray-100 dark:border-gray-800 hover:-translate-y-1 hover:shadow-lg transition-all duration-300 group">
                <div class="flex justify-between items-start mb-4">
                    <div class="p-3 bg-purple-50 dark:bg-purple-900/20 rounded-lg text-purple-600 dark:text-purple-400">
                        <span class="material-symbols-outlined">badge</span>
                    </div>
                    <div class="size-2 rounded-full bg-primary shadow-[0_0_10px_#36e27b]"></div>
                </div>
                <h3 class="text-text-secondary-light dark:text-text-secondary-dark text-sm font-medium mb-1">Active
                    Staff</h3>
                <p class="stat-value text-3xl font-bold text-text-main-light dark:text-text-main-dark" data-base="48">48
                </p>
                <p class="text-xs text-text-secondary-light dark:text-text-secondary-dark mt-2">Currently on duty</p>
            </div>
        </div>
        <!-- Detailed Stats Sections -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Most Viewed Animals -->
            <div
                class="flex flex-col bg-card-light dark:bg-card-dark rounded-xl shadow-sm border border-gray-100 dark:border-gray-800 overflow-hidden">
                <div
                    class="px-6 py-5 border-b border-gray-100 dark:border-gray-800 flex justify-between items-center bg-gray-50/50 dark:bg-white/5">
                    <h3 class="text-lg font-bold text-text-main-light dark:text-text-main-dark">Most Viewed Animals</h3>
                    <button class="text-sm text-primary font-bold hover:underline">View All</button>
                </div>
                <div class="p-6 flex-1 flex flex-col gap-6">
                    <!-- Item 1 -->
                    <div class="flex items-center justify-between group cursor-pointer">
                        <div class="flex items-center gap-4">
                            <div class="size-12 rounded-lg bg-cover bg-center shadow-sm"
                                data-alt="Majestic lion face close up"
                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCtObd79EPjOa3w5CMo35w8R9j1BmXirL9f-qaaSnknv6VKN-HKGh-72vr0ARCFQxUtSvZQtBZnIgtcp3J59HnwFHVgTc4uKb71inDj5qBq2_LNq5PEAQVRtL4IX06SebmnavWdTW5QCL_AA_Ca_t3hmbUVKsnxBmTzptEVzwjaelcPaxqSJILQFaLfbtVkFv-5CQNMZFXqIOy4SpnO7uVRyTRbZCO_B0DIZSFeRVsgVQWgzvtJNO9EW06g8DwcWj0haEDaHUGLTss');">
                            </div>
                            <div>
                                <p
                                    class="text-base font-bold text-text-main-light dark:text-text-main-dark group-hover:text-primary transition-colors">
                                    African Lion</p>
                                <p class="text-xs text-text-secondary-light dark:text-text-secondary-dark">Big Cats Zone
                                </p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="text-sm font-bold text-text-main-light dark:text-text-main-dark stat-value"
                                data-base="5000">5,000</p>
                            <p class="text-xs text-text-secondary-light dark:text-text-secondary-dark">views</p>
                        </div>
                    </div>
                    <!-- Item 2 -->
                    <div class="flex items-center justify-between group cursor-pointer">
                        <div class="flex items-center gap-4">
                            <div class="size-12 rounded-lg bg-cover bg-center shadow-sm"
                                data-alt="Cute penguins standing on ice"
                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBKdTZqRCHCMpYIV22FxSiITmp31DJ5Zr7rWbpq5bSWqTLXDgKGrcRXKQv-6xarJSmXF05HWFMaKEK4iB3aiLSWvKgu5KsrEAcFKDs7V7dqZUBHSGKzn7kkxtbA9sPJua-LoP-EC_Qxt5lYr4jtpJxFEfiNjd9r20rp7ZfjeM0BA3aAHvKzkmy3nPe3ewJLzctJEf9nB4ABfeA3vFmHS-2q7TCJYt7aKqvtRAdzWxkBQrCpZg0r32vX9PIl17X9YOo3u-dPQOmfBSg');">
                            </div>
                            <div>
                                <p
                                    class="text-base font-bold text-text-main-light dark:text-text-main-dark group-hover:text-primary transition-colors">
                                    Emperor Penguin</p>
                                <p class="text-xs text-text-secondary-light dark:text-text-secondary-dark">Arctic House
                                </p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="text-sm font-bold text-text-main-light dark:text-text-main-dark stat-value"
                                data-base="4200">4,200</p>
                            <p class="text-xs text-text-secondary-light dark:text-text-secondary-dark">views</p>
                        </div>
                    </div>
                    <!-- Item 3 -->
                    <div class="flex items-center justify-between group cursor-pointer">
                        <div class="flex items-center gap-4">
                            <div class="size-12 rounded-lg bg-cover bg-center shadow-sm"
                                data-alt="Tall giraffe eating leaves"
                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBj5GPvMmCT_0wLovDysN4l8i8H8qccaUCMqJqQmTxcpdXD02fQHG9hdPqaBlEb36Yff8Lo8GlnFipCICg3vLV3wkr8XDliebXVXKs2EWmCt4KiJ1X3iJiSuD7YHqj8hdLgvyOuzvIAQbco6573mas6Fk-V09nb4UpBnMIL1sG077o3gsOB7rJwMGMIIeVe_1SBP4LSnW3k86wJGLxTENhUylLBeSjH27L_H3HCvdf2uU9tECPyffPpXsXbHQ2Pc8pSj-rj5viq6zQ');">
                            </div>
                            <div>
                                <p
                                    class="text-base font-bold text-text-main-light dark:text-text-main-dark group-hover:text-primary transition-colors">
                                    Giraffe</p>
                                <p class="text-xs text-text-secondary-light dark:text-text-secondary-dark">Savanna
                                    Plains</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="text-sm font-bold text-text-main-light dark:text-text-main-dark stat-value"
                                data-base="3850">3,850</p>
                            <p class="text-xs text-text-secondary-light dark:text-text-secondary-dark">views</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Most Booked Tours -->
            <div
                class="flex flex-col bg-card-light dark:bg-card-dark rounded-xl shadow-sm border border-gray-100 dark:border-gray-800 overflow-hidden">
                <div
                    class="px-6 py-5 border-b border-gray-100 dark:border-gray-800 flex justify-between items-center bg-gray-50/50 dark:bg-white/5">
                    <h3 class="text-lg font-bold text-text-main-light dark:text-text-main-dark">Most Booked Tours</h3>
                    <button class="text-sm text-primary font-bold hover:underline">Manage</button>
                </div>
                <div class="p-6 flex-1 flex flex-col justify-center gap-8">
                    <!-- Progress Item 1 -->
                    <div class="flex flex-col gap-2">
                        <div class="flex justify-between items-end">
                            <div>
                                <p class="text-base font-bold text-text-main-light dark:text-text-main-dark">Safari
                                    Night Tour</p>
                                <p class="text-xs text-primary font-medium">Fully Booked</p>
                            </div>
                            <p class="text-sm font-bold text-text-main-light dark:text-text-main-dark">100%</p>
                        </div>
                        <div class="h-2.5 w-full bg-gray-100 dark:bg-gray-700 rounded-full overflow-hidden">
                            <div class="h-full bg-primary rounded-full" style="width: 100%"></div>
                        </div>
                    </div>
                    <!-- Progress Item 2 -->
                    <div class="flex flex-col gap-2">
                        <div class="flex justify-between items-end">
                            <div>
                                <p class="text-base font-bold text-text-main-light dark:text-text-main-dark">Reptile
                                    House Experience</p>
                                <p class="text-xs text-text-secondary-light dark:text-text-secondary-dark">Limited spots
                                    left</p>
                            </div>
                            <p class="text-sm font-bold text-text-main-light dark:text-text-main-dark">85%</p>
                        </div>
                        <div class="h-2.5 w-full bg-gray-100 dark:bg-gray-700 rounded-full overflow-hidden">
                            <div class="h-full bg-primary/80 rounded-full" style="width: 85%"></div>
                        </div>
                    </div>
                    <!-- Progress Item 3 -->
                    <div class="flex flex-col gap-2">
                        <div class="flex justify-between items-end">
                            <div>
                                <p class="text-base font-bold text-text-main-light dark:text-text-main-dark">Junior
                                    Zookeeper</p>
                                <p class="text-xs text-text-secondary-light dark:text-text-secondary-dark">Open for
                                    registration</p>
                            </div>
                            <p class="text-sm font-bold text-text-main-light dark:text-text-main-dark">45%</p>
                        </div>
                        <div class="h-2.5 w-full bg-gray-100 dark:bg-gray-700 rounded-full overflow-hidden">
                            <div class="h-full bg-primary/40 rounded-full" style="width: 45%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Simple JS for Interaction Simulation -->
    <script>
        document.getElementById('refreshBtn').addEventListener('click', function () {
            const btn = this;
            const icon = btn.querySelector('.material-symbols-outlined');

            // Add spin class
            icon.classList.add('animate-spin');

            // Simulate API latency
            setTimeout(() => {
                icon.classList.remove('animate-spin');

                // Update numbers randomly
                const statValues = document.querySelectorAll('.stat-value');
                statValues.forEach(el => {
                    const base = parseInt(el.getAttribute('data-base').replace(/,/g, ''));
                    // Fluctuate by +/- 10%
                    const variation = Math.floor(base * 0.1);
                    const randomChange = Math.floor(Math.random() * (variation * 2 + 1)) - variation;
                    const newValue = base + randomChange;

                    // Format number with commas
                    el.textContent = newValue.toLocaleString();
                });

                // Show toast/feedback (optional, keeping it simple as requested)
                console.log("Stats refreshed!");
            }, 800);
        });
    </script>
</body>

</html>