<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Register - BiteRush</title>
    <!-- Montserrat and Inter fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&amp;family=Inter:wght@400;500;600&amp;display=swap"
        rel="stylesheet" />
    <!-- Material Symbols -->
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
            vertical-align: middle;
        }

        .pizza-overlay {
            background: linear-gradient(to right, rgba(255, 248, 246, 1) 0%, rgba(255, 248, 246, 0.95) 30%, rgba(255, 248, 246, 0) 100%);
        }

        @media (max-width: 768px) {
            .pizza-overlay {
                background: linear-gradient(to bottom, rgba(255, 248, 246, 0.6) 0%, rgba(255, 248, 246, 1) 40%);
            }
        }

        .input-focus-ring:focus {
            outline: none;
            border-color: #a83300;
            box-shadow: 0 0 0 2px rgba(168, 51, 0, 0.2);
        }

        /* Style Guidance - 8px Roundness mandated */
        .rounded-brand {
            border-radius: 8px;
        }
    </style>
</head>

<body class="bg-background text-on-background font-body-md overflow-x-hidden">
    <!-- Main Registration Shell -->
    <main class="min-h-screen flex flex-col md:flex-row relative">
        <!-- Hero Background Section (Desktop Left, Mobile Top) -->
        <div class="hidden md:block fixed inset-0 z-0">
            <div class="w-full h-full bg-cover bg-center"
                style="background-image: url('https://lh3.googleusercontent.com/aida/AP1WRLuSRfxekrPkhskuouhj3-PY6t2MCT-v5imcagQUZa3Iq-Wf885NSNzsxZLVFKLDdcadiMmkR-XruZrilduNobMREpKsD6EG_gMb_Y3v0fnSCFcX6XK7rQxcezUXlSjt77B0mqP7g00dX0eFZ8y0kcHnJNhuZ3GGitJGqYUGrDh-2s8JXJGKLVFjpCquPHxe28KRvdLtN5V3UEIKBXEXwTQVchVHMA2Y34jRn7ND8Bry4X-GmtOrcLBq1wgC');">
            </div>
            <div class="absolute inset-0 pizza-overlay"></div>
        </div>
        <!-- Mobile Background Image -->
        <div class="md:hidden w-full h-[30vh] bg-cover bg-center relative"
            style="background-image: url('https://lh3.googleusercontent.com/aida/AP1WRLuSRfxekrPkhskuouhj3-PY6t2MCT-v5imcagQUZa3Iq-Wf885NSNzsxZLVFKLDdcadiMmkR-XruZrilduNobMREpKsD6EG_gMb_Y3v0fnSCFcX6XK7rQxcezUXlSjt77B0mqP7g00dX0eFZ8y0kcHnJNhuZ3GGitJGqYUGrDh-2s8JXJGKLVFjpCquPHxe28KRvdLtN5V3UEIKBXEXwTQVchVHMA2Y34jRn7ND8Bry4X-GmtOrcLBq1wgC');">
            <div class="absolute inset-0 pizza-overlay"></div>
        </div>
        <!-- Content Canvas (Registration Form Container) -->
        <div
            class="relative z-10 w-full md:w-1/2 lg:w-2/5 min-h-screen bg-background flex flex-col px-margin-mobile md:px-margin-desktop py-12 overflow-y-auto">
            <!-- Brand Anchor -->
            <div class="mb-8">
                <img alt="BiteRush Logo" class="h-16 w-16 object-contain mb-4"
                    src="https://lh3.googleusercontent.com/aida/AP1WRLvWocbdxJDYqabSnBZdO-AXAfQvdqE0rYETGBBCd9nn8Nz_sXJ-Bhnh2wMI-hSERECwKq0OXBQOulIQjUNHWD_J4PYnXVRSIbDpPW1-6VSSDquTYOKM8B1W1YmPTOrC9215nLfdoTkmeTcujGBH-ODkijAdN475C4criS2nseRgvWmYICHp3r38WXJgNdlXhCxwTMdB8-92iWOVxelbAzFfh5c-CYeEPDK3gRnizpNTk6CRdRRIlFen3VE" />
                <h1
                    class="font-headline-lg-mobile md:font-headline-lg text-headline-lg-mobile md:text-headline-lg text-on-surface mb-2">
                    Join the Rush</h1>
                <p class="font-body-md text-on-surface-variant">Create an account to start ordering your favorites.</p>
            </div>
            <!-- Registration Form -->
            <form class="space-y-4" id="registration-form" onsubmit="event.preventDefault();">
                <!-- Full Name -->
                <div>
                    <label class="block font-label-md text-on-surface mb-1.5" for="full_name">Full Name</label>
                    <div class="relative">
                        <span
                            class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant">person</span>
                        <input
                            class="w-full pl-10 pr-4 py-3 bg-surface-container-lowest border border-outline-variant rounded-brand text-on-surface input-focus-ring transition-all placeholder:text-on-secondary-fixed-variant"
                            id="full_name" placeholder="John Doe" type="text" />
                    </div>
                </div>
                <!-- Email -->
                <div>
                    <label class="block font-label-md text-on-surface mb-1.5" for="email">Email</label>
                    <div class="relative">
                        <span
                            class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant">mail</span>
                        <input
                            class="w-full pl-10 pr-4 py-3 bg-surface-container-lowest border border-outline-variant rounded-brand text-on-surface input-focus-ring transition-all placeholder:text-on-secondary-fixed-variant"
                            id="email" placeholder="email@example.com" type="email" />
                    </div>
                </div>
                <!-- Phone Number -->
                <div>
                    <label class="block font-label-md text-on-surface mb-1.5" for="phone">Phone Number</label>
                    <div class="relative">
                        <span
                            class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant">call</span>
                        <input
                            class="w-full pl-10 pr-4 py-3 bg-surface-container-lowest border border-outline-variant rounded-brand text-on-surface input-focus-ring transition-all placeholder:text-on-secondary-fixed-variant"
                            id="phone" placeholder="+1 (555) 000-0000" type="tel" />
                    </div>
                </div>
                <!-- Password Row -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block font-label-md text-on-surface mb-1.5" for="password">Password</label>
                        <div class="relative">
                            <span
                                class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant">lock</span>
                            <input
                                class="w-full pl-10 pr-4 py-3 bg-surface-container-lowest border border-outline-variant rounded-brand text-on-surface input-focus-ring transition-all placeholder:text-on-secondary-fixed-variant"
                                id="password" placeholder="••••••••" type="password" />
                        </div>
                    </div>
                    <div>
                        <label class="block font-label-md text-on-surface mb-1.5" for="confirm_password">Confirm
                            Password</label>
                        <div class="relative">
                            <span
                                class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant">shield</span>
                            <input
                                class="w-full pl-10 pr-4 py-3 bg-surface-container-lowest border border-outline-variant rounded-brand text-on-surface input-focus-ring transition-all placeholder:text-on-secondary-fixed-variant"
                                id="confirm_password" placeholder="••••••••" type="password" />
                        </div>
                    </div>
                </div>
                <!-- Terms & Conditions -->
                <div class="flex items-start gap-3 py-2">
                    <input class="mt-1 w-5 h-5 rounded border-outline-variant text-primary focus:ring-primary"
                        id="terms" type="checkbox" />
                    <label class="font-label-sm text-on-surface-variant" for="terms">
                        I agree to the <a class="text-primary hover:underline" href="#">Terms and Conditions</a> and <a
                            class="text-primary hover:underline" href="#">Privacy Policy</a> of BiteRush.
                    </label>
                </div>
                <!-- Primary CTA -->
                <button
                    class="w-full py-4 bg-[#ff5200] text-on-primary font-headline-md text-headline-md rounded-brand hover:brightness-110 active:scale-[0.98] transition-all shadow-md mt-2"
                    type="submit">
                    Create Account
                </button>
            </form>
            <!-- Divider -->
            <div class="flex items-center gap-4 my-8">
                <div class="h-px bg-outline-variant flex-1"></div>
                <span class="font-label-sm text-on-surface-variant">OR REGISTER WITH</span>
                <div class="h-px bg-outline-variant flex-1"></div>
            </div>
            <!-- Social Sign Up -->
            <!-- <div class="grid grid-cols-2 gap-4 mb-8">
                <button
                    class="flex items-center justify-center gap-2 py-3 bg-surface-container-lowest border border-outline-variant rounded-brand font-label-md text-on-surface hover:bg-secondary-container transition-colors">
                    <svg class="w-5 h-5" viewbox="0 0 24 24">
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
                    Google
                </button>
                <button
                    class="flex items-center justify-center gap-2 py-3 bg-surface-container-lowest border border-outline-variant rounded-brand font-label-md text-on-surface hover:bg-secondary-container transition-colors">
                    <svg class="w-5 h-5" fill="currentColor" viewbox="0 0 24 24">
                        <path
                            d="M17.05 20.28c-.98.95-2.05.8-3.08.35-1.09-.46-2.09-.48-3.24 0-1.44.62-2.2.44-3.06-.35C2.79 15.25 3.51 7.59 9.05 7.31c1.35.07 2.29.74 3.08.75.81-.02 2.11-.84 3.51-.68 1.52.17 2.65.81 3.36 1.88-3.15 1.83-2.65 6.18.42 7.42-.64 1.68-1.55 3.32-2.37 3.6zm-3.1-14.02c-.06-1.92 1.6-3.55 3.43-3.76.19 2.14-1.87 3.9-3.43 3.76z">
                        </path>
                    </svg>
                    Apple
                </button>
            </div> -->
            <!-- Login Link Footer -->
            <div class="mt-auto pt-6 text-center">
                <p class="font-body-md text-on-surface-variant">
                    Already have an account?
                    <a class="text-primary font-label-md hover:underline ml-1" href="{{ route('login') }}">Sign In</a>
                </p>
            </div>
        </div>
    </main>
    <!-- Success Modal Interaction Script -->
    <script>
        document.getElementById('registration-form').addEventListener('submit', (e) => {
            const btn = e.target.querySelector('button[type="submit"]');
            const originalText = btn.innerText;
            btn.innerHTML = '<span class="material-symbols-outlined animate-spin">sync</span> Creating Account...';
            btn.disabled = true;

            setTimeout(() => {
                btn.innerHTML = '<span class="material-symbols-outlined">check_circle</span> Account Created!';
                btn.classList.replace('bg-[#ff5200]', 'bg-tertiary-container');
                setTimeout(() => {
                    btn.innerText = originalText;
                    btn.classList.replace('bg-tertiary-container', 'bg-[#ff5200]');
                    btn.disabled = false;
                }, 2000);
            }, 1500);
        });
    </script>
</body>

</html>