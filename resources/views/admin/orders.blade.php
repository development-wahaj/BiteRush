@extends('admin.layouts.app')

@section('content')

            <section class="space-y-8">
                <div>
                    <h2 class="font-headline-lg text-headline-lg text-on-surface">Order Management</h2>
                    <p class="text-on-surface-variant font-body-md">Manage your orders, assign riders and order related analytics.</p>
                </div>
                <!-- Status Summary Cards Row -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                    <!-- New Orders -->
                    <div
                        class="bg-white p-6 rounded-xl shadow-sm border border-outline-variant/30 hover:shadow-md transition-all group">
                        <div class="flex justify-between items-start mb-4">
                            <div class="p-2 bg-primary-container/10 rounded-lg">
                                <span class="material-symbols-outlined text-primary">new_releases</span>
                            </div>
                            <div class="w-3 h-3 rounded-full bg-primary pulsing-dot"></div>
                        </div>
                        <p class="font-label-md text-label-md text-secondary uppercase tracking-wider">New Orders</p>
                        <h3 class="font-headline-md text-headline-md text-on-surface mt-1">12</h3>
                        <p class="font-label-sm text-label-sm text-primary mt-2 flex items-center">
                            <span class="material-symbols-outlined text-sm mr-1">trending_up</span> 4 since last hour
                        </p>
                    </div>
                    <!-- In Preparation -->
                    <div
                        class="bg-white p-6 rounded-xl shadow-sm border border-outline-variant/30 hover:shadow-md transition-all">
                        <div class="flex justify-between items-start mb-4">
                            <div class="p-2 bg-tertiary-container/10 rounded-lg">
                                <span class="material-symbols-outlined text-tertiary">skillet</span>
                            </div>
                        </div>
                        <p class="font-label-md text-label-md text-secondary uppercase tracking-wider">In Preparation</p>
                        <h3 class="font-headline-md text-headline-md text-on-surface mt-1">08</h3>
                        <div class="w-full bg-surface-container mt-4 h-1 rounded-full overflow-hidden">
                            <div class="bg-tertiary h-full w-[65%]"></div>
                        </div>
                    </div>
                    <!-- Ready for Pickup -->
                    <div
                        class="bg-white p-6 rounded-xl shadow-sm border border-outline-variant/30 hover:shadow-md transition-all">
                        <div class="flex justify-between items-start mb-4">
                            <div class="p-2 bg-primary-fixed/30 rounded-lg">
                                <span class="material-symbols-outlined text-on-primary-fixed-variant">package_2</span>
                            </div>
                        </div>
                        <p class="font-label-md text-label-md text-secondary uppercase tracking-wider">Ready for Pickup</p>
                        <h3 class="font-headline-md text-headline-md text-on-surface mt-1">05</h3>
                        <p class="font-label-sm text-label-sm text-secondary mt-2">3 pending courier</p>
                    </div>
                    <!-- On Delivery -->
                    <div
                        class="bg-white p-6 rounded-xl shadow-sm border border-outline-variant/30 hover:shadow-md transition-all">
                        <div class="flex justify-between items-start mb-4">
                            <div class="p-2 bg-green-100 rounded-lg">
                                <span class="material-symbols-outlined text-green-700">delivery_dining</span>
                            </div>
                        </div>
                        <p class="font-label-md text-label-md text-secondary uppercase tracking-wider">On Delivery</p>
                        <h3 class="font-headline-md text-headline-md text-on-surface mt-1">19</h3>
                        <p class="font-label-sm text-label-sm text-green-700 mt-2">All riders on track</p>
                    </div>
                </div>
                <!-- Active Orders Main Workspace -->
                <div class="bg-white rounded-2xl shadow-sm border border-outline-variant/20 overflow-hidden">
                    <!-- Filter Tabs & Header -->
                    <div class="px-8 pt-8 pb-4">
                        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-6">
                            <h2 class="font-headline-md text-headline-md text-on-surface">Active Orders</h2>
                            <div class="flex items-center space-x-2 bg-surface-container-low p-1 rounded-lg">
                                <button
                                    class="px-4 py-2 font-label-md text-label-md rounded-md bg-white text-primary shadow-sm active-tab-border">All
                                    Orders</button>
                                <button
                                    class="px-4 py-2 font-label-md text-label-md rounded-md text-secondary hover:text-on-surface transition-colors">Active</button>
                                <button
                                    class="px-4 py-2 font-label-md text-label-md rounded-md text-secondary hover:text-on-surface transition-colors">Scheduled</button>
                                <button
                                    class="px-4 py-2 font-label-md text-label-md rounded-md text-secondary hover:text-on-surface transition-colors">Completed</button>
                            </div>
                        </div>
                    </div>
                    <!-- Data Table -->
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-surface-container-low/50 border-b border-outline-variant/30">
                                    <th class="px-8 py-4 font-label-md text-label-md text-secondary">Order ID</th>
                                    <th class="px-6 py-4 font-label-md text-label-md text-secondary">Customer Name</th>
                                    <th class="px-6 py-4 font-label-md text-label-md text-secondary">Items</th>
                                    <th class="px-6 py-4 font-label-md text-label-md text-secondary text-right">Total Price
                                    </th>
                                    <th class="px-6 py-4 font-label-md text-label-md text-secondary">Order Time</th>
                                    <th class="px-6 py-4 font-label-md text-label-md text-secondary">Status</th>
                                    <th class="px-6 py-4 font-label-md text-label-md text-secondary">Assigned Rider</th>
                                    <th class="px-8 py-4 font-label-md text-label-md text-secondary text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-outline-variant/10">
                                <!-- Row 1 -->
                                <tr class="hover:bg-surface-container-low transition-colors group">
                                    <td class="px-8 py-5 font-label-md text-label-md text-on-surface">#BR-8921</td>
                                    <td class="px-6 py-5">
                                        <div class="flex items-center space-x-3">
                                            <div
                                                class="w-8 h-8 rounded-full bg-primary-fixed text-primary flex items-center justify-center font-bold text-xs">
                                                JD</div>
                                            <span class="font-body-md text-body-md text-on-surface">James Dalton</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-5 font-body-md text-body-md text-secondary">2x Wagyu Burger, 1x
                                        Truffle Fries</td>
                                    <td
                                        class="px-6 py-5 font-body-md text-body-md text-on-surface text-right font-semibold">
                                        $54.20</td>
                                    <td class="px-6 py-5 font-body-md text-body-md text-secondary">12:45 PM</td>
                                    <td class="px-6 py-5">
                                        <span
                                            class="px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-orange-100 text-primary border border-primary/20">Preparing</span>
                                    </td>
                                    <td class="px-6 py-5">
                                        <div class="flex items-center space-x-2 text-secondary font-body-md text-body-md">
                                            <span class="material-symbols-outlined text-base">directions_bike</span>
                                            <span>Alex Rider</span>
                                        </div>
                                    </td>
                                    <td class="px-8 py-5 text-right">
                                        <div class="flex items-center justify-end space-x-3">
                                            <button class="text-secondary hover:text-primary material-symbols-outlined"
                                                title="View Details">visibility</button>
                                            <button
                                                class="bg-primary text-white px-4 py-1.5 rounded-lg font-label-sm text-label-sm hover:bg-primary-container transition-colors shadow-sm active:scale-95">Mark
                                                Ready</button>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Row 2 -->
                                <tr class="hover:bg-surface-container-low transition-colors group">
                                    <td class="px-8 py-5 font-label-md text-label-md text-on-surface">#BR-8922</td>
                                    <td class="px-6 py-5">
                                        <div class="flex items-center space-x-3">
                                            <div
                                                class="w-8 h-8 rounded-full bg-tertiary-fixed text-tertiary flex items-center justify-center font-bold text-xs">
                                                SM</div>
                                            <span class="font-body-md text-body-md text-on-surface">Sarah Miller</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-5 font-body-md text-body-md text-secondary">1x Vegan Bowl, 1x Iced
                                        Matcha</td>
                                    <td
                                        class="px-6 py-5 font-body-md text-body-md text-on-surface text-right font-semibold">
                                        $28.50</td>
                                    <td class="px-6 py-5 font-body-md text-body-md text-secondary">12:52 PM</td>
                                    <td class="px-6 py-5">
                                        <span
                                            class="px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-primary/10 text-primary border border-primary/30">New</span>
                                    </td>
                                    <td class="px-6 py-5">
                                        <button
                                            class="flex items-center space-x-1 text-primary hover:underline font-label-sm text-label-sm">
                                            <span class="material-symbols-outlined text-base">person_add</span>
                                            <span>Assign Rider</span>
                                        </button>
                                    </td>
                                    <td class="px-8 py-5 text-right">
                                        <div class="flex items-center justify-end space-x-3">
                                            <button
                                                class="text-secondary hover:text-primary material-symbols-outlined">visibility</button>
                                            <button
                                                class="bg-primary text-white px-4 py-1.5 rounded-lg font-label-sm text-label-sm hover:bg-primary-container transition-colors shadow-sm active:scale-95">Mark
                                                Ready</button>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Row 3 -->
                                <tr class="hover:bg-surface-container-low transition-colors group">
                                    <td class="px-8 py-5 font-label-md text-label-md text-on-surface">#BR-8923</td>
                                    <td class="px-6 py-5">
                                        <div class="flex items-center space-x-3">
                                            <div
                                                class="w-8 h-8 rounded-full bg-secondary-fixed text-secondary flex items-center justify-center font-bold text-xs">
                                                RK</div>
                                            <span class="font-body-md text-body-md text-on-surface">Robert King</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-5 font-body-md text-body-md text-secondary">3x Pepperoni Pizza
                                        (Large)</td>
                                    <td
                                        class="px-6 py-5 font-body-md text-body-md text-on-surface text-right font-semibold">
                                        $72.00</td>
                                    <td class="px-6 py-5 font-body-md text-body-md text-secondary">1:05 PM</td>
                                    <td class="px-6 py-5">
                                        <span
                                            class="px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-green-100 text-green-700 border border-green-200">Ready</span>
                                    </td>
                                    <td class="px-6 py-5">
                                        <div class="flex items-center space-x-2 text-secondary font-body-md text-body-md">
                                            <span class="material-symbols-outlined text-base">directions_bike</span>
                                            <span>Leo Swift</span>
                                        </div>
                                    </td>
                                    <td class="px-8 py-5 text-right">
                                        <div class="flex items-center justify-end space-x-3">
                                            <button
                                                class="text-secondary hover:text-primary material-symbols-outlined">visibility</button>
                                            <button
                                                class="bg-green-600 text-white px-4 py-1.5 rounded-lg font-label-sm text-label-sm hover:bg-green-700 transition-colors shadow-sm active:scale-95">Dispatch</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- Pagination Footer -->
                    <div class="px-8 py-6 border-t border-outline-variant/30 flex items-center justify-between">
                        <p class="font-label-sm text-label-sm text-secondary">Showing 1 to 10 of 42 active orders</p>
                        <div class="flex items-center space-x-2">
                            <button
                                class="p-2 rounded-lg border border-outline-variant hover:bg-surface-container transition-colors disabled:opacity-30"
                                disabled="">
                                <span class="material-symbols-outlined">chevron_left</span>
                            </button>
                            <button
                                class="px-4 py-2 rounded-lg bg-primary text-white font-label-md text-label-md">1</button>
                            <button
                                class="px-4 py-2 rounded-lg hover:bg-surface-container font-label-md text-label-md">2</button>
                            <button
                                class="px-4 py-2 rounded-lg hover:bg-surface-container font-label-md text-label-md">3</button>
                            <button
                                class="p-2 rounded-lg border border-outline-variant hover:bg-surface-container transition-colors">
                                <span class="material-symbols-outlined">chevron_right</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Fleet Status & Heatmap Peek (Asymmetric Layout element) -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <div
                        class="lg:col-span-2 bg-white rounded-2xl p-8 shadow-sm border border-outline-variant/20 relative overflow-hidden">
                        <div class="flex justify-between items-center mb-6">
                            <h3 class="font-headline-md text-headline-md text-on-surface">Fleet Real-time Map</h3>
                            <button class="text-primary font-label-md text-label-md hover:underline">View Full
                                Fleet</button>
                        </div>
                        <div class="w-full h-64 rounded-xl overflow-hidden relative border border-outline-variant">
                            <img class="w-full h-full object-cover grayscale opacity-80"
                                data-alt="A clean, minimalist digital map interface of a dense metropolitan area. The map uses a soft grey and white color palette with small energetic orange pulsating markers representing active delivery riders. High-contrast labels and a professional, tech-focused aesthetic define the visual style."
                                data-location="Downtown New York"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCBgresrY-2rrFV-APJ2tNKGQ1mVUmo5eMKjl-xPny3NmISiFFdQbwpIv_ueXEr5CB8DBqetI6WIEM0CggHZ2vaqyLoFMT1K4oKtWgq9cex31IdsK_10ppujKJAkjXH_iS4LZ8DRyHOr7yXerie-hGJxxwyNHmCbaYrQ3ii1TMkAXK2vNA-8Fz_o4thn8EiLdQ-e-oNnIueX8q0n5sMLjWvKS5F_3EQNxJoy9gZEkrE2kltwoXyyMcQ-_BgJkCyoRdKjjdU0nLEGVO4" />
                            <div class="absolute inset-0 bg-gradient-to-t from-white/20 to-transparent pointer-events-none">
                            </div>
                            <!-- Mock Map Pins -->
                            <div
                                class="absolute top-1/4 left-1/3 w-4 h-4 bg-primary rounded-full border-2 border-white pulsing-dot">
                            </div>
                            <div
                                class="absolute top-1/2 right-1/4 w-4 h-4 bg-primary rounded-full border-2 border-white pulsing-dot">
                            </div>
                            <div
                                class="absolute bottom-1/3 left-1/2 w-4 h-4 bg-primary rounded-full border-2 border-white pulsing-dot">
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-2xl p-8 shadow-sm border border-outline-variant/20">
                        <h3 class="font-headline-md text-headline-md text-on-surface mb-6">Rider Efficiency</h3>
                        <div class="space-y-6">
                            <div class="space-y-2">
                                <div class="flex justify-between font-label-md text-label-md">
                                    <span class="text-on-surface">Average Prep Time</span>
                                    <span class="text-primary font-bold">14.2 min</span>
                                </div>
                                <div class="w-full h-2 bg-surface-container rounded-full overflow-hidden">
                                    <div class="bg-primary h-full w-[85%]"></div>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <div class="flex justify-between font-label-md text-label-md">
                                    <span class="text-on-surface">Average Delivery</span>
                                    <span class="text-green-600 font-bold">22.5 min</span>
                                </div>
                                <div class="w-full h-2 bg-surface-container rounded-full overflow-hidden">
                                    <div class="bg-green-500 h-full w-[70%]"></div>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <div class="flex justify-between font-label-md text-label-md">
                                    <span class="text-on-surface">Order Success Rate</span>
                                    <span class="text-tertiary font-bold">99.2%</span>
                                </div>
                                <div class="w-full h-2 bg-surface-container rounded-full overflow-hidden">
                                    <div class="bg-tertiary h-full w-[99%]"></div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-8 p-4 bg-primary-container/5 rounded-xl border border-primary/10">
                            <p class="font-label-sm text-label-sm text-secondary">
                                Peak hour starting soon.
                                <span class="text-primary font-bold">Consider increasing preparation staff.</span>
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        @endsection
        <script>
            // Simple notification toast interaction
            document.querySelectorAll('button').forEach(btn => {
                btn.addEventListener('click', function (e) {
                    if (this.innerText === 'Mark Ready' || this.innerText === 'Dispatch') {
                        console.log('Action triggered:', this.innerText);
                        // Add visual feedback
                        this.classList.add('opacity-50', 'pointer-events-none');
                        setTimeout(() => {
                            this.classList.remove('opacity-50', 'pointer-events-none');
                        }, 1000);
                    }
                });
            });
        </script>

