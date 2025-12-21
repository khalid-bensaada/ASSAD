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

$id = $_GET["id"];

$sql = "
SELECT animaux.*, habitats.nom AS habitat
FROM animaux
JOIN habitats ON animaux.id_habitat = habitats.id
WHERE animaux.id = $id
";

$animal = $conn->query($sql)->fetch_assoc();
?>
<!DOCTYPE html>

<html class="dark" lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Zoo ASSAD - Animal Details</title>
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect" />
  <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
  <link href="https://fonts.googleapis.com/css2?family=Spline+Sans:wght@300;400;500;600;700&amp;display=swap"
    rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
    rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
    rel="stylesheet" />
  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <!-- Theme Configuration -->
  <script>
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            "primary": "#36e27b",
            "background-light": "#f6f8f7",
            "background-dark": "#112117",
            "card-light": "#ffffff",
            "card-dark": "#1a2c22",
          },
          fontFamily: {
            "display": ["Spline Sans", "sans-serif"]
          },
          borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "2xl": "1rem", "full": "9999px" },
        },
      },
    }
  </script>
</head>

<body
  class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-white font-display transition-colors duration-200 min-h-screen flex flex-col">
  <!-- Top Navigation -->
  <header
    class="sticky top-0 z-50 border-b border-gray-200 dark:border-[#29382f] bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-md">
    <div class="px-4 md:px-10 py-3 max-w-[1280px] mx-auto flex items-center justify-between">
      <div class="flex items-center gap-4">
        <div class="size-8 text-primary">
          <span class="material-symbols-outlined text-3xl">pets</span>
        </div>
        <h2 class="text-slate-900 dark:text-white text-xl font-bold tracking-tight">Zoo ASSAD</h2>
      </div>
      <div class="flex items-center gap-6">
        <a class="text-slate-600 dark:text-[#9eb7a8] hover:text-primary dark:hover:text-primary text-sm font-medium transition-colors"
          href="#">Home</a>
        <button
          class="flex items-center justify-center rounded-lg h-9 px-4 bg-primary text-[#111714] text-sm font-bold hover:bg-opacity-90 transition-opacity">
          <span class="truncate">Logout</span>
        </button>
      </div>
    </div>
  </header>
  <!-- Main Content -->
  <main class="flex-grow px-4 md:px-10 py-8">
    <div class="max-w-[1100px] mx-auto flex flex-col gap-6">
      <!-- Breadcrumb / Back Navigation -->
      <div class="flex justify-start">
        <button
          class="group flex items-center gap-2 text-sm font-medium text-slate-500 dark:text-[#9eb7a8] hover:text-primary transition-colors">
          <span
            class="material-symbols-outlined text-lg group-hover:-translate-x-1 transition-transform">arrow_back</span>
          Back to Animals
        </button>
      </div>
      <!-- Profile Card -->
      <div
        class="bg-card-light dark:bg-card-dark rounded-2xl overflow-hidden shadow-lg border border-gray-100 dark:border-[#29382f] p-6 md:p-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12">
          <!-- Left Column: Image -->
          <div class="lg:col-span-5 flex flex-col gap-4">
            <!-- Image Container with 'Star' Glow for Asaad -->
            <div
              class="relative group aspect-[4/5] w-full rounded-xl overflow-hidden ring-1 ring-black/5 dark:ring-white/10 shadow-2xl">
              <!-- Conditional 'Star Attraction' Badge -->
              <div
                class="absolute top-4 left-4 z-10 bg-primary text-[#111714] text-xs font-bold px-3 py-1.5 rounded-full flex items-center gap-1 shadow-md">
                <span class="material-symbols-outlined text-sm">stars</span>
                Star Attraction
              </div>
              <img alt="Majestic male lion resting on a rock looking into distance"
                class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCxPaOiAg_1pYS-JCG9qPbP4u381_j_jFG9TRarnh1_J1DG9AXGemzIAijFcyAjAaE13SC9ib6xVAKrMD6x9ECjiovWa6o2SmHIgTUp4L9fjp5858TQIe3HifG3kVCAznaFsVRLm__ZGhEamdIWi3Te_ouiT_LigTf9-CEf-LIOyeWWTzgA0u-h93-TYOaVu9sYd9SnYkuRwOAcSNhkF8mkp8W-VvGg7J-79fE_gdpdLYH6xctfF2_QVPZoEABUttLg6PNtj642c4I" />
              <!-- Overlay Gradient -->
              <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-60">
              </div>
              <!-- Name Overlay on Mobile/Image -->
              <div class="absolute bottom-4 left-4 right-4 lg:hidden">
                <h1 class="text-3xl font-bold text-white leading-tight">Asaad</h1>
                <p class="text-primary font-medium text-lg">African Lion</p>
              </div>
            </div>
            <!-- Map / Location Preview -->
            <div
              class="hidden lg:flex flex-col gap-2 mt-2 p-4 rounded-xl bg-slate-50 dark:bg-[#111714]/50 border border-slate-200 dark:border-[#29382f]">
              <div class="flex items-center gap-2 text-slate-500 dark:text-[#9eb7a8] mb-2">
                <span class="material-symbols-outlined text-lg">public</span>
                <span class="text-xs font-bold uppercase tracking-wider">Natural Distribution</span>
              </div>
              <div class="h-32 w-full rounded-lg bg-slate-200 dark:bg-slate-700 overflow-hidden relative">
                <img alt="Map showing Tanzania region highlighted" class="w-full h-full object-cover opacity-80"
                  data-location="Tanzania Map"
                  src="https://lh3.googleusercontent.com/aida-public/AB6AXuAoiFdbuJ8oVMCKvmNto2AdfofN_Utwz5aRnKAapl98xa5mOdbpb8FwpC31_i_IYGK5LJDBNSbbJ-mKKvVWdIKsblAxXr3vzXH7V5EkUmopvgNo5xmxJkcIoSVZNZ6i9doRppIWbIznZtRnoSwhA0in9Jqzs13Xm_X-tZ_EdRxEuf-20aXeRj86Zs-QSNoTgTAChXSMCP24AWoc7151ut4YJyos4vdqTHJxyj_EHCulhjC3gh0W4wTPUJ70OU0PwVpjdwN4LytlVGc" />
              </div>
              <p class="text-xs text-center text-slate-400 dark:text-slate-500 mt-1">Native to Sub-Saharan Africa</p>
            </div>
          </div>
          <!-- Right Column: Details -->
          <div class="lg:col-span-7 flex flex-col">
            <!-- Header (Desktop only for big title) -->
            <div class="hidden lg:block mb-6 border-b border-gray-100 dark:border-[#29382f] pb-6">
              <div class="flex justify-between items-start">
                <div>
                  <h1 class="text-4xl md:text-5xl font-bold text-slate-900 dark:text-white tracking-tight mb-1">Asaad
                  </h1>
                  <p class="text-lg text-slate-500 dark:text-[#9eb7a8] italic">Panthera leo</p>
                </div>
                <div class="flex gap-2">
                  <button
                    class="size-10 flex items-center justify-center rounded-full bg-slate-100 dark:bg-[#29382f] text-slate-600 dark:text-primary hover:bg-slate-200 dark:hover:bg-[#3d5245] transition-colors"
                    title="Add to Favorites">
                    <span class="material-symbols-outlined">favorite</span>
                  </button>
                  <button
                    class="size-10 flex items-center justify-center rounded-full bg-slate-100 dark:bg-[#29382f] text-slate-600 dark:text-white hover:bg-slate-200 dark:hover:bg-[#3d5245] transition-colors"
                    title="Share">
                    <span class="material-symbols-outlined">share</span>
                  </button>
                </div>
              </div>
            </div>
            <!-- Stats Grid -->
            <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mb-8">
              <div
                class="p-4 rounded-xl bg-slate-50 dark:bg-[#111714] border border-slate-100 dark:border-[#29382f] flex flex-col gap-2">
                <span class="material-symbols-outlined text-primary text-2xl">restaurant</span>
                <div>
                  <p class="text-xs text-slate-400 dark:text-[#7a8f83] font-medium uppercase tracking-wider">Diet</p>
                  <p class="text-sm md:text-base font-semibold text-slate-800 dark:text-white">Carnivore</p>
                </div>
              </div>
              <div
                class="p-4 rounded-xl bg-slate-50 dark:bg-[#111714] border border-slate-100 dark:border-[#29382f] flex flex-col gap-2">
                <span class="material-symbols-outlined text-primary text-2xl">landscape</span>
                <div>
                  <p class="text-xs text-slate-400 dark:text-[#7a8f83] font-medium uppercase tracking-wider">Habitat</p>
                  <p class="text-sm md:text-base font-semibold text-slate-800 dark:text-white">Savanna</p>
                </div>
              </div>
              <div
                class="p-4 rounded-xl bg-slate-50 dark:bg-[#111714] border border-slate-100 dark:border-[#29382f] col-span-2 md:col-span-1 flex flex-col gap-2">
                <span class="material-symbols-outlined text-primary text-2xl">flag</span>
                <div>
                  <p class="text-xs text-slate-400 dark:text-[#7a8f83] font-medium uppercase tracking-wider">Origin</p>
                  <p class="text-sm md:text-base font-semibold text-slate-800 dark:text-white">Tanzania</p>
                </div>
              </div>
            </div>
            <!-- Description -->
            <div class="prose prose-slate dark:prose-invert max-w-none mb-8">
              <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2 flex items-center gap-2">
                <span class="material-symbols-outlined text-primary">info</span>
                About Asaad
              </h3>
              <p class="text-slate-600 dark:text-[#9eb7a8] leading-relaxed">
                Asaad is the pride of our zoo, a magnificent male African Lion born right here in captivity. Known for
                his unusually dark mane and calm demeanor, he serves as the ambassador for our wild cat conservation
                program.
              </p>
              <p class="text-slate-600 dark:text-[#9eb7a8] leading-relaxed mt-4">
                The lion is a large cat of the genus Panthera native to Africa and India. It has a muscular,
                deep-chested body, short, rounded head, round ears, and a hairy tuft at the end of its tail. Lions are
                unique among cats in that they are social animals, living in groups called prides.
              </p>
            </div>
            <!-- Additional Info List -->
            <div class="mt-auto">
              <div class="border-t border-slate-100 dark:border-[#29382f]">
                <dl class="divide-y divide-slate-100 dark:divide-[#29382f]">
                  <div class="px-2 py-4 grid grid-cols-3 gap-4">
                    <dt class="text-sm font-medium text-slate-500 dark:text-[#9eb7a8]">Lifespan</dt>
                    <dd class="text-sm font-medium text-slate-900 dark:text-white col-span-2">10-14 years (Wild), up to
                      20 (Captivity)</dd>
                  </div>
                  <div class="px-2 py-4 grid grid-cols-3 gap-4">
                    <dt class="text-sm font-medium text-slate-500 dark:text-[#9eb7a8]">Conservation Status</dt>
                    <dd class="text-sm font-medium col-span-2 flex items-center gap-2">
                      <span class="inline-block size-2.5 rounded-full bg-yellow-500"></span>
                      <span class="text-slate-900 dark:text-white">Vulnerable</span>
                    </dd>
                  </div>
                  <div class="px-2 py-4 grid grid-cols-3 gap-4">
                    <dt class="text-sm font-medium text-slate-500 dark:text-[#9eb7a8]">Weight</dt>
                    <dd class="text-sm font-medium text-slate-900 dark:text-white col-span-2">190kg (420 lbs)</dd>
                  </div>
                </dl>
              </div>
            </div>
            <!-- Mobile-only Location Map moved here for flow -->
            <div
              class="lg:hidden mt-6 p-4 rounded-xl bg-slate-50 dark:bg-[#111714]/50 border border-slate-200 dark:border-[#29382f]">
              <div class="flex items-center gap-2 text-slate-500 dark:text-[#9eb7a8] mb-2">
                <span class="material-symbols-outlined text-lg">public</span>
                <span class="text-xs font-bold uppercase tracking-wider">Natural Distribution</span>
              </div>
              <div class="h-32 w-full rounded-lg bg-slate-200 dark:bg-slate-700 overflow-hidden relative">
                <img alt="Map showing Tanzania region highlighted" class="w-full h-full object-cover opacity-80"
                  data-location="Tanzania Map Mobile"
                  src="https://lh3.googleusercontent.com/aida-public/AB6AXuDvSMHgCNLAuKLd6Hk538iucj9FAXI3GVO5c4JzIYUvQZnyFVsIlLiqu9E7Sf9YHK_j0v_cwt_KBkJjKvPxf2ekawJERHkP2_euKIG7In4vbk11NkyH8TAZKt8cikIKPFxChRr62BXyHtF7pFI4IvGhOgbR5JiRYu1g62vXOJVKK02WJUQUXKf2p7Z5gk3tRIBKex7upuOUc4hb8a2Q06wGpSKUptvdnPTOmp2gJOy8AOmvsq3kkyY9SjiGPCdC41r6S54T4pDr38Y" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- "Related Animals" or Footer Navigation -->
      <div class="flex justify-between items-center mt-4 px-2">
        <button
          class="group flex items-center gap-3 text-slate-500 dark:text-[#9eb7a8] hover:text-slate-900 dark:hover:text-white transition-colors">
          <div
            class="size-10 rounded-full bg-slate-200 dark:bg-[#29382f] flex items-center justify-center group-hover:bg-primary group-hover:text-black transition-colors">
            <span class="material-symbols-outlined">chevron_left</span>
          </div>
          <div class="text-left hidden sm:block">
            <span class="block text-xs uppercase tracking-wider opacity-70">Previous</span>
            <span class="font-medium">African Elephant</span>
          </div>
        </button>
        <button
          class="group flex items-center gap-3 text-slate-500 dark:text-[#9eb7a8] hover:text-slate-900 dark:hover:text-white transition-colors text-right">
          <div class="text-right hidden sm:block">
            <span class="block text-xs uppercase tracking-wider opacity-70">Next</span>
            <span class="font-medium">Bengal Tiger</span>
          </div>
          <div
            class="size-10 rounded-full bg-slate-200 dark:bg-[#29382f] flex items-center justify-center group-hover:bg-primary group-hover:text-black transition-colors">
            <span class="material-symbols-outlined">chevron_right</span>
          </div>
        </button>
      </div>
    </div>
  </main>
  <!-- Footer -->
  <footer
    class="mt-auto border-t border-gray-200 dark:border-[#29382f] bg-background-light dark:bg-background-dark py-10">
    <div class="px-4 text-center">
      <p class="text-slate-500 dark:text-[#9eb7a8] text-sm">© 2024 Zoo ASSAD. All rights reserved.</p>
      <div class="flex justify-center gap-4 mt-4">
        <a class="text-slate-400 hover:text-primary transition-colors" href="#"><span
            class="material-symbols-outlined text-lg">public</span></a>
        <a class="text-slate-400 hover:text-primary transition-colors" href="#"><span
            class="material-symbols-outlined text-lg">mail</span></a>
      </div>
    </div>
  </footer>
</body>

</html>