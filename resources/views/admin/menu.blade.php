@extends('admin.layouts.app')

@section('content')
            <!-- Header Section -->
            <section class="flex flex-col md:flex-row md:items-center justify-between mb-unit-8 gap-4">
                <div>
                    <h2 class="font-headline-lg text-headline-lg text-on-surface">Menu Management</h2>
                    <p class="text-on-surface-variant font-body-md">Manage your food items, descriptions, and pricing across
                        all categories.</p>
                </div>
                <div class="flex items-center gap-4">
                    <button
                        class="bg-surface-container-high text-primary border border-primary/20 px-unit-6 py-unit-2 rounded-lg font-label-md flex items-center gap-2 hover:bg-primary hover:text-white transition-all shadow-sm">
                        <span class="material-symbols-outlined" data-icon="category">category</span>
                        Manage Categories
                    </button>
                    <button
                        class="bg-primary text-on-primary px-unit-6 py-unit-2 rounded-lg font-label-md flex items-center gap-2 hover:opacity-90 transition-all shadow-md">
                        <span class="material-symbols-outlined" data-icon="add_circle">add_circle</span>
                        Add New Item
                    </button>
                </div>
            </section>
                <!-- Items Table -->
                <div class="bg-white rounded-2xl shadow-sm border border-outline-variant/20 overflow-hidden">
                    <div class="px-unit-6 pt-6 pb-4">
                        <div class="flex justify-between items-start mb-4">
                            <h2 class="font-headline-md text-headline-md text-on-surface">Menu Items</h2>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-surface-container-low/50 border-b border-outline-variant/30">
                                    <th class="px-unit-6 py-4 font-label-md text-label-md text-secondary">Image</th>
                                    <th class="px-unit-6 py-4 font-label-md text-label-md text-secondary">Item</th>
                                    <th class="px-unit-6 py-4 font-label-md text-label-md text-secondary">Category</th>
                                    <th class="px-unit-6 py-4 font-label-md text-label-md text-secondary">Price</th>
                                    <th class="px-unit-6 py-4 font-label-md text-label-md text-secondary text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-outline-variant">
                            <!-- Item 1 -->
                            <tr class="table-row-hover transition-colors group">
                                <td class="px-unit-6 py-4">
                                    <div class="w-12 h-12 rounded-lg bg-surface-container overflow-hidden">
                                        <img alt="Double Truffle Burger" class="w-full h-full object-cover"
                                            data-alt="A close-up gourmet photography shot of a juicy double truffle cheeseburger with melting swiss cheese, caramelized onions, and fresh arugula on a toasted brioche bun. The lighting is warm and dramatic, highlighting the texture of the beef and the glossy bun. The background is a dark, professional kitchen setting that emphasizes the vibrant orange and deep browns of the food."
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAnoYqpSqmy4HhhD4MyvMWkOhdSl-18IE7NRNTc17ooN7w_d49SDNxqCjF1pWhdzppztsHbreiGn_xWay927yUB1uAIPi4cH7f7KNvQstFL4buVuLKpMyLi-JIqOSI4XNbLTF_M4HZcbfCPmuXI2nNEklElpZ62ehq7R5odk_Q3q70f7jsC2OgqLM9Bcol59Ykauy7T6Cgd4Cm6aMRcwRK4BIgcisJ2OkyGmokkvrI8WzY6HAhfG3zq596rW2HL3HP4SpJkCmBsZXNr" />
                                    </div>
                                </td>
                                <td class="px-unit-6 py-4">
                                    <p class="font-label-md text-on-surface">Double Truffle Burger</p>
                                    <p class="text-xs text-on-surface-variant">ID: #BR-9921</p>
                                </td>
                                <td class="px-unit-6 py-4">
                                    <span class="text-body-md text-on-surface">Burgers</span>
                                </td>
                                <td class="px-unit-6 py-4">
                                    <span class="font-label-md text-primary">$18.50</span>
                                </td>
                                <td class="px-unit-6 py-4 text-right">
                                    <div class="flex items-center justify-end gap-2">
                                        <button
                                            class="p-2 text-on-surface-variant hover:text-primary transition-colors"><span
                                                class="material-symbols-outlined" data-icon="edit">edit</span></button>
                                        <button class="p-2 text-on-surface-variant hover:text-error transition-colors"><span
                                                class="material-symbols-outlined" data-icon="delete">delete</span></button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Item 2 -->
                            <tr class="table-row-hover transition-colors group">
                                <td class="px-unit-6 py-4">
                                    <div class="w-12 h-12 rounded-lg bg-surface-container overflow-hidden">
                                        <img alt="Margherita Napoletana" class="w-full h-full object-cover"
                                            data-alt="Top-down high-fidelity food photography of an authentic Margherita pizza with charred leopard-spot crust, fresh mozzarella pearls, vibrant red tomato sauce, and bright green basil leaves. The lighting is bright and airy, mimicking a modern sunlit Italian pizzeria. The visual style is crisp and professional, using high contrast to make the fresh ingredients pop against the light stone background."
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBWPbZRQ2cACXX_GzAYFJPiQYPaLcrkJD2I-xAY-T4hwALjkW1y7k2Ib5S2QZrwX_B9yfFba7WCt4ZkF9rbchgVW_OYsS1cUx2wv6pyzEF42BBRN6JwxJ_YUr8gSJiJQ7X8aEGtDaauYEAh8DIFkE175nT4lYl2BU-A_SqvyOL1EeVila_cjV8iXdcIwF6lt0H8JJocY_fXI3j45v23VREXHVgXdgKXnLUC9WRLNMKz9MMDXisCbHjUeh3-EwsXixuhpgnyIgJeVrFq" />
                                    </div>
                                </td>
                                <td class="px-unit-6 py-4">
                                    <p class="font-label-md text-on-surface">Margherita Napoletana</p>
                                    <p class="text-xs text-on-surface-variant">ID: #BR-8712</p>
                                </td>
                                <td class="px-unit-6 py-4">
                                    <span class="text-body-md text-on-surface">Pizza</span>
                                </td>
                                <td class="px-unit-6 py-4">
                                    <span class="font-label-md text-primary">$14.00</span>
                                </td>
                                <td class="px-unit-6 py-4 text-right">
                                    <div class="flex items-center justify-end gap-2">
                                        <button
                                            class="p-2 text-on-surface-variant hover:text-primary transition-colors"><span
                                                class="material-symbols-outlined" data-icon="edit">edit</span></button>
                                        <button class="p-2 text-on-surface-variant hover:text-error transition-colors"><span
                                                class="material-symbols-outlined" data-icon="delete">delete</span></button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Item 3 -->
                            <tr class="table-row-hover transition-colors group">
                                <td class="px-unit-6 py-4">
                                    <div class="w-12 h-12 rounded-lg bg-surface-container overflow-hidden">
                                        <img alt="Dragon Roll Sushi" class="w-full h-full object-cover"
                                            data-alt="An elegant presentation of Dragon Roll sushi pieces on a dark slate plate. The rolls are topped with thinly sliced avocado, eel sauce drizzle, and sesame seeds. High-end food photography with shallow depth of field, focused on the intricate textures of the rice and fillings. The palette consists of fresh greens, rich browns, and pristine whites, creating a sophisticated and clean aesthetic."
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuC1YdraNDVuZhNgv2WpFfKBTAuq-qT47iZyRy4aEkQYp49IvZEOw8iFgVEaOgEbq3euENBFy4eJjBevPEHH1IYiDqB8YgxGoD5zpafxM0gp-FmF6wXASdEFbyvo2v4CvvZwmSw_Fhlrtj7JVQSwxejZdpLnsUXaWtMkl6uC_U8fVVj3PYI3rzJw41ihZVirLkf9Y8yKvlqLpS-Z1oiJn4i_7ZsI2LNZ2jw4RcopO4N5EFqg0_7mCyblJb3OISN3R3vz_yShJIUmpicm" />
                                    </div>
                                </td>
                                <td class="px-unit-6 py-4">
                                    <p class="font-label-md text-on-surface">Dragon Roll (8pcs)</p>
                                    <p class="text-xs text-on-surface-variant">ID: #BR-4432</p>
                                </td>
                                <td class="px-unit-6 py-4">
                                    <span class="text-body-md text-on-surface">Sushi</span>
                                </td>
                                <td class="px-unit-6 py-4">
                                    <span class="font-label-md text-primary">$22.00</span>
                                </td>
                                <td class="px-unit-6 py-4 text-right">
                                    <div class="flex items-center justify-end gap-2">
                                        <button
                                            class="p-2 text-on-surface-variant hover:text-primary transition-colors"><span
                                                class="material-symbols-outlined" data-icon="edit">edit</span></button>
                                        <button class="p-2 text-on-surface-variant hover:text-error transition-colors"><span
                                                class="material-symbols-outlined" data-icon="delete">delete</span></button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Item 4 -->
                            <tr class="table-row-hover transition-colors group">
                                <td class="px-unit-6 py-4">
                                    <div class="w-12 h-12 rounded-lg bg-surface-container overflow-hidden">
                                        <img alt="Grilled Chicken Caesar" class="w-full h-full object-cover"
                                            data-alt="A vibrant, healthy grilled chicken Caesar salad in a white ceramic bowl. Crisp romaine lettuce, golden sourdough croutons, and thin shavings of Parmesan cheese are tossed in a creamy dressing. The lighting is natural and bright, conveying a sense of freshness and vitality. Professional culinary photography with a clean, light-mode background that emphasizes the organic greens and the golden chicken."
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAodoaQCdpUA4eb_aTz-9DIueGU2IMGR58hNdX_L6aiTiJfYVcvg4LcQLrpKtrzPpT24NuanD02NBUg6yQ2iwtYBrMR6cWrrukIWTIEKzyAq14BnV8C3JITrA-DopDOoNDNXd1ldeC58cu6LSdYfvkWJ6KttdBgqD9Z0LwiUEpoSmNyt70kKH8RWjV05bOgU2f0V-Ty23NHbTPrWk74S-_AGb39VHexi4hIs_ak7NIMycPdba1qVo1aygB-DPCTzV2P-tx-2mHZnyP8" />
                                    </div>
                                </td>
                                <td class="px-unit-6 py-4">
                                    <p class="font-label-md text-on-surface">Grilled Chicken Caesar</p>
                                    <p class="text-xs text-on-surface-variant">ID: #BR-1109</p>
                                </td>
                                <td class="px-unit-6 py-4">
                                    <span class="text-body-md text-on-surface">Salads</span>
                                </td>
                                <td class="px-unit-6 py-4">
                                    <span class="font-label-md text-primary">$15.75</span>
                                </td>
                                <td class="px-unit-6 py-4 text-right">
                                    <div class="flex items-center justify-end gap-2">
                                        <button
                                            class="p-2 text-on-surface-variant hover:text-primary transition-colors"><span
                                                class="material-symbols-outlined" data-icon="edit">edit</span></button>
                                        <button class="p-2 text-on-surface-variant hover:text-error transition-colors"><span
                                                class="material-symbols-outlined" data-icon="delete">delete</span></button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Item 5 -->
                            <tr class="table-row-hover transition-colors group">
                                <td class="px-unit-6 py-4">
                                    <div class="w-12 h-12 rounded-lg bg-surface-container overflow-hidden">
                                        <img alt="Artisanal Iced Latte" class="w-full h-full object-cover"
                                            data-alt="Close-up artistic food photography of a cold brew coffee with milk swirling inside a tall glass with condensation. The shot captures the intricate marble effect of the cream mixing with the dark coffee. Minimalist and modern visual style with soft, diffused side-lighting. The background is a clean white marble surface, reinforcing the premium quality and freshness of the beverage."
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBwsWCPMmpFSk_6Qyz6O545qt2ZlUt1oQ1pO98vWaBx3kcF-_Xsn01f57WMIVKvJ-Dzzsd88GrKNdPb0LTCQRKkLBM_RSM7hYUJR7dadcsex550jYSBiKySY-IuOHkRP7NJ6MrcE_T_d5AIo5NkcYlzGSqVV3gDkGGuvUaQnyXN7iDR3P2jeyNX2nvXonTnodRWs6klOmDJpgWEfwEjrpIy406DOn-X01FPiueKuWk86qvQIYfi26wyzeRUYHD2b7CkQPeJwthFC4CJ" />
                                    </div>
                                </td>
                                <td class="px-unit-6 py-4">
                                    <p class="font-label-md text-on-surface">Artisanal Iced Latte</p>
                                    <p class="text-xs text-on-surface-variant">ID: #BR-6651</p>
                                </td>
                                <td class="px-unit-6 py-4">
                                    <span class="text-body-md text-on-surface">Beverages</span>
                                </td>
                                <td class="px-unit-6 py-4">
                                    <span class="font-label-md text-primary">$6.50</span>
                                </td>
                                <td class="px-unit-6 py-4 text-right">
                                    <div class="flex items-center justify-end gap-2">
                                        <button
                                            class="p-2 text-on-surface-variant hover:text-primary transition-colors"><span
                                                class="material-symbols-outlined" data-icon="edit">edit</span></button>
                                        <button class="p-2 text-on-surface-variant hover:text-error transition-colors"><span
                                                class="material-symbols-outlined" data-icon="delete">delete</span></button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Pagination -->
                <div
                    class="px-unit-6 py-4 bg-surface-container-low border-t border-outline-variant flex items-center justify-between">
                    <p class="text-label-sm text-on-surface-variant">Showing 1 to 5 of 148 menu items</p>
                    <div class="flex items-center gap-2">
                        <button
                            class="p-2 rounded-lg border border-outline-variant hover:bg-white transition-colors disabled:opacity-50"
                            disabled="">
                            <span class="material-symbols-outlined" data-icon="chevron_left">chevron_left</span>
                        </button>
                        <button
                            class="w-8 h-8 rounded-lg bg-primary text-on-primary font-label-md flex items-center justify-center">1</button>
                        <button
                            class="w-8 h-8 rounded-lg hover:bg-white text-on-surface-variant font-label-md flex items-center justify-center transition-colors">2</button>
                        <button
                            class="w-8 h-8 rounded-lg hover:bg-white text-on-surface-variant font-label-md flex items-center justify-center transition-colors">3</button>
                        <span class="text-on-surface-variant">...</span>
                        <button
                            class="w-8 h-8 rounded-lg hover:bg-white text-on-surface-variant font-label-md flex items-center justify-center transition-colors">24</button>
                        <button class="p-2 rounded-lg border border-outline-variant hover:bg-white transition-colors">
                            <span class="material-symbols-outlined" data-icon="chevron_right">chevron_right</span>
                        </button>
                    </div>
                </div>
            </div>
        
        @endsection
        <script>
            // Micro-interactions for table rows
            document.querySelectorAll('.table-row-hover').forEach(row => {
                row.addEventListener('mouseenter', () => {
                    row.style.cursor = 'pointer';
                });
            });

            // Search bar focus effect
            const searchInput = document.querySelector('input[type="text"]');
            searchInput.addEventListener('focus', () => {
                searchInput.parentElement.classList.add('ring-2', 'ring-primary/20');
            });
            searchInput.addEventListener('blur', () => {
                searchInput.parentElement.classList.remove('ring-2', 'ring-primary/20');
            });
        </script>
