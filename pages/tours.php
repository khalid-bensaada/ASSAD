<?php

$conn = new mysqli("localhost", "root", "", "assad");

if ($conn->connect_error) {
    die("Database connection failed");
}
session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit;
}

$user_id = $_SESSION["user_id"];

if (isset($_POST["book"])) {
    $visit = $_POST["visit_id"];
    $nb    = $_POST["persons"];

    $stmt = $conn->prepare(
        "INSERT INTO reservations (idvisite, idutilisateur, nbpersonnes, datereservation)
         VALUES (?, ?, ?, NOW())"
    );
    $stmt->bind_param("iii", $visit, $user_id, $nb);
    $stmt->execute();
}

$tours = $conn->query("SELECT * FROM visitesguidees WHERE statut='active'");

?>
<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Zoo ASSAD - Guided Tours</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&amp;family=Noto+Sans:ital,wght@0,100..900;1,100..900&amp;display=swap"
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
    <!-- Theme Config -->
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#36e27b",
                        "background-light": "#f6f8f7",
                        "background-dark": "#111714",
                        "surface-dark": "#1c2620",
                        "surface-border": "#29382f",
                        "text-secondary": "#9eb7a8"
                    },
                    fontFamily: {
                        "display": ["Plus Jakarta Sans", "sans-serif"],
                        "body": ["Noto Sans", "sans-serif"]
                    },
                    borderRadius: { "DEFAULT": "1rem", "lg": "1.5rem", "xl": "2rem", "full": "9999px" },
                },
            },
        }
    </script>
    <style>
        /* Custom scrollbar for a cleaner look */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #111714;
        }

        ::-webkit-scrollbar-thumb {
            background: #29382f;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #36e27b;
        }
    </style>
</head>

