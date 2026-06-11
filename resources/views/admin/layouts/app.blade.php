<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>BiteRush | Admin Portal</title>
    <link rel="icon" type="image/x-icon" href="{{asset('assets/favicon.jpg')}}" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;900&amp;family=Inter:wght@400;500;600&amp;display=swap"
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
                        "on-primary-fixed-variant": "#832600",
                        "on-tertiary-fixed": "#001c39",
                        "primary-fixed": "#ffdbd0",
                        "on-background": "#281812",
                        "on-secondary-fixed": "#1c1b1b",
                        "secondary": "#5f5e5e",
                        "tertiary-container": "#0076d3",
                        "on-primary": "#ffffff",
                        "on-secondary-container": "#636262",
                        "on-primary-fixed": "#390c00",
                        "on-error-container": "#93000a",
                        "tertiary-fixed": "#d4e3ff",
                        "secondary-fixed": "#e5e2e1",
                        "surface-container": "#ffe9e3",
                        "inverse-primary": "#ffb59d",
                        "surface-dim": "#f2d3ca",
                        "secondary-fixed-dim": "#c8c6c5",
                        "tertiary": "#005da8",
                        "secondary-container": "#e2dfde",
                        "surface-container-lowest": "#ffffff",
                        "on-surface": "#281812",
                        "surface-tint": "#ac3500",
                        "on-secondary": "#ffffff",
                        "surface-variant": "#fbdcd3",
                        "outline-variant": "#e5beb2",
                        "surface-container-low": "#fff1ed",
                        "error-container": "#ffdad6",
                        "on-tertiary-fixed-variant": "#004884",
                        "surface-container-high": "#ffe2d9",
                        "on-error": "#ffffff",
                        "on-tertiary": "#ffffff",
                        "primary-container": "#d24200",
                        "surface": "#fff8f6",
                        "surface-bright": "#fff8f6",
                        "background": "#fff8f6",
                        "on-tertiary-container": "#fdfcff",
                        "inverse-on-surface": "#ffede8",
                        "on-secondary-fixed-variant": "#474746",
                        "primary": "#a83300",
                        "on-surface-variant": "#5c4037",
                        "on-primary-container": "#fffbff",
                        "inverse-surface": "#3f2c26",
                        "surface-container-highest": "#fbdcd3",
                        "error": "#ba1a1a",
                        "tertiary-fixed-dim": "#a4c9ff",
                        "outline": "#907065",
                        "primary-fixed-dim": "#ffb59d"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "base": "4px",
                        "gutter": "24px",
                        "unit-8": "2rem",
                        "unit-1": "0.25rem",
                        "unit-2": "0.5rem",
                        "margin-desktop": "40px",
                        "unit-4": "1rem",
                        "unit-6": "1.5rem",
                        "margin-mobile": "16px"
                    },
                    "fontFamily": {
                        "headline-md": ["Montserrat"],
                        "label-md": ["Inter"],
                        "headline-lg-mobile": ["Montserrat"],
                        "display-lg": ["Montserrat"],
                        "label-sm": ["Inter"],
                        "body-lg": ["Inter"],
                        "body-md": ["Inter"],
                        "headline-lg": ["Montserrat"]
                    },
                    "fontSize": {
                        "headline-md": ["24px", { "lineHeight": "32px", "fontWeight": "600" }],
                        "label-md": ["14px", { "lineHeight": "20px", "fontWeight": "600" }],
                        "headline-lg-mobile": ["24px", { "lineHeight": "32px", "fontWeight": "700" }],
                        "display-lg": ["48px", { "lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "label-sm": ["12px", { "lineHeight": "16px", "fontWeight": "500" }],
                        "body-lg": ["18px", { "lineHeight": "28px", "fontWeight": "400" }],
                        "body-md": ["16px", { "lineHeight": "24px", "fontWeight": "400" }],
                        "headline-lg": ["32px", { "lineHeight": "40px", "fontWeight": "700" }]
                    }
                },
            },
        }
    </script>
    <style>
        /* Base */
        body {
            background-color: #fff8f6;
            color: #281812;
            font-family: 'Inter', sans-serif;
            -webkit-font-smoothing: antialiased;
            overflow-x: hidden;
        }

        /* Icons */
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            display: inline-block;
            line-height: 1;
            text-transform: none;
            letter-spacing: normal;
            word-wrap: normal;
            white-space: nowrap;
            direction: ltr;
        }

        /* Sidebar */
        .sidebar-active-indicator {
            position: absolute;
            left: 0;
            width: 4px;
            height: 24px;
            background-color: #a83300;
            border-radius: 0 4px 4px 0;
        }

        /* Cards & visuals */
        .metric-card-shadow,
        .rider-card-shadow,
        .bento-card {
            box-shadow: 0px 10px 20px rgba(26, 26, 26, 0.05);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            background: #fff;
            border-radius: .75rem;
        }

        .metric-card-shadow:hover,
        .bento-card:hover {
            transform: translateY(-2px);
            box-shadow: 0px 12px 24px rgba(26, 26, 26, 0.08);
        }

        .data-table-header {
            background-color: rgba(245, 245, 245, 0.8);
        }

        .active-tab-border { position: relative; }
        .active-tab-border::after { content: ''; position: absolute; bottom: -1px; left: 0; right: 0; height: 2px; background-color: #a83300; }

        /* Small UI helpers */
        .filled-icon { font-variation-settings: 'FILL' 1; }
        .pulsing-dot { box-shadow: 0 0 0 0 rgba(168,51,0,0.7); animation: pulse 1.5s infinite; }
        @keyframes pulse { 0%{transform:scale(.95)}70%{transform:scale(1)}100%{transform:scale(.95)} }

        input:focus, select:focus { outline: none; border-color: #a83300; box-shadow: 0 0 0 2px rgba(168,51,0,0.12); }

        /* Switch */
        .switch { position: relative; display:inline-block; width:44px; height:24px; }
        .switch input{ opacity:0; width:0; height:0 }
        .slider{ position:absolute; cursor:pointer; top:0; left:0; right:0; bottom:0; background:#e2dfde; transition:.4s; border-radius:34px }
        .slider:before{ position:absolute; content:""; height:18px; width:18px; left:3px; bottom:3px; background:white; transition:.4s; border-radius:50% }
        input:checked + .slider{ background:#a83300 }
        input:checked + .slider:before{ transform: translateX(20px) }

        /* Scrollbars */
        .custom-scrollbar::-webkit-scrollbar{ width:6px; height:6px }
        .custom-scrollbar::-webkit-scrollbar-track{ background:transparent }
        .custom-scrollbar::-webkit-scrollbar-thumb{ background:#e5beb2; border-radius:10px }

        /* Mobile sidebar toggle */
        #sidebar-overlay{ position:fixed; inset:0; background:rgba(0,0,0,0.45); z-index:40; display:none }
        #sidebar-overlay.active{ display:block }

        @media (max-width: 768px){
            aside{ position:fixed !important; left:0; top:0; width:280px !important; height:100vh !important; transform:translateX(-100%); transition:transform .28s ease-in-out; z-index:50 !important; display:flex !important; visibility:hidden }
            aside.active{ transform:translateX(0); visibility:visible }
        }
    </style>
</head>

<body class="font-body-md text-body-md min-h-screen overflow-x-hidden">
    <!-- SideNavBar -->
    <aside class="fixed left-0 top-0 h-full w-[280px] bg-inverse-surface flex flex-col py-unit-6 z-50">
        <div class="px-unit-6 mb-unit-8">
            <img alt="BiteRush Logo" class="h-10 w-auto object-contain"
                src="data:image/png;base64,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" />
        </div>
        <nav class="flex-grow space-y-1">
            <a class="flex items-center gap-3 text-secondary-fixed-dim hover:text-on-primary-fixed-variant px-4 py-3 mx-2 transition-colors duration-200"
                href="{{ route('admin.dashboard') }}">
                <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
                <span class="font-label-md text-label-md">Dashboard</span>
            </a>
            <a class="flex items-center gap-3 text-secondary-fixed-dim hover:text-on-primary-fixed-variant px-4 py-3 mx-2 transition-colors duration-200"
                href="{{ route('admin.menu') }}">
                <span class="material-symbols-outlined" data-icon="restaurant_menu">restaurant_menu</span>
                <span class="font-label-md text-label-md">Menu Management</span>
            </a>
            <a class="flex items-center gap-3 text-secondary-fixed-dim hover:text-on-primary-fixed-variant px-4 py-3 mx-2 transition-colors duration-200"
                href="{{ route('admin.orders') }}">
                <span class="material-symbols-outlined" data-icon="shopping_cart">shopping_cart</span>
                <span class="font-label-md text-label-md">Orders</span>
            </a>
            <a class="flex items-center gap-3 text-secondary-fixed-dim hover:text-on-primary-fixed-variant px-4 py-3 mx-2 transition-colors duration-200"
                href="{{ route('admin.riders') }}">
                <span class="material-symbols-outlined" data-icon="delivery_dining">delivery_dining</span>
                <span class="font-label-md text-label-md">Riders</span>
            </a>
            <a class="flex items-center gap-3 text-secondary-fixed-dim hover:text-on-primary-fixed-variant px-4 py-3 mx-2 transition-colors duration-200"
                href="{{ route('admin.fleet') }}">
                <span class="material-symbols-outlined" data-icon="delivery_dining">local_shipping</span>
                <span class="font-label-md text-label-md">Fleet Tracking</span>
            </a>
            <a class="flex items-center gap-3 text-secondary-fixed-dim hover:text-on-primary-fixed-variant px-4 py-3 mx-2 transition-colors duration-200"
                href="{{ route('admin.analytics') }}">
                <span class="material-symbols-outlined" data-icon="analytics">analytics</span>
                <span class="font-label-md text-label-md">Analytics</span>
            </a>
            <a class="flex items-center gap-3 text-secondary-fixed-dim hover:text-on-primary-fixed-variant px-4 py-3 mx-2 transition-colors duration-200"
                href="{{ route('admin.settings') }}">
                <span class="material-symbols-outlined" data-icon="settings">settings</span>
                <span class="font-label-md text-label-md">Settings</span>
            </a>
        </nav>
        <div class="mt-auto px-unit-2 space-y-unit-2 border-t border-white/10 pt-unit-4">
            <div class="px-unit-4 py-unit-2 space-y-unit-2">
                <a class="block text-error px-unit-4 py-unit-2 rounded-lg hover:bg-error/10 transition-all" href="#">
                    <span class="material-symbols-outlined">logout</span>
                    <span class="font-label-md text-label-md">Logout</span>
                </a>
            </div>
        </div>
    </aside>

    <div class="flex h-screen overflow-hidden">
        <!-- Main Content -->
        <main class="flex-1 ml-[280px] h-screen overflow-y-auto bg-surface-container-low custom-scrollbar">
            <!-- Top Bar (centralized) -->
            <header class="flex justify-between items-center w-full px-8 h-16 bg-white sticky top-0 z-40 border-b border-outline-variant">
                <div class="flex items-center w-1/3">
                    <div class="relative w-full max-w-sm">
                        <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant">search</span>
                        <input class="w-full pl-10 pr-4 py-2 bg-surface-container-low border-none rounded-lg focus:ring-2 focus:ring-primary/20 font-body-md text-body-md" placeholder="Search orders, customers..." type="text" />
                    </div>
                </div>
                <div class="flex items-center space-x-6">
                    <div class="flex items-center space-x-4">
                        <button class="material-symbols-outlined text-on-surface-variant hover:text-primary transition-all relative">notifications
                            <span class="absolute top-0 right-0 w-2 h-2 bg-primary rounded-full border-2 border-white"></span>
                        </button>
                        <button class="material-symbols-outlined text-on-surface-variant hover:text-primary transition-all">chat_bubble</button>
                    </div>
                    <div class="h-8 w-px bg-outline-variant"></div>
                    <div class="flex items-center space-x-3 cursor-pointer group">
                        <img alt="Restaurant Admin Profile" class="w-8 h-8 rounded-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC8I7CDGBHe_EiWCtz4nFIjaA2PiIGGSaP5FvbkFl4Ri0-E18v477beLyaFZRvNBS5EPJOsYsBP3dAumAJIzz0wWMRI0GDnvBJO7ODWqBrKUIe3OnsxQwi4fJKxks_qkKKyWuZlVw1FCP7rewEVH6BG9GTHKRkHL7dx5PSofdsiIiesdZ0SekssJux9L7CafL2hj1PxPYlErl5C2t8xI46YkuRFSdSrdcm8Z1d_D67qz9KiHuA6QLe247BQ_l-gGT5YSnO7YO-47Gm" />
                        <span class="font-label-md text-label-md text-on-surface group-hover:text-primary transition-colors">Admin Profile</span>
                    </div>
                </div>
            </header>

            <div class="p-margin-desktop space-y-gutter">
                @yield('content')
            </div>
        </main>
    </div>

    <!-- Footer -->
    <footer
        class="ml-[280px] w-[calc(100%-280px)] bg-surface-container-lowest border-t border-outline-variant px-margin-desktop py-unit-8 mt-unit-8">

        <div
            class="mt-unit-8 pt-unit-4 border-t border-outline-variant flex flex-col md:flex-row justify-between items-center text-secondary text-[12px]">
            <p>© {{now()->year}} BiteRush Technologies. All rights reserved.</p>
            <div class="flex gap-unit-4 mt-2 md:mt-0">
                <span>Status: <span class="text-green-600 font-bold">ALL SYSTEMS GO</span></span>
                <span>V. 2.4.1-stable</span>
            </div>
        </div>
    </footer>
</body>

</html>