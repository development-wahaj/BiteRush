@extends('admin.layouts.app')
@section('content')
                <div class="space-y-gutter">
                    <div>
                    <h2 class="font-headline-lg text-headline-lg text-on-surface">Dashboard</h2>
                    <p class="text-on-surface-variant font-body-md">View Stats and analysis of your business.</p>
                </div>
                    <!-- Metrics Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-gutter">
                        <!-- Revenue -->
                        <div
                            class="bg-surface p-unit-6 rounded-xl metric-card-shadow border border-outline-variant group hover:-translate-y-1 transition-transform duration-300">
                            <div class="flex justify-between items-start mb-unit-4">
                                <div class="p-2 bg-primary/10 rounded-lg text-primary">
                                    <span class="material-symbols-outlined">payments</span>
                                </div>
                                <span class="text-green-600 font-label-sm text-label-sm flex items-center">+12.5%</span>
                            </div>
                            <p class="text-secondary font-label-sm text-label-sm">Today's Revenue</p>
                            <h3 class="text-on-surface font-headline-md text-headline-md">$14,285.00</h3>
                        </div>
                        <!-- Orders -->
                        <div
                            class="bg-surface p-unit-6 rounded-xl metric-card-shadow border border-outline-variant group hover:-translate-y-1 transition-transform duration-300">
                            <div class="flex justify-between items-start mb-unit-4">
                                <div class="p-2 bg-tertiary-container/10 text-tertiary-container rounded-lg">
                                    <span class="material-symbols-outlined">shopping_cart</span>
                                </div>
                                <span class="text-green-600 font-label-sm text-label-sm flex items-center">+8.2%</span>
                            </div>
                            <p class="text-secondary font-label-sm text-label-sm">Total Orders</p>
                            <h3 class="text-on-surface font-headline-md text-headline-md">842</h3>
                        </div>
                        <!-- Riders -->
                        <div
                            class="bg-surface p-unit-6 rounded-xl metric-card-shadow border border-outline-variant group hover:-translate-y-1 transition-transform duration-300">
                            <div class="flex justify-between items-start mb-unit-4">
                                <div
                                    class="p-2 bg-on-secondary-fixed-variant/10 text-on-secondary-fixed-variant rounded-lg">
                                    <span class="material-symbols-outlined">delivery_dining</span>
                                </div>
                                <span
                                    class="text-on-secondary-fixed-variant font-label-sm text-label-sm flex items-center">12
                                    Idle</span>
                            </div>
                            <p class="text-secondary font-label-sm text-label-sm">Active Riders</p>
                            <h3 class="text-on-surface font-headline-md text-headline-md">156</h3>
                        </div>
                        <!-- Delivery Time -->
                        <div
                            class="bg-surface p-unit-6 rounded-xl metric-card-shadow border border-outline-variant group hover:-translate-y-1 transition-transform duration-300">
                            <div class="flex justify-between items-start mb-unit-4">
                                <div class="p-2 bg-orange-100 text-orange-600 rounded-lg">
                                    <span class="material-symbols-outlined">schedule</span>
                                </div>
                                <span class="text-red-600 font-label-sm text-label-sm flex items-center">-2.4%</span>
                            </div>
                            <p class="text-secondary font-label-sm text-label-sm">Avg. Delivery Time</p>
                            <h3 class="text-on-surface font-headline-md text-headline-md">24.5 min</h3>
                        </div>
                    </div>
                    <!-- Main Content Row -->
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-gutter">
                        <!-- Sales Chart Area -->
                        <div
                            class="lg:col-span-2 bg-surface rounded-xl metric-card-shadow border border-outline-variant p-unit-6">
                            <div class="flex justify-between items-center mb-unit-8">
                                <div>
                                    <h4 class="font-headline-md text-headline-md text-on-surface">Performance Over the Week
                                    </h4>
                                    <p class="text-secondary text-sm">Revenue vs Forecasted Sales</p>
                                </div>
                                <select
                                    class="bg-surface-container-high border-none rounded-lg text-sm px-4 py-2 focus:ring-primary">
                                    <option>Last 7 Days</option>
                                    <option>Last 30 Days</option>
                                </select>
                            </div>
                            <div class="h-[300px] w-full flex items-end gap-2 px-2">
                                <!-- Simple Visual Mockup of Chart Bars/Lines -->
                                <div
                                    class="flex-1 bg-primary/10 rounded-t-lg h-[40%] hover:bg-primary/30 transition-all relative group">
                                    <div
                                        class="absolute -top-10 left-1/2 -translate-x-1/2 bg-inverse-surface text-white text-[10px] px-2 py-1 rounded hidden group-hover:block">
                                        $4.2k</div>
                                </div>
                                <div
                                    class="flex-1 bg-primary/20 rounded-t-lg h-[65%] hover:bg-primary/40 transition-all relative group">
                                    <div
                                        class="absolute -top-10 left-1/2 -translate-x-1/2 bg-inverse-surface text-white text-[10px] px-2 py-1 rounded hidden group-hover:block">
                                        $6.8k</div>
                                </div>
                                <div
                                    class="flex-1 bg-primary/15 rounded-t-lg h-[50%] hover:bg-primary/35 transition-all relative group">
                                    <div
                                        class="absolute -top-10 left-1/2 -translate-x-1/2 bg-inverse-surface text-white text-[10px] px-2 py-1 rounded hidden group-hover:block">
                                        $5.1k</div>
                                </div>
                                <div
                                    class="flex-1 bg-primary/25 rounded-t-lg h-[85%] hover:bg-primary/45 transition-all relative group">
                                    <div
                                        class="absolute -top-10 left-1/2 -translate-x-1/2 bg-inverse-surface text-white text-[10px] px-2 py-1 rounded hidden group-hover:block">
                                        $9.4k</div>
                                </div>
                                <div
                                    class="flex-1 bg-primary rounded-t-lg h-[95%] hover:bg-primary/90 transition-all relative group">
                                    <div
                                        class="absolute -top-10 left-1/2 -translate-x-1/2 bg-inverse-surface text-white text-[10px] px-2 py-1 rounded hidden group-hover:block">
                                        $10.2k</div>
                                </div>
                                <div
                                    class="flex-1 bg-primary/20 rounded-t-lg h-[60%] hover:bg-primary/40 transition-all relative group">
                                    <div
                                        class="absolute -top-10 left-1/2 -translate-x-1/2 bg-inverse-surface text-white text-[10px] px-2 py-1 rounded hidden group-hover:block">
                                        $6.2k</div>
                                </div>
                                <div
                                    class="flex-1 bg-primary/15 rounded-t-lg h-[55%] hover:bg-primary/35 transition-all relative group">
                                    <div
                                        class="absolute -top-10 left-1/2 -translate-x-1/2 bg-inverse-surface text-white text-[10px] px-2 py-1 rounded hidden group-hover:block">
                                        $5.8k</div>
                                </div>
                            </div>
                            <div class="flex justify-between mt-unit-4 text-secondary font-label-sm text-label-sm px-2">
                                <span>Mon</span><span>Tue</span><span>Wed</span><span>Thu</span><span>Fri</span><span>Sat</span><span>Sun</span>
                            </div>
                        </div>
                        <!-- Top Selling Items -->
                        <div class="bg-surface rounded-xl metric-card-shadow border border-outline-variant p-unit-6">
                            <h4 class="font-headline-md text-headline-md text-on-surface mb-unit-4">Top Selling Items</h4>
                            <div class="space-y-unit-4">
                                <!-- Item 1 -->
                                <div
                                    class="flex items-center gap-unit-4 p-2 hover:bg-surface-container-low rounded-lg transition-colors">
                                    <img class="w-12 h-12 rounded-lg object-cover"
                                        data-alt="A professional high-fidelity close-up of a gourmet double cheeseburger with melting cheddar cheese, crisp lettuce, and heirloom tomatoes on a toasted brioche bun. The lighting is warm and cinematic, emphasizing textures and freshness in a modern food photography style. The background is a soft-focus urban bistro environment with a vibrant energetic orange palette reflecting the BiteRush brand."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuD8IyvMd6yORa0Tokd6C0bDJKPxLhugw2Gru8KzL_0v1M6TKEPhX58iI_GXaq6Zp2vjbmyhsF2eIu0nEe5Odj19AWSucscuzQzMeVR-UybtbGiPgYUfF-XAQ2JiWR7M9zD-k3LWC4p6Dx-r1pm8NVFbvGm6hCNVne4oTYmqYVTenxzpUnSZmUB9ilA4krIRCgJDHjQ97iJTbwICpUThKdJsTTRlEnbY2KynqvlREYUi2gpxx44dYaeI42gipl5izHXlw-ncDltMl755" />
                                    <div class="flex-1">
                                        <p class="font-label-md text-label-md text-on-surface">Signature Wagyu Burger</p>
                                        <p class="text-secondary text-[12px]">2.4k orders this week</p>
                                    </div>
                                    <div class="text-right">
                                        <p class="font-bold text-primary">$18.99</p>
                                        <div
                                            class="w-16 bg-surface-container-highest h-1 rounded-full overflow-hidden mt-1">
                                            <div class="bg-primary h-full w-[85%]"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Item 2 -->
                                <div
                                    class="flex items-center gap-unit-4 p-2 hover:bg-surface-container-low rounded-lg transition-colors">
                                    <img class="w-12 h-12 rounded-lg object-cover"
                                        data-alt="An artisanal wood-fired Neapolitan pizza with fresh buffalo mozzarella, vibrant basil leaves, and a rich San Marzano tomato base. The crust is perfectly charred and airy, captured with high-contrast sharp detailing. The scene is bright and professional, following a modern corporate food aesthetic with clean lines and soft ambient light that complements the BiteRush delivery platform identity."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCJjqS5rhQkoJ1fpqNN0bo9VHOaZHOZvw62qNmHmfXbu5wkHcbJtViBEMXfUK2fs615GTLJDOxYf5VFKF8-SczMmfLmCPCcQIIduFq-I6fhjoVQ1p5TvmA0b9ndteA5sdo_A5t7_ao8q75Et8XqhZyRd47257axz7f094Lq7c1dS2Pc2UFUagcZU5EvDnNNiX5MMi2v3PYqHFdmYeEyOhJ2J_WMT3B1921h-hi0-Fn9g-hWk5hEGu-CLRwCuuz8svnqcgsoAkahRfmn" />
                                    <div class="flex-1">
                                        <p class="font-label-md text-label-md text-on-surface">Margherita Classica</p>
                                        <p class="text-secondary text-[12px]">1.8k orders this week</p>
                                    </div>
                                    <div class="text-right">
                                        <p class="font-bold text-primary">$14.50</p>
                                        <div
                                            class="w-16 bg-surface-container-highest h-1 rounded-full overflow-hidden mt-1">
                                            <div class="bg-primary h-full w-[72%]"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Item 3 -->
                                <div
                                    class="flex items-center gap-unit-4 p-2 hover:bg-surface-container-low rounded-lg transition-colors">
                                    <img class="w-12 h-12 rounded-lg object-cover"
                                        data-alt="A vibrant, healthy poke bowl featuring fresh cubed salmon, edamame, avocado slices, and shredded carrots over a bed of jasmine rice. The photography is crisp and colorful, set against a neutral high-key background that exudes freshness and precision. Subtle shadows and high-fidelity lighting highlight the organic textures, aligning with the BiteRush clean and modern design pillars."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuA1JUsWgSRS4okt3XRnAWeaWx3mAsXx8hhvmKBpBlswreSsAGxpHc-4M1SM0WLLFOj0pf5gNM6AaX22-u5jtyGt7Tj7WqGI3FZbcfPJKELpCXB7k3oWojbSQvM6pMbK7WX9UNHAAay4gZhAlUsUgXWbmjDvM2uaqme30PJkkfWyG1g2_aGpaOR_zYL8xPxoXOcg6-a8YhW9UHhO7CfK_2Tg2Sealrr_LnEhq7WGnl25MjYKUNrslqc1YIRP28joWpoJkaUg-xUmL7yc" />
                                    <div class="flex-1">
                                        <p class="font-label-md text-label-md text-on-surface">Salmon Zen Bowl</p>
                                        <p class="text-secondary text-[12px]">1.5k orders this week</p>
                                    </div>
                                    <div class="text-right">
                                        <p class="font-bold text-primary">$16.20</p>
                                        <div
                                            class="w-16 bg-surface-container-highest h-1 rounded-full overflow-hidden mt-1">
                                            <div class="bg-primary h-full w-[65%]"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Item 4 -->
                                <div
                                    class="flex items-center gap-unit-4 p-2 hover:bg-surface-container-low rounded-lg transition-colors">
                                    <img class="w-12 h-12 rounded-lg object-cover"
                                        data-alt="A decadent slice of New York style cheesecake with a vibrant strawberry glaze and fresh mint leaf garnish. The visual style is premium and high-contrast, focusing on the creamy texture and rich color palette. Lighting is bright and inviting, showcasing the dessert in a clean, professional studio setting that reinforces the BiteRush commitment to quality and modern aesthetics."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDYyV41SEFJQZJFR5TKbr05rNoXSkIfwjPxauj56q4RZ1cBIkvNq0WYx_U_A8eXukvqo--8jS3fISUNUHHvnGIrSb21-nphx0cgYRNJnVbkH8s1-0gxuTbqA3Ftf5IYIceJP2DdXG8nuTkVRCLthasKsmXSjSfIsuApgQwRwmbVAf6oR_y4sPQRSlDKlLwk9jjfsxIbFJoBdzPvWZPlS_yS2E38A-Leu4Tviyd6LSWZa0sfNI4Wg2heNj7PBo5s4_cW4-nMwsXb_sI3" />
                                    <div class="flex-1">
                                        <p class="font-label-md text-label-md text-on-surface">Red Velvet Shake</p>
                                        <p class="text-secondary text-[12px]">980 orders this week</p>
                                    </div>
                                    <div class="text-right">
                                        <p class="font-bold text-primary">$8.50</p>
                                        <div
                                            class="w-16 bg-surface-container-highest h-1 rounded-full overflow-hidden mt-1">
                                            <div class="bg-primary h-full w-[40%]"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="w-full mt-unit-6 text-primary font-label-md text-label-md hover:underline">View
                                All Analytics</button>
                        </div>
                    </div>
                    <!-- Recent Activity Feed (Bento Style) -->
                    <div class="bg-surface rounded-xl metric-card-shadow border border-outline-variant p-unit-6">
                        <div class="flex justify-between items-center mb-unit-6">
                            <h4 class="font-headline-md text-headline-md text-on-surface">Recent Order Activity</h4>
                            <div class="flex gap-2">
                                <span
                                    class="px-3 py-1 bg-green-100 text-green-700 text-[11px] font-bold rounded-full">DELIVERED</span>
                                <span class="px-3 py-1 bg-orange-100 text-orange-700 text-[11px] font-bold rounded-full">IN
                                    PROGRESS</span>
                            </div>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full text-left">
                                <thead class="data-table-header">
                                    <tr class="text-secondary font-label-sm text-label-sm border-b border-outline-variant">
                                        <th class="py-4 px-2">Order ID</th>
                                        <th class="py-4 px-2">Customer</th>
                                        <th class="py-4 px-2">Items</th>
                                        <th class="py-4 px-2">Total</th>
                                        <th class="py-4 px-2">Rider</th>
                                        <th class="py-4 px-2 text-right">Status</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-outline-variant font-body-md text-body-md">
                                    <tr class="hover:bg-surface-container-low transition-colors">
                                        <td class="py-4 px-2 font-mono text-sm">#BR-89241</td>
                                        <td class="py-4 px-2">Sarah Jenkins</td>
                                        <td class="py-4 px-2">2x Wagyu Burger, 1x Fries</td>
                                        <td class="py-4 px-2 font-semibold">$42.10</td>
                                        <td class="py-4 px-2 flex items-center gap-2">
                                            <div class="w-6 h-6 rounded-full bg-surface-dim"></div>
                                            <span>Mike R.</span>
                                        </td>
                                        <td class="py-4 px-2 text-right">
                                            <span
                                                class="px-2 py-1 bg-green-100 text-green-700 text-[10px] font-bold rounded">Delivered</span>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-surface-container-low transition-colors">
                                        <td class="py-4 px-2 font-mono text-sm">#BR-89242</td>
                                        <td class="py-4 px-2">Kevin Wu</td>
                                        <td class="py-4 px-2">1x Pizza Margherita</td>
                                        <td class="py-4 px-2 font-semibold">$15.50</td>
                                        <td class="py-4 px-2 flex items-center gap-2">
                                            <div class="w-6 h-6 rounded-full bg-surface-dim"></div>
                                            <span>Elena D.</span>
                                        </td>
                                        <td class="py-4 px-2 text-right">
                                            <span
                                                class="px-2 py-1 bg-orange-100 text-orange-700 text-[10px] font-bold rounded">In
                                                Progress</span>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-surface-container-low transition-colors">
                                        <td class="py-4 px-2 font-mono text-sm">#BR-89243</td>
                                        <td class="py-4 px-2">Maria Garcia</td>
                                        <td class="py-4 px-2">3x Salmon Zen Bowl</td>
                                        <td class="py-4 px-2 font-semibold">$54.30</td>
                                        <td class="py-4 px-2 flex items-center gap-2">
                                            <div class="w-6 h-6 rounded-full bg-surface-dim"></div>
                                            <span>Tom S.</span>
                                        </td>
                                        <td class="py-4 px-2 text-right">
                                            <span
                                                class="px-2 py-1 bg-green-100 text-green-700 text-[10px] font-bold rounded">Delivered</span>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-surface-container-low transition-colors">
                                        <td class="py-4 px-2 font-mono text-sm">#BR-89244</td>
                                        <td class="py-4 px-2">Chris P. Bacon</td>
                                        <td class="py-4 px-2">4x Chicken Wings</td>
                                        <td class="py-4 px-2 font-semibold">$32.00</td>
                                        <td class="py-4 px-2 flex items-center gap-2">
                                            <div class="w-6 h-6 rounded-full bg-surface-dim"></div>
                                            <span>Alex J.</span>
                                        </td>
                                        <td class="py-4 px-2 text-right">
                                            <span
                                                class="px-2 py-1 bg-gray-100 text-gray-700 text-[10px] font-bold rounded">Pending</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
        @endsection
        <!-- Micro-interactions Script -->
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                // Simple animation for metric cards on entry
                const cards = document.querySelectorAll('.metric-card-shadow');
                cards.forEach((card, index) => {
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(10px)';
                    setTimeout(() => {
                        card.style.transition = 'all 0.5s ease-out';
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }, 100 * index);
                });

                // Active state switching for sidebar (Demo only)
                const navLinks = document.querySelectorAll('aside a');
                navLinks.forEach(link => {
                    link.addEventListener('click', (e) => {
                        if (link.getAttribute('href') === '#') e.preventDefault();
                        navLinks.forEach(l => {
                            l.classList.remove('bg-primary', 'text-on-primary');
                            l.classList.add('text-secondary-fixed-dim');
                        });
                        link.classList.add('bg-primary', 'text-on-primary');
                        link.classList.remove('text-secondary-fixed-dim');
                    });
                });
            });
        </script>
