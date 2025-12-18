<!DOCTYPE html>

<html class="dark" lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Zoo ASSAD Home Page</title>
  <!-- Material Symbols -->
  <link
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
    rel="stylesheet" />
  <!-- Google Fonts: Spline Sans -->
  <link href="https://fonts.googleapis.com" rel="preconnect" />
  <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
  <link href="https://fonts.googleapis.com/css2?family=Spline+Sans:wght@300;400;500;600;700&amp;display=swap"
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
            "primary-hover": "#2bc768",
            "background-light": "#f6f8f7",
            "background-dark": "#112117",
            "surface-dark": "#1c2620",
            "surface-dark-lighter": "#29382f",
          },
          fontFamily: {
            "display": ["Spline Sans", "sans-serif"]
          },
          borderRadius: { "DEFAULT": "1rem", "lg": "2rem", "xl": "3rem", "full": "9999px" },
        },
      },
    }
  </script>
</head>

<body
  class="bg-background-light dark:bg-background-dark font-display text-gray-900 dark:text-gray-100 overflow-x-hidden transition-colors duration-300">
  <!-- Navbar -->
  <nav class="sticky top-0 z-50 w-full border-b border-surface-dark-lighter bg-background-dark/80 backdrop-blur-md">
    <div class="px-6 md:px-10 lg:px-20 py-4 flex items-center justify-between max-w-[1400px] mx-auto">
      <!-- Logo -->
      <div class="flex items-center gap-3">
        <div class="p-2 bg-surface-dark-lighter rounded-full text-primary">
          <span class="material-symbols-outlined text-[24px]">pets</span>
        </div>
        <h2 class="text-white text-xl font-bold tracking-tight">Zoo ASSAD</h2>
      </div>
      
      
      <!-- Action Buttons -->
      <div class="flex gap-3">
        <button
          class="hidden sm:flex items-center justify-center rounded-full h-10 px-5 bg-primary hover:bg-primary-hover text-[#111714] text-sm font-bold transition-all shadow-[0_0_15px_rgba(54,226,123,0.3)]">
          <a href="sign.php">Sign Up</a>
        </button>
        <button
          class="flex items-center justify-center rounded-full h-10 px-5 bg-surface-dark-lighter hover:bg-surface-dark text-white text-sm font-bold border border-transparent hover:border-gray-600 transition-all" ">
          <a href="login.php">Login</a>
        </button>
      </div>
    </div>
  </nav>
  <main class=" flex flex-col items-center">
          <!-- Hero Section -->
          <section class="w-full px-4 md:px-10 lg:px-20 py-6 max-w-[1400px]">
            <div
              class="relative w-full rounded-xl lg:rounded-[2.5rem] overflow-hidden min-h-[500px] md:min-h-[600px] flex items-center justify-center text-center p-8 shadow-2xl">
              <!-- Background Image -->
              <div class="absolute inset-0 bg-cover bg-center z-0 transition-transform duration-[10s] hover:scale-105"
                data-alt="Lush green jungle landscape with sunlight filtering through leaves"
                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuA_03I1XPovXaoJWuLChcBv4HCJQkv_gJJRs8-_00OMTnDruAABflcRvpqINgDrdPUPJYo3_KHTRa4FPPy5AMGrKMweRm8Gibuuz546wgj7iZZsSWCXRwpfS1RyOK1V2EjvvU9xiOhlLZWeJneqtfG8Y673AjkzZu4orHwvpgTFApwMEKCdji-JCKJTJPNdy3VXGMUpEFwKE8ZhX2iVfkezJ6zji2tIC2KYF_I8jW5gIqa1-Ge4MARLNBIPFUqQD3eDqn5MDjNLTbs');">
              </div>
              <!-- Overlay Gradient -->
              <div class="absolute inset-0 bg-gradient-to-b from-black/30 via-black/50 to-background-dark z-10"></div>
              <!-- Hero Content -->
              <div class="relative z-20 flex flex-col gap-6 max-w-3xl">
                <div
                  class="inline-flex items-center justify-center gap-2 px-3 py-1 rounded-full bg-white/10 backdrop-blur-sm border border-white/20 w-fit mx-auto">
                  <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
                  <span class="text-xs font-medium text-white tracking-wide uppercase">Open Daily: 9am - 6pm</span>
                </div>
                <h1 class="text-white text-5xl md:text-7xl font-black leading-tight tracking-tight drop-shadow-lg">
                  Welcome to the <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-green-400">Wild</span>
                </h1>
                <p class="text-gray-200 text-lg md:text-xl font-normal max-w-xl mx-auto drop-shadow-md">
                  Experience nature like never before at Zoo ASSAD. A sanctuary for the rare, the beautiful, and the
                  untamed.
                </p>
                <div class="pt-4">
                  <button
                    class="group relative inline-flex items-center justify-center gap-2 h-14 px-8 rounded-full bg-primary text-[#111714] text-base font-bold transition-all hover:bg-primary-hover hover:scale-105 shadow-[0_0_20px_rgba(54,226,123,0.4)]"
                    onclick="alert('Exploring the zoo...')">
                    <span>Explore Now</span>
                    <span
                      class="material-symbols-outlined transition-transform group-hover:translate-x-1">arrow_forward</span>
                  </button>
                </div>
              </div>
            </div>
          </section>
          <!-- Spotlight Feature: Asaad -->
          <section class="w-full px-4 md:px-10 lg:px-20 py-12 max-w-[1400px]">
            <div class="flex items-center gap-3 mb-8">
              <span class="material-symbols-outlined text-primary">star</span>
              <h2 class="text-white text-3xl font-bold tracking-tight">Spotlight Feature</h2>
            </div>
            <div
              class="grid grid-cols-1 lg:grid-cols-2 gap-6 bg-surface-dark rounded-xl lg:rounded-3xl p-6 lg:p-8 border border-white/5 shadow-xl relative overflow-hidden group">
              <!-- Decorative Glow -->
              <div
                class="absolute -top-20 -right-20 w-64 h-64 bg-primary/10 rounded-full blur-[100px] pointer-events-none">
              </div>
              <!-- Text Content -->
              <div class="flex flex-col justify-center gap-6 order-2 lg:order-1 z-10">
                <div>
                  <div
                    class="inline-block px-3 py-1 mb-4 rounded-full bg-[#29382f] text-primary text-xs font-bold uppercase tracking-wider">
                    Endangered Species
                  </div>
                  <h3 class="text-white text-4xl font-bold leading-tight mb-2">Meet the King: Asaad</h3>
                  <p class="text-primary text-lg font-medium">The Lion of Atlas</p>
                </div>
                <p class="text-gray-400 text-base leading-relaxed">
                  Asaad is the heart of our conservation efforts. A symbol of strength and resilience, he represents the
                  majesty of the Atlas lions, a subspecies once thought extinct in the wild. Witness his roar and learn
                  about
                  our mission to protect his legacy.
                </p>
                <div class="grid grid-cols-3 gap-4 border-t border-white/10 pt-6 mt-2">
                  <div>
                    <p class="text-gray-500 text-xs uppercase">Age</p>
                    <p class="text-white font-bold text-lg">8 Years</p>
                  </div>
                  <div>
                    <p class="text-gray-500 text-xs uppercase">Weight</p>
                    <p class="text-white font-bold text-lg">240 kg</p>
                  </div>
                  <div>
                    <p class="text-gray-500 text-xs uppercase">Diet</p>
                    <p class="text-white font-bold text-lg">Carnivore</p>
                  </div>
                </div>
                <button
                  class="mt-4 flex items-center justify-center gap-2 rounded-full h-12 px-6 bg-surface-dark-lighter text-white font-bold hover:bg-white hover:text-black transition-colors w-fit"
                  onclick="alert('Loading Asaad\'s profile...')">
                  Learn More
                  <span class="material-symbols-outlined text-sm">arrow_outward</span>
                </button>
              </div>
              <!-- Image Content -->
              <div
                class="order-1 lg:order-2 h-[300px] lg:h-auto min-h-[350px] rounded-xl lg:rounded-2xl bg-cover bg-center overflow-hidden relative shadow-lg"
                data-alt="Close up portrait of a majestic male lion looking to the side"
                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCwaKU8muGnbpbCDA8Rt433W8hxI1666Dj-dFR7g9syT8dHKXWYbbXA1pHy9vJJnbtRO1poT3kBsfFrkfhhembgRJE0tlnHZLcA-OkgkqWQgkeMYiY7bquKV1oaXzQPAzwr1Q0sNQx88Ca29eY3ECNJVnt-IGI2SrVZ48dX21ud6FQb0Y4xjE7hQM2VjFQV4cF0JkWhQmSADWbMPlicg2jrnM5uwoQQ4ngcu_UZJyU39FsP5HSvgdoEEXTST_uuy5MpSm6C6kVUFQs');">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
              </div>
            </div>
          </section>
          <!-- Featured Animals Grid -->
          <section class="w-full px-4 md:px-10 lg:px-20 py-12 max-w-[1400px]" id="animals">
            <div class="flex justify-between items-end mb-8">
              <div>
                <h2 class="text-white text-3xl font-bold tracking-tight mb-2">Featured Animals</h2>
                <p class="text-gray-400">Discover the diverse inhabitants of our zoo.</p>
              </div>
              <a class="hidden sm:flex items-center gap-1 text-primary hover:text-white transition-colors text-sm font-bold"
                href="#">
                View All Animals <span class="material-symbols-outlined text-sm">chevron_right</span>
              </a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
              <!-- Animal Card 1 -->
              <div class="group relative h-[400px] rounded-2xl overflow-hidden cursor-pointer shadow-lg"
                onclick="alert('Opening Elephant details...')">
                <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110"
                  data-alt="Large African elephant walking through savanna grass"
                  style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDP28wejfvcCTSkhQSWqPuvTF-6rqzR4pF5vKDaE-XGGkJzv8WW3Je0IEgumtHNRYpeorYHbBcCUHq9onizYfQiCDAbmkJA233DqWUoEkesUf6XWWtB8kj7Io-OKmhI-RIFRNf-QV_c13l-YmU6H6EMr9iZkPVrm2I9lg1wlu-40-SAOq_Kel7dXO8LMJaF6LVIi6_MQLdrEZx1Kx6KbRWsNWIfP8ZJ9W2mCfPY8VbimSZWzwhGVsnBH70-C_lhxtRiUQ8GR8KsSbs');">
                </div>
                <div
                  class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent opacity-80 group-hover:opacity-90 transition-opacity">
                </div>
                <div class="absolute bottom-0 left-0 p-6 w-full">
                  <p class="text-primary text-xs font-bold uppercase mb-1 tracking-wider">Loxodonta</p>
                  <h3 class="text-white text-2xl font-bold mb-2">African Elephant</h3>
                  <p
                    class="text-gray-300 text-sm line-clamp-2 opacity-0 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 transition-all duration-300">
                    The gentle giants of the savanna, known for their intelligence and strong social bonds.
                  </p>
                  <div
                    class="mt-4 flex justify-end opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-100">
                    <span class="p-2 rounded-full bg-primary text-black">
                      <span class="material-symbols-outlined text-sm block">arrow_forward</span>
                    </span>
                  </div>
                </div>
              </div>
              <!-- Animal Card 2 -->
              <div class="group relative h-[400px] rounded-2xl overflow-hidden cursor-pointer shadow-lg"
                onclick="alert('Opening Giraffe details...')">
                <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110"
                  data-alt="Tall giraffe head and neck against a blue sky"
                  style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCStl5mjSKCtG9xVqcNUy-maSd911W2k42nVxkuCdzr0472XWEmcxMc5fhHmiCnnHIu9jCiNwuh0gk_dDPBf-_qr0nZwI7iDmQWESnR9HYNBSXJzxbyPcLGxQ-3dL6X5gyD7A5ODsfYdzEJ65ncZpa1kGZciiJRb0N7WyjTH_rSH5oLXnHbvK78FQO8OTbf4SpWycrYUbSt-B5g7l-jdf5EZ1L2FKLmyk2LfbLhs5c1kjPKVHe_QuYZnyeIOeYr5komAjfPOeweBzU');">
                </div>
                <div
                  class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent opacity-80 group-hover:opacity-90 transition-opacity">
                </div>
                <div class="absolute bottom-0 left-0 p-6 w-full">
                  <p class="text-primary text-xs font-bold uppercase mb-1 tracking-wider">Giraffa</p>
                  <h3 class="text-white text-2xl font-bold mb-2">Giraffe</h3>
                  <p
                    class="text-gray-300 text-sm line-clamp-2 opacity-0 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 transition-all duration-300">
                    The tallest living terrestrial animal, reaching for the highest leaves with unique grace.
                  </p>
                  <div
                    class="mt-4 flex justify-end opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-100">
                    <span class="p-2 rounded-full bg-primary text-black">
                      <span class="material-symbols-outlined text-sm block">arrow_forward</span>
                    </span>
                  </div>
                </div>
              </div>
              <!-- Animal Card 3 -->
              <div class="group relative h-[400px] rounded-2xl overflow-hidden cursor-pointer shadow-lg"
                onclick="alert('Opening Tiger details...')">
                <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110"
                  data-alt="Sumatran tiger resting on a rock looking intense"
                  style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuD0Ps8pdGVQ66eHwZfazuTWizn0LXD_Un5Yqbv1l2qR3tXt2M7jKstHAJC38SOtg0tsxC4DXaDYGaRYJ4h8O3qxMVaFNBmZMQ4Q_RXbLbJRA0wcAsTNPdjkyqq4Jci0ofwTFwpKWm9DeQrEBwyqodiyC68-SajiYqXAF7JpF5nHJyotXYanW2pmSGdGHd86gA7qyrg-5vhciA8l6UWgu4QJaS0sVHlGD8YAxtJKGGcFtIrD70z4_anOyI_kAuhIFkoy31MIjv5q0ds');">
                </div>
                <div
                  class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent opacity-80 group-hover:opacity-90 transition-opacity">
                </div>
                <div class="absolute bottom-0 left-0 p-6 w-full">
                  <p class="text-primary text-xs font-bold uppercase mb-1 tracking-wider">Panthera Tigris</p>
                  <h3 class="text-white text-2xl font-bold mb-2">Sumatran Tiger</h3>
                  <p
                    class="text-gray-300 text-sm line-clamp-2 opacity-0 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 transition-all duration-300">
                    A critically endangered species, known for its dark orange coat and heavy black stripes.
                  </p>
                  <div
                    class="mt-4 flex justify-end opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-100">
                    <span class="p-2 rounded-full bg-primary text-black">
                      <span class="material-symbols-outlined text-sm block">arrow_forward</span>
                    </span>
                  </div>
                </div>
              </div>
              <!-- Animal Card 4 -->
              <div class="group relative h-[400px] rounded-2xl overflow-hidden cursor-pointer shadow-lg"
                onclick="alert('Opening Lemur details...')">
                <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110"
                  data-alt="Ring-tailed lemur sitting on a branch looking at camera"
                  style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuD_WFTvAQyMKB9tWQ03Jy0CZPijvWqQsD505FxJN2pcU-E_bOIsPP_UEO4_HdzYkl3NU00bQpra48zywYRR8T8gYHkt8FTY5J0D8rOe_cpqkydmSPSq6YDXb0HgUs1sHR4Sx0VrI0wuotNu1KA2c_nFAqQB4YlFy0EXbSCp1MRftl7zYWFJAJSBOg09jyio14znSF0PsFfGlMa5jvTpVcZzz1LfQA12InbyelqT68rgCwJWQufRaVoVxypUHmbi59zNb7cLwq8YeVs');">
                </div>
                <div
                  class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent opacity-80 group-hover:opacity-90 transition-opacity">
                </div>
                <div class="absolute bottom-0 left-0 p-6 w-full">
                  <p class="text-primary text-xs font-bold uppercase mb-1 tracking-wider">Lemuroidea</p>
                  <h3 class="text-white text-2xl font-bold mb-2">Ring-Tailed Lemur</h3>
                  <p
                    class="text-gray-300 text-sm line-clamp-2 opacity-0 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 transition-all duration-300">
                    Highly social primates from Madagascar, easily recognized by their black and white ringed tails.
                  </p>
                  <div
                    class="mt-4 flex justify-end opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-100">
                    <span class="p-2 rounded-full bg-primary text-black">
                      <span class="material-symbols-outlined text-sm block">arrow_forward</span>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="mt-6 flex sm:hidden justify-center">
              <button class="w-full py-3 rounded-full border border-gray-600 text-white font-medium">View All
                Animals</button>
            </div>
          </section>
          <!-- Tours Preview -->
          <section class="w-full px-4 md:px-10 lg:px-20 py-12 max-w-[1400px]">
            <div class="rounded-3xl bg-surface-dark overflow-hidden relative">
              <div class="absolute inset-0 opacity-20"
                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAT3OmgJZb1PqxVleJnQiZwjtuHngWopJ-2P0jgtDIN1oPZDiYjVUlZpvySV3ju6TXe_2OfnQl5n9hRePu2zn3y9zHG6kDxeMTWkXxWYPbsylnH1LyH4TCXi7Xuby7O990vQpSCzvw3-Ucryf6IvAVBKK2r1dnVFABQgxoqUliRsb6-9GzEKrJlBb_LkOzzW6tYc-HdLwx0iw12m8r-mbifXhRwUSgK2cFjSQCH95FiuqdAYvApZl3rYJLkjzb7yU_QX9xey6MzNTc');">
              </div>
              <div class="flex flex-col md:flex-row items-center gap-8 p-8 md:p-12 relative z-10">
                <div class="flex-1 flex flex-col gap-4">
                  <div class="inline-flex items-center gap-2 text-primary font-bold uppercase text-sm tracking-wider">
                    <span class="material-symbols-outlined text-lg">map</span>
                    Guided Tours
                  </div>
                  <h2 class="text-white text-3xl md:text-4xl font-bold leading-tight">Walk on the Wild Side</h2>
                  <p class="text-gray-400 text-lg max-w-lg">
                    Join our expert rangers for an exclusive guided tour. Get behind-the-scenes access, feeding
                    sessions, and
                    learn about our conservation efforts firsthand.
                  </p>
                  <div class="flex flex-wrap gap-4 pt-2">
                    <div class="flex items-center gap-2 text-gray-300 text-sm bg-[#111714] px-4 py-2 rounded-lg">
                      <span class="material-symbols-outlined text-primary text-base">schedule</span>
                      Daily: 10am &amp; 2pm
                    </div>
                    <div class="flex items-center gap-2 text-gray-300 text-sm bg-[#111714] px-4 py-2 rounded-lg">
                      <span class="material-symbols-outlined text-primary text-base">groups</span>
                      Max 12 People
                    </div>
                  </div>
                </div>
                <div class="shrink-0">
                  <button
                    class="flex items-center justify-center gap-2 h-14 px-8 rounded-full bg-primary text-[#111714] text-base font-bold transition-all hover:bg-primary-hover hover:scale-105 shadow-lg whitespace-nowrap"
                    onclick="alert('Booking a tour...')">
                    Book a Tour
                    <span class="material-symbols-outlined">calendar_month</span>
                  </button>
                </div>
              </div>
            </div>
          </section>
          <!-- Footer -->
          <footer class="w-full bg-[#0d1611] border-t border-surface-dark-lighter mt-12">
            <div class="px-6 md:px-10 lg:px-20 py-12 max-w-[1400px] mx-auto grid grid-cols-1 md:grid-cols-4 gap-10">
              <!-- Brand -->
              <div class="flex flex-col gap-4">
                <div class="flex items-center gap-3">
                  <div class="p-1.5 bg-surface-dark-lighter rounded-full text-primary">
                    <span class="material-symbols-outlined text-[20px]">pets</span>
                  </div>
                  <h2 class="text-white text-lg font-bold">Zoo ASSAD</h2>
                </div>
                <p class="text-gray-500 text-sm">
                  Connecting people with wildlife and conservation since 2023.
                </p>
              </div>
              <!-- Links 1 -->
              <div class="flex flex-col gap-4">
                <h4 class="text-white font-bold">Explore</h4>
                <a class="text-gray-400 hover:text-primary text-sm transition-colors" href="#">Animals</a>
                <a class="text-gray-400 hover:text-primary text-sm transition-colors" href="#">Map</a>
                <a class="text-gray-400 hover:text-primary text-sm transition-colors" href="#">Events</a>
                <a class="text-gray-400 hover:text-primary text-sm transition-colors" href="#">Conservation</a>
              </div>
              <!-- Links 2 -->
              <div class="flex flex-col gap-4">
                <h4 class="text-white font-bold">Visit</h4>
                <a class="text-gray-400 hover:text-primary text-sm transition-colors" href="#">Tickets</a>
                <a class="text-gray-400 hover:text-primary text-sm transition-colors" href="#">Membership</a>
                <a class="text-gray-400 hover:text-primary text-sm transition-colors" href="#">Hours &amp;
                  Directions</a>
                <a class="text-gray-400 hover:text-primary text-sm transition-colors" href="#">FAQs</a>
              </div>
              <!-- Contact -->
              <div class="flex flex-col gap-4">
                <h4 class="text-white font-bold">Contact</h4>
                <div class="flex items-center gap-3 text-gray-400 text-sm">
                  <span class="material-symbols-outlined text-primary text-base">location_on</span>
                  <span>123 Wildlife Ave, Jungle City</span>
                </div>
                <div class="flex items-center gap-3 text-gray-400 text-sm">
                  <span class="material-symbols-outlined text-primary text-base">call</span>
                  <span>+1 (555) 123-4567</span>
                </div>
                <div class="flex items-center gap-3 text-gray-400 text-sm">
                  <span class="material-symbols-outlined text-primary text-base">mail</span>
                  <span>hello@zooassad.com</span>
                </div>
              </div>
            </div>
            <div class="border-t border-surface-dark-lighter py-6 text-center">
              <p class="text-gray-600 text-sm">© 2024 Zoo ASSAD. All rights reserved.</p>
            </div>
          </footer>
          </main>
</body>

</html>