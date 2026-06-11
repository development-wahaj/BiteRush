@extends('admin.layouts.app')

@section('content')

    <!-- Tracking Workspace -->
    <div class="flex-1 flex overflow-hidden">
        <!-- Left Side: Unassigned Orders -->
        <section
            class="w-1/3 min-w-[400px] bg-surface-container-lowest border-r border-outline-variant flex flex-col overflow-hidden">
            <div class="p-unit-6 border-b border-outline-variant shrink-0">
                <div class="flex justify-between items-center mb-unit-4">
                    <h2 class="font-headline-md text-headline-md text-on-surface">Unassigned Orders</h2>
                    <span class="bg-primary text-on-primary px-3 py-1 rounded-full text-label-md font-label-md">12
                        Critical</span>
                </div>
                <div class="flex gap-unit-2">
                    <button
                        class="flex-1 py-1.5 border border-primary text-primary rounded-lg font-label-md text-label-md bg-primary-container/10">Priority</button>
                    <button
                        class="flex-1 py-1.5 border border-outline text-on-surface-variant rounded-lg font-label-md text-label-md">Distance</button>
                    <button
                        class="flex-1 py-1.5 border border-outline text-on-surface-variant rounded-lg font-label-md text-label-md">Oldest</button>
                </div>
            </div>
            <div class="flex-1 overflow-y-auto p-unit-4 space-y-unit-4 bg-surface-container-low/30 scrollbar-hide">
                <!-- Order Card 1 -->
                <div class="order-card p-unit-4 bg-surface rounded-xl shadow-sm border border-outline-variant cursor-pointer hover:shadow-md transition-all active:scale-[0.98]"
                    onclick="toggleOrder(this, 'rider-1')">
                    <div class="flex justify-between items-start mb-unit-2">
                        <div>
                            <span class="font-label-md text-label-md text-primary">#ORD-9402</span>
                            <p class="font-headline-md text-[18px] text-on-surface">The Burger Loft</p>
                        </div>
                        <span
                            class="px-2 py-1 bg-error-container text-error rounded-lg text-[11px] font-bold uppercase tracking-tight">8m
                            Delay</span>
                    </div>
                    <div class="flex items-center gap-unit-2 text-on-surface-variant mb-unit-4">
                        <span class="material-symbols-outlined text-[18px]">location_on</span>
                        <span class="text-body-md text-[14px]">4.2 km away • 234 Maple St.</span>
                    </div>
                    <div class="flex justify-between items-center pt-unit-2 border-t border-outline-variant">
                        <span class="text-label-sm text-on-surface-variant">Estimated Payout: $12.50</span>
                        <button class="text-primary font-label-md text-label-md flex items-center gap-1">Assign Rider <span
                                class="material-symbols-outlined text-[16px]">chevron_right</span></button>
                    </div>
                </div>
                <!-- Order Card 2 -->
                <div class="order-card p-unit-4 bg-surface rounded-xl shadow-sm border border-outline-variant cursor-pointer hover:shadow-md transition-all active:scale-[0.98]"
                    onclick="toggleOrder(this, 'rider-2')">
                    <div class="flex justify-between items-start mb-unit-2">
                        <div>
                            <span class="font-label-md text-label-md text-primary">#ORD-9405</span>
                            <p class="font-headline-md text-[18px] text-on-surface">Sushi Zen Master</p>
                        </div>
                        <span
                            class="px-2 py-1 bg-surface-container-high text-on-surface-variant rounded-lg text-[11px] font-bold uppercase tracking-tight">On
                            Time</span>
                    </div>
                    <div class="flex items-center gap-unit-2 text-on-surface-variant mb-unit-4">
                        <span class="material-symbols-outlined text-[18px]">location_on</span>
                        <span class="text-body-md text-[14px]">1.8 km away • 89 Harbor Rd.</span>
                    </div>
                    <div class="flex justify-between items-center pt-unit-2 border-t border-outline-variant">
                        <span class="text-label-sm text-on-surface-variant">Estimated Payout: $8.20</span>
                        <button class="text-primary font-label-md text-label-md flex items-center gap-1">Assign Rider <span
                                class="material-symbols-outlined text-[16px]">chevron_right</span></button>
                    </div>
                </div>
                <!-- Order Card 3 -->
                <div class="order-card p-unit-4 bg-surface rounded-xl shadow-sm border border-outline-variant cursor-pointer hover:shadow-md transition-all active:scale-[0.98]"
                    onclick="toggleOrder(this, 'rider-3')">
                    <div class="flex justify-between items-start mb-unit-2">
                        <div>
                            <span class="font-label-md text-label-md text-primary">#ORD-9411</span>
                            <p class="font-headline-md text-[18px] text-on-surface">Pasta &amp; Vino</p>
                        </div>
                        <span
                            class="px-2 py-1 bg-error-container text-error rounded-lg text-[11px] font-bold uppercase tracking-tight">22m
                            Delay</span>
                    </div>
                    <div class="flex items-center gap-unit-2 text-on-surface-variant mb-unit-4">
                        <span class="material-symbols-outlined text-[18px]">location_on</span>
                        <span class="text-body-md text-[14px]">0.5 km away • 12 Oak Ave.</span>
                    </div>
                    <div class="flex justify-between items-center pt-unit-2 border-t border-outline-variant">
                        <span class="text-label-sm text-on-surface-variant">Estimated Payout: $15.00</span>
                        <button class="text-primary font-label-md text-label-md flex items-center gap-1">Assign Rider <span
                                class="material-symbols-outlined text-[16px]">chevron_right</span></button>
                    </div>
                </div>
                <!-- Order Card 4 -->
                <div class="order-card p-unit-4 bg-surface rounded-xl shadow-sm border border-outline-variant cursor-pointer hover:shadow-md transition-all active:scale-[0.98]"
                    onclick="toggleOrder(this, 'rider-1')">
                    <div class="flex justify-between items-start mb-unit-2">
                        <div>
                            <span class="font-label-md text-label-md text-primary">#ORD-9420</span>
                            <p class="font-headline-md text-[18px] text-on-surface">Taco Heaven</p>
                        </div>
                        <span
                            class="px-2 py-1 bg-surface-container-high text-on-surface-variant rounded-lg text-[11px] font-bold uppercase tracking-tight">New</span>
                    </div>
                    <div class="flex items-center gap-unit-2 text-on-surface-variant mb-unit-4">
                        <span class="material-symbols-outlined text-[18px]">location_on</span>
                        <span class="text-body-md text-[14px]">3.1 km away • 505 Vista St.</span>
                    </div>
                    <div class="flex justify-between items-center pt-unit-2 border-t border-outline-variant">
                        <span class="text-label-sm text-on-surface-variant">Estimated Payout: $10.40</span>
                        <button class="text-primary font-label-md text-label-md flex items-center gap-1">Assign Rider <span
                                class="material-symbols-outlined text-[16px]">chevron_right</span></button>
                    </div>
                </div>
            </div>
        </section>
        <!-- Right Side: Live Map -->
        <section class="flex-1 relative bg-surface-variant">
            <!-- Map Placeholder -->
            <div class="absolute inset-0 w-full h-full grayscale-[0.3] opacity-90 contrast-125 overflow-hidden">
                <img class="w-full h-full object-cover"
                    data-alt="A clean, highly detailed top-down satellite view of a city street map layout. Professional logistics interface style, high contrast, minimalist urban grid with soft lighting and neutral colors."
                    data-location="New York City"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDkk52j2gzhO1w5i70E-HO8aHvV0Q6zsdHxKGSnyFGzv4m9nPRv6F9IjEoMd5qBLsjaBgyvzJlhKM877QtkQ-cu2DN71t6vgcf6KZX4POGEg206rxLbG0nhS1iObirOeso72EXsXrGNKghwZbP6a4vTQRixWbVxbk1BLJbqhr1yD2eZEmY75ihSrcK6dQBI_3uPrnVR1rYGtpUY99dFwPxZvoIkOTbDaqvZ4FJH72nryfardRsZhlK4g7su2UIr_RNvEV4nck1qWVmx" />
            </div>
            <!-- Map Overlay UI -->
            <div class="absolute top-unit-6 right-unit-6 flex flex-col gap-unit-2 z-10">
                <div
                    class="bg-surface p-unit-4 rounded-xl shadow-lg border border-outline-variant flex flex-col gap-unit-4 w-64">
                    <h3 class="font-label-md text-label-md text-on-surface border-b border-outline-variant pb-2">Fleet
                        Status Summary</h3>
                    <div class="space-y-unit-2">
                        <div class="flex justify-between items-center">
                            <div class="flex items-center gap-2">
                                <span class="w-3 h-3 rounded-full bg-green-500"></span>
                                <span class="text-label-sm text-on-surface-variant">Idle Riders</span>
                            </div>
                            <span class="font-bold text-on-surface">14</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <div class="flex items-center gap-2">
                                <span class="w-3 h-3 rounded-full bg-orange-500"></span>
                                <span class="text-label-sm text-on-surface-variant">On Delivery</span>
                            </div>
                            <span class="font-bold text-on-surface">42</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <div class="flex items-center gap-2">
                                <span class="w-3 h-3 rounded-full bg-gray-400"></span>
                                <span class="text-label-sm text-on-surface-variant">Offline</span>
                            </div>
                            <span class="font-bold text-on-surface">8</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Rider Markers (Simulated) -->
            <!-- Idle Rider 1 -->
            <div class="rider-pin absolute top-[20%] left-[30%] -translate-x-1/2 -translate-y-1/2 cursor-pointer group"
                id="rider-1" onclick="showRiderStats('rider-1')">
                <div class="relative flex items-center justify-center">
                    <div class="rider-pulse absolute w-10 h-10 bg-green-500 rounded-full opacity-50"></div>
                    <div
                        class="w-6 h-6 bg-green-500 rounded-full border-2 border-white shadow-lg flex items-center justify-center z-10 group-hover:scale-125 transition-transform">
                        <span class="material-symbols-outlined text-[14px] text-white"
                            style="font-variation-settings: 'FILL' 1;">electric_moped</span>
                    </div>
                    <div
                        class="absolute -bottom-10 opacity-0 group-hover:opacity-100 transition-opacity bg-inverse-surface text-on-primary px-2 py-1 rounded text-[10px] whitespace-nowrap z-20">
                        Marcus R. (Idle)
                    </div>
                </div>
            </div>
            <!-- On Delivery Rider 2 -->
            <div class="rider-pin absolute top-[60%] left-[45%] -translate-x-1/2 -translate-y-1/2 cursor-pointer group"
                id="rider-2" onclick="showRiderStats('rider-2')">
                <div class="relative flex items-center justify-center">
                    <div
                        class="w-6 h-6 bg-orange-500 rounded-full border-2 border-white shadow-lg flex items-center justify-center z-10 group-hover:scale-125 transition-transform">
                        <span class="material-symbols-outlined text-[14px] text-white"
                            style="font-variation-settings: 'FILL' 1;">directions_bike</span>
                    </div>
                    <div
                        class="absolute -bottom-10 opacity-0 group-hover:opacity-100 transition-opacity bg-inverse-surface text-on-primary px-2 py-1 rounded text-[10px] whitespace-nowrap z-20">
                        Sarah L. (Delivery)
                    </div>
                </div>
            </div>
            <!-- Idle Rider 3 -->
            <div class="rider-pin absolute top-[45%] left-[70%] -translate-x-1/2 -translate-y-1/2 cursor-pointer group"
                id="rider-3" onclick="showRiderStats('rider-3')">
                <div class="relative flex items-center justify-center">
                    <div class="rider-pulse absolute w-10 h-10 bg-green-500 rounded-full opacity-50"></div>
                    <div
                        class="w-6 h-6 bg-green-500 rounded-full border-2 border-white shadow-lg flex items-center justify-center z-10 group-hover:scale-125 transition-transform">
                        <span class="material-symbols-outlined text-[14px] text-white"
                            style="font-variation-settings: 'FILL' 1;">electric_moped</span>
                    </div>
                    <div
                        class="absolute -bottom-10 opacity-0 group-hover:opacity-100 transition-opacity bg-inverse-surface text-on-primary px-2 py-1 rounded text-[10px] whitespace-nowrap z-20">
                        Leo V. (Idle)
                    </div>
                </div>
            </div>
            <!-- Offline Rider -->
            <div class="absolute top-[80%] left-[15%] -translate-x-1/2 -translate-y-1/2 cursor-pointer group">
                <div
                    class="w-6 h-6 bg-gray-400 rounded-full border-2 border-white shadow-lg flex items-center justify-center z-10 group-hover:scale-125 transition-transform">
                    <span class="material-symbols-outlined text-[14px] text-white"
                        style="font-variation-settings: 'FILL' 1;">person_off</span>
                </div>
            </div>
            <!-- Rider Info Modal (Hidden by default) -->
            <div class="absolute bottom-unit-6 left-1/2 -translate-x-1/2 w-[480px] bg-white rounded-2xl shadow-2xl border border-outline-variant p-unit-6 z-50 transform translate-y-full transition-transform duration-300 pointer-events-none opacity-0"
                id="riderModal">
                <div class="flex items-start justify-between mb-unit-4">
                    <div class="flex items-center gap-unit-4">
                        <img class="w-16 h-16 rounded-full object-cover"
                            data-alt="Close-up portrait of a professional delivery courier in uniform, urban setting background, energetic lighting, modern corporate style."
                            id="modalAvatar"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBLRDo9HTkxLqC9iZgzhVOylEZmAJ4_J0PhP9qeOiNaPYpfx2fSf6Krme0IBVx-qSLatsmvPnhLXqeIUZwa25M7c-Dt4vaPAgTm6Mqxgj9jhF6DDVK12ycPfYkz4uTCfjyEgsxyJo3Wv0HGqAqlgqFefZ7Ee8W3zSXWZgbB8y2z16M7c3X5JnXnp7jbWzjuBS71llVfJgXoxew1Jwq5_gbZ_dzrJCpzLkFVCdRwjocwhIoYZhV0XcVjO2CPRQNZCqfTnheuOMBCaIgI" />
                        <div>
                            <h3 class="font-headline-md text-headline-md text-on-surface" id="modalName">Marcus Rodriguez
                            </h3>
                            <div class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-yellow-500 text-[18px]"
                                    style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="font-label-md text-label-md text-on-surface">4.9</span>
                                <span class="text-on-surface-variant text-label-sm">• 1,240 Deliveries</span>
                            </div>
                        </div>
                    </div>
                    <button
                        class="material-symbols-outlined p-2 hover:bg-surface-container-high rounded-full cursor-pointer pointer-events-auto"
                        onclick="closeRiderStats()">close</button>
                </div>
                <div class="grid grid-cols-3 gap-unit-4 mb-unit-6">
                    <div class="bg-surface-container-low p-unit-2 rounded-xl text-center">
                        <p class="text-[10px] uppercase text-on-surface-variant font-bold mb-1">Current Load</p>
                        <p class="font-headline-md text-[20px] text-primary" id="modalLoad">Idle</p>
                    </div>
                    <div class="bg-surface-container-low p-unit-2 rounded-xl text-center">
                        <p class="text-[10px] uppercase text-on-surface-variant font-bold mb-1">Efficiency</p>
                        <p class="font-headline-md text-[20px] text-on-surface" id="modalEff">96%</p>
                    </div>
                    <div class="bg-surface-container-low p-unit-2 rounded-xl text-center">
                        <p class="text-[10px] uppercase text-on-surface-variant font-bold mb-1">On Time</p>
                        <p class="font-headline-md text-[20px] text-on-surface" id="modalTime">92%</p>
                    </div>
                </div>
                <div class="flex gap-unit-4">
                    <button
                        class="flex-1 py-unit-3 bg-primary text-on-primary rounded-xl font-label-md text-label-md hover:brightness-110 active:scale-95 transition-all pointer-events-auto">Assign
                        Selected Order</button>
                    <button
                        class="px-unit-4 py-unit-3 border border-outline text-on-surface-variant rounded-xl font-label-md text-label-md hover:bg-surface-container-high transition-all pointer-events-auto">Message</button>
                </div>
            </div>
        </section>
    </div>
