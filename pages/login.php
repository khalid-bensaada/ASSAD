<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db = "assad";

$conn = new mysqli($servername, $username, $password, $db);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = $conn->query("SELECT * FROM assad_users WHERE email = $email");
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['name'] = $user['name'];
            $_SESSION['email'] = $user['email'];

            if ($user['role'] === 'admin') {
                header("Location : admin.php");
            } else {
                header("Location : dign.php");
            }
            exit();
        }

    }
    
}
?>
<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Zoo ASSAD Login</title>
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
                        "surface-dark": "#1c2a23",
                        "input-bg": "#29382f",
                    },
                    fontFamily: {
                        "display": ["Spline Sans", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "1rem",
                        "lg": "2rem",
                        "xl": "3rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
</head>

<body
    class="font-display bg-background-light dark:bg-background-dark text-slate-900 dark:text-white min-h-screen flex flex-col antialiased selection:bg-primary selection:text-background-dark">
    <!-- Navbar -->
    <header
        class="w-full border-b border-gray-200 dark:border-white/10 bg-white/50 dark:bg-background-dark/80 backdrop-blur-md fixed top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <!-- Logo -->
                <div class="flex items-center gap-3">
                    <div class="flex items-center justify-center w-8 h-8 rounded-full bg-primary/20 text-primary">
                        <span class="material-symbols-outlined text-xl">pets</span>
                    </div>
                    <span class="text-lg font-bold tracking-tight">Zoo ASSAD</span>
                </div>

                <!-- CTA -->
                <div class="flex items-center gap-4">
                    <button class="hidden sm:flex text-sm font-medium hover:text-primary transition-colors">
                        <a href="index.php">Home</a>
                    </button>
                    <a class="flex items-center justify-center h-10 px-6 rounded-full bg-primary text-background-dark text-sm font-bold hover:brightness-110 transition-all"
                        href="sign.php">
                        Sign Up
                    </a>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content Area -->
    <main class="flex-grow flex items-center justify-center relative px-4 py-24 sm:py-32 overflow-hidden">
        <!-- Ambient Background Image -->
        <div class="absolute inset-0 z-0">
            <div
                class="absolute inset-0 bg-gradient-to-t from-background-dark via-background-dark/95 to-background-dark/80 z-10">
            </div>
            <div class="w-full h-full bg-cover bg-center opacity-30 blur-sm"
                data-alt="Dense green jungle foliage texture"
                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuA0TJ4MRU3rv3L9yJ6spABZxf3UosNBwLZ6dyQgzP52uejs-xzFCmu4cd_Zd3jyfbM08Y5krXsDIjHHnhpg69nd32ISNw7BHyB4zhEyHCHA-uVx7dCh1xgdoVuW6NdBtmpxsza6QSHSDoxJTY3YZwsllcalar87EUDu-hPCYgDiS67OIrvO7_QgcAwucrKfUb-f1uByphiSZp0dENGp6lbgvmIsTtD1GjIkGBBb0uCmdhnMK_dUrXzaZ62m_r2XyVvX73e-kSgSnSI');">
            </div>
        </div>
        <!-- Decorative Pattern Overlay -->
        <div class="absolute inset-0 z-0 opacity-[0.03] pointer-events-none"
            style="background-image: radial-gradient(#36e27b 1px, transparent 1px); background-size: 32px 32px;"></div>
        <!-- Layout Grid -->
        <div class="relative z-10 w-full max-w-7xl mx-auto grid lg:grid-cols-2 gap-12 lg:gap-24 items-center">
            <!-- Left Column: Hero Text (Desktop only) -->
            <div class="hidden lg:flex flex-col justify-center space-y-8">
                <div
                    class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 border border-primary/20 w-fit">
                    <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
                    <span class="text-xs font-semibold text-primary uppercase tracking-wider">Secure Portal</span>
                </div>
                <h1 class="text-5xl font-bold leading-tight tracking-tight">
                    Manage the Wild <br />
                    <span class="text-primary">With Confidence.</span>
                </h1>
                <p class="text-lg text-gray-400 max-w-md leading-relaxed">
                    Welcome back to the Zoo ASSAD administration portal. Monitor habitats, manage staff schedules, and
                    track animal health records securely.
                </p>
                <div class="flex gap-4 pt-4">
                    <div class="flex -space-x-3">
                        <img alt="User 1" class="w-10 h-10 rounded-full border-2 border-background-dark object-cover"
                            data-alt="Profile picture of a zoo keeper"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuD5ABbdvKaxsEV6kvx-0_hwsHInctfcVBYrQS_4rJTuOyanuZ6mGEVpt_bfuobQX9R5Q2YxrxkYoYptO9yAvV0eCXW5enHMNyY-bSlQD_TEFqkydxWbKGHlsu1JUmu6PE9oM17Ev7yjm2h4sOUtq8TL8KnkMsUFwW9HYNjIjk9_i3CxKv2u2nfxje2X0T-_9vlJrAbC8oxyi76Ja5VL35BUiCjjfu4BxZHJI_t-ChP3HfjKyuwyMiGZraYTun2tUZXFw184Efo4F2M" />
                        <img alt="User 2" class="w-10 h-10 rounded-full border-2 border-background-dark object-cover"
                            data-alt="Profile picture of a veterinarian"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBgSi-wV2VxqyIgfw0vkIImjAS9Xc3d8XIFxMSzSPk1o1aOGIEPrQiuASDiWzlm8GlRCpUfZGpKcMUFOg0t5y_FmmynQqAiLq1LbG6J7SZ9vVEe5HyA2tRYIyf4c8ebv_N8EwavI1i2M49trAgCSWD1ZN8Rxj4Rn0yR_pKlNijZK_FWQcoiXXwr61Om_koCgPt8PIGaZsqJF7XRodE964c4ve0xDcrg4k7Va7G8U3n4tkTeiIPf28NeAa5KoRiYA1-SfHCg4R2UuFs" />
                        <img alt="User 3" class="w-10 h-10 rounded-full border-2 border-background-dark object-cover"
                            data-alt="Profile picture of staff"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCzDOAAHihcI3ARcuROOXC6G6b6U7SE7Zgq4BhoWeld_9lHFBcBrXl0yr7MuJKff7BoWAb5Dlhzeh9njugqcH9-aOo0M6YmkZMpiHv6RgdYx-L5Q_xuhf1t8XuCmMA9YgW4ZcYCQyd-tijd59lfG3H02zfIdxlcLLaIinlMTLzm7fA1YvyU2LRyJDZQ_DM97W8z5BgsxeUmOeLI-mER_CKu12YerDcR2MFXA9wZhtRdjogI-b7yN7AGfofOv4aemzq3edu_2b14WKE" />
                        <div
                            class="w-10 h-10 rounded-full border-2 border-background-dark bg-surface-dark flex items-center justify-center text-xs font-bold text-white">
                            +2k</div>
                    </div>
                    <div class="flex flex-col justify-center">
                        <span class="text-sm font-bold text-white">Trusted by Staff</span>
                        <div class="flex items-center gap-1">
                            <span class="material-symbols-outlined text-primary text-[14px]">star</span>
                            <span class="material-symbols-outlined text-primary text-[14px]">star</span>
                            <span class="material-symbols-outlined text-primary text-[14px]">star</span>
                            <span class="material-symbols-outlined text-primary text-[14px]">star</span>
                            <span class="material-symbols-outlined text-primary text-[14px]">star</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right Column: Login Form -->
            <div class="w-full max-w-[480px] mx-auto lg:mx-0">
                <div
                    class="bg-surface-dark/90 backdrop-blur-xl border border-white/5 rounded-3xl p-8 sm:p-10 shadow-2xl relative overflow-hidden group">
                    <!-- Top glow effect -->
                    <div
                        class="absolute -top-20 -right-20 w-40 h-40 bg-primary/20 rounded-full blur-3xl pointer-events-none group-hover:bg-primary/30 transition-all duration-700">
                    </div>
                    <!-- Header Section -->
                    <div class="flex flex-col items-center text-center mb-8 relative z-10">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-primary to-green-600 rounded-2xl rotate-3 flex items-center justify-center shadow-lg shadow-primary/20 mb-6">
                            <span
                                class="material-symbols-outlined text-background-dark text-4xl -rotate-3">forest</span>
                        </div>
                        <h2 class="text-3xl font-bold text-white mb-2">Welcome Back</h2>
                        <p class="text-gray-400 text-sm">Log in to your Zoo ASSAD account</p>
                    </div>
                    <!-- Form Section -->
                    <form class="space-y-5 relative z-10" method="POST"
                        onsubmit="event.preventDefault(); alert('Welcome to Zoo ASSAD!');">
                        <!-- Email Input -->
                        <div class="space-y-2">
                            <label class="text-sm font-medium text-gray-300 ml-1" for="email">Email Address</label>
                            <div class="relative group/input">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <span
                                        class="material-symbols-outlined text-gray-500 group-focus-within/input:text-primary transition-colors">mail</span>
                                </div>
                                <input
                                    class="w-full bg-input-bg border-transparent focus:border-primary focus:ring-0 rounded-xl py-3.5 pl-11 pr-4 text-white placeholder-gray-500 transition-all shadow-inner"
                                    id="email" name="email" placeholder="keeper@zooassad.com" required=""
                                    type="email" />
                            </div>
                        </div>
                        <!-- Password Input -->
                        <div class="space-y-2">
                            <div class="flex justify-between items-center ml-1">
                                <label class="text-sm font-medium text-gray-300" for="password">Password</label>
                                <a class="text-xs text-primary hover:text-primary/80 transition-colors font-medium"
                                    href="#">Forgot Password?</a>
                            </div>
                            <div class="relative group/input">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <span
                                        class="material-symbols-outlined text-gray-500 group-focus-within/input:text-primary transition-colors">lock</span>
                                </div>
                                <input
                                    class="w-full bg-input-bg border-transparent focus:border-primary focus:ring-0 rounded-xl py-3.5 pl-11 pr-4 text-white placeholder-gray-500 transition-all shadow-inner"
                                    id="password" name="password" placeholder="••••••••" required="" type="password" />
                            </div>
                        </div>
                        <!-- Submit Button -->
                        <button
                            class="w-full bg-primary hover:bg-green-400 text-background-dark font-bold py-4 rounded-xl shadow-lg shadow-primary/25 hover:shadow-primary/40 transition-all transform hover:-translate-y-0.5 mt-2 flex items-center justify-center gap-2 group/btn"
                            name="login" type="submit">
                            <span>Sign In securely</span>
                            <span
                                class="material-symbols-outlined text-lg group-hover/btn:translate-x-1 transition-transform">arrow_forward</span>
                        </button>
                    </form>
                    <!-- Divider -->
                    <div class="relative my-8">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-white/10"></div>
                        </div>
                        <div class="relative flex justify-center text-xs uppercase">
                            <span class="bg-surface-dark px-4 text-gray-500 font-medium tracking-wider">Or continue
                                with</span>
                        </div>
                    </div>
                    <!-- Social Login -->
                    <div class="grid grid-cols-2 gap-4">
                        <button
                            class="flex items-center justify-center gap-2 bg-white/5 hover:bg-white/10 border border-white/5 rounded-xl py-2.5 transition-colors group">
                            <svg aria-hidden="true"
                                class="w-5 h-5 text-gray-400 group-hover:text-white transition-colors"
                                fill="currentColor" viewbox="0 0 24 24">
                                <path
                                    d="M12.545,10.239v3.821h5.445c-0.712,2.315-2.647,3.972-5.445,3.972c-3.332,0-6.033-2.536-6.033-5.696  c0-3.159,2.701-5.696,6.033-5.696c1.482,0,2.831,0.494,3.89,1.318l2.973-2.831C17.653,3.42,15.228,2.5,12.545,2.5  C7.203,2.5,2.873,6.671,2.873,11.815c0,5.144,4.33,9.315,9.672,9.315c5.074,0,9.15-3.376,9.673-8.081c0.057-0.457,0.086-0.925,0.086-1.401  c0-0.498-0.03-0.989-0.089-1.474C22.185,10.174,12.545,10.239,12.545,10.239z">
                                </path>
                            </svg>
                            <span class="text-sm font-medium text-gray-300 group-hover:text-white">Google</span>
                        </button>
                        <button
                            class="flex items-center justify-center gap-2 bg-white/5 hover:bg-white/10 border border-white/5 rounded-xl py-2.5 transition-colors group">
                            <svg aria-hidden="true"
                                class="w-5 h-5 text-gray-400 group-hover:text-white transition-colors"
                                fill="currentColor" viewbox="0 0 24 24">
                                <path
                                    d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z">
                                </path>
                            </svg>
                            <span class="text-sm font-medium text-gray-300 group-hover:text-white">SSO</span>
                        </button>
                    </div>
                    <!-- Footer Link -->
                    <div class="mt-8 text-center relative z-10">
                        <p class="text-gray-400 text-sm">
                            Don't have an account?
                            <a class="text-primary hover:text-green-300 font-semibold transition-colors"
                                href="#">Register</a>
                        </p>
                    </div>
                </div>
                <!-- Helper Links (Mobile) -->
                <div class="flex justify-center gap-6 mt-8 lg:hidden">
                    <a class="text-gray-500 text-xs hover:text-white" href="#">Privacy Policy</a>
                    <a class="text-gray-500 text-xs hover:text-white" href="#">Terms of Service</a>
                    <a class="text-gray-500 text-xs hover:text-white" href="#">Help Center</a>
                </div>
            </div>
        </div>
    </main>


</body>

</html>