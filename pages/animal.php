

<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Zoo ASSAD - Animals List</title>
    <!-- Google Fonts: Spline Sans -->
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
    <!-- Theme Config -->
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#36e27b",
                        "primary-hover": "#2dbd66",
                        "background-light": "#f6f8f7",
                        "background-dark": "#112117",
                        "card-dark": "#1c2e24",
                        "text-muted": "#9eb7a8",
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

        /* Custom scrollbar for horizontal filters if needed */
        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>

<body
    class="bg-background-light dark:bg-background-dark min-h-screen flex flex-col font-display text-gray-900 dark:text-white transition-colors duration-200">
    <!-- Navbar -->
    <header
        class="sticky top-0 z-50 w-full border-b border-gray-200 bg-background-light/95 backdrop-blur dark:border-[#29382f] dark:bg-background-dark/95">
        <div class="mx-auto flex h-16 max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">
            <div class="flex items-center gap-3">
                <div class="flex size-8 items-center justify-center rounded-full bg-primary/20 text-primary">
                    <span class="material-symbols-outlined">pets</span>
                </div>
                <h1 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">Zoo ASSAD</h1>
            </div>
            <div class="flex items-center gap-6">
                <nav class="hidden md:flex items-center gap-6">
                    <a class="text-sm font-medium text-gray-600 hover:text-primary dark:text-gray-300 dark:hover:text-primary transition-colors"
                        href="visitor.php">Home</a>
                    <a class="text-sm font-medium text-gray-900 dark:text-white font-bold border-b-2 border-primary"
                        href="animal.php">Animals</a>
                    <a class="text-sm font-medium text-gray-600 hover:text-primary dark:text-gray-300 dark:hover:text-primary transition-colors"
                        href="animal_detials.php">Detials</a>
                    <a class="text-sm font-medium text-gray-600 hover:text-primary dark:text-gray-300 dark:hover:text-primary transition-colors"
                        href="tours.php">Tours</a>
                </nav>
                <button
                    class="flex items-center justify-center rounded-full bg-primary px-5 py-2 text-sm font-bold text-[#112117] transition-all hover:bg-primary-hover hover:scale-105 shadow-[0_0_15px_rgba(54,226,123,0.3)]">
                    Logout
                </button>
            </div>
        </div>
    </header>
    <main class="flex-grow">
        <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
            <!-- Page Heading -->
            <div class="mb-8 flex flex-col gap-4 md:flex-row md:items-end md:justify-between">
                <div class="max-w-2xl">
                    <h2
                        class="text-4xl font-black leading-tight tracking-tight text-gray-900 dark:text-white md:text-5xl">
                        Our Inhabitants
                    </h2>
                    <p class="mt-4 text-lg text-gray-600 dark:text-text-muted">
                        Explore the diverse wildlife at Zoo ASSAD. From the deepest jungles to the vast savannahs, meet
                        the animals that call our sanctuary home.
                    </p>
                </div>
            </div>
            <!-- Filters -->
            <div class="mb-10 flex overflow-x-auto pb-4 hide-scrollbar">
                <div class="flex gap-3">
                    <button
                        class="flex h-10 min-w-[100px] cursor-pointer items-center justify-center rounded-full bg-primary px-6 text-sm font-bold text-[#112117] transition-all hover:opacity-90">
                        All Animals
                    </button>
                    <button
                        class="flex h-10 min-w-[100px] cursor-pointer items-center justify-center rounded-full bg-gray-200 px-6 text-sm font-medium text-gray-700 transition-all hover:bg-gray-300 dark:bg-[#29382f] dark:text-white dark:hover:bg-[#35463b]">
                        Rainforest
                    </button>
                    <button
                        class="flex h-10 min-w-[100px] cursor-pointer items-center justify-center rounded-full bg-gray-200 px-6 text-sm font-medium text-gray-700 transition-all hover:bg-gray-300 dark:bg-[#29382f] dark:text-white dark:hover:bg-[#35463b]">
                        Savanna
                    </button>
                    <button
                        class="flex h-10 min-w-[100px] cursor-pointer items-center justify-center rounded-full bg-gray-200 px-6 text-sm font-medium text-gray-700 transition-all hover:bg-gray-300 dark:bg-[#29382f] dark:text-white dark:hover:bg-[#35463b]">
                        Aquatic
                    </button>
                    <button
                        class="flex h-10 min-w-[100px] cursor-pointer items-center justify-center rounded-full bg-gray-200 px-6 text-sm font-medium text-gray-700 transition-all hover:bg-gray-300 dark:bg-[#29382f] dark:text-white dark:hover:bg-[#35463b]">
                        Arctic
                    </button>
                    <button
                        class="flex h-10 min-w-[100px] cursor-pointer items-center justify-center rounded-full bg-gray-200 px-6 text-sm font-medium text-gray-700 transition-all hover:bg-gray-300 dark:bg-[#29382f] dark:text-white dark:hover:bg-[#35463b]">
                        Wetlands
                    </button>
                </div>
            </div>
            <!-- Grid -->
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                <!-- Card 1 -->
                <div
                    class="group relative flex flex-col overflow-hidden rounded-xl bg-white shadow-sm transition-all duration-300 hover:-translate-y-2 hover:shadow-xl dark:bg-card-dark dark:shadow-none dark:hover:shadow-[0_10px_40px_-10px_rgba(0,0,0,0.5)]">
                    <div class="relative aspect-[4/3] overflow-hidden">
                        <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
                            data-alt="Lion with a majestic mane looking to the side"
                            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDlhyheQ2AmWzXkSGUN44FjxF86vlBY5aNcogpA8DXdv9qVRraozvsZoGRkaXdITNh9NQpRqj4hvfUb3jUacOOmvwK4nY-IPQ0MSKPyTfbIu7GMag6POt9GnXD3olRm73iMh1YfcShRD1poFugGl1RwE7aVl6MWyBX4ws5msZhpyzTKvtJBah6p7a-hz0_Lx0ClD-17oIKINGF9wsXaglgoiM8Z1S2Tj77Lr6de8b7fb-VlPRoNI234Clm_JVWnHV--V8cAnHrtBxg');">
                        </div>
                        <div
                            class="absolute right-3 top-3 rounded-full bg-black/50 px-3 py-1 text-xs font-bold text-white backdrop-blur-md">
                            Mammal
                        </div>
                    </div>
                    <div class="flex flex-1 flex-col p-5">
                        <div class="flex items-start justify-between">
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 dark:text-white">Simba</h3>
                                <p class="text-sm font-medium text-primary">Panthera leo</p>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center gap-2 text-sm text-gray-500 dark:text-text-muted">
                            <span class="material-symbols-outlined text-[20px] text-primary">public</span>
                            <span>Tanzania</span>
                        </div>
                        <div class="mt-6 pt-4 border-t border-gray-100 dark:border-[#29382f]">
                            <button
                                class="flex w-full items-center justify-center gap-2 rounded-full bg-gray-100 py-3 text-sm font-bold text-gray-900 transition-colors group-hover:bg-primary group-hover:text-[#112117] dark:bg-[#29382f] dark:text-white dark:group-hover:bg-primary dark:group-hover:text-[#112117]">
                                View Details
                                <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div
                    class="group relative flex flex-col overflow-hidden rounded-xl bg-white shadow-sm transition-all duration-300 hover:-translate-y-2 hover:shadow-xl dark:bg-card-dark dark:shadow-none dark:hover:shadow-[0_10px_40px_-10px_rgba(0,0,0,0.5)]">
                    <div class="relative aspect-[4/3] overflow-hidden">
                        <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
                            data-alt="Close up of a vibrant green tree frog"
                            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBTNMfgnqxxZ_Os1fStRZG1EclVNBm3I-b3tT8PQSu9B5K_tfvZDr7gxXWeIoZMS3Ke_2_QsrG2FEHGEzaSODHKTZo6zH6HAyOnfODLrlg1v5C2RALlGkaYz-4HDDaKZ1lpLGv_MaKgTzOEXtw7jtr9YytVZaKFoms55_iwZ9K1-ParyjClZGmab49oMbTqjFOcmzqXtPb-JO4scqZi7me5qs424PEI1l9Vd6MMgz_jg_7JXofIJH8dZ1iOrXG71EhDtx4zUDOyMpg');">
                        </div>
                        <div
                            class="absolute right-3 top-3 rounded-full bg-black/50 px-3 py-1 text-xs font-bold text-white backdrop-blur-md">
                            Amphibian
                        </div>
                    </div>
                    <div class="flex flex-1 flex-col p-5">
                        <div class="flex items-start justify-between">
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 dark:text-white">Speckles</h3>
                                <p class="text-sm font-medium text-primary">Agalychnis callidryas</p>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center gap-2 text-sm text-gray-500 dark:text-text-muted">
                            <span class="material-symbols-outlined text-[20px] text-primary">public</span>
                            <span>Costa Rica</span>
                        </div>
                        <div class="mt-6 pt-4 border-t border-gray-100 dark:border-[#29382f]">
                            <button
                                class="flex w-full items-center justify-center gap-2 rounded-full bg-gray-100 py-3 text-sm font-bold text-gray-900 transition-colors group-hover:bg-primary group-hover:text-[#112117] dark:bg-[#29382f] dark:text-white dark:group-hover:bg-primary dark:group-hover:text-[#112117]">
                                View Details
                                <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div
                    class="group relative flex flex-col overflow-hidden rounded-xl bg-white shadow-sm transition-all duration-300 hover:-translate-y-2 hover:shadow-xl dark:bg-card-dark dark:shadow-none dark:hover:shadow-[0_10px_40px_-10px_rgba(0,0,0,0.5)]">
                    <div class="relative aspect-[4/3] overflow-hidden">
                        <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
                            data-alt="Elephant walking through tall grass"
                            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuARQYZwXqeZXNn8Uc56ByloE1IlbraeSeEmR9sT22O_bHmhlU-v2QH0C3tgLwLIbjDKm57iJm00P7onKQmGEWBJTSWGE_qiJZ_uLox36VV3A5FCX5F2qgcnkjduCRLvkBQtqP6Wk2EU59nzQvKiKmuUjvGAID_CKPP4VGgL1P8WvtoeHdOB5wbWYlVPOAJG8iUPLjt2Q9NEHqJWUPf9MtalnE8qqrtPJgZJuQ3pKNIgRTsWFVqjdQc3wgKYesVfIJxMrbXRiFiqGo0');">
                        </div>
                        <div
                            class="absolute right-3 top-3 rounded-full bg-black/50 px-3 py-1 text-xs font-bold text-white backdrop-blur-md">
                            Mammal
                        </div>
                    </div>
                    <div class="flex flex-1 flex-col p-5">
                        <div class="flex items-start justify-between">
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 dark:text-white">Manny</h3>
                                <p class="text-sm font-medium text-primary">Loxodonta</p>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center gap-2 text-sm text-gray-500 dark:text-text-muted">
                            <span class="material-symbols-outlined text-[20px] text-primary">public</span>
                            <span>Kenya</span>
                        </div>
                        <div class="mt-6 pt-4 border-t border-gray-100 dark:border-[#29382f]">
                            <button
                                class="flex w-full items-center justify-center gap-2 rounded-full bg-gray-100 py-3 text-sm font-bold text-gray-900 transition-colors group-hover:bg-primary group-hover:text-[#112117] dark:bg-[#29382f] dark:text-white dark:group-hover:bg-primary dark:group-hover:text-[#112117]">
                                View Details
                                <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Card 4 -->
                <div
                    class="group relative flex flex-col overflow-hidden rounded-xl bg-white shadow-sm transition-all duration-300 hover:-translate-y-2 hover:shadow-xl dark:bg-card-dark dark:shadow-none dark:hover:shadow-[0_10px_40px_-10px_rgba(0,0,0,0.5)]">
                    <div class="relative aspect-[4/3] overflow-hidden">
                        <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
                            data-alt="Dolphin jumping out of the water"
                            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCM96c5oISyGJW9fiB_rP8QfrcmRI9zEqK7Cug8NEkk9K35kv5ophhhr3hscWb7nRkQ34L88pT-IgkNyiABJA4cx-M7UxmoYUie_M3VFuQSj8ZAeKx6eWGOCzS4wNzwnQfpSuVIaP3B8RVxf9qkvPYo9Xe1XyWT6UfWvwwaGDo1lOfJ1c3rEIOx42OCVunwocM7aJb1yBdzOyFNwqtSNiyUqNsRAaulyEh0zFuXD8jOfp7-WeHXJwtBmoiYM1XGO92uyZ8vlXYW4Pw');">
                        </div>
                        <div
                            class="absolute right-3 top-3 rounded-full bg-black/50 px-3 py-1 text-xs font-bold text-white backdrop-blur-md">
                            Mammal
                        </div>
                    </div>
                    <div class="flex flex-1 flex-col p-5">
                        <div class="flex items-start justify-between">
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 dark:text-white">Flipper</h3>
                                <p class="text-sm font-medium text-primary">Tursiops</p>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center gap-2 text-sm text-gray-500 dark:text-text-muted">
                            <span class="material-symbols-outlined text-[20px] text-primary">public</span>
                            <span>Atlantic Ocean</span>
                        </div>
                        <div class="mt-6 pt-4 border-t border-gray-100 dark:border-[#29382f]">
                            <button
                                class="flex w-full items-center justify-center gap-2 rounded-full bg-gray-100 py-3 text-sm font-bold text-gray-900 transition-colors group-hover:bg-primary group-hover:text-[#112117] dark:bg-[#29382f] dark:text-white dark:group-hover:bg-primary dark:group-hover:text-[#112117]">
                                View Details
                                <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Card 5 -->
                <div
                    class="group relative flex flex-col overflow-hidden rounded-xl bg-white shadow-sm transition-all duration-300 hover:-translate-y-2 hover:shadow-xl dark:bg-card-dark dark:shadow-none dark:hover:shadow-[0_10px_40px_-10px_rgba(0,0,0,0.5)]">
                    <div class="relative aspect-[4/3] overflow-hidden">
                        <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
                            data-alt="Tiger walking in the jungle"
                            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBxbjChTVrdUV3UM85p3yNzK4PTNjyvEw5RJAVcW1UoJZRzBUhDjALqm2O2cwIwTwI8E5jq--v4BpUMaS3rkOePZ9wsW8l3UF6bAziSLul7EfLQyfMv50nc0GaYZKByiIFjRvIb8p3XK3fd3PQ6TRIc8GdqwLK6D6jv_cKtSvkmsTIbJWeRPdl2btunr5yFEx4Gm2erCN3t6aQ21S0tQZNgXJa6I-IeHdrDD1VBtS9PY4znEed-wgJjz6rvnYessiUblvkq55C-4z8');">
                        </div>
                        <div
                            class="absolute right-3 top-3 rounded-full bg-black/50 px-3 py-1 text-xs font-bold text-white backdrop-blur-md">
                            Mammal
                        </div>
                    </div>
                    <div class="flex flex-1 flex-col p-5">
                        <div class="flex items-start justify-between">
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 dark:text-white">Stripes</h3>
                                <p class="text-sm font-medium text-primary">Panthera tigris</p>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center gap-2 text-sm text-gray-500 dark:text-text-muted">
                            <span class="material-symbols-outlined text-[20px] text-primary">public</span>
                            <span>India</span>
                        </div>
                        <div class="mt-6 pt-4 border-t border-gray-100 dark:border-[#29382f]">
                            <button
                                class="flex w-full items-center justify-center gap-2 rounded-full bg-gray-100 py-3 text-sm font-bold text-gray-900 transition-colors group-hover:bg-primary group-hover:text-[#112117] dark:bg-[#29382f] dark:text-white dark:group-hover:bg-primary dark:group-hover:text-[#112117]">
                                View Details
                                <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Card 6 -->
                <div
                    class="group relative flex flex-col overflow-hidden rounded-xl bg-white shadow-sm transition-all duration-300 hover:-translate-y-2 hover:shadow-xl dark:bg-card-dark dark:shadow-none dark:hover:shadow-[0_10px_40px_-10px_rgba(0,0,0,0.5)]">
                    <div class="relative aspect-[4/3] overflow-hidden">
                        <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
                            data-alt="Golden Retriever running in a park"
                            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDk4l1zLPbC6MakBo3FgOpdvS-KESBaFvQNvxHM-JfYOuld7QpDEECF_8Ww7FA74zUtsHADayGwsAXLB94SkYo1efyWT7oJ5NaIKSQ67iiZ_vlKxBmT8l0bjJd-lVpzPpTNnUzs9TAEsfD7Ep80se7CqFxN_I2G8OszFg4lIIuaxsSEZfkSX82AnwAByGVDrnBNF2SzWosRYjzd5ke7Tad2r_1nL0Ia3_utfy7YXyT669HikuL56EpHk0FYhDfPVmKoKwXdf1a_niw');">
                        </div>
                        <div
                            class="absolute right-3 top-3 rounded-full bg-black/50 px-3 py-1 text-xs font-bold text-white backdrop-blur-md">
                            Canine
                        </div>
                    </div>
                    <div class="flex flex-1 flex-col p-5">
                        <div class="flex items-start justify-between">
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 dark:text-white">Buddy</h3>
                                <p class="text-sm font-medium text-primary">Canis lupus familiaris</p>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center gap-2 text-sm text-gray-500 dark:text-text-muted">
                            <span class="material-symbols-outlined text-[20px] text-primary">public</span>
                            <span>Global</span>
                        </div>
                        <div class="mt-6 pt-4 border-t border-gray-100 dark:border-[#29382f]">
                            <button
                                class="flex w-full items-center justify-center gap-2 rounded-full bg-gray-100 py-3 text-sm font-bold text-gray-900 transition-colors group-hover:bg-primary group-hover:text-[#112117] dark:bg-[#29382f] dark:text-white dark:group-hover:bg-primary dark:group-hover:text-[#112117]">
                                View Details
                                <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Card 7 -->
                <div
                    class="group relative flex flex-col overflow-hidden rounded-xl bg-white shadow-sm transition-all duration-300 hover:-translate-y-2 hover:shadow-xl dark:bg-card-dark dark:shadow-none dark:hover:shadow-[0_10px_40px_-10px_rgba(0,0,0,0.5)]">
                    <div class="relative aspect-[4/3] overflow-hidden">
                        <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
                            data-alt="Detailed shot of a colorful parrot feather pattern"
                            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBUh6qQ3xx84OB8xyNvbSI7lCg-iAzgJPFf8wZZJPQSD6CP06HWxjldNLvkbu6nkv8Vgvmyp8TUqURcDgd-p0AB4wEnOCYAyHk1E1l7nq3S_35bN5pIWfhGWZz3fBMIfwNyJm--6bgK0CdrBNgUdAykOx9hgdvHUoB83ImbhI0VelWua9urGNnkTuRWET-kWUn2c4ZFgsdE6EylP165AmUAZ8NXdU6dceWRAkge9NsEs6WaG29K5EFrWIr4a6squ0Ls3qxe76i8-58');">
                        </div>
                        <div
                            class="absolute right-3 top-3 rounded-full bg-black/50 px-3 py-1 text-xs font-bold text-white backdrop-blur-md">
                            Bird
                        </div>
                    </div>
                    <div class="flex flex-1 flex-col p-5">
                        <div class="flex items-start justify-between">
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 dark:text-white">Coco</h3>
                                <p class="text-sm font-medium text-primary">Ara ararauna</p>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center gap-2 text-sm text-gray-500 dark:text-text-muted">
                            <span class="material-symbols-outlined text-[20px] text-primary">public</span>
                            <span>Brazil</span>
                        </div>
                        <div class="mt-6 pt-4 border-t border-gray-100 dark:border-[#29382f]">
                            <button
                                class="flex w-full items-center justify-center gap-2 rounded-full bg-gray-100 py-3 text-sm font-bold text-gray-900 transition-colors group-hover:bg-primary group-hover:text-[#112117] dark:bg-[#29382f] dark:text-white dark:group-hover:bg-primary dark:group-hover:text-[#112117]">
                                View Details
                                <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Card 8 -->
                <div
                    class="group relative flex flex-col overflow-hidden rounded-xl bg-white shadow-sm transition-all duration-300 hover:-translate-y-2 hover:shadow-xl dark:bg-card-dark dark:shadow-none dark:hover:shadow-[0_10px_40px_-10px_rgba(0,0,0,0.5)]">
                    <div class="relative aspect-[4/3] overflow-hidden">
                        <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
                            data-alt="Panda eating bamboo in the forest"
                            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCjVY0nRHymOsQtODoHWp-RGIC4pCYjiVvwZITmmgzXDczmOWh09VX8IS1D4nmy7VMgRvIOGqa6C1TJTJSx4FjxQinm85nGqoWwB3-HQJtPNbR6Il82F0-CIhUieU8_D9cV_noRLQJg8RzUR1-kzvw3OmjyHmlkdmyRQ6SysWLTLKXDtbDA6sTg6LdSwD6lomnLfCuKUuIw9xMZwVpBRG23UlOdfDHR2LoioQkoDD2vN9jHa19-y0hXgcoc-cyHeCZO6lVzutEGT6M');">
                        </div>
                        <div
                            class="absolute right-3 top-3 rounded-full bg-black/50 px-3 py-1 text-xs font-bold text-white backdrop-blur-md">
                            Mammal
                        </div>
                    </div>
                    <div class="flex flex-1 flex-col p-5">
                        <div class="flex items-start justify-between">
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 dark:text-white">Bamboo</h3>
                                <p class="text-sm font-medium text-primary">Ailuropoda melanoleuca</p>
                            </div>
                        </div>
                        <div class="mt-4 flex items-center gap-2 text-sm text-gray-500 dark:text-text-muted">
                            <span class="material-symbols-outlined text-[20px] text-primary">public</span>
                            <span>China</span>
                        </div>
                        <div class="mt-6 pt-4 border-t border-gray-100 dark:border-[#29382f]">
                            <button
                                class="flex w-full items-center justify-center gap-2 rounded-full bg-gray-100 py-3 text-sm font-bold text-gray-900 transition-colors group-hover:bg-primary group-hover:text-[#112117] dark:bg-[#29382f] dark:text-white dark:group-hover:bg-primary dark:group-hover:text-[#112117]">
                                View Details
                                <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

    </main>
    <!-- Footer -->
    <footer class="border-t border-gray-200 bg-background-light dark:border-[#29382f] dark:bg-background-dark">
        <div
            class="mx-auto flex max-w-7xl flex-col items-center justify-between gap-6 px-4 py-10 sm:flex-row sm:px-6 lg:px-8">
            <p class="text-sm text-gray-500 dark:text-text-muted">© 2023 Zoo ASSAD. All rights reserved.</p>
            <div class="flex gap-6">
                <a class="text-sm font-normal text-gray-500 hover:text-primary dark:text-text-muted dark:hover:text-primary"
                    href="#">Privacy Policy</a>
                <a class="text-sm font-normal text-gray-500 hover:text-primary dark:text-text-muted dark:hover:text-primary"
                    href="#">Terms of Service</a>
                <a class="text-sm font-normal text-gray-500 hover:text-primary dark:text-text-muted dark:hover:text-primary"
                    href="#">Contact Us</a>
            </div>
            <div class="flex gap-4">
                <a class="text-gray-400 hover:text-primary dark:text-text-muted dark:hover:text-primary transition-colors"
                    href="#">
                    <span class="sr-only">Twitter</span>
                    <!-- Simplified Icon for Twitter -->
                    <svg class="h-6 w-6" fill="currentColor" viewbox="0 0 24 24">
                        <path
                            d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">
                        </path>
                    </svg>
                </a>
                <a class="text-gray-400 hover:text-primary dark:text-text-muted dark:hover:text-primary transition-colors"
                    href="#">
                    <span class="sr-only">Facebook</span>
                    <!-- Simplified Icon for Facebook -->
                    <svg class="h-6 w-6" fill="currentColor" viewbox="0 0 24 24">
                        <path clip-rule="evenodd"
                            d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                            fill-rule="evenodd"></path>
                    </svg>
                </a>
                <a class="text-gray-400 hover:text-primary dark:text-text-muted dark:hover:text-primary transition-colors"
                    href="#">
                    <span class="sr-only">Instagram</span>
                    <!-- Simplified Icon for Instagram -->
                    <svg class="h-6 w-6" fill="currentColor" viewbox="0 0 24 24">
                        <path clip-rule="evenodd"
                            d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.468 2.53c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                            fill-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>
    </footer>
    
</body>

</html>