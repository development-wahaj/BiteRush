@extends('layouts.app')

@section('body')

    <body class="bg-background text-on-surface font-body-md selection:bg-primary selection:text-white">
        <main class="max-w-7xl mx-auto px-margin-desktop py-unit-8">
            <!-- Hero Section -->
            <div class="mb-unit-8">
                <h1 class="font-display-lg text-display-lg text-on-surface mb-2">Get in Touch</h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">Have a question about your order or
                    interested in partnering with BiteRush? Our team is here to help you 24/7.</p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter">
                <!-- Inquiry Form (Left - 7 cols) -->
                <section class="lg:col-span-7 bento-card p-unit-8">
                    <h2 class="font-headline-md text-headline-md mb-unit-6">Send an Inquiry</h2>
                    <form action="#" class="space-y-unit-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-unit-4">
                            <div class="space-y-2">
                                <label class="font-label-md text-label-md text-on-surface-variant">Full Name</label>
                                <input
                                    class="w-full px-4 py-3 rounded-lg border border-outline-variant bg-surface-container-low font-body-md form-focus-ring outline-none transition-all"
                                    placeholder="Alex Johnson" type="text" />
                            </div>
                            <div class="space-y-2">
                                <label class="font-label-md text-label-md text-on-surface-variant">Email Address</label>
                                <input
                                    class="w-full px-4 py-3 rounded-lg border border-outline-variant bg-surface-container-low font-body-md form-focus-ring outline-none transition-all"
                                    placeholder="alex@example.com" type="email" />
                            </div>
                        </div>
                        <div class="space-y-2">
                            <label class="font-label-md text-label-md text-on-surface-variant">Subject</label>
                            <select
                                class="w-full px-4 py-3 rounded-lg border border-outline-variant bg-surface-container-low font-body-md form-focus-ring outline-none transition-all appearance-none">
                                <option>Order Support</option>
                                <option>Restaurant Partnerships</option>
                                <option>Fleet/Driver Inquiry</option>
                                <option>Corporate Solutions</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div class="space-y-2">
                            <label class="font-label-md text-label-md text-on-surface-variant">Message</label>
                            <textarea
                                class="w-full px-4 py-3 rounded-lg border border-outline-variant bg-surface-container-low font-body-md form-focus-ring outline-none transition-all"
                                placeholder="How can we help you today?" rows="5"></textarea>
                        </div>
                        <button
                            class="w-full md:w-auto px-unit-8 py-4 bg-primary-container text-on-primary-container font-label-md rounded-lg shadow-sm hover:opacity-90 active:scale-95 transition-all flex items-center justify-center gap-2"
                            type="submit">
                            Send Message
                            <span class="material-symbols-outlined text-[20px]">send</span>
                        </button>
                    </form>
                </section>
                <!-- Support Channels & Info (Right - 5 cols) -->
                <section class="lg:col-span-5 space-y-gutter">
                    <div class="bento-card p-unit-6 bg-primary-container text-on-primary-container">
                        <h3 class="font-headline-md text-headline-md mb-unit-4">Direct Support</h3>
                        <div class="space-y-unit-4">
                            <a class="flex items-center gap-4 group p-2 -ml-2 rounded-lg hover:bg-white/10 transition-colors"
                                href="#">
                                <div class="w-12 h-12 rounded-full bg-white/20 flex items-center justify-center">
                                    <span class="material-symbols-outlined"
                                        style="font-variation-settings: 'FILL' 1;">mail</span>
                                </div>
                                <div>
                                    <p class="font-label-sm text-label-sm opacity-80">Customer Support Email</p>
                                    <p class="font-body-md text-body-md font-semibold">support@biterush.com</p>
                                </div>
                            </a>
                            <a class="flex items-center gap-4 group p-2 -ml-2 rounded-lg hover:bg-white/10 transition-colors"
                                href="#">
                                <div class="w-12 h-12 rounded-full bg-white/20 flex items-center justify-center">
                                    <span class="material-symbols-outlined"
                                        style="font-variation-settings: 'FILL' 1;">call</span>
                                </div>
                                <div>
                                    <p class="font-label-sm text-label-sm opacity-80">Phone Number</p>
                                    <p class="font-body-md text-body-md font-semibold">+923000000000</p>
                                </div>
                            </a>
                            <div class="flex items-center gap-4 p-2 -ml-2">
                                <div class="w-12 h-12 rounded-full bg-white/20 flex items-center justify-center">
                                    <span class="material-symbols-outlined"
                                        style="font-variation-settings: 'FILL' 1;">location_on</span>
                                </div>
                                <div>
                                    <p class="font-label-sm text-label-sm opacity-80">Address</p>
                                    <p class="font-body-md text-body-md font-semibold">Karachi, Pk</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Small Map Placeholder -->
                    <div class="bento-card overflow-hidden h-48 relative group">
                        <img alt="BiteRush Office Map"
                            class="w-full h-full object-cover grayscale brightness-110 contrast-75 group-hover:grayscale-0 transition-all duration-500"
                            data-alt="A stylized, clean map visualization of San Francisco city streets in a minimalist light mode theme. The map features subtle orange and charcoal accents for points of interest, maintaining a high-fidelity and professional corporate aesthetic. The lighting is soft and even, highlighting the clear grid pattern of the urban environment."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAFFWbr7sknxeElcfy_3fBSOdRSMkZih8Zv0ctlvkiwtQIHh9dUjih-sKqk7zTxMXZhASiY3NyhLz_Uk2n3tJpTTvyp3iwfBJrJFk0K9okDZQ6n2zJs0VhhFpSNuQMEYOOSMxc4XB6k9X3j8Xe3aAfHnikymYzOch0xQyzNnD_gsb-pMitMN8-bluzQ-goz8IgKNuA9m7aKs_SirCJnsjP8y44dSL34_BlFJYQiDYsHS5LicyfR-1vZUwJOJ-Z-lTQEsDnvnVez9tQo" />
                        <div class="absolute inset-0 bg-primary/10 pointer-events-none"></div>
                        <div
                            class="absolute bottom-4 left-4 bg-white px-4 py-2 rounded-full shadow-lg flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary text-sm">explore</span>
                            <span class="font-label-sm text-label-sm text-on-surface">View on Maps</span>
                        </div>
                    </div>
                </section>
            </div>

        </main>
        
        <script>
            // Micro-interactions for form inputs
            const inputs = document.querySelectorAll('input, textarea, select');
            inputs.forEach(input => {
                input.addEventListener('focus', () => {
                    input.parentElement.querySelector('label')?.classList.add('text-primary');
                });
                input.addEventListener('blur', () => {
                    input.parentElement.querySelector('label')?.classList.remove('text-primary');
                });
            });

            // Simple button active state visual feedback
            const buttons = document.querySelectorAll('button');
            buttons.forEach(btn => {
                btn.addEventListener('mousedown', () => {
                    btn.style.transform = 'scale(0.95)';
                });
                btn.addEventListener('mouseup', () => {
                    btn.style.transform = 'scale(1)';
                });
                btn.addEventListener('mouseleave', () => {
                    btn.style.transform = 'scale(1)';
                });
            });
        </script>
    </body>

    </html>

@endsection