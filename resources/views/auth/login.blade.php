<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>BiteRush | Partner Login</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&amp;family=Inter:wght@400;500;600&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "outline-variant": "#e5beb2",
                        "on-surface": "#281812",
                        "inverse-primary": "#ffb59d",
                        "on-secondary-fixed-variant": "#474746",
                        "on-primary": "#ffffff",
                        "primary": "#a83300",
                        "on-tertiary-fixed-variant": "#004884",
                        "tertiary-fixed-dim": "#a4c9ff",
                        "on-primary-fixed": "#390c00",
                        "inverse-on-surface": "#ffede8",
                        "surface-container-low": "#fff1ed",
                        "secondary-fixed": "#e5e2e1",
                        "surface-container": "#ffe9e3",
                        "on-secondary-container": "#636262",
                        "surface-dim": "#f2d3ca",
                        "on-primary-container": "#fffbff",
                        "surface-tint": "#ac3500",
                        "surface-bright": "#fff8f6",
                        "on-primary-fixed-variant": "#832600",
                        "background": "#fff8f6",
                        "on-surface-variant": "#5c4037",
                        "surface": "#fff8f6",
                        "secondary-fixed-dim": "#c8c6c5",
                        "tertiary-fixed": "#d4e3ff",
                        "primary-container": "#d24200",
                        "surface-container-lowest": "#ffffff",
                        "primary-fixed": "#ffdbd0",
                        "on-error-container": "#93000a",
                        "outline": "#907065",
                        "error-container": "#ffdad6",
                        "tertiary-container": "#0076d3",
                        "primary-fixed-dim": "#ffb59d",
                        "on-secondary": "#ffffff",
                        "on-background": "#281812",
                        "tertiary": "#005da8",
                        "on-tertiary-fixed": "#001c39",
                        "surface-variant": "#fbdcd3",
                        "surface-container-highest": "#fbdcd3",
                        "surface-container-high": "#ffe2d9",
                        "inverse-surface": "#3f2c26",
                        "secondary": "#5f5e5e",
                        "error": "#ba1a1a",
                        "on-error": "#ffffff",
                        "on-tertiary-container": "#fdfcff",
                        "on-secondary-fixed": "#1c1b1b",
                        "on-tertiary": "#ffffff",
                        "secondary-container": "#e2dfde"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "unit-6": "1.5rem",
                        "unit-1": "0.25rem",
                        "unit-8": "2rem",
                        "unit-4": "1rem",
                        "unit-2": "0.5rem",
                        "margin-mobile": "16px",
                        "margin-desktop": "40px",
                        "base": "4px",
                        "gutter": "24px"
                    },
                    "fontFamily": {
                        "headline-md": ["Montserrat"],
                        "label-md": ["Inter"],
                        "headline-lg": ["Montserrat"],
                        "headline-lg-mobile": ["Montserrat"],
                        "label-sm": ["Inter"],
                        "display-lg": ["Montserrat"],
                        "body-md": ["Inter"],
                        "body-lg": ["Inter"]
                    },
                    "fontSize": {
                        "headline-md": ["24px", { "lineHeight": "32px", "fontWeight": "600" }],
                        "label-md": ["14px", { "lineHeight": "20px", "fontWeight": "600" }],
                        "headline-lg": ["32px", { "lineHeight": "40px", "fontWeight": "700" }],
                        "headline-lg-mobile": ["24px", { "lineHeight": "32px", "fontWeight": "700" }],
                        "label-sm": ["12px", { "lineHeight": "16px", "fontWeight": "500" }],
                        "display-lg": ["48px", { "lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "body-md": ["16px", { "lineHeight": "24px", "fontWeight": "400" }],
                        "body-lg": ["18px", { "lineHeight": "28px", "fontWeight": "400" }]
                    }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .floating-label-group {
            position: relative;
        }

        .floating-label-group input:focus~label,
        .floating-label-group input:not(:placeholder-shown)~label {
            top: -0.5rem;
            left: 0.75rem;
            font-size: 0.75rem;
            background-color: white;
            padding: 0 0.25rem;
            color: #a83300;
        }

        .floating-label-group label {
            position: absolute;
            top: 1rem;
            left: 1rem;
            transition: all 0.2s ease-out;
            pointer-events: none;
            color: #5c4037;
        }

        .custom-shadow {
            box-shadow: 0px 10px 20px rgba(26, 26, 26, 0.05);
        }

        @media (max-width: 768px) {
            .mobile-font-adjust {
                font-family: 'Montserrat';
                font-size: 24px;
                line-height: 32px;
                font-weight: 700;
            }
        }
    </style>
</head>

<body class="bg-background min-h-screen flex items-center justify-center p-0 m-0 font-body-md overflow-x-hidden">
    <!-- Main Container -->
    <main class="w-full min-h-screen flex">
        <!-- Left Side: Login Form (Canvas) -->
        <section
            class="w-full lg:w-[450px] xl:w-[550px] bg-white flex flex-col justify-center px-margin-mobile md:px-20 relative z-10">
            <!-- Logo Section -->
            <div class="mb-12">
                <img alt="BiteRush Logo" class="h-16 w-auto object-contain"
                    src="https://lh3.googleusercontent.com/aida/AP1WRLvWocbdxJDYqabSnBZdO-AXAfQvdqE0rYETGBBCd9nn8Nz_sXJ-Bhnh2wMI-hSERECwKq0OXBQOulIQjUNHWD_J4PYnXVRSIbDpPW1-6VSSDquTYOKM8B1W1YmPTOrC9215nLfdoTkmeTcujGBH-ODkijAdN475C4criS2nseRgvWmYICHp3r38WXJgNdlXhCxwTMdB8-92iWOVxelbAzFfh5c-CYeEPDK3gRnizpNTk6CRdRRIlFen3VE" />
            </div>
            <!-- Welcome Message -->
            <div class="mb-10">
                <h1 class="font-headline-lg text-headline-lg text-on-surface mb-2">Welcome back to BiteRush</h1>
                <p class="text-on-surface-variant font-body-md">Efficiency meets flavor. Log in to manage your fleet and
                    orders.</p>
            </div>
            <p>
                @if ($errors->any())
                    <div class="mb-4 p-3 bg-red-100 text-red-700 rounded">
                        <ul class="list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif    
            </p>
            <!-- Login Form -->
            <form action="{{ route('login.submit') }}" class="space-y-6" method="POST">
                @csrf
                <!-- Email Field -->
                <div class="floating-label-group">
                    <input
                        class="w-full h-14 border border-outline px-4 rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all duration-200 bg-white"
                        id="email" placeholder=" " required="" type="email" name="email" />
                    <label class="font-label-md" for="email">Email Address</label>
                </div>
                <!-- Password Field -->
                <div class="floating-label-group">
                    <input
                        class="w-full h-14 border border-outline px-4 rounded-lg focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all duration-200 bg-white"
                        id="password" placeholder=" " required="" type="password" name="password"/>
                    <label class="font-label-md" for="password">Password</label>
                </div>
                <!-- Actions Row -->
                <div class="flex items-center justify-between font-label-md">
                    <label class="flex items-center cursor-pointer group">
                        <input class="w-5 h-5 rounded border-outline text-primary focus:ring-primary transition-colors"
                            type="checkbox" />
                        <span
                            class="ml-2 text-on-surface-variant group-hover:text-on-surface transition-colors">Remember
                            Me</span>
                    </label>
                    <a class="text-primary font-semibold hover:underline transition-all" href="#">Forgot Password?</a>
                </div>
                <!-- Primary CTA -->
                <button
                    class="w-full h-14 bg-primary text-white font-headline-md text-headline-md rounded-lg custom-shadow hover:bg-primary-container active:scale-[0.98] transition-all duration-200"
                    type="submit">
                    Sign In
                </button>
                <!-- Divider -->
                <!-- <div class="relative py-4">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-outline-variant"></div>
                    </div>
                    <div class="relative flex justify-center text-label-sm">
                        <span class="bg-white px-4 text-on-secondary-fixed-variant font-medium">OR CONTINUE WITH</span>
                    </div>
                </div> -->
                <!-- Social Logins -->
                <!-- <div class="grid grid-cols-2 gap-4">
                    <button
                        class="flex items-center justify-center h-12 border border-outline rounded-lg hover:bg-surface-container transition-colors duration-200 group">
                        <svg class="w-5 h-5 mr-2" viewbox="0 0 24 24">
                            <path
                                d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"
                                fill="#4285F4"></path>
                            <path
                                d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"
                                fill="#34A853"></path>
                            <path
                                d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84z"
                                fill="#FBBC05"></path>
                            <path
                                d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"
                                fill="#EA4335"></path>
                        </svg>
                        <span class="font-label-md text-on-surface">Google</span>
                    </button>
                    <button
                        class="flex items-center justify-center h-12 border border-outline rounded-lg hover:bg-surface-container transition-colors duration-200 group">
                        <svg class="w-5 h-5 mr-2" viewbox="0 0 24 24">
                            <path
                                d="M17.05 20.28c-.96.95-2.14 1.43-3.55 1.43-1.37 0-2.48-.43-3.32-1.28-.85-.85-1.28-1.96-1.28-3.32s.43-2.47 1.28-3.32c.84-.84 1.95-1.27 3.32-1.27s2.48.43 3.33 1.28c.84.85 1.27 1.96 1.27 3.32s-.43 2.47-1.28 3.32l.23-.16zm-3.55-13.23c-.76 0-1.41-.26-1.93-.78-.52-.52-.78-1.17-.78-1.93s.26-1.41.78-1.93c.52-.52 1.17-.78 1.93-.78s1.41.26 1.93.78c.52.52.78 1.17.78 1.93s-.26 1.41-.78 1.93c-.52.52-1.17.78-1.93.78z"
                                fill="currentColor"></path>
                            <path
                                d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2zm1.11 16.44c-.38.11-.7.16-.96.16-.68 0-1.23-.21-1.63-.64-.41-.42-.61-.98-.61-1.66s.21-1.23.61-1.65c.41-.43.96-.64 1.63-.64.26 0 .58.05.96.16l-.23.16.23 4.47z"
                                fill="currentColor"></path>
                        </svg>
                        <span class="font-label-md text-on-surface">Apple</span>
                    </button>
                </div> -->
                <!-- Register Link -->
                <p class="text-center font-label-md text-on-surface-variant pt-4">
                    Don't have an account? <a class="text-primary font-bold hover:underline" href="{{ route('register') }}">Sign Up</a>
                </p>
            </form>
            <!-- Small Footer -->
            <footer class="mt-12 text-label-sm text-on-secondary-fixed-variant flex gap-6">
                <a class="hover:text-primary transition-colors" href="#">Privacy Policy</a>
                <a class="hover:text-primary transition-colors" href="#">Terms of Service</a>
                <span class="ml-auto">© 2024 BiteRush</span>
            </footer>
        </section>
        <!-- Right Side: Imagery -->
        <section class="hidden lg:block relative flex-1 bg-surface-variant overflow-hidden">
            <!-- Animated Background Gradient Layer -->
            <div
                class="absolute inset-0 opacity-40 mix-blend-multiply bg-gradient-to-br from-primary to-transparent pointer-events-none">
            </div>
            <!-- Main Hero Image with CSS Filter Effects -->
            <div class="absolute inset-0 scale-105 hover:scale-100 transition-transform duration-[10000ms] ease-out">
                <img alt="Gourmet Burger Visual" class="w-full h-full object-cover grayscale-[20%] brightness-90"
                    src="https://lh3.googleusercontent.com/aida/AP1WRLvVWzAxT9LRLtGfptKc77-ClDZzmfyjKP2cKuVvOyucP5G87hKCkGy89noHyRxRxyVHof9OOJF2oNB7Tw1ZYIjEN6qVoNHWzHD0gvSeGRGNA9OJvsk9atWtm2vkmW5CRe41wUhERJxwPJKGWiBOtoP2I-1bKVRKS6UeHWrO7zo-UTMxRbHT3VPwu7xIvS51zZJBGItsomJ7drtHuKHWu525mOFkHEiFpc_AWNDkZMr3r9KL-lGOXiO3SGIY" />
            </div>
            <!-- Overlay for text readability if needed -->
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-black/20"></div>
            <!-- Floating Brand Accent -->
            <div
                class="absolute bottom-16 left-16 right-16 p-8 bg-white/10 backdrop-blur-md rounded-2xl border border-white/20 custom-shadow animate-pulse-slow">
                <div class="flex items-center gap-4 mb-3">
                    <span class="material-symbols-outlined text-primary text-4xl"
                        style="font-variation-settings: 'FILL' 1;">restaurant</span>
                    <h3 class="font-headline-md text-headline-md text-white">Precision in every delivery</h3>
                </div>
                <p class="text-white/80 font-body-md">Join over 5,000 restaurants optimizing their logistics with
                    BiteRush. Real-time fleet tracking and automated order orchestration.</p>
            </div>
        </section>
    </main>
    <!-- Micro-interaction Scripts -->
    <script>
        // Simple scale effect on button click
        document.querySelectorAll('button').forEach(btn => {
            btn.addEventListener('mousedown', () => btn.classList.add('scale-95'));
            btn.addEventListener('mouseup', () => btn.classList.remove('scale-95'));
            btn.addEventListener('mouseleave', () => btn.classList.remove('scale-95'));
        });

        // Atmospheric parallax hint
        document.addEventListener('mousemove', (e) => {
            const amount = 5;
            const x = (e.clientX - window.innerWidth / 2) / amount;
            const y = (e.clientY - window.innerHeight / 2) / amount;
            const heroImage = document.querySelector('section.hidden.lg\\:block img');
            if (heroImage) {
                heroImage.style.transform = `translate(${x * 0.1}px, ${y * 0.1}px) scale(1.05)`;
            }
        });
    </script>
</body>

</html>