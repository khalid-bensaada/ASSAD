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
if (isset($_POST['sign'])) {
    $erreurs = [];
    $name = $_POST["username"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $role = $_POST["role"];

    $pattern_email = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/";

    if (!preg_match($pattern_email, $email)) {
        $erreurs['email_error'] = "L'adresse email n'est pas valide (format attendu: nom@exemple.com).";
    }
    if (strlen($password) < 6) {
        $erreurs['password_error'] = "Le mot de passe doit faire au moins 6 caractères.";
    }
    $check = $conn->query("SELECT email FROM assad_users WHERE email ='$email");
    if ($ckeck->num_rows > 0) {
        $erreurs['email_existe'] = 'Email et déja existe';
    }
    if (empty($erreurs)) {
        $password_hache = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $connexion->prepare("INSERT INTO assad_users (username,email ,password_hash,user_role,actif)
            VALUES (?,?,?,?,?)");
        $actif = 'active';
        if ($role === 'guide') {
            $actif= 'en_attend';
        }
        $stmt->bind_param('sssss', $name, $password, $email, $role,$actif);
        $stmt->execute();
        $_SESSION['success'] = "Inscription réussie ! Connectez-vous.";
        $_SESSION['form_active'] = 'login-form';
        header('Location: login.php');
        exit();
    } else {
        $_SESSION['register_errors'] = $erreurs;
        $_SESSION['form_active'] = 's-inscrire-form';
        header('Location: sign.php');
        exit();
    }
}

?>
<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Zoo ASSAD - Register</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Spline+Sans:wght@300;400;500;600;700&amp;family=Noto+Sans:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#36e27b",
                        "background-light": "#f6f8f7",
                        "background-dark": "#112117",
                        "surface-dark": "#1c2620",
                        "border-dark": "#3d5245",
                        "text-muted": "#9eb7a8"
                    },
                    fontFamily: {
                        "display": ["Spline Sans", "sans-serif"],
                        "body": ["Noto Sans", "sans-serif"]
                    },
                    borderRadius: { "DEFAULT": "1rem", "lg": "2rem", "xl": "3rem", "full": "9999px" },
                },
            },
        }
    </script>
</head>

