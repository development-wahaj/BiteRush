@extends('admin.layouts.app')

@section('content')

            <div class="mx-auto">
                <div>
                    <h2 class="font-headline-lg text-headline-lg text-on-surface">Settings</h2>
                    <p class="text-on-surface-variant font-body-md">Manage your settings.</p>
                </div>
                <!-- Settings Grid -->
                <div class="grid grid-cols-12 gap-gutter">
                    <!-- Restaurant Profile Section -->
                    <section class="col-span-12 lg:col-span-8 bento-card p-unit-8">
                        <div class="flex items-center gap-3 mb-6">
                            <span class="material-symbols-outlined text-primary" data-icon="storefront">storefront</span>
                            <h3 class="font-headline-md text-headline-md text-on-surface">Restaurant Profile</h3>
                        </div>
                        <div class="grid grid-cols-2 gap-unit-6">
                            <div>
                                <label class="font-label-md text-label-sm text-on-surface-variant">Cuisine</label>
                                <select class="px-4 py-3 border border-outline-variant rounded-lg w-full">
                                    <option>Contemporary American</option>
                                    <option>Italian Fusion</option>
                                    <option>Japanese Grill</option>
                                </select>
                            </div>
                        </div>
                    </section>
                    <!-- Maintenance Mode & Stats (Small Card) -->
                    <section
                        class="col-span-12 lg:col-span-4 bento-card p-unit-8 bg-surface-container flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="font-headline-md text-headline-md text-on-surface">Store Status</h3>
                                <label class="switch">
                                    <input type="checkbox" />
                                    <span class="slider"></span>
                                </label>
                            </div>
                            <div class="p-4 bg-white rounded-lg border border-outline-variant mb-6">
                                <p class="text-label-sm font-bold text-primary mb-1">MAINTENANCE MODE</p>
                                <p class="text-body-md text-on-surface-variant">When active, your restaurant is hidden from
                                    the marketplace. Useful for emergencies or renovations.</p>
                            </div>
                        </div>
                        <div class="space-y-4">
                            <div class="flex justify-between items-center text-on-surface">
                                <span class="font-label-md">Last Config Update</span>
                                <span class="text-body-md">2h ago</span>
                            </div>
                            <div class="flex justify-between items-center text-on-surface">
                                <span class="font-label-md">System Health</span>
                                <span class="flex items-center gap-1 text-green-600 font-bold">
                                    <span class="material-symbols-outlined text-[18px]"
                                        data-icon="check_circle">check_circle</span>
                                    Online
                                </span>
                            </div>
                        </div>
                    </section>
                    <!-- Operating Hours Section -->
                    <section class="col-span-12 bento-card p-unit-8">
                        <div class="flex items-center gap-3 mb-8">
                            <span class="material-symbols-outlined text-primary" data-icon="schedule">schedule</span>
                            <h3 class="font-headline-md text-headline-md text-on-surface">Operating Hours</h3>
                        </div>
                        <div class="space-y-4">
                            <!-- Header -->
                            <div
                                class="grid grid-cols-7 gap-4 text-label-sm font-bold text-on-surface-variant border-b border-outline-variant pb-2">
                                <div class="col-span-2">Day of Week</div>
                                <div class="col-span-1">Status</div>
                                <div class="col-span-2">Opening Time</div>
                                <div class="col-span-2">Closing Time</div>
                            </div>
                            <!-- Weekdays -->
                            <div class="grid grid-cols-7 gap-4 items-center py-2">
                                <div class="col-span-2 font-label-md">Monday</div>
                                <div class="col-span-1"><label class="switch"><input checked="" type="checkbox" /><span
                                            class="slider"></span></label></div>
                                <div class="col-span-2"><input
                                        class="px-3 py-2 border border-outline-variant rounded-lg w-full" type="time"
                                        value="09:00" /></div>
                                <div class="col-span-2"><input
                                        class="px-3 py-2 border border-outline-variant rounded-lg w-full" type="time"
                                        value="22:00" /></div>
                            </div>
                            <div class="grid grid-cols-7 gap-4 items-center py-2">
                                <div class="col-span-2 font-label-md">Tuesday</div>
                                <div class="col-span-1"><label class="switch"><input checked="" type="checkbox" /><span
                                            class="slider"></span></label></div>
                                <div class="col-span-2"><input
                                        class="px-3 py-2 border border-outline-variant rounded-lg w-full" type="time"
                                        value="09:00" /></div>
                                <div class="col-span-2"><input
                                        class="px-3 py-2 border border-outline-variant rounded-lg w-full" type="time"
                                        value="22:00" /></div>
                            </div>
                            <div class="grid grid-cols-7 gap-4 items-center py-2">
                                <div class="col-span-2 font-label-md text-on-surface-variant/50">Wednesday (Closed)</div>
                                <div class="col-span-1"><label class="switch"><input type="checkbox" /><span
                                            class="slider"></span></label></div>
                                <div class="col-span-2"><input
                                        class="px-3 py-2 bg-surface-container-low border border-outline-variant rounded-lg w-full opacity-50"
                                        disabled="" type="time" value="09:00" /></div>
                                <div class="col-span-2"><input
                                        class="px-3 py-2 bg-surface-container-low border border-outline-variant rounded-lg w-full opacity-50"
                                        disabled="" type="time" value="22:00" /></div>
                            </div>
                            <div class="grid grid-cols-7 gap-4 items-center py-2">
                                <div class="col-span-2 font-label-md text-primary">Sunday (Late Night)</div>
                                <div class="col-span-1"><label class="switch"><input checked="" type="checkbox" /><span
                                            class="slider"></span></label></div>
                                <div class="col-span-2"><input
                                        class="px-3 py-2 border border-outline-variant rounded-lg w-full" type="time"
                                        value="11:00" /></div>
                                <div class="col-span-2"><input
                                        class="px-3 py-2 border border-outline-variant rounded-lg w-full" type="time"
                                        value="23:59" /></div>
                            </div>
                        </div>
                    </section>
                    <!-- Delivery & Fees (Combined Bento) -->
                    <section class="col-span-12 lg:col-span-6 bento-card p-unit-8">
                        <div class="flex items-center gap-3 mb-6">
                            <span class="material-symbols-outlined text-primary"
                                data-icon="local_shipping">local_shipping</span>
                            <h3 class="font-headline-md text-headline-md text-on-surface">Delivery Rules</h3>
                        </div>
                        <div class="space-y-6">
                            <div class="flex flex-col gap-unit-1">
                                <label class="font-label-md text-label-sm text-on-surface-variant">Max Delivery Radius
                                    (Miles)</label>
                                <div class="relative">
                                    <input
                                        class="px-4 py-3 border border-outline-variant rounded-lg text-body-md w-full pr-12"
                                        type="number" value="12" />
                                    <span
                                        class="absolute right-4 top-1/2 -translate-y-1/2 text-on-surface-variant">mi</span>
                                </div>
                            </div>
                            <div
                                class="p-4 bg-surface-container-lowest border border-outline-variant rounded-lg flex items-center justify-between">
                                <div>
                                    <p class="font-label-md text-on-surface">Free Delivery Incentive</p>
                                    <p class="text-label-sm text-on-surface-variant">Enable for orders above a threshold</p>
                                </div>
                                <label class="switch">
                                    <input checked="" type="checkbox" />
                                    <span class="slider"></span>
                                </label>
                            </div>
                            <div class="flex flex-col gap-unit-1">
                                <label class="font-label-md text-label-sm text-on-surface-variant">Free Delivery Over
                                    ($)</label>
                                <div class="relative">
                                    <span class="absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant">$</span>
                                    <input class="px-10 py-3 border border-outline-variant rounded-lg text-body-md w-full"
                                        type="number" value="50" />
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="col-span-12 lg:col-span-6 bento-card p-unit-8">
                        <div class="flex items-center gap-3 mb-6">
                            <span class="material-symbols-outlined text-primary" data-icon="payments">payments</span>
                            <h3 class="font-headline-md text-headline-md text-on-surface">Fees &amp; Tax</h3>
                        </div>
                        <div class="space-y-6">
                            <div class="flex flex-col gap-unit-1">
                                <label class="font-label-md text-label-sm text-on-surface-variant">Service Fee (%)</label>
                                <div class="relative">
                                    <input
                                        class="px-4 py-3 border border-outline-variant rounded-lg text-body-md w-full pr-12"
                                        step="0.1" type="number" value="4.5" />
                                    <span class="absolute right-4 top-1/2 -translate-y-1/2 text-on-surface-variant">%</span>
                                </div>
                                <p class="text-[11px] text-on-surface-variant italic mt-1">Applied to every order total
                                    before tax.</p>
                            </div>
                            <div class="flex flex-col gap-unit-1">
                                <label class="font-label-md text-label-sm text-on-surface-variant">Sales Tax (%)</label>
                                <div class="relative">
                                    <input
                                        class="px-4 py-3 border border-outline-variant rounded-lg text-body-md w-full pr-12"
                                        step="0.01" type="number" value="8.25" />
                                    <span class="absolute right-4 top-1/2 -translate-y-1/2 text-on-surface-variant">%</span>
                                </div>
                                <p class="text-[11px] text-on-surface-variant italic mt-1">Regional statutory sales tax
                                    rate.</p>
                            </div>
                            <div
                                class="p-4 bg-tertiary-fixed/20 border border-tertiary/20 rounded-lg flex items-start gap-3">
                                <span class="material-symbols-outlined text-tertiary text-[20px]"
                                    data-icon="info">info</span>
                                <p class="text-label-sm text-on-tertiary-fixed-variant">Tax and Service Fee changes take
                                    effect immediately for all active carts.</p>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="flex gap-4 mt-unit-6">
                    <button
                        class="px-6 py-2 border border-outline text-on-surface font-label-md rounded-lg hover:bg-surface-container transition-colors">
                        Discard Changes
                    </button>
                    <button
                        class="px-10 py-2 bg-primary text-on-primary font-label-md rounded-lg hover:brightness-110 active:scale-95 transition-all shadow-md">
                        Save Configurations
                    </button>
                </div>
            </div>
        @endsection
        <script>
            // Micro-interaction: Sidebar active state scaling
            const navItems = document.querySelectorAll('nav a');
            navItems.forEach(item => {
                item.addEventListener('click', (e) => {
                    if (!item.classList.contains('bg-primary')) {
                        navItems.forEach(i => {
                            i.classList.remove('bg-primary', 'text-on-primary', 'rounded-lg');
                            i.classList.add('text-secondary-fixed-dim');
                        });
                        item.classList.add('bg-primary', 'text-on-primary', 'rounded-lg');
                        item.classList.remove('text-secondary-fixed-dim');
                    }
                });
            });

            // Toggle maintenance mode visual feedback
            const maintenanceToggle = document.querySelector('.switch input');
            maintenanceToggle.addEventListener('change', (e) => {
                if (e.target.checked) {
                    console.log("Maintenance Mode Activated");
                    // Here we could add a screen-wide overlay if desired
                }
            });
        </script>


