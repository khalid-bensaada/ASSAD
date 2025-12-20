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
                <a class="text-primary text-sm font-bold leading-normal"
                    href="admin.php">Dashboard</a>
                <a class="text-text-main dark:text-gray-300 text-sm font-medium leading-normal hover:text-primary transition-colors" href="m_animal.php">Animals</a>
                <a class="text-text-main dark:text-gray-300 text-sm font-medium leading-normal hover:text-primary transition-colors"
                    href="m_habitat.php">Habitats</a>
                <a class="text-text-main dark:text-gray-300 text-sm font-medium leading-normal hover:text-primary transition-colors"
                    href="m_users.php">Users</a>
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