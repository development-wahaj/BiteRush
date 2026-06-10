@extends('admin.layouts.app')

@section('content')
        <div class="pb-unit-8 px-gutter">
                <div>
                    <h2 class="font-headline-lg text-headline-lg text-on-surface">Rider Management</h2>
                    <p class="text-on-surface-variant font-body-md">Manage your riders.</p>
                </div>
                <!-- Summary Stats Header -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-gutter mb-unit-8">
                    <div class="bg-surface p-unit-6 rounded-xl rider-card-shadow border-l-4 border-primary">
                        <p class="font-label-md text-on-surface-variant uppercase tracking-wider mb-unit-1">Active Riders
                        </p>
                        <h3 class="font-display-lg text-display-lg text-primary">42</h3>
                        <div class="flex items-center gap-1 mt-unit-2 text-primary-container text-label-sm">
                            <span class="material-symbols-outlined text-sm" data-icon="trending_up">trending_up</span>
                            <span>12% from last hour</span>
                        </div>
                    </div>
                    <div class="bg-surface p-unit-6 rounded-xl rider-card-shadow border-l-4 border-tertiary">
                        <p class="font-label-md text-on-surface-variant uppercase tracking-wider mb-unit-1">On Delivery</p>
                        <h3 class="font-display-lg text-display-lg text-tertiary">28</h3>
                        <p class="font-label-sm text-secondary mt-unit-2">Avg. trip: 14 mins</p>
                    </div>
                    <div class="bg-surface p-unit-6 rounded-xl rider-card-shadow border-l-4 border-outline">
                        <p class="font-label-md text-on-surface-variant uppercase tracking-wider mb-unit-1">Idle</p>
                        <h3 class="font-display-lg text-display-lg text-on-surface">14</h3>
                        <p class="font-label-sm text-secondary mt-unit-2">Waiting for assignment</p>
                    </div>
                    <div
                        class="bg-primary p-unit-6 rounded-xl shadow-lg flex flex-col justify-center items-center text-center">
                        <p class="text-on-primary font-headline-md font-bold mb-unit-2">Fleet Growing?</p>
                        <button
                            class="bg-on-primary text-primary px-unit-6 py-unit-2 rounded-full font-label-md font-bold hover:scale-105 transition-transform">
                            Register New Rider
                        </button>
                    </div>
                </div>
                <!-- Controls & Filters -->
                <div class="flex flex-col md:flex-row justify-between items-center mb-unit-6 gap-unit-4">
                    <div class="flex gap-unit-2">
                        <button
                            class="px-unit-4 py-unit-2 bg-surface text-primary border border-primary rounded-full text-label-md font-bold flex items-center gap-2">
                            <span class="material-symbols-outlined" data-icon="filter_list">filter_list</span>
                            Filters
                        </button>
                        <div class="flex bg-surface-container-low p-1 rounded-full border border-outline-variant">
                            <button
                                class="px-unit-4 py-unit-2 bg-primary text-on-primary rounded-full text-label-md font-bold transition-all shadow-sm"
                                id="listView">List View</button>
                            <button
                                class="px-unit-4 py-unit-2 text-on-surface-variant rounded-full text-label-md font-bold transition-all"
                                id="mapView">
                                <span class="flex items-center gap-2">
                                    <span class="material-symbols-outlined text-sm" data-icon="map">map</span>
                                    Live Map
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="flex items-center gap-unit-4">
                        <span class="font-label-sm text-on-surface-variant">Sort by: <strong class="text-on-surface">Rating
                                (High-Low)</strong></span>
                        <span class="material-symbols-outlined cursor-pointer text-on-surface-variant"
                            data-icon="sort">sort</span>
                    </div>
                </div>
                <!-- Rider Cards Bento Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-gutter" id="ridersGrid">
                    <!-- Rider 1 -->
                    <div
                        class="bg-surface rounded-2xl p-unit-6 border border-outline-variant/30 rider-card-shadow transition-all group">
                        <div class="flex justify-between items-start mb-unit-4">
                            <div class="relative">
                                <img alt="Rider 1"
                                    class="w-16 h-16 rounded-xl object-cover border-2 border-surface-container"
                                    data-alt="A close-up portrait of a female delivery rider with a warm, energetic smile. She is wearing a professional orange and charcoal uniform and a modern safety helmet. The background is a soft-focus urban street during daylight, evoking a sense of speed and reliability in a contemporary city setting."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDAc439cCDzJG0YVJgnzVBXX_CLUrZZLa9HB0k_YRuipPiW9-6D389pG9z8x3nmJ-qXs9zXhFQX8ziq9ZYuNRL2jksUWJ7zsAx7rZgfji0kZm1rxb5kKlQiA-VU9DHuvWu7zHWIXOGUDMzWHxD9_-pAYK0ZLz2e3eh-iBax0F2xCzd73JeiA0-hlRADVLjE83QCDBkNU2Y7HUyOeb6zED-rNDVD3eTZaPwjMl4MGKM370k2rukRPa4IUrVMwOXVTjWQgsCbvMfZNWfq" />
                                <span
                                    class="absolute -bottom-1 -right-1 w-5 h-5 bg-green-500 border-2 border-surface rounded-full"></span>
                            </div>
                            <div class="flex flex-col items-end">
                                <span
                                    class="bg-green-100 text-green-700 text-[10px] font-bold uppercase px-2 py-1 rounded-full mb-1">Active</span>
                                <div class="flex items-center text-yellow-500">
                                    <span class="material-symbols-outlined text-sm" data-icon="star"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="text-label-md font-bold ml-1">4.9</span>
                                </div>
                            </div>
                        </div>
                        <h4 class="font-headline-md text-on-surface mb-unit-1 group-hover:text-primary transition-colors">
                            Sarah Jenkins</h4>
                        <div class="flex items-center gap-unit-2 text-on-surface-variant mb-unit-4">
                            <span class="material-symbols-outlined text-sm" data-icon="electric_bike">electric_bike</span>
                            <span class="text-label-sm">E-Bike • 324 Deliveries</span>
                        </div>
                        <div class="pt-unit-4 border-t border-outline-variant/20 flex justify-between items-center">
                            <span class="text-label-sm text-secondary">ID: BR-0922</span>
                            <button class="text-primary font-label-md flex items-center hover:underline">
                                View Stats
                                <span class="material-symbols-outlined text-sm ml-1"
                                    data-icon="chevron_right">chevron_right</span>
                            </button>
                        </div>
                    </div>
                    <!-- Rider 2 -->
                    <div
                        class="bg-surface rounded-2xl p-unit-6 border border-outline-variant/30 rider-card-shadow transition-all group">
                        <div class="flex justify-between items-start mb-unit-4">
                            <div class="relative">
                                <img alt="Rider 2"
                                    class="w-16 h-16 rounded-xl object-cover border-2 border-surface-container"
                                    data-alt="A portrait of a male delivery driver in his late 20s, looking focused and professional. He's wearing a charcoal branded jacket with orange accents. The lighting is cool-toned, suggesting early evening, with soft city lights blurred in the background. High-fidelity photography style with sharp details on his features."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDqsj9MjmMeC7YO7mWeL3trsCy5bso7jHZ0vlEr1IU8il72mI6Z0q9VbDLjPMRm4GaaBAq-aVFZR20tAwXQXVPHxJCGVwFt1IwcZl4DSjt8rulKGO64r1nI1i4ttX3VzOS8B1Oj7GSF4wzLTCtFuqQRMsqoiMLGc0GZMQJN7rhs_CQwpzCuymgGqHfdD6TI0cZNTnv-z5J9twOKLY1qOfzdCIN0947J-pqRghUqp3cWOhUDFBxAqgZp6ORpM-kfhG290Z5XmV_cMQ2b" />
                                <span
                                    class="absolute -bottom-1 -right-1 w-5 h-5 bg-orange-500 border-2 border-surface rounded-full"></span>
                            </div>
                            <div class="flex flex-col items-end">
                                <span
                                    class="bg-orange-100 text-orange-700 text-[10px] font-bold uppercase px-2 py-1 rounded-full mb-1">On
                                    Delivery</span>
                                <div class="flex items-center text-yellow-500">
                                    <span class="material-symbols-outlined text-sm" data-icon="star"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="text-label-md font-bold ml-1">4.7</span>
                                </div>
                            </div>
                        </div>
                        <h4 class="font-headline-md text-on-surface mb-unit-1 group-hover:text-primary transition-colors">
                            Marcus Chen</h4>
                        <div class="flex items-center gap-unit-2 text-on-surface-variant mb-unit-4">
                            <span class="material-symbols-outlined text-sm" data-icon="moped">moped</span>
                            <span class="text-label-sm">Scooter • 892 Deliveries</span>
                        </div>
                        <div class="pt-unit-4 border-t border-outline-variant/20 flex justify-between items-center">
                            <span class="text-label-sm text-secondary">ID: BR-1150</span>
                            <button class="text-primary font-label-md flex items-center hover:underline">
                                Track Order
                                <span class="material-symbols-outlined text-sm ml-1"
                                    data-icon="my_location">my_location</span>
                            </button>
                        </div>
                    </div>
                    <!-- Rider 3 -->
                    <div
                        class="bg-surface rounded-2xl p-unit-6 border border-outline-variant/30 rider-card-shadow transition-all group">
                        <div class="flex justify-between items-start mb-unit-4">
                            <div class="relative">
                                <img alt="Rider 3"
                                    class="w-16 h-16 rounded-xl object-cover border-2 border-surface-container"
                                    data-alt="A vibrant professional portrait of a young female rider wearing a delivery uniform. She has a focused yet friendly expression. The background is a clean, modern studio setting with soft grey tones, making the bright orange of the uniform pop. The overall aesthetic is sharp, professional, and full of vitality."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDqdk1LmglYCgcLs26Go-1EP9DhoMmLTq6NYDPJYd3O7A8h2YGFXBMHag2yilyTJMZekeQlrMbQvaOIn58ya2hAPP2mlBPtN1nrkTVsqmQXXnBaXzJgKfEBlMSVoAEdv6QCiZu2Kkzpqzx_yCNrjYEPkpWDem5U4_1Sno64QmG9fo78Y2y-6lJeH-hQ0yIy0Hs6mkMbdg8A9dcIxc_n5OPqAIZGrY622oK05n9Vi8FFvttVsxZ6PiAS7ugUzFn6wrLjI3gbVhPCzWV-" />
                                <span
                                    class="absolute -bottom-1 -right-1 w-5 h-5 bg-grey-400 border-2 border-surface rounded-full"></span>
                            </div>
                            <div class="flex flex-col items-end">
                                <span
                                    class="bg-gray-100 text-gray-600 text-[10px] font-bold uppercase px-2 py-1 rounded-full mb-1">Offline</span>
                                <div class="flex items-center text-yellow-500">
                                    <span class="material-symbols-outlined text-sm" data-icon="star"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="text-label-md font-bold ml-1">5.0</span>
                                </div>
                            </div>
                        </div>
                        <h4 class="font-headline-md text-on-surface mb-unit-1 group-hover:text-primary transition-colors">
                            Elena Rodriguez</h4>
                        <div class="flex items-center gap-unit-2 text-on-surface-variant mb-unit-4">
                            <span class="material-symbols-outlined text-sm" data-icon="directions_car">directions_car</span>
                            <span class="text-label-sm">Car • 1,240 Deliveries</span>
                        </div>
                        <div class="pt-unit-4 border-t border-outline-variant/20 flex justify-between items-center">
                            <span class="text-label-sm text-secondary">ID: BR-0433</span>
                            <button class="text-primary font-label-md flex items-center hover:underline">
                                View Stats
                                <span class="material-symbols-outlined text-sm ml-1"
                                    data-icon="chevron_right">chevron_right</span>
                            </button>
                        </div>
                    </div>
                    <!-- Rider 4 -->
                    <div
                        class="bg-surface rounded-2xl p-unit-6 border border-outline-variant/30 rider-card-shadow transition-all group">
                        <div class="flex justify-between items-start mb-unit-4">
                            <div class="relative">
                                <img alt="Rider 4"
                                    class="w-16 h-16 rounded-xl object-cover border-2 border-surface-container"
                                    data-alt="A portrait of a male delivery professional in his 30s. He is outdoors in a urban business district, wearing a sleek black and orange delivery jacket. The lighting is natural morning sun, giving a crisp and clean look. The composition is a modern tight frame, showcasing professional excellence in the logistics industry."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAbYqo98BHddxAZe9U3WuPuz5uH1wfUGwcekVBhwBmVVTh8XkKdPJ_dAjIc0hm0GCyKlVTzhwhlxhVHk7JEXGAN1xUpfV1uAvijAObCWt9QEiWJ25bUPwg5A_j5xNJj8Ca-elKjYqFUR6PLLiv_bZgMhAMN8x_yXubnAq2-07ZbVbaDMyAH009-Y4KifSGIOAoLr7RKeO-drosvRDCROX0dAD054MjVLMkEE8u0nQQ5qEomIaPKDlB2kDL_9A6oz8o0FI9UT82V4Wgt" />
                                <span
                                    class="absolute -bottom-1 -right-1 w-5 h-5 bg-yellow-500 border-2 border-surface rounded-full"></span>
                            </div>
                            <div class="flex flex-col items-end">
                                <span
                                    class="bg-yellow-100 text-yellow-700 text-[10px] font-bold uppercase px-2 py-1 rounded-full mb-1">On
                                    Break</span>
                                <div class="flex items-center text-yellow-500">
                                    <span class="material-symbols-outlined text-sm" data-icon="star"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="text-label-md font-bold ml-1">4.5</span>
                                </div>
                            </div>
                        </div>
                        <h4 class="font-headline-md text-on-surface mb-unit-1 group-hover:text-primary transition-colors">
                            James Wilson</h4>
                        <div class="flex items-center gap-unit-2 text-on-surface-variant mb-unit-4">
                            <span class="material-symbols-outlined text-sm" data-icon="electric_bike">electric_bike</span>
                            <span class="text-label-sm">E-Bike • 158 Deliveries</span>
                        </div>
                        <div class="pt-unit-4 border-t border-outline-variant/20 flex justify-between items-center">
                            <span class="text-label-sm text-secondary">ID: BR-2219</span>
                            <button class="text-primary font-label-md flex items-center hover:underline">
                                View Stats
                                <span class="material-symbols-outlined text-sm ml-1"
                                    data-icon="chevron_right">chevron_right</span>
                            </button>
                        </div>
                    </div>
                    <!-- Duplicate for Grid effect -->
                    <div
                        class="bg-surface rounded-2xl p-unit-6 border border-outline-variant/30 rider-card-shadow transition-all group">
                        <div class="flex justify-between items-start mb-unit-4">
                            <div class="relative">
                                <img alt="Rider 5"
                                    class="w-16 h-16 rounded-xl object-cover border-2 border-surface-container"
                                    data-alt="A close-up shot of a smiling male delivery person with a friendly and trustworthy appearance. He's wearing a branded orange polo shirt. The background is a blurred cityscape with sunny, warm lighting that emphasizes the freshness and velocity pillars of the brand. High-resolution corporate photography style."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBnra1Q-aAxEoxsxuQx80PNnMruHcbc9Hcj0Kzf4LkZ9md8ADYwrlqD0yVnuRxCefNu-h3wKdBOmMhs6f6P4t2iiQdIYsnX4gcKNoLB1KVjUkwT7QTOhoL0oMj5ssMa5tytPkB6rpVw8zj9a7JuTG1lQmDB4q6xtfWzkEd4KrrHNbuj7wrS9huIkyAhZoSXiO4I7BirupfOo7--RaPLJ_LV2nsq8HmpgHrPrmtsmVEIBN0aO15pUZrbTl1dtpl6R4cBdf9vp3YwfqfK" />
                                <span
                                    class="absolute -bottom-1 -right-1 w-5 h-5 bg-green-500 border-2 border-surface rounded-full"></span>
                            </div>
                            <div class="flex flex-col items-end">
                                <span
                                    class="bg-green-100 text-green-700 text-[10px] font-bold uppercase px-2 py-1 rounded-full mb-1">Active</span>
                                <div class="flex items-center text-yellow-500">
                                    <span class="material-symbols-outlined text-sm" data-icon="star"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="text-label-md font-bold ml-1">4.8</span>
                                </div>
                            </div>
                        </div>
                        <h4 class="font-headline-md text-on-surface mb-unit-1 group-hover:text-primary transition-colors">
                            Tariq Ahmed</h4>
                        <div class="flex items-center gap-unit-2 text-on-surface-variant mb-unit-4">
                            <span class="material-symbols-outlined text-sm" data-icon="moped">moped</span>
                            <span class="text-label-sm">Scooter • 560 Deliveries</span>
                        </div>
                        <div class="pt-unit-4 border-t border-outline-variant/20 flex justify-between items-center">
                            <span class="text-label-sm text-secondary">ID: BR-0812</span>
                            <button class="text-primary font-label-md flex items-center hover:underline">
                                View Stats
                                <span class="material-symbols-outlined text-sm ml-1"
                                    data-icon="chevron_right">chevron_right</span>
                            </button>
                        </div>
                    </div>
                    <!-- Add Rider Placeholder Card -->
                    <div
                        class="border-2 border-dashed border-outline-variant/50 rounded-2xl flex flex-col items-center justify-center p-unit-8 hover:bg-surface-container transition-colors group cursor-pointer">
                        <div
                            class="w-12 h-12 rounded-full bg-surface-container-high flex items-center justify-center text-primary mb-unit-4 group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined" data-icon="person_add">person_add</span>
                        </div>
                        <p class="font-headline-md text-on-surface-variant font-semibold">Add New Rider</p>
                        <p class="text-label-sm text-secondary mt-1">Onboard fleet partners</p>
                    </div>
                </div>
                <!-- Live Map Overlay (Initially Hidden) -->
                <div class="hidden h-[600px] w-full rounded-2xl overflow-hidden relative border border-outline-variant/30 shadow-lg"
                    id="liveMap">
                    <img alt="Live Rider Map" class="w-full h-full object-cover" data-location="San Francisco"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAQp4kGBCSxuE1lIVc7ICmqPq-WIN2ZhUPI6UU3-uNMrIxb7IelmvG_G9trr9odRa5qzvt3BavlRLcyBrx7SGDRajJuSiAsundTaMxuOJnwVrIoSzaCYUzgQG9QMb11htbulH17ssRszkPHxUvdwDscdFTV1BH36HfGxi11dO3tWBxZkgxH6zZW8Sb0s0sqWbSfxCxQM6jZbORcczsbuwXEonMprAmK-_c7gQ6jo6qChb0izXQO7rprekPgoBN6jwj84KVTn32bZHXu" />
                    <!-- Map UI Elements -->
                    <div
                        class="absolute top-4 left-4 bg-white/90 backdrop-blur p-4 rounded-xl shadow-md border border-outline-variant/30">
                        <h4 class="font-bold text-on-surface mb-2">Live Tracking</h4>
                        <div class="space-y-2">
                            <div class="flex items-center gap-2">
                                <span class="w-3 h-3 bg-primary rounded-full"></span>
                                <span class="text-label-sm">In Transit (28)</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="w-3 h-3 bg-green-500 rounded-full"></span>
                                <span class="text-label-sm">Idle (14)</span>
                            </div>
                        </div>
                    </div>
                    <!-- Rider Marker Samples -->
                    <div class="absolute top-1/2 left-1/3 -translate-x-1/2 -translate-y-1/2 group">
                        <div
                            class="bg-primary p-1 rounded-full shadow-lg cursor-pointer transform hover:scale-110 transition-transform">
                            <img class="w-8 h-8 rounded-full border-2 border-white"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBUcpPF7-qcvDfCV13W8Ty0dUxXFH0WoD1BUziaPg4ePVZi3uEEDC7c7lP0mXYK7_6At9H4QyC0IDF0tr4siW67zNPiGe4zC2-L2ndVbzC602FX37Z-7gKf6eKQtUkatffBLr22taWdqPFKRaa_4gNDRNSLwOorWoBxbBV_rO_FOxe8tVNwytygMiSV8euxRXXZlWutfDeAO6hqbauMd2IuRmJm7M3WeNUhmJlhTuU2qdpPGuuWDB7J4cK-CzTtwunCNbM07Gc8oE9_" />
                        </div>
                        <div
                            class="hidden group-hover:block absolute bottom-full left-1/2 -translate-x-1/2 mb-2 w-32 bg-white p-2 rounded-lg shadow-xl text-center border border-outline-variant">
                            <p class="text-label-sm font-bold">Sarah Jenkins</p>
                            <p class="text-[10px] text-primary">Heading to Cafe Luna</p>
                        </div>
                    </div>
                    <div class="absolute top-1/4 right-1/4 -translate-x-1/2 -translate-y-1/2 group">
                        <div
                            class="bg-green-500 p-1 rounded-full shadow-lg cursor-pointer transform hover:scale-110 transition-transform">
                            <img class="w-8 h-8 rounded-full border-2 border-white"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuARqXowsV-jMS54f387MnPefGzBlobbDzeuFzOCsutkVnvWtdBMYMgbmlTLEvI37ldXO0b3kqzd7jp4tlwD92gyp78w74rp-fSXjFRE9gzDjAMPqmYj5agwfkoG5LNIG1lhgmDbiJsj-ywtf6I7U09Pj8Cjbe1vbAbjMX_w96k6FAgdhF4qW1OtKX8nk2Qs1imPaC5a-HVS6M5fDdnPblYbm-ViUqa3lGucq_yzxAayNfRlOqGVe6iEII01l_MD4kOuFxZvkfcP0_ky" />
                        </div>
                        <div
                            class="hidden group-hover:block absolute bottom-full left-1/2 -translate-x-1/2 mb-2 w-32 bg-white p-2 rounded-lg shadow-xl text-center border border-outline-variant">
                            <p class="text-label-sm font-bold">Tariq Ahmed</p>
                            <p class="text-[10px] text-green-600">Waiting for Order</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    <script>
            // Simple state management for view toggle
            const listBtn = document.getElementById('listView');
            const mapBtn = document.getElementById('mapView');
            const grid = document.getElementById('ridersGrid');
            const map = document.getElementById('liveMap');

            mapBtn.addEventListener('click', () => {
                grid.classList.add('hidden');
                map.classList.remove('hidden');

                mapBtn.classList.add('bg-primary', 'text-on-primary', 'shadow-sm');
                mapBtn.classList.remove('text-on-surface-variant');

                listBtn.classList.remove('bg-primary', 'text-on-primary', 'shadow-sm');
                listBtn.classList.add('text-on-surface-variant');
            });

            listBtn.addEventListener('click', () => {
                grid.classList.remove('hidden');
                map.classList.add('hidden');

                listBtn.classList.add('bg-primary', 'text-on-primary', 'shadow-sm');
                listBtn.classList.remove('text-on-surface-variant');

                mapBtn.classList.remove('bg-primary', 'text-on-primary', 'shadow-sm');
                mapBtn.classList.add('text-on-surface-variant');
            });

            // Hover effect interaction
            const cards = document.querySelectorAll('.rider-card-shadow');
            cards.forEach(card => {
                card.addEventListener('mouseenter', () => {
                    card.style.transition = 'all 0.3s ease';
                });
            });
        </script>

