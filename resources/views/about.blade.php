@extends('layouts.app')

@section('body')

    <body class="bg-background text-on-background font-body-md selection:bg-primary-fixed selection:text-on-primary-fixed">
        <main>
            <!-- Hero Section -->
            <section class="relative h-[716px] flex items-center overflow-hidden hero-gradient"
                data-alt="Close-up of a vibrant, steam-rising gourmet pizza with fresh basil leaves being sliced, set against a dark rustic wooden background with warm ambient lighting emphasizing the textures of the crust and melted cheese, creating an inviting and professional food delivery brand image.">
                <div class="max-w-7xl mx-auto px-margin-desktop w-full relative z-10">
                    <div class="max-w-2xl">
                        <h1 class="font-display-lg text-display-lg text-on-primary-container mb-unit-4 leading-tight">
                            Fueling Your Day,<br />One Bite at a Time
                        </h1>
                        <p class="font-body-lg text-body-lg text-surface-container-lowest opacity-90 max-w-lg mb-unit-8">
                            BiteRush is more than just a delivery service. We're a technology-driven logistics engine
                            dedicated to bringing high-quality culinary experiences to your doorstep with unmatched speed
                            and absolute reliability.
                        </p>
                    </div>
                </div>
            </section>
            <!-- Our Story Section -->
            <section class="py-24 bg-surface">
                <div class="max-w-7xl mx-auto px-margin-desktop">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                        <div class="space-y-unit-6">
                            <h2 class="font-headline-lg text-headline-lg text-on-surface">From a Local Kitchen to a Global
                                Network</h2>
                            <div class="w-20 h-1.5 bg-primary rounded-full"></div>
                            <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                                BiteRush began in 2018 as a single, small-scale logistics experiment in the heart of a
                                bustling urban district. Our founder, a former chef, realized that the missing ingredient in
                                food delivery wasn't the food itself, but the precision of the journey from kitchen to
                                table.
                            </p>
                            <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                                What started as a two-person team managing deliveries for a local bistro has evolved into a
                                sophisticated logistics powerhouse. Today, BiteRush leverages real-time AI routing and a
                                passionate fleet of professionals to ensure every meal arrives exactly as the chef
                                intended—fresh, hot, and on time.
                            </p>
                            <div class="grid grid-cols-2 gap-unit-4 pt-unit-4">
                                <div class="p-unit-4 bg-surface-container rounded-xl border border-outline-variant">
                                    <span class="block text-primary font-bold text-3xl">500+</span>
                                    <span class="text-on-surface-variant font-label-md">Restaurant Partners</span>
                                </div>
                                <div class="p-unit-4 bg-surface-container rounded-xl border border-outline-variant">
                                    <span class="block text-primary font-bold text-3xl">2M+</span>
                                    <span class="text-on-surface-variant font-label-md">Successful Deliveries</span>
                                </div>
                            </div>
                        </div>
                        <div class="relative">
                            <div class="absolute -top-4 -left-4 w-24 h-24 bg-primary/10 rounded-full blur-3xl"></div>
                            <img alt="Delivery Professional" class="rounded-2xl shadow-xl object-cover h-[500px] w-full"
                                data-alt="A professional delivery rider wearing a modern, orange and black logistics uniform standing next to a sleek electric scooter in a modern urban street at sunset. The lighting is warm and cinematic, highlighting the professional gear and the energetic, reliable mood of a premium logistics company."
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuA-f974z6G8hOXOXxprYMVyu20Grx3TG0H1mUrEb43ky3ZDKnLiCmXSvd5JzPezoKQ9GNiWP4s4I8gxBnUZlkrrYnpANMvxeI8DbfHHxE0PAXt_3JKq_pcylxm_4BI7vit3uHphNwnaSyvs-b-u34q8d2bNwsRzOqvHpGreJtHL4YT_rxQ6B1OjsFngrN_u-Q7TYhDV-iMIzCjiAJSI9aoiPjKh0AoDG-109As_3Kr1QM0UFuqjTA6sck6y5FAKVBrdeOZh19xRyXvc" />
                            <div
                                class="absolute -bottom-6 -right-6 p-unit-6 bg-white rounded-2xl shadow-lg border border-outline-variant hidden md:block max-w-[200px]">
                                <p class="text-primary font-bold italic">"We don't just deliver food; we deliver
                                    satisfaction."</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Our Core Values -->
            <section class="py-24 bg-surface-container-lowest">
                <div class="max-w-7xl mx-auto px-margin-desktop text-center mb-16">
                    <h2 class="font-headline-lg text-headline-lg text-on-surface mb-unit-2">Driven by Purpose</h2>
                    <p class="text-on-surface-variant font-body-md max-w-2xl mx-auto">Our values aren't just words on a
                        wall; they are the metrics we measure our success by every single day.</p>
                </div>
                <div class="max-w-7xl mx-auto px-margin-desktop grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Speed -->
                    <div
                        class="group bg-surface p-unit-8 rounded-2xl shadow-sm hover:shadow-md transition-all duration-300 border border-outline-variant/30 text-center">
                        <div
                            class="w-16 h-16 bg-primary-fixed rounded-full flex items-center justify-center mx-auto mb-unit-6 group-hover:bg-primary transition-colors">
                            <span
                                class="material-symbols-outlined text-primary group-hover:text-on-primary transition-colors"
                                data-icon="bolt" style="font-size: 32px;">bolt</span>
                        </div>
                        <h3 class="font-headline-md text-headline-md text-on-surface mb-unit-4">Speed</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant">
                            Our proprietary routing algorithms ensure the shortest path between the kitchen and your door,
                            minimizing wait times without compromising safety.
                        </p>
                    </div>
                    <!-- Quality -->
                    <div
                        class="group bg-surface p-unit-8 rounded-2xl shadow-sm hover:shadow-md transition-all duration-300 border border-outline-variant/30 text-center">
                        <div
                            class="w-16 h-16 bg-primary-fixed rounded-full flex items-center justify-center mx-auto mb-unit-6 group-hover:bg-primary transition-colors">
                            <span
                                class="material-symbols-outlined text-primary group-hover:text-on-primary transition-colors"
                                data-icon="cooking" style="font-size: 32px;">cooking</span>
                        </div>
                        <h3 class="font-headline-md text-headline-md text-on-surface mb-unit-4">Quality</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant">
                            We partner exclusively with restaurants that maintain the highest standards, ensuring every meal
                            meets our strict freshness criteria.
                        </p>
                    </div>
                    <!-- Reliability -->
                    <div
                        class="group bg-surface p-unit-8 rounded-2xl shadow-sm hover:shadow-md transition-all duration-300 border border-outline-variant/30 text-center">
                        <div
                            class="w-16 h-16 bg-primary-fixed rounded-full flex items-center justify-center mx-auto mb-unit-6 group-hover:bg-primary transition-colors">
                            <span
                                class="material-symbols-outlined text-primary group-hover:text-on-primary transition-colors"
                                data-icon="verified_user" style="font-size: 32px;">verified_user</span>
                        </div>
                        <h3 class="font-headline-md text-headline-md text-on-surface mb-unit-4">Reliability</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant">
                            Rain or shine, day or night, our fleet is equipped and trained to handle any logistics challenge
                            to deliver on our promise to you.
                        </p>
                    </div>
                </div>
            </section>
            <!-- Community Impact Section -->
            <section class="py-24 bg-inverse-surface text-on-primary-container overflow-hidden relative">
                <div class="absolute top-0 right-0 w-96 h-96 bg-primary/20 rounded-full blur-[100px]"></div>
                <div class="max-w-7xl mx-auto px-margin-desktop relative z-10">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                        <div class="order-2 lg:order-1">
                            <img alt="Sustainable Delivery"
                                class="rounded-2xl shadow-2xl grayscale-[20%] hover:grayscale-0 transition-all duration-500"
                                data-alt="A lush green urban garden terrace with modern architecture in the background, bathed in soft afternoon sunlight. The scene depicts a sustainable city environment with clean air and greenery, reflecting BiteRush's commitment to eco-friendly practices and carbon footprint reduction in a high-fidelity, professional aesthetic."
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDYRsoeXOMixI6k1HApM-tk71Qp47uuIVkn0lbKltrD_SNPgGgVNjfq37CVr6SnrC4lD5tIZwVrhgqcpsnzcL7VaUbz6l0n4VFRs0S89ZX7bgNClObL5CIWVJGaR13xdOohC68E-oIp5ecXQoUkzZO1FSlmkKajjyUYpXAT292blZTd2meHobgfZJL1VmKeh3kkyq7bAMRMxd0XouhTG2VNi-WYukM9jCGsKZSHrDokS1-J9vuHWEpWpZG7sHMBXYvpEZUVr7AUm_jj" />
                        </div>
                        <div class="order-1 lg:order-2 space-y-unit-6">
                            <span class="text-primary-fixed font-label-md tracking-widest uppercase">Our Commitment</span>
                            <h2 class="font-headline-lg text-headline-lg">Impact Beyond the Plate</h2>
                            <p class="font-body-lg text-body-lg opacity-80">
                                We believe that a great meal shouldn't come at the cost of the environment or the local
                                community. BiteRush is dedicated to sustainable growth and social responsibility.
                            </p>
                            <ul class="space-y-unit-4">
                                <li class="flex items-start gap-unit-3">
                                    <span class="material-symbols-outlined text-primary-fixed" data-icon="eco">eco</span>
                                    <div>
                                        <h4 class="font-bold">Zero-Emission Fleet</h4>
                                        <p class="text-sm opacity-70">Over 60% of our inner-city deliveries are now
                                            performed via electric bikes and scooters.</p>
                                    </div>
                                </li>
                                <li class="flex items-start gap-unit-3">
                                    <span class="material-symbols-outlined text-primary-fixed"
                                        data-icon="local_mall">local_mall</span>
                                    <div>
                                        <h4 class="font-bold">Plastic-Free Partnerships</h4>
                                        <p class="text-sm opacity-70">We provide incentives and resources for our restaurant
                                            partners to switch to 100% compostable packaging.</p>
                                    </div>
                                </li>
                                <li class="flex items-start gap-unit-3">
                                    <span class="material-symbols-outlined text-primary-fixed"
                                        data-icon="volunteer_activism">volunteer_activism</span>
                                    <div>
                                        <h4 class="font-bold">Feeding Local Families</h4>
                                        <p class="text-sm opacity-70">Through our 'Rush-Back' program, we donate a portion
                                            of every delivery fee to local food banks.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Call to Action -->
            <section class="py-32 bg-surface overflow-hidden">
                <div class="max-w-5xl mx-auto px-margin-desktop text-center relative">
                    <div class="absolute inset-0 flex items-center justify-center -z-10">
                        <div class="w-64 h-64 bg-primary/5 rounded-full blur-3xl animate-pulse"></div>
                    </div>
                    <h2 class="font-display-lg text-display-lg text-on-surface mb-unit-6">Ready to Experience the Rush?</h2>
                    <p class="font-body-lg text-body-lg text-on-surface-variant mb-unit-8 max-w-2xl mx-auto">
                        Join thousands of satisfied foodies and businesses who rely on BiteRush for their daily logistics
                        needs. High-quality food, lightning-fast delivery.
                    </p>
                    <div class="flex flex-col sm:flex-row justify-center gap-unit-4">
                        <a href="{{ route('index') }}"
                            class="bg-primary text-on-primary px-unit-8 py-unit-4 rounded-full font-headline-md hover:shadow-lg hover:scale-105 transition-all duration-300">
                            Start Ordering
                        </a>
                        <button
                            class="border-2 border-secondary text-secondary px-unit-8 py-unit-4 rounded-full font-headline-md hover:bg-secondary hover:text-white transition-all duration-300">
                            Become a member
                        </button>
                    </div>
                </div>
            </section>
        </main>


        <script>
            // Micro-interactions for hover states
            document.querySelectorAll('button').forEach(button => {
                button.addEventListener('mousedown', () => button.classList.add('scale-95'));
                button.addEventListener('mouseup', () => button.classList.remove('scale-95'));
                button.addEventListener('mouseleave', () => button.classList.remove('scale-95'));
            });

            // Simple scroll reveal effect
            const observerOptions = {
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('opacity-100', 'translate-y-0');
                        entry.target.classList.remove('opacity-0', 'translate-y-10');
                    }
                });
            }, observerOptions);

            document.querySelectorAll('section').forEach(section => {
                section.classList.add('transition-all', 'duration-700', 'opacity-0', 'translate-y-10');
                observer.observe(section);
            });
        </script>
    </body>

@endsection