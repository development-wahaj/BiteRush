@extends('layouts.app')
@section('body')

    <body class="bg-background text-on-background font-body-md min-h-screen">
        
        <main class="pb-24 md:pb-8">
            <!-- Hero Section -->
            <section class="relative bg-surface-container-high py-unit-8 md:py-16 px-margin-mobile md:px-margin-desktop">
                <div class="max-w-4xl mx-auto text-center">
                    <h1 class="font-display-lg text-display-lg text-primary mb-unit-4 hidden md:block">The Original BiteRush
                        Kitchen.</h1>
                    <h1 class="font-headline-lg-mobile text-headline-lg-mobile text-primary mb-unit-3 md:hidden">The
                        BiteRush Kitchen.</h1>
                    <p class="text-on-surface-variant text-body-lg mb-unit-8">Hand-crafted flavors delivered with precision.
                        Explore our signature menu.</p>
                    <div class="relative mt-unit-8 max-w-2xl mx-auto">
                        <div class="absolute inset-y-0 left-0 pl-unit-4 flex items-center pointer-events-none">
                            <span class="material-symbols-outlined text-outline">search</span>
                        </div>
                        <input
                            class="block w-full pl-12 pr-unit-6 py-unit-4 bg-surface border border-outline rounded-xl shadow-sm focus:ring-2 focus:ring-primary focus:border-primary transition-all text-body-lg font-body-lg"
                            placeholder="Search our menu (e.g. Wagyu, Sushi, Pizza)..." type="text" />
                    </div>
                </div>
            </section>
            <!-- Promotional Banners Bento Grid -->
            <section class="px-margin-mobile md:px-margin-desktop py-unit-8">
                <div class="grid grid-cols-1 md:grid-cols-12 gap-gutter">
                    <div
                        class="md:col-span-8 relative overflow-hidden rounded-2xl h-64 bg-inverse-surface flex items-center px-unit-8">
                        <div class="z-10 max-w-md">
                            <span
                                class="bg-primary text-on-primary text-label-sm font-label-sm px-unit-2 py-1 rounded-full uppercase tracking-wider">Limited
                                Offer</span>
                            <h2 class="font-headline-lg text-headline-lg text-white mt-unit-2">50% Off Your First 3 Orders
                            </h2>
                            <p class="text-secondary-fixed-dim mt-unit-2 mb-unit-6">Experience the best of BiteRush for half
                                the price.</p>
                            <button
                                class="bg-primary text-on-primary px-unit-8 py-unit-3 rounded-lg font-label-md hover:scale-105 transition-transform">Order
                                Now</button>
                        </div>
                        <div class="absolute right-0 top-0 w-1/2 h-full opacity-40 md:opacity-100">
                            <img alt="Gourmet Platter" class="w-full h-full object-cover"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAm03SRFJkDjVTRLGSccDRqPaeWBwSyOhy2o6jLWp1m2wi_n8DNGjmknPX9PePT3RZ3qSrqkqgnTdxiVgj8AVnDyh3noTUbc02PGYCR8PNelyjbl0eL1-StjZ_WT187pkKlZDdYY2o-Bkgt8fTOTuTemnmHPnJkH9tiN6w5ZjlWPdMiVi5bEnuXJZHpiFW3r6vYvPFqnLXdYcXfuOBIxTjmQG7A0WaUpsG7I8kFGUoGow5GLQhazc2qYlFlLa_tQn-2C6BcDWaJhOsj" />
                        </div>
                    </div>
                    <div
                        class="md:col-span-4 relative overflow-hidden rounded-2xl h-64 bg-primary-container p-unit-8 flex flex-col justify-between">
                        <div>
                            <h2 class="font-headline-md text-headline-md text-on-primary-container">BiteRush Pro</h2>
                            <p class="text-on-primary-container/80 mt-unit-2">Unlimited free delivery on our entire menu for
                                Pro members.</p>
                        </div>
                        <button
                            class="bg-on-primary-container text-primary-container w-full py-unit-3 rounded-lg font-label-md hover:bg-white transition-colors">Join
                            Pro</button>
                    </div>
                </div>
            </section>
            <!-- Trending Categories (Quick Links) -->
            <section
                class="py-unit-8 sticky top-[72px] bg-background/95 backdrop-blur-sm z-40 border-b border-outline-variant/30 shadow-sm">
                <div class="px-margin-mobile md:px-margin-desktop flex justify-between items-end mb-unit-4">
                    <h2 class="font-label-md text-label-md uppercase tracking-widest text-primary">Quick Navigation</h2>
                </div>
                <div class="flex overflow-x-auto gap-unit-6 px-margin-mobile md:px-margin-desktop hide-scrollbar">
                    <!-- Category Card -->
                    <a class="flex-none w-24 group cursor-pointer" href="#burgers">
                        <div
                            class="w-full aspect-square rounded-full overflow-hidden mb-unit-2 border-2 border-transparent group-hover:border-primary transition-all">
                            <img alt="Burgers" class="w-full h-full object-cover group-hover:scale-110 transition-transform"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBVYgNvA5kWNjVetBIrV48UTKc4BjhpiicH7AF26a-YJXI8StxreWYqxx3l2-kgfWzfiJgTD86CcLfcwpQluS55t48me21Y4yoPlPJkYsECh7m1K_bl0i9_v0CLmkWrbtAMTQc9BUlt8COfQ8KeJZpA1J9I-wGzkdHqQQEkoPX_1_cbEKFQp7uON4uZP56CMOJTiVwDLwLJPcLmzkTd2QRpd60f-BZ-znAogwfVOKnqH5v7OL_pSO7me0dHNFlGE10OteGUXwsAdbRb" />
                        </div>
                        <p class="text-center font-label-sm">Burgers</p>
                    </a>
                    <a class="flex-none w-24 group cursor-pointer" href="#pizza">
                        <div
                            class="w-full aspect-square rounded-full overflow-hidden mb-unit-2 border-2 border-transparent group-hover:border-primary transition-all">
                            <img alt="Pizza" class="w-full h-full object-cover group-hover:scale-110 transition-transform"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBYuIOrUQnkuEQaCLUkWS-958mXVjGXgmYWk4tqfiGDwp2G_tnyqdqjjoJDy_hOMmMLNJVLngZ_yf8A7s2WNZSiYoEPOrGMjJJ_QLvewODYHw-EXEmFxQa-oRicgFYwa4ckIFj2OxVsGwYKCiYw0BIg_l7qN9h2CmgCMM3KV5Wx6hPTA1dQkyGKJ66ufhvsd0L5LtwlywCVmK0h1Gp7N2xT9NSwjGzE641_rQ6i3Gc-loFomKKmXogAwteuQz8wRUNN0VqfONTNVqmb" />
                        </div>
                        <p class="text-center font-label-sm">Pizza</p>
                    </a>
                    <a class="flex-none w-24 group cursor-pointer" href="#sushi">
                        <div
                            class="w-full aspect-square rounded-full overflow-hidden mb-unit-2 border-2 border-transparent group-hover:border-primary transition-all">
                            <img alt="Sushi" class="w-full h-full object-cover group-hover:scale-110 transition-transform"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuA8Y3e5uoEVAiGwToAleoJ_xB_OwtVWFT7JRTgK5x8cPQC8nbjs6u4sqmdEqxBnW8yOkXZwZLCXggKfU2MhESJRwh7UMmm0rwR063pqa4YlBJ8NshMSFwdhtTglrweJlAS4M5RUyHlGpcCTgGzH_CBi8asjeW1nMHj99Nw_BVoZPGBIWxfiNvJyxvfYBkxhzyz2N6w1kFrFiHhqQDeZ_qfdi-qoEMGPqlNcXr8fu9F827xulUTPQQNOiuYhx0iGL_a1z8B5gASlc1pz" />
                        </div>
                        <p class="text-center font-label-sm">Sushi</p>
                    </a>
                    <a class="flex-none w-24 group cursor-pointer" href="#bowls">
                        <div
                            class="w-full aspect-square rounded-full overflow-hidden mb-unit-2 border-2 border-transparent group-hover:border-primary transition-all">
                            <img alt="Healthy" class="w-full h-full object-cover group-hover:scale-110 transition-transform"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBR0PtGart_808E565wfCxR_vfjZWSuWTe6g7V8qWvJ5P9x11mi704_ZAQ8PBeFD8z7ep_-L1YsOAMXOn93bh3KHOB6fM_LpfwsteBa_awx_Rd5DFkzJI1gpIRZo7_3Klj0Qt-HWzn4qBKurk5FR7_pHvlkIusCVoMUK9WPjs2AvsZSihL-hie1nlXe_Vc_8P40UVAT5i-SRA1Zod1wCrGNu0f6eanNsh0c5mpbmKvSadinYbNP27jp8d5teULonsbuYrSbsFaL_AFb" />
                        </div>
                        <p class="text-center font-label-sm">Bowls</p>
                    </a>
                    <a class="flex-none w-24 group cursor-pointer" href="#pasta">
                        <div
                            class="w-full aspect-square rounded-full overflow-hidden mb-unit-2 border-2 border-transparent group-hover:border-primary transition-all">
                            <img alt="Pasta" class="w-full h-full object-cover group-hover:scale-110 transition-transform"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuA8-P_SULdxU14bW4A99JUqystPp1GQvfT3jSDV_epFYi6GKbjCZPdnWrlqbtYdU68x8abpClMeSpXjAphuQs4AjdvxruzxbdVhAqV6xMxk4-R3H9PxGDi1QvaK0ZieG4OSajPSyp6gVlD4dVqvEizpZFt8uqZj3s5drYp-W8PWOqXPo4h4i2kcKtPi0La2SY5K-Qk3ZCNZKYDrEQWU-GpjXxR7cwpSOXHLSxNnusgeDgOVpFOgxi1-V336TMqyVqOyCW6aBMUBi5ar" />
                        </div>
                        <p class="text-center font-label-sm">Pasta</p>
                    </a>
                    <a class="flex-none w-24 group cursor-pointer" href="#tacos">
                        <div
                            class="w-full aspect-square rounded-full overflow-hidden mb-unit-2 border-2 border-transparent group-hover:border-primary transition-all">
                            <img alt="Tacos" class="w-full h-full object-cover group-hover:scale-110 transition-transform"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBj-fjT7dpkw9Tp2UNc6ZrKT4neqGPKd3KCH6-ClsnV2y17ky_5KGVuijNbrk97l4Y03zcG0krXruMKU4DywK3VcdtPRJR2GPSB95iAUTKwknUqY0NQpIBjhe8bdpf3YWfpOmJFI4QFNf4r98tpxb9VX22aB31k7cPDu5cwax4-Ov6x_VEkgayqVvkY4KV30vBlSRF4VsUbkVeO4T0TVq-eapqBXQRt6fwsvSr9XwIaFT3oenGghvBWWQe3eYaZBPVnzf_Pg5E6Y0GX" />
                        </div>
                        <p class="text-center font-label-sm">Tacos</p>
                    </a>
                </div>
            </section>
            <!-- Catalog Sections -->
            <div class="space-y-16 mt-12">
                <!-- Burgers Section -->
                <section class="px-margin-mobile md:px-margin-desktop scroll-mt-48" id="burgers">
                    <h2 class="font-headline-lg text-headline-lg mb-gutter border-l-4 border-primary pl-unit-4">Burgers</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter">
                        <div
                            class="group bg-surface rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all border border-outline-variant">
                            <div class="relative h-64">
                                <img alt="Double Wagyu Rush" class="w-full h-full object-cover"
                                    src="https://lh3.googleusercontent.com/aida/AP1WRLvVWzAxT9LRLtGfptKc77-ClDZzmfyjKP2cKuVvOyucP5G87hKCkGy89noHyRxRxyVHof9OOJF2oNB7Tw1ZYIjEN6qVoNHWzHD0gvSeGRGNA9OJvsk9atWtm2vkmW5CRe41wUhERJxwPJKGWiBOtoP2I-1bKVRKS6UeHWrO7zo-UTMxRbHT3VPwu7xIvS51zZJBGItsomJ7drtHuKHWu525mOFkHEiFpc_AWNDkZMr3r9KL-lGOXiO3SGIY" />
                                <div
                                    class="absolute top-unit-3 right-unit-3 bg-white px-unit-2 py-1 rounded-lg flex items-center gap-1 shadow-sm">
                                    <span class="font-label-md text-primary font-bold">$18.99</span>
                                </div>
                                <div class="absolute bottom-unit-3 left-unit-3">
                                    <span
                                        class="bg-primary text-on-primary text-label-sm font-label-sm px-unit-2 py-1 rounded-full shadow-md">Best
                                        Seller</span>
                                </div>
                            </div>
                            <div class="p-unit-4">
                                <div class="flex justify-between items-start mb-unit-1">
                                    <h3 class="font-headline-md text-on-surface">Double Wagyu Rush</h3>
                                    <button class="text-primary hover:bg-primary-fixed p-1 rounded-full transition-colors">
                                        <span class="material-symbols-outlined">add_circle</span>
                                    </button>
                                </div>
                                <p class="text-secondary text-body-md mb-unit-4">Double wagyu beef, caramelized onions,
                                    secret Rush sauce, brioche bun.</p>
                                <div class="flex items-center gap-unit-4 border-t border-outline-variant pt-unit-4">
                                    <div class="flex items-center gap-1 text-secondary">
                                        <span class="material-symbols-outlined text-lg">local_fire_department</span>
                                        <span class="text-label-sm">850 cal</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Extra Burger Item -->
                        <div
                            class="group bg-surface rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all border border-outline-variant">
                            <div class="relative h-64">
                                <img alt="Classic Cheeseburger" class="w-full h-full object-cover"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBVYgNvA5kWNjVetBIrV48UTKc4BjhpiicH7AF26a-YJXI8StxreWYqxx3l2-kgfWzfiJgTD86CcLfcwpQluS55t48me21Y4yoPlPJkYsECh7m1K_bl0i9_v0CLmkWrbtAMTQc9BUlt8COfQ8KeJZpA1J9I-wGzkdHqQQEkoPX_1_cbEKFQp7uON4uZP56CMOJTiVwDLwLJPcLmzkTd2QRpd60f-BZ-znAogwfVOKnqH5v7OL_pSO7me0dHNFlGE10OteGUXwsAdbRb" />
                                <div
                                    class="absolute top-unit-3 right-unit-3 bg-white px-unit-2 py-1 rounded-lg flex items-center gap-1 shadow-sm">
                                    <span class="font-label-md text-primary font-bold">$12.50</span>
                                </div>
                            </div>
                            <div class="p-unit-4">
                                <div class="flex justify-between items-start mb-unit-1">
                                    <h3 class="font-headline-md text-on-surface">Rush Classic</h3>
                                    <button class="text-primary hover:bg-primary-fixed p-1 rounded-full transition-colors">
                                        <span class="material-symbols-outlined">add_circle</span>
                                    </button>
                                </div>
                                <p class="text-secondary text-body-md mb-unit-4">Angus beef patty, cheddar, lettuce, tomato,
                                    and house pickles.</p>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Pizza Section -->
                <section class="scroll-mt-48" id="pizza">
                    <div class="px-margin-mobile md:px-margin-desktop mb-unit-6">
                        <h2 class="font-headline-lg text-headline-lg border-l-4 border-primary pl-unit-4">Pizza</h2>
                    </div>
                    <!-- Pizza Slider -->
                    <div class="relative w-full px-margin-mobile md:px-margin-desktop mb-12">
                        <div class="flex gap-unit-6 overflow-x-auto hide-scrollbar snap-x snap-mandatory">
                            <div
                                class="flex-none w-[85%] md:w-[60%] lg:w-[45%] snap-center rounded-3xl overflow-hidden relative h-80">
                                <img alt="Wood Fired Pizza" class="w-full h-full object-cover"
                                    src="https://lh3.googleusercontent.com/aida/AP1WRLuSRfxekrPkhskuouhj3-PY6t2MCT-v5imcagQUZa3Iq-Wf885NSNzsxZLVFKLDdcadiMmkR-XruZrilduNobMREpKsD6EG_gMb_Y3v0fnSCFcX6XK7rQxcezUXlSjt77B0mqP7g00dX0eFZ8y0kcHnJNhuZ3GGitJGqYUGrDh-2s8JXJGKLVFjpCquPHxe28KRvdLtN5V3UEIKBXEXwTQVchVHMA2Y34jRn7ND8Bry4X-GmtOrcLBq1wgC" />
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex flex-col justify-end p-unit-8">
                                    <span class="text-primary-fixed font-label-sm uppercase mb-2">Artisan Pick</span>
                                    <h3 class="text-white font-headline-lg text-headline-lg">Signature Rush Pizza</h3>
                                    <p class="text-white/80 text-body-md mt-2">Wood-fired perfection with premium pepperoni.
                                    </p>
                                </div>
                            </div>
                            <div
                                class="flex-none w-[85%] md:w-[60%] lg:w-[45%] snap-center rounded-3xl overflow-hidden relative h-80 bg-surface-container">
                                <img alt="Veggie Pizza" class="w-full h-full object-cover"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBYuIOrUQnkuEQaCLUkWS-958mXVjGXgmYWk4tqfiGDwp2G_tnyqdqjjoJDy_hOMmMLNJVLngZ_yf8A7s2WNZSiYoEPOrGMjJJ_QLvewODYHw-EXEmFxQa-oRicgFYwa4ckIFj2OxVsGwYKCiYw0BIg_l7qN9h2CmgCMM3KV5Wx6hPTA1dQkyGKJ66ufhvsd0L5LtwlywCVmK0h1Gp7N2xT9NSwjGzE641_rQ6i3Gc-loFomKKmXogAwteuQz8wRUNN0VqfONTNVqmb" />
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex flex-col justify-end p-unit-8">
                                    <span class="text-primary-fixed font-label-sm uppercase mb-2">Healthy Choice</span>
                                    <h3 class="text-white font-headline-lg text-headline-lg">Garden Rush</h3>
                                    <p class="text-white/80 text-body-md mt-2">Bell peppers, olives, mushrooms, and fresh
                                        spinach.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="px-margin-mobile md:px-margin-desktop grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter">
                        <div
                            class="group bg-surface rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all border border-outline-variant">
                            <div class="relative h-64">
                                <img alt="Signature Rush Pizza" class="w-full h-full object-cover"
                                    src="https://lh3.googleusercontent.com/aida/AP1WRLuSRfxekrPkhskuouhj3-PY6t2MCT-v5imcagQUZa3Iq-Wf885NSNzsxZLVFKLDdcadiMmkR-XruZrilduNobMREpKsD6EG_gMb_Y3v0fnSCFcX6XK7rQxcezUXlSjt77B0mqP7g00dX0eFZ8y0kcHnJNhuZ3GGitJGqYUGrDh-2s8JXJGKLVFjpCquPHxe28KRvdLtN5V3UEIKBXEXwTQVchVHMA2Y34jRn7ND8Bry4X-GmtOrcLBq1wgC" />
                                <div
                                    class="absolute top-unit-3 right-unit-3 bg-white px-unit-2 py-1 rounded-lg flex items-center gap-1 shadow-sm">
                                    <span class="font-label-md text-primary font-bold">$16.50</span>
                                </div>
                            </div>
                            <div class="p-unit-4">
                                <div class="flex justify-between items-start mb-unit-1">
                                    <h3 class="font-headline-md text-on-surface">Signature Rush Pizza</h3>
                                    <button class="text-primary hover:bg-primary-fixed p-1 rounded-full transition-colors">
                                        <span class="material-symbols-outlined">add_circle</span>
                                    </button>
                                </div>
                                <p class="text-secondary text-body-md mb-unit-4">Wood-fired artisan pepperoni, fresh basil,
                                    and bubbling mozzarella.</p>
                            </div>
                        </div>
                        <div
                            class="group bg-surface rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all border border-outline-variant">
                            <div class="relative h-64">
                                <img alt="Margherita Rush" class="w-full h-full object-cover"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAAQ-xZJY02lBFcwzL19MaIaSvgugfGnO8ODDJ9WXuNpH-9i3--zPhIbBOwCpSYnlwAxMCxdXrPDFlXbnA8R-QJ7BpnKInxBYtOs8dnixJM7mqt0fWjYQzXSrIBLzHzG7av0FVBC3bP1UA6I_nvjY6QcMt6O27ppTcgjmxQ9K4dhjZ5dySUpah6cuh9PmY_ceEB2NIbg48wWljh7FrOE_WBMiuwUtqRJV4Jev5OQJRf6MP_7Vwqtu0phc4kjAm4h1kg8TISn4xpcYWg" />
                                <div
                                    class="absolute top-unit-3 right-unit-3 bg-white px-unit-2 py-1 rounded-lg flex items-center gap-1 shadow-sm">
                                    <span class="font-label-md text-primary font-bold">$14.00</span>
                                </div>
                            </div>
                            <div class="p-unit-4">
                                <div class="flex justify-between items-start mb-unit-1">
                                    <h3 class="font-headline-md text-on-surface">Margherita Rush</h3>
                                    <button class="text-primary hover:bg-primary-fixed p-1 rounded-full transition-colors">
                                        <span class="material-symbols-outlined">add_circle</span>
                                    </button>
                                </div>
                                <p class="text-secondary text-body-md mb-unit-4">Simply fresh mozzarella, Roma tomatoes, and
                                    extra virgin olive oil.</p>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Sushi Section -->
                <section class="px-margin-mobile md:px-margin-desktop scroll-mt-48" id="sushi">
                    <h2 class="font-headline-lg text-headline-lg mb-gutter border-l-4 border-primary pl-unit-4">Sushi</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter">
                        <div
                            class="group bg-surface rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all border border-outline-variant">
                            <div class="relative h-64">
                                <img alt="Zen Master Sushi Platter" class="w-full h-full object-cover"
                                    src="https://lh3.googleusercontent.com/aida/AP1WRLto13s9bHrthvTf0569yC1UkoRAjBC0EPqa04xv1czMnNLX2EoPXFwiJRADy_hySOrnwxqH4p71mhGWjLsp7V6JWt0lxTReD6ar9itJ5PbUovBlfTamRdpeVX4kGrIylQnpbXsPWlatVpUtRT9ee_7EyHeK8hl6iYZ55UjFbWckIEejLTylsAyP9NmUSG8DZJZ6dry2k0PyKu_PHzIeYCpq2QlQlJ3EoyPGannujA6RPXDFEguyIXOx3tw" />
                                <div
                                    class="absolute top-unit-3 right-unit-3 bg-white px-unit-2 py-1 rounded-lg flex items-center gap-1 shadow-sm">
                                    <span class="font-label-md text-primary font-bold">$24.00</span>
                                </div>
                            </div>
                            <div class="p-unit-4">
                                <div class="flex justify-between items-start mb-unit-1">
                                    <h3 class="font-headline-md text-on-surface">Zen Master Platter</h3>
                                    <button class="text-primary hover:bg-primary-fixed p-1 rounded-full transition-colors">
                                        <span class="material-symbols-outlined">add_circle</span>
                                    </button>
                                </div>
                                <p class="text-secondary text-body-md mb-unit-4">Premium salmon nigiri, spicy tuna rolls,
                                    and avocado maki.</p>
                            </div>
                        </div>
                        <div
                            class="group bg-surface rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all border border-outline-variant">
                            <div class="relative h-64">
                                <img alt="Dragon Rush Roll" class="w-full h-full object-cover"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuA8Y3e5uoEVAiGwToAleoJ_xB_OwtVWFT7JRTgK5x8cPQC8nbjs6u4sqmdEqxBnW8yOkXZwZLCXggKfU2MhESJRwh7UMmm0rwR063pqa4YlBJ8NshMSFwdhtTglrweJlAS4M5RUyHlGpcCTgGzH_CBi8asjeW1nMHj99Nw_BVoZPGBIWxfiNvJyxvfYBkxhzyz2N6w1kFrFiHhqQDeZ_qfdi-qoEMGPqlNcXr8fu9F827xulUTPQQNOiuYhx0iGL_a1z8B5gASlc1pz" />
                                <div
                                    class="absolute top-unit-3 right-unit-3 bg-white px-unit-2 py-1 rounded-lg flex items-center gap-1 shadow-sm">
                                    <span class="font-label-md text-primary font-bold">$18.50</span>
                                </div>
                            </div>
                            <div class="p-unit-4">
                                <div class="flex justify-between items-start mb-unit-1">
                                    <h3 class="font-headline-md text-on-surface">Dragon Rush Roll</h3>
                                    <button class="text-primary hover:bg-primary-fixed p-1 rounded-full transition-colors">
                                        <span class="material-symbols-outlined">add_circle</span>
                                    </button>
                                </div>
                                <p class="text-secondary text-body-md mb-unit-4">Tempura shrimp, cucumber, topped with
                                    thin-sliced avocado and eel sauce.</p>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Bowls Section -->
                <section class="px-margin-mobile md:px-margin-desktop scroll-mt-48" id="bowls">
                    <h2 class="font-headline-lg text-headline-lg mb-gutter border-l-4 border-primary pl-unit-4">Healthy
                        Bowls</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter">
                        <div
                            class="group bg-surface rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all border border-outline-variant">
                            <div class="relative h-64">
                                <img alt="Harvest Bowl" class="w-full h-full object-cover"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBR0PtGart_808E565wfCxR_vfjZWSuWTe6g7V8qWvJ5P9x11mi704_ZAQ8PBeFD8z7ep_-L1YsOAMXOn93bh3KHOB6fM_LpfwsteBa_awx_Rd5DFkzJI1gpIRZo7_3Klj0Qt-HWzn4qBKurk5FR7_pHvlkIusCVoMUK9WPjs2AvsZSihL-hie1nlXe_Vc_8P40UVAT5i-SRA1Zod1wCrGNu0f6eanNsh0c5mpbmKvSadinYbNP27jp8d5teULonsbuYrSbsFaL_AFb" />
                                <div
                                    class="absolute top-unit-3 right-unit-3 bg-white px-unit-2 py-1 rounded-lg flex items-center gap-1 shadow-sm">
                                    <span class="font-label-md text-primary font-bold">$15.99</span>
                                </div>
                            </div>
                            <div class="p-unit-4">
                                <div class="flex justify-between items-start mb-unit-1">
                                    <h3 class="font-headline-md text-on-surface">Harvest Quinoa Bowl</h3>
                                    <button class="text-primary hover:bg-primary-fixed p-1 rounded-full transition-colors">
                                        <span class="material-symbols-outlined">add_circle</span>
                                    </button>
                                </div>
                                <p class="text-secondary text-body-md mb-unit-4">Tri-color quinoa, roasted sweet potatoes,
                                    avocado, and kale.</p>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Pasta & Tacos Section -->
                <section class="px-margin-mobile md:px-margin-desktop scroll-mt-48" id="pasta">
                    <h2 class="font-headline-lg text-headline-lg mb-gutter border-l-4 border-primary pl-unit-4">Pasta &amp;
                        Tacos</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter">
                        <div
                            class="group bg-surface rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all border border-outline-variant">
                            <div class="relative h-64">
                                <img alt="Truffle Pasta" class="w-full h-full object-cover"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuA8-P_SULdxU14bW4A99JUqystPp1GQvfT3jSDV_epFYi6GKbjCZPdnWrlqbtYdU68x8abpClMeSpXjAphuQs4AjdvxruzxbdVhAqV6xMxk4-R3H9PxGDi1QvaK0ZieG4OSajPSyp6gVlD4dVqvEizpZFt8uqZj3s5drYp-W8PWOqXPo4h4i2kcKtPi0La2SY5K-Qk3ZCNZKYDrEQWU-GpjXxR7cwpSOXHLSxNnusgeDgOVpFOgxi1-V336TMqyVqOyCW6aBMUBi5ar" />
                                <div
                                    class="absolute top-unit-3 right-unit-3 bg-white px-unit-2 py-1 rounded-lg flex items-center gap-1 shadow-sm">
                                    <span class="font-label-md text-primary font-bold">$21.00</span>
                                </div>
                            </div>
                            <div class="p-unit-4">
                                <div class="flex justify-between items-start mb-unit-1">
                                    <h3 class="font-headline-md text-on-surface">Black Truffle Linguine</h3>
                                    <button class="text-primary hover:bg-primary-fixed p-1 rounded-full transition-colors">
                                        <span class="material-symbols-outlined">add_circle</span>
                                    </button>
                                </div>
                                <p class="text-secondary text-body-md mb-unit-4">Creamy truffle sauce, shaved parmesan, and
                                    fresh herbs.</p>
                            </div>
                        </div>
                        <div class="group bg-surface rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all border border-outline-variant scroll-mt-48"
                            id="tacos">
                            <div class="relative h-64">
                                <img alt="Street Tacos" class="w-full h-full object-cover"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBj-fjT7dpkw9Tp2UNc6ZrKT4neqGPKd3KCH6-ClsnV2y17ky_5KGVuijNbrk97l4Y03zcG0krXruMKU4DywK3VcdtPRJR2GPSB95iAUTKwknUqY0NQpIBjhe8bdpf3YWfpOmJFI4QFNf4r98tpxb9VX22aB31k7cPDu5cwax4-Ov6x_VEkgayqVvkY4KV30vBlSRF4VsUbkVeO4T0TVq-eapqBXQRt6fwsvSr9XwIaFT3oenGghvBWWQe3eYaZBPVnzf_Pg5E6Y0GX" />
                                <div
                                    class="absolute top-unit-3 right-unit-3 bg-white px-unit-2 py-1 rounded-lg flex items-center gap-1 shadow-sm">
                                    <span class="font-label-md text-primary font-bold">$12.00</span>
                                </div>
                            </div>
                            <div class="p-unit-4">
                                <div class="flex justify-between items-start mb-unit-1">
                                    <h3 class="font-headline-md text-on-surface">Baja Fish Tacos</h3>
                                    <button class="text-primary hover:bg-primary-fixed p-1 rounded-full transition-colors">
                                        <span class="material-symbols-outlined">add_circle</span>
                                    </button>
                                </div>
                                <p class="text-secondary text-body-md mb-unit-4">Crispy cod, slaw, and chipotle lime crema
                                    (3 pcs).</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
        <!-- Mobile Bottom NavBar -->
        <nav
            class="md:hidden fixed bottom-0 w-full z-50 bg-surface border-t border-outline-variant shadow-[0px_-2px_10px_rgba(0,0,0,0.05)] flex justify-around items-center py-unit-2">
            <a class="flex flex-col items-center justify-center text-primary" href="#">
                <span class="material-symbols-outlined">restaurant_menu</span>
                <span class="font-label-sm text-label-sm">Menu</span>
            </a>
            <a class="flex flex-col items-center justify-center text-secondary" href="#">
                <span class="material-symbols-outlined">history</span>
                <span class="font-label-sm text-label-sm">Recent</span>
            </a>
            <a class="flex flex-col items-center justify-center text-secondary" href="#">
                <span class="material-symbols-outlined">shopping_bag</span>
                <span class="font-label-sm text-label-sm">Cart</span>
            </a>
            <a class="flex flex-col items-center justify-center text-secondary" href="#">
                <span class="material-symbols-outlined">person</span>
                <span class="font-label-sm text-label-sm">Profile</span>
            </a>
        </nav>
        
        <script>
            // Search bar focus effect
            const searchInput = document.querySelector('input[type="text"]');
            searchInput.addEventListener('focus', () => {
                searchInput.parentElement.classList.add('scale-[1.02]');
            });
            searchInput.addEventListener('blur', () => {
                searchInput.parentElement.classList.remove('scale-[1.02]');
            });

            // Simple interaction for food cards
            const cards = document.querySelectorAll('.group');
            cards.forEach(card => {
                card.addEventListener('mouseenter', () => {
                    card.style.transform = 'translateY(-4px)';
                });
                card.addEventListener('mouseleave', () => {
                    card.style.transform = 'translateY(0)';
                });
            });
        </script>
    </body>
@endsection