@endsection
<script>
    const riderData = {
        'rider-1': {
            name: 'Marcus Rodriguez',
            load: 'Idle',
            eff: '96%',
            time: '92%',
            avatar: 'https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?auto=format&fit=crop&q=80&w=100'
        },
        'rider-2': {
            name: 'Sarah Lewis',
            load: '1 Order',
            eff: '98%',
            time: '95%',
            avatar: 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&q=80&w=100'
        },
        'rider-3': {
            name: 'Leo Varma',
            load: 'Idle',
            eff: '89%',
            time: '85%',
            avatar: 'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?auto=format&fit=crop&q=80&w=100'
        }
    };

    function toggleOrder(el, riderId) {
        // Unselect all cards
        document.querySelectorAll('.order-card').forEach(card => {
            card.classList.remove('order-card-selected');
            card.classList.remove('ring-4', 'ring-primary/20');
        });

        // Highlight selected
        el.classList.add('order-card-selected');
        el.classList.add('ring-4', 'ring-primary/20');

        // Highlight rider on map
        document.querySelectorAll('.rider-pin').forEach(pin => {
            pin.classList.remove('scale-150', 'ring-8', 'ring-primary/20', 'z-40');
        });

        const targetRider = document.getElementById(riderId);
        if (targetRider) {
            targetRider.classList.add('scale-150', 'z-40');
            targetRider.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
    }

    function showRiderStats(id) {
        const rider = riderData[id];
        const modal = document.getElementById('riderModal');

        document.getElementById('modalName').innerText = rider.name;
        document.getElementById('modalLoad').innerText = rider.load;
        document.getElementById('modalEff').innerText = rider.eff;
        document.getElementById('modalTime').innerText = rider.time;
        document.getElementById('modalAvatar').src = rider.avatar;

        modal.classList.remove('translate-y-full', 'opacity-0');
        modal.classList.add('translate-y-0', 'opacity-100');
        modal.classList.remove('pointer-events-none');
    }

    function closeRiderStats() {
        const modal = document.getElementById('riderModal');
        modal.classList.add('translate-y-full', 'opacity-0');
        modal.classList.remove('translate-y-0', 'opacity-100');
        modal.classList.add('pointer-events-none');
    }
</script>