<body
    class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-white font-display overflow-x-hidden antialiased">
    <div class="relative flex h-auto min-h-screen w-full flex-col group/design-root">
        <!-- Navbar -->
        <header class="sticky top-0 z-50 bg-[#111714]/90 backdrop-blur-md border-b border-surface-border">
            <div class="layout-container flex h-full grow flex-col">
                <div class="px-4 md:px-10 flex flex-1 justify-center py-2">
                    <div class="layout-content-container flex w-full max-w-[1200px] items-center justify-between">
                        <!-- Logo -->
                        <div
                            class="flex items-center gap-4 text-white cursor-pointer hover:opacity-80 transition-opacity">
                            <div class="size-8 text-primary">
                                <span class="material-symbols-outlined !text-[32px]">pets</span>
                            </div>
                            <h2 class="text-white text-xl font-bold leading-tight tracking-[-0.015em]">Zoo ASSAD</h2>
                        </div>
                        <!-- Navigation & Actions -->
                        <div class="flex items-center gap-4 md:gap-8">
                            <nav class="hidden md:flex items-center gap-9">
                                <a class="text-white hover:text-primary transition-colors text-sm font-medium leading-normal"
                                    href="#">Home</a>
                                <a class="text-white hover:text-primary transition-colors text-sm font-medium leading-normal"
                                    href="#">Animals</a>
                            </nav>
                            <button
                                class="flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-10 px-6 bg-surface-border hover:bg-surface-border/80 text-white text-sm font-bold leading-normal tracking-[0.015em] transition-all">
                                <span class="truncate">Logout</span>
                            </button>
                            <!-- Mobile Menu Icon -->
                            <button class="md:hidden text-white">
                                <span class="material-symbols-outlined">menu</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content Wrapper -->
        <main class="flex-1 flex flex-col items-center w-full px-4 md:px-10 pb-20">
            <div class="w-full max-w-[1200px] flex flex-col gap-10">
                <!-- Hero Section -->
                <section class="w-full mt-6">
                    <div class="@container">
                        <div class="flex min-h-[400px] flex-col gap-6 bg-cover bg-center bg-no-repeat rounded-xl md:rounded-[2rem] items-center justify-center p-6 md:p-12 relative overflow-hidden group"
                            data-alt="Dark jungle foliage background with faint sunlight filtering through"
                            style='background-image: linear-gradient(rgba(17, 23, 20, 0.5) 0%, rgba(17, 23, 20, 0.8) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuAitO7-a_ej-zU4lHAoLsiGJJCBZ71hCI-K5TWbcE7_FqqE0siQ17l3xbvchYL4PGNseKFao1wO8du-i8vP0knYKhC_tipdUej65axhgYxjkOCGHJFjufKmA1Ks_Uvcr1JSpbadIc56CRJfx945_8rdACJ_3VLTr0a1DPSQ4nRYxCJUcLMXHlVhITn7jmhC5tiACRCxVTiaFXOIMT_67PW_rdloixBrjJ2x_0QeFSokaTer5a2mSY1dNg3op5Amxp9hEe81SFdWFtw");'>
                            <div class="flex flex-col gap-4 text-center max-w-2xl relative z-10">
                                <h1
                                    class="text-white text-4xl md:text-6xl font-black leading-tight tracking-[-0.033em]">
                                    Guided Wild Tours
                                </h1>
                                <h2 class="text-gray-200 text-base md:text-lg font-normal leading-relaxed">
                                    Experience the animal kingdom up close with our expert guides. Book your adventure
                                    today.
                                </h2>
                            </div>
                            <!-- Search Bar -->
                            <label
                                class="flex flex-col min-w-40 h-14 w-full max-w-[560px] md:h-16 relative z-10 mt-4 shadow-lg shadow-black/20">
                                <div
                                    class="flex w-full flex-1 items-stretch rounded-full h-full overflow-hidden border border-surface-border bg-surface-dark focus-within:border-primary transition-colors">
                                    <div class="text-text-secondary flex items-center justify-center pl-6 pr-2">
                                        <span class="material-symbols-outlined">search</span>
                                    </div>
                                    <input
                                        class="flex w-full min-w-0 flex-1 bg-transparent text-white focus:outline-0 placeholder:text-text-secondary px-2 text-base font-normal leading-normal"
                                        placeholder="Search tours by animal or language..." value="" />
                                    <div class="flex items-center justify-center pr-2">
                                        <button
                                            class="flex cursor-pointer items-center justify-center overflow-hidden rounded-full h-10 px-6 md:h-12 bg-primary hover:bg-green-400 text-[#111714] text-sm font-bold leading-normal transition-colors">
                                            <span class="truncate">Find Tours</span>
                                        </button>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>
                </section>
                <!-- Reservations Section -->
                <section class="w-full flex flex-col gap-4">
                    <div class="flex items-center gap-2 px-2">
                        <span class="material-symbols-outlined text-primary">confirmation_number</span>
                        <h3 class="text-white text-xl font-bold leading-tight tracking-[-0.015em]">Your Upcoming Tickets
                        </h3>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Ticket Card 1 -->
                        <div
                            class="flex flex-col sm:flex-row items-stretch justify-between gap-4 rounded-2xl bg-surface-dark p-4 shadow-md border border-surface-border hover:border-surface-border/80 transition-colors">
                            <div class="flex flex-col justify-between gap-4 flex-1">
                                <div class="flex flex-col gap-1">
                                    <p class="text-white text-lg font-bold leading-tight">Elephant Bathing</p>
                                    <div class="flex items-center gap-2 text-text-secondary text-sm">
                                        <span class="material-symbols-outlined text-[18px]">calendar_month</span>
                                        <span>Tomorrow, 10:00 AM</span>
                                    </div>
                                    <div class="flex items-center gap-2 text-text-secondary text-sm">
                                        <span class="material-symbols-outlined text-[18px]">person</span>
                                        <span>1 Adult</span>
                                    </div>
                                </div>
                                <div class="flex gap-3 mt-2">
                                    <button
                                        class="flex-1 sm:flex-none h-9 px-4 rounded-full bg-surface-border hover:bg-white/10 text-white text-sm font-medium transition-colors">
                                        Manage
                                    </button>
                                    <button
                                        class="flex-1 sm:flex-none h-9 px-4 rounded-full bg-primary/10 hover:bg-primary/20 text-primary text-sm font-medium transition-colors">
                                        View Ticket
                                    </button>
                                </div>
                            </div>
                            <div class="w-full sm:w-40 aspect-video sm:aspect-square bg-center bg-no-repeat bg-cover rounded-xl"
                                data-alt="Elephants splashing water in a river"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDY-JwBXpFu9GfCpUTm06lwc8rh5M_fOdzGoCquF3fk3ij7wo5I-pB9uZBjXu1WvWmPpCM6NZr18dYhq7t2-ibao0um6QemtqCeQJjlnFDfJPx246Urh2V0wzWjZLK1-3OFjTQrtHE0ZgZ92Y9gIpBPUd94AMMizIJ0wbpprhkIvXCOVlNRpX6aUFoWn3DtYxeVqUxYytjZ-2b80cyq08vtXUruIH3ysmVDQu4veRPbZ0mKuEBvHxuxkGVbe16m7CSKCq7OvxtIGfk");'>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Tours Grid Section -->
                <section class="w-full flex flex-col gap-6">
                    <div class="flex items-center justify-between px-2 pt-4">
                        <div class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary">explore</span>
                            <h2 class="text-white text-2xl font-bold leading-tight tracking-[-0.015em]">Upcoming Safari
                                Adventures</h2>
                        </div>
                        <a class="text-sm font-medium text-primary hover:text-white transition-colors hidden sm:block"
                            href="#">View all tours -&gt;</a>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Tour Card 1 -->
                        <div
                            class="group flex flex-col rounded-2xl bg-surface-dark border border-surface-border overflow-hidden hover:-translate-y-2 hover:shadow-[0_20px_40px_-15px_rgba(54,226,123,0.1)] transition-all duration-300">
                            <!-- Card Image -->
                            <div class="h-56 w-full bg-cover bg-center relative"
                                data-alt="Lion silhouette against a dark sunset"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAKv1K1DkgLVFlg07qyqOMFEiFeRTat4wBd9P4MqzdRFpBDniJKyrxL6k30BVEWbDmRiFkZW0Rqd2Wx5oglgmjOewug0ecojsrglXd7l5oRzId_qkfpCi4YOq8oUWqXUzlocb6yqyh9Jqh3xBESDcjmtSA0hZybF3MMBjFUqPTSM1AQno6s75bbD9aXdBAD-xgxY9MJAm-jEd1icXgtU_RqnaUdWELJj01TJoK3U4CX95Z2oEUo4XllRbadcY1LWFLIIeKswEQuXR8");'>
                                <div
                                    class="absolute top-4 right-4 bg-black/60 backdrop-blur-sm text-white text-xs font-bold px-3 py-1 rounded-full flex items-center gap-1 border border-white/10">
                                    <span class="material-symbols-outlined text-[14px] text-primary">language</span> EN
                                </div>
                            </div>
                            <!-- Card Content -->
                            <div class="p-5 flex flex-col flex-1 gap-4">
                                <div class="flex justify-between items-start">
                                    <h3
                                        class="text-white text-xl font-bold leading-tight group-hover:text-primary transition-colors">
                                        Midnight Lion Walk</h3>
                                    <span class="text-primary text-lg font-bold">$45</span>
                                </div>
                                <div class="flex items-center gap-4 text-text-secondary text-sm">
                                    <div class="flex items-center gap-1.5">
                                        <span class="material-symbols-outlined text-[18px]">schedule</span>
                                        <span>8:00 PM</span>
                                    </div>
                                    <div class="flex items-center gap-1.5">
                                        <span class="material-symbols-outlined text-[18px]">timer</span>
                                        <span>2h</span>
                                    </div>
                                </div>
                                <!-- Capacity Bar -->
                                <div class="flex flex-col gap-1.5 mt-2">
                                    <div class="flex justify-between text-xs font-medium">
                                        <span class="text-primary">High Demand</span>
                                        <span class="text-text-secondary">5 spots left</span>
                                    </div>
                                    <div class="w-full h-1.5 bg-surface-border rounded-full overflow-hidden">
                                        <div class="h-full bg-primary w-[85%] rounded-full"></div>
                                    </div>
                                </div>
                                <!-- Actions -->
                                <div class="mt-auto flex gap-2 pt-2">
                                    <button
                                        class="flex-1 h-10 flex items-center justify-center rounded-full bg-primary hover:bg-green-400 text-[#111714] text-sm font-bold transition-colors">
                                        Book Now
                                    </button>
                                    <button
                                        class="size-10 flex items-center justify-center rounded-full bg-surface-border hover:bg-white/10 text-white transition-colors"
                                        title="View Details">
                                        <span class="material-symbols-outlined">visibility</span>
                                    </button>
                                    <button
                                        class="size-10 flex items-center justify-center rounded-full bg-transparent hover:bg-surface-border text-text-secondary hover:text-white transition-colors border border-surface-border"
                                        title="Add Review">
                                        <span class="material-symbols-outlined">rate_review</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Tour Card 2 -->
                        <div
                            class="group flex flex-col rounded-2xl bg-surface-dark border border-surface-border overflow-hidden hover:-translate-y-2 hover:shadow-[0_20px_40px_-15px_rgba(54,226,123,0.1)] transition-all duration-300">
                            <!-- Card Image -->
                            <div class="h-56 w-full bg-cover bg-center relative" data-alt="Close up of a penguin"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDp05wg9Yw6Mz300Pvx5KN9_FyXytj_osKmg5TxKGcxP_s2zGwyYJsv5FMRr25fCxZ947CA_g59i67UIQH7Br9Zr_UGiPQ3EQr-WRZqoBmblKDr7XIgCp_msVjjvdc2Y00Z4YoSscSZwOMnVs6xLWGtEoAovVsNGztYZxYO7sYaEeelTM8b9eWEOU7arO-qnQxZgN1xwrurUhk6N8xPQk2dppv40upI2jf9wPoyHbDwZJ9sPpzDjVDaRWCGlsGn6E50WfC5zYhlQow");'>
                                <div
                                    class="absolute top-4 right-4 bg-black/60 backdrop-blur-sm text-white text-xs font-bold px-3 py-1 rounded-full flex items-center gap-1 border border-white/10">
                                    <span class="material-symbols-outlined text-[14px] text-orange-400">language</span>
                                    ES
                                </div>
                            </div>
                            <!-- Card Content -->
                            <div class="p-5 flex flex-col flex-1 gap-4">
                                <div class="flex justify-between items-start">
                                    <h3
                                        class="text-white text-xl font-bold leading-tight group-hover:text-primary transition-colors">
                                        Morning Penguin Feed</h3>
                                    <span class="text-primary text-lg font-bold">$30</span>
                                </div>
                                <div class="flex items-center gap-4 text-text-secondary text-sm">
                                    <div class="flex items-center gap-1.5">
                                        <span class="material-symbols-outlined text-[18px]">schedule</span>
                                        <span>9:00 AM</span>
                                    </div>
                                    <div class="flex items-center gap-1.5">
                                        <span class="material-symbols-outlined text-[18px]">timer</span>
                                        <span>1h</span>
                                    </div>
                                </div>
                                <!-- Capacity Bar -->
                                <div class="flex flex-col gap-1.5 mt-2">
                                    <div class="flex justify-between text-xs font-medium">
                                        <span class="text-text-secondary">Available</span>
                                        <span class="text-text-secondary">12 spots left</span>
                                    </div>
                                    <div class="w-full h-1.5 bg-surface-border rounded-full overflow-hidden">
                                        <div class="h-full bg-primary w-[40%] rounded-full"></div>
                                    </div>
                                </div>
                                <!-- Actions -->
                                <div class="mt-auto flex gap-2 pt-2">
                                    <button
                                        class="flex-1 h-10 flex items-center justify-center rounded-full bg-primary hover:bg-green-400 text-[#111714] text-sm font-bold transition-colors">
                                        Book Now
                                    </button>
                                    <button
                                        class="size-10 flex items-center justify-center rounded-full bg-surface-border hover:bg-white/10 text-white transition-colors"
                                        title="View Details">
                                        <span class="material-symbols-outlined">visibility</span>
                                    </button>
                                    <button
                                        class="size-10 flex items-center justify-center rounded-full bg-transparent hover:bg-surface-border text-text-secondary hover:text-white transition-colors border border-surface-border"
                                        title="Add Review">
                                        <span class="material-symbols-outlined">rate_review</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Tour Card 3 -->
                        <div
                            class="group flex flex-col rounded-2xl bg-surface-dark border border-surface-border overflow-hidden hover:-translate-y-2 hover:shadow-[0_20px_40px_-15px_rgba(54,226,123,0.1)] transition-all duration-300 opacity-80 hover:opacity-100">
                            <!-- Card Image -->
                            <div class="h-56 w-full bg-cover bg-center relative grayscale group-hover:grayscale-0 transition-all duration-500"
                                data-alt="Green iguana on a tree branch"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAMIrgtbo94HitS0UKkeXe4JQrG7eeeHORXuy2l4oFNBnE9Jo8XyAhMwMdLU_03PaR4KdWp7KXxsKaO8JH1yRwHhw1GVU9YIg1njgABX7ImbzroyAwjgDOqFrbWKb7qaqodE76YRPvA4AKgkvtTezMYYVEmE8g7w0JsjkEL1zIKprI8n9yBHtSSrTstRO2eD2G7p5yU9G6dyMNpZL3NcRyWGbrwjfZcvbNVOULpUidMqZfqvcMaEkkWDu1m3NW1qvXHzpMkkn8LExQ");'>
                                <div class="absolute inset-0 bg-black/50 flex items-center justify-center">
                                    <span
                                        class="bg-red-500/90 text-white text-sm font-bold px-4 py-2 rounded-full border border-red-400 uppercase tracking-wide">Sold
                                        Out</span>
                                </div>
                                <div
                                    class="absolute top-4 right-4 bg-black/60 backdrop-blur-sm text-white text-xs font-bold px-3 py-1 rounded-full flex items-center gap-1 border border-white/10">
                                    <span class="material-symbols-outlined text-[14px] text-blue-400">language</span> FR
                                </div>
                            </div>
                            <!-- Card Content -->
                            <div class="p-5 flex flex-col flex-1 gap-4">
                                <div class="flex justify-between items-start">
                                    <h3
                                        class="text-white text-xl font-bold leading-tight group-hover:text-primary transition-colors">
                                        Reptile House Insider</h3>
                                    <span class="text-text-secondary text-lg font-bold">$25</span>
                                </div>
                                <div class="flex items-center gap-4 text-text-secondary text-sm">
                                    <div class="flex items-center gap-1.5">
                                        <span class="material-symbols-outlined text-[18px]">schedule</span>
                                        <span>1:00 PM</span>
                                    </div>
                                    <div class="flex items-center gap-1.5">
                                        <span class="material-symbols-outlined text-[18px]">timer</span>
                                        <span>1.5h</span>
                                    </div>
                                </div>
                                <!-- Capacity Bar -->
                                <div class="flex flex-col gap-1.5 mt-2">
                                    <div class="flex justify-between text-xs font-medium">
                                        <span class="text-red-400">Fully Booked</span>
                                        <span class="text-text-secondary">0 spots left</span>
                                    </div>
                                    <div class="w-full h-1.5 bg-surface-border rounded-full overflow-hidden">
                                        <div class="h-full bg-red-500/50 w-full rounded-full"></div>
                                    </div>
                                </div>
                                <!-- Actions -->
                                <div class="mt-auto flex gap-2 pt-2">
                                    <button
                                        class="flex-1 h-10 flex items-center justify-center rounded-full bg-surface-border text-text-secondary cursor-not-allowed text-sm font-bold transition-colors"
                                        disabled="">
                                        Join Waitlist
                                    </button>
                                    <button
                                        class="size-10 flex items-center justify-center rounded-full bg-surface-border hover:bg-white/10 text-white transition-colors"
                                        title="View Details">
                                        <span class="material-symbols-outlined">visibility</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Tour Card 4 -->
                        <div
                            class="group flex flex-col rounded-2xl bg-surface-dark border border-surface-border overflow-hidden hover:-translate-y-2 hover:shadow-[0_20px_40px_-15px_rgba(54,226,123,0.1)] transition-all duration-300">
                            <!-- Card Image -->
                            <div class="h-56 w-full bg-cover bg-center relative"
                                data-alt="Giraffes walking in the savannah"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCFuWfUtO8GGSFRuw9fkziCADtipbNcXJqgEs4zSrfLil8qXspKCvJWQADtssa6n38YRD3E1k-iUlwc9GBKuywjuW8HGtlqFl_qJSVT8DArrUOaRs6DShj1i8n7Ozd3tI5jymUmUJvuguIicyyzTVuZGPqL71EtB61I_FXhG4LuebbajGMoigUx6SSY5qNSr9fgltz3S7gidbwqukQIfyIoGjfiCpUOXMuCLM2PNt7AROWhCotFqDx8WArYgiVz6U6mrgqOakWSEh0");'>
                                <div
                                    class="absolute top-4 right-4 bg-black/60 backdrop-blur-sm text-white text-xs font-bold px-3 py-1 rounded-full flex items-center gap-1 border border-white/10">
                                    <span class="material-symbols-outlined text-[14px] text-primary">language</span> EN
                                </div>
                            </div>
                            <!-- Card Content -->
                            <div class="p-5 flex flex-col flex-1 gap-4">
                                <div class="flex justify-between items-start">
                                    <h3
                                        class="text-white text-xl font-bold leading-tight group-hover:text-primary transition-colors">
                                        Sunset Savannah Drive</h3>
                                    <span class="text-primary text-lg font-bold">$60</span>
                                </div>
                                <div class="flex items-center gap-4 text-text-secondary text-sm">
                                    <div class="flex items-center gap-1.5">
                                        <span class="material-symbols-outlined text-[18px]">schedule</span>
                                        <span>5:30 PM</span>
                                    </div>
                                    <div class="flex items-center gap-1.5">
                                        <span class="material-symbols-outlined text-[18px]">timer</span>
                                        <span>3h</span>
                                    </div>
                                </div>
                                <!-- Capacity Bar -->
                                <div class="flex flex-col gap-1.5 mt-2">
                                    <div class="flex justify-between text-xs font-medium">
                                        <span class="text-text-secondary">Filling Fast</span>
                                        <span class="text-text-secondary">8 spots left</span>
                                    </div>
                                    <div class="w-full h-1.5 bg-surface-border rounded-full overflow-hidden">
                                        <div class="h-full bg-primary w-[65%] rounded-full"></div>
                                    </div>
                                </div>
                                <!-- Actions -->
                                <div class="mt-auto flex gap-2 pt-2">
                                    <button
                                        class="flex-1 h-10 flex items-center justify-center rounded-full bg-primary hover:bg-green-400 text-[#111714] text-sm font-bold transition-colors">
                                        Book Now
                                    </button>
                                    <button
                                        class="size-10 flex items-center justify-center rounded-full bg-surface-border hover:bg-white/10 text-white transition-colors"
                                        title="View Details">
                                        <span class="material-symbols-outlined">visibility</span>
                                    </button>
                                    <button
                                        class="size-10 flex items-center justify-center rounded-full bg-transparent hover:bg-surface-border text-text-secondary hover:text-white transition-colors border border-surface-border"
                                        title="Add Review">
                                        <span class="material-symbols-outlined">rate_review</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button
                        class="sm:hidden mt-4 w-full h-12 flex items-center justify-center rounded-full bg-surface-border text-white text-sm font-bold">
                        View All Tours
                    </button>
                </section>
            </div>
        </main>
        <!-- Simple Footer -->
        <footer class="border-t border-surface-border py-8 bg-[#111714]">
            <div class="px-10 flex flex-col md:flex-row items-center justify-between gap-4 max-w-[1200px] mx-auto">
                <p class="text-text-secondary text-sm">© 2024 Zoo ASSAD. All rights reserved.</p>
                <div class="flex gap-6">
                    <a class="text-text-secondary hover:text-white text-sm" href="#">Privacy Policy</a>
                    <a class="text-text-secondary hover:text-white text-sm" href="#">Terms of Service</a>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>