<body
    class="bg-background-light dark:bg-[#111714] font-display antialiased text-slate-900 dark:text-white min-h-screen flex flex-col">
    <!-- Top Navigation -->
    <header class="w-full border-b border-solid border-b-[#29382f] bg-[#111714] px-4 lg:px-10 py-3 sticky top-0 z-50">
        <div class="flex items-center justify-between max-w-[1440px] mx-auto">
            <div class="flex items-center gap-4 text-white">
                <div class="size-8 text-primary">
                    <svg class="w-full h-full" fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M24 4C25.7818 14.2173 33.7827 22.2182 44 24C33.7827 25.7818 25.7818 33.7827 24 44C22.2182 33.7827 14.2173 25.7818 4 24C14.2173 22.2182 22.2182 14.2173 24 4Z"
                            fill="currentColor"></path>
                    </svg>
                </div>
                <h2 class="text-white text-xl font-bold leading-tight tracking-[-0.015em]">Zoo ASSAD</h2>
            </div>
            <div class="flex gap-2">
                <a class="hidden sm:flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-10 px-6 bg-[#29382f] hover:bg-[#3d5245] text-white text-sm font-bold transition-colors"
                    href="index.php">
                    Home
                </a>
                <a class="flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-10 px-6 bg-primary hover:bg-[#2dc468] text-[#111714] text-sm font-bold transition-colors"
                    href="login.php">
                    Log In
                </a>
            </div>
        </div>
    </header>
    <!-- Main Content -->
    <main class="flex-grow flex items-center justify-center p-4 lg:p-8">
        <div class="w-full max-w-6xl grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16 items-center">
            <!-- Left Column: Visual/Marketing -->
            <div class="hidden lg:flex flex-col gap-8 relative h-full min-h-[600px] rounded-3xl overflow-hidden group">
                <!-- Background Image -->
                <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-105"
                    data-alt="Close up of a majestic lion face in dark moody lighting"
                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCVhKOpxEsonOCcHur9Wu4j3DghwjDyc_IuM3oGOsAeD57aQsdw61Q_mou09Ee-JUJNYWa7GWeVKlo60olWiYAIr1slG6FHY6BFyrU29KsLoKwhLhobaMXM6rku69bshVESd5sw80T4O8uGWrvHZeIC3fIKiLGBpi9K4Xmbckj2_8jVkLpC_4x0t_mLQJVomTqDOpD0P2IGZYaBdNavxaJMp6KcaRt8QVVymQ6xqbHPaSphKy3OpyG6TwYNcBLrSMUhsQX-l12fCXw');">
                </div>
                <!-- Overlay Gradient -->
                <div class="absolute inset-0 bg-gradient-to-t from-[#111714] via-[#111714]/40 to-transparent"></div>
                <!-- Text Content over Image -->
                <div class="relative z-10 mt-auto p-10 flex flex-col gap-4">
                    <h1 class="text-white text-5xl font-black leading-tight tracking-tight">
                        Join the<br /> <span class="text-primary">Wild Pack</span>
                    </h1>
                    <p class="text-gray-200 text-lg max-w-md">
                        Experience the jungle like never before. Book tickets, manage tours, and get exclusive access to
                        our newest exhibits.
                    </p>
                    <div class="flex gap-2 mt-4">
                        <span
                            class="inline-flex items-center rounded-md bg-[#1c2620]/80 backdrop-blur-md px-3 py-1 text-xs font-medium text-primary ring-1 ring-inset ring-primary/30">Member
                            Exclusive</span>
                        <span
                            class="inline-flex items-center rounded-md bg-[#1c2620]/80 backdrop-blur-md px-3 py-1 text-xs font-medium text-white ring-1 ring-inset ring-white/20">Fast
                            Track</span>
                    </div>
                </div>
            </div>
            <!-- Right Column: Registration Form -->
            <div class="w-full max-w-md mx-auto lg:mx-0 flex flex-col gap-6">
                <div class="flex flex-col gap-2 mb-2">
                    <h2 class="text-3xl font-bold text-white">Create Account</h2>
                    <p class="text-text-muted">Enter your details to register as a new member.</p>
                </div>
                <form action="#" class="flex flex-col gap-5" method="POST"
                    onsubmit="alert('Registration Simulated!'); return false;">
                    <!-- Role Selector -->
                    <div class="flex flex-col gap-2">
                        <label class="text-white text-sm font-medium ml-1">I am registering as a</label>
                        <div
                            class="grid grid-cols-2 p-1 bg-surface-dark border border-border-dark rounded-full relative">
                            <label class="cursor-pointer relative z-10">
                                <input checked="" class="peer sr-only" name="role" type="radio" value="visitor" />
                                <div
                                    class="w-full py-2.5 text-center text-sm font-bold text-text-muted rounded-full transition-all peer-checked:bg-primary peer-checked:text-[#111714] peer-checked:shadow-lg">
                                    Visitor
                                </div>
                            </label>
                            <label class="cursor-pointer relative z-10">
                                <input class="peer sr-only" name="role" type="radio" value="guide" />
                                <div
                                    class="w-full py-2.5 text-center text-sm font-bold text-text-muted rounded-full transition-all peer-checked:bg-primary peer-checked:text-[#111714] peer-checked:shadow-lg">
                                    Guide
                                </div>
                            </label>
                        </div>
                    </div>
                    <!-- Full Name -->
                    <div class="flex flex-col gap-2">
                        <label class="text-white text-sm font-medium ml-1" for="fullname">Full Name</label>
                        <input
                            class="form-input w-full h-12 px-4 rounded-xl bg-surface-dark border border-border-dark text-white placeholder-text-muted focus:border-primary focus:ring-1 focus:ring-primary transition-colors text-base"
                            id="fullname" name="username" placeholder="Enter your full name" type="text" />
                    </div>
                    <!-- Email -->
                    <div class="flex flex-col gap-2">
                        <label class="text-white text-sm font-medium ml-1" for="email">Email Address</label>
                        <input
                            class="form-input w-full h-12 px-4 rounded-xl bg-surface-dark border border-border-dark text-white placeholder-text-muted focus:border-primary focus:ring-1 focus:ring-primary transition-colors text-base"
                            id="email" name="email" placeholder="name@example.com" type="email" />
                    </div>
                    <!-- Password -->
                    <div class="flex flex-col gap-2">
                        <label class="text-white text-sm font-medium ml-1" for="password">Password</label>
                        <div class="relative flex items-center">
                            <input
                                class="form-input w-full h-12 pl-4 pr-12 rounded-xl bg-surface-dark border border-border-dark text-white placeholder-text-muted focus:border-primary focus:ring-1 focus:ring-primary transition-colors text-base"
                                id="password" name="password" placeholder="Create a secure password" type="password" />
                            <button
                                class="absolute right-4 text-text-muted hover:text-white transition-colors flex items-center justify-center"
                                type="button">
                                <span class="material-symbols-outlined text-[20px]">visibility</span>
                            </button>
                        </div>
                    </div>
                    <!-- Submit Button -->
                    <button
                        class="mt-4 w-full h-12 bg-primary hover:bg-[#2dc468] text-[#111714] text-base font-bold rounded-full transition-all transform active:scale-[0.98] shadow-[0_0_15px_rgba(54,226,123,0.3)] hover:shadow-[0_0_25px_rgba(54,226,123,0.5)]"
                        name="sign" type="submit">
                        Sign Up Now
                    </button>
                    <!-- Footer Link -->
                    <div class="text-center mt-2">
                        <p class="text-text-muted text-sm">
                            Already have an account?
                            <a class="text-primary font-bold hover:underline ml-1" href="login.php">Log in</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>