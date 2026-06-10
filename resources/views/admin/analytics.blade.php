@extends('admin.layouts.app')

@section('content')
    
            <!-- Revenue Header -->
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-unit-8 gap-4">
                <div>
                    <h2 class="font-headline-lg text-headline-lg text-on-surface">Revenue &amp; Payouts</h2>
                    <p class="font-body-md text-body-md text-on-surface-variant">Financial overview</p>
                </div>
                <div class="flex gap-3">
                    <button
                        class="flex items-center gap-2 px-unit-4 py-2 border border-outline rounded-lg font-label-md text-label-md text-on-surface-variant hover:bg-surface-container transition-colors">
                        <span class="material-symbols-outlined">calendar_month</span>
                        Last 15 Days
                    </button>
                    <button
                        class="flex items-center gap-2 px-unit-6 py-2 bg-primary text-on-primary rounded-lg font-label-md text-label-md hover:brightness-110 shadow-sm active:scale-95 transition-all">
                        <span class="material-symbols-outlined">download</span>
                        Export Financials
                    </button>
                </div>
            </div>
            <!-- Metric Bento Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter mb-unit-8">
                <!-- Total Net Earnings -->
                <div
                    class="bento-card bg-surface-container-lowest p-unit-6 rounded-xl border border-outline-variant flex flex-col justify-between h-48">
                    <div class="flex justify-between items-start">
                        <div class="w-12 h-12 rounded-full bg-primary-fixed flex items-center justify-center">
                            <span class="material-symbols-outlined text-primary">account_balance_wallet</span>
                        </div>
                        <span class="text-green-600 font-label-md text-label-md flex items-center gap-1">
                            <span class="material-symbols-outlined text-sm">trending_up</span>
                            +12.5%
                        </span>
                    </div>
                    <div>
                        <p class="font-label-md text-label-md text-on-surface-variant">Total Net Earnings</p>
                        <h3 class="font-display-lg text-display-lg text-on-surface mt-1">$42,850.20</h3>
                    </div>
                </div>
                <!-- Pending Payouts -->
                <div
                    class="bento-card bg-surface-container-lowest p-unit-6 rounded-xl border border-outline-variant flex flex-col justify-between h-48">
                    <div class="flex justify-between items-start">
                        <div class="w-12 h-12 rounded-full bg-surface-container-highest flex items-center justify-center">
                            <span class="material-symbols-outlined text-primary">pending_actions</span>
                        </div>
                    </div>
                    <div>
                        <p class="font-label-md text-label-md text-on-surface-variant">Pending Payouts</p>
                        <div class="flex items-end gap-2">
                            <h3 class="font-display-lg text-display-lg text-on-surface mt-1">$8,244.50</h3>
                            <p class="text-label-sm text-label-sm text-on-surface-variant mb-2">Next: Sep 20</p>
                        </div>
                    </div>
                </div>
                <!-- Platform Fees -->
                <div
                    class="bento-card bg-surface-container-lowest p-unit-6 rounded-xl border border-outline-variant flex flex-col justify-between h-48 relative overflow-hidden">
                    <div class="absolute -right-4 -top-4 w-32 h-32 opacity-10">

                    </div>
                    <div class="flex justify-between items-start">
                        <div class="w-12 h-12 rounded-full bg-secondary-container flex items-center justify-center">
                            <span class="material-symbols-outlined text-secondary">percent</span>
                        </div>
                    </div>
                    <div>
                        <p class="font-label-md text-label-md text-on-surface-variant">Avg. Platform Fee</p>
                        <h3 class="font-display-lg text-display-lg text-on-surface mt-1">14.2%</h3>
                        <p class="text-label-sm text-label-sm text-on-surface-variant">-$6,120.00 this period</p>
                    </div>
                </div>
            </div>
            <!-- Transaction Table Section -->
            <div class="bg-surface-container-lowest rounded-xl border border-outline-variant overflow-hidden shadow-sm">
                <div
                    class="p-unit-6 border-b border-outline-variant flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
                    <h4 class="font-headline-md text-headline-md text-on-surface">Recent Transactions</h4>
                    <div class="flex gap-2 w-full md:w-auto">
                        <div class="relative flex-1 md:flex-none">
                            <select
                                class="appearance-none w-full md:w-48 pl-4 pr-10 py-2 border border-outline-variant rounded-lg font-label-md text-label-md bg-white focus:ring-primary focus:border-primary">
                                <option>All Statuses</option>
                                <option>Paid</option>
                                <option>Pending</option>
                            </select>
                            <span
                                class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none text-on-surface-variant">expand_more</span>
                        </div>
                        <button
                            class="p-2 border border-outline-variant rounded-lg hover:bg-surface-container transition-colors">
                            <span class="material-symbols-outlined">filter_list</span>
                        </button>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead class="bg-surface-container-low">
                            <tr>
                                <th class="px-6 py-4 font-label-md text-label-md text-on-surface-variant">Date</th>
                                <th class="px-6 py-4 font-label-md text-label-md text-on-surface-variant">Order ID</th>
                                <th class="px-6 py-4 font-label-md text-label-md text-on-surface-variant">Customer</th>
                                <th class="px-6 py-4 font-label-md text-label-md text-on-surface-variant">Total Amount</th>
                                <th class="px-6 py-4 font-label-md text-label-md text-on-surface-variant">Net Earnings</th>
                                <th class="px-6 py-4 font-label-md text-label-md text-on-surface-variant">Status</th>
                                <th class="px-6 py-4"></th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-outline-variant">
                            <!-- Table Row 1 -->
                            <tr class="hover:bg-surface-container-low transition-colors group">
                                <td class="px-6 py-5 font-body-md text-body-md">Sep 14, 11:24 AM</td>
                                <td class="px-6 py-5 font-label-md text-label-md text-primary">#BR-88291</td>
                                <td class="px-6 py-5">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="w-8 h-8 rounded-full bg-tertiary-fixed text-on-tertiary-fixed flex items-center justify-center text-[10px] font-bold">
                                            JD</div>
                                        <span class="font-body-md text-body-md">Jordan Davis</span>
                                    </div>
                                </td>
                                <td class="px-6 py-5 font-body-md text-body-md">$154.00</td>
                                <td class="px-6 py-5 font-body-md text-body-md font-semibold text-on-surface">$132.14</td>
                                <td class="px-6 py-5">
                                    <span
                                        class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-[12px] font-semibold border border-green-200">Paid</span>
                                </td>
                                <td class="px-6 py-5 text-right">
                                    <button
                                        class="material-symbols-outlined text-on-surface-variant hover:text-primary transition-colors opacity-0 group-hover:opacity-100">more_vert</button>
                                </td>
                            </tr>
                            <!-- Table Row 2 -->
                            <tr class="hover:bg-surface-container-low transition-colors group">
                                <td class="px-6 py-5 font-body-md text-body-md">Sep 14, 10:45 AM</td>
                                <td class="px-6 py-5 font-label-md text-label-md text-primary">#BR-88289</td>
                                <td class="px-6 py-5">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="w-8 h-8 rounded-full bg-primary-fixed text-on-primary-fixed flex items-center justify-center text-[10px] font-bold">
                                            SC</div>
                                        <span class="font-body-md text-body-md">Sarah Connor</span>
                                    </div>
                                </td>
                                <td class="px-6 py-5 font-body-md text-body-md">$42.50</td>
                                <td class="px-6 py-5 font-body-md text-body-md font-semibold text-on-surface">$36.45</td>
                                <td class="px-6 py-5">
                                    <span
                                        class="px-3 py-1 bg-orange-100 text-orange-700 rounded-full text-[12px] font-semibold border border-orange-200">Pending</span>
                                </td>
                                <td class="px-6 py-5 text-right">
                                    <button
                                        class="material-symbols-outlined text-on-surface-variant hover:text-primary transition-colors opacity-0 group-hover:opacity-100">more_vert</button>
                                </td>
                            </tr>
                            <!-- Table Row 3 -->
                            <tr class="hover:bg-surface-container-low transition-colors group">
                                <td class="px-6 py-5 font-body-md text-body-md">Sep 13, 09:12 PM</td>
                                <td class="px-6 py-5 font-label-md text-label-md text-primary">#BR-88285</td>
                                <td class="px-6 py-5">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="w-8 h-8 rounded-full bg-secondary-fixed text-on-secondary-fixed flex items-center justify-center text-[10px] font-bold">
                                            MK</div>
                                        <span class="font-body-md text-body-md">Marcus Knight</span>
                                    </div>
                                </td>
                                <td class="px-6 py-5 font-body-md text-body-md">$89.20</td>
                                <td class="px-6 py-5 font-body-md text-body-md font-semibold text-on-surface">$76.53</td>
                                <td class="px-6 py-5">
                                    <span
                                        class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-[12px] font-semibold border border-green-200">Paid</span>
                                </td>
                                <td class="px-6 py-5 text-right">
                                    <button
                                        class="material-symbols-outlined text-on-surface-variant hover:text-primary transition-colors opacity-0 group-hover:opacity-100">more_vert</button>
                                </td>
                            </tr>
                            <!-- Table Row 4 -->
                            <tr class="hover:bg-surface-container-low transition-colors group">
                                <td class="px-6 py-5 font-body-md text-body-md">Sep 13, 08:30 PM</td>
                                <td class="px-6 py-5 font-label-md text-label-md text-primary">#BR-88282</td>
                                <td class="px-6 py-5">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="w-8 h-8 rounded-full bg-surface-container-highest text-on-surface flex items-center justify-center text-[10px] font-bold">
                                            LL</div>
                                        <span class="font-body-md text-body-md">Lydia Lane</span>
                                    </div>
                                </td>
                                <td class="px-6 py-5 font-body-md text-body-md">$210.00</td>
                                <td class="px-6 py-5 font-body-md text-body-md font-semibold text-on-surface">$180.18</td>
                                <td class="px-6 py-5">
                                    <span
                                        class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-[12px] font-semibold border border-green-200">Paid</span>
                                </td>
                                <td class="px-6 py-5 text-right">
                                    <button
                                        class="material-symbols-outlined text-on-surface-variant hover:text-primary transition-colors opacity-0 group-hover:opacity-100">more_vert</button>
                                </td>
                            </tr>
                            <!-- Table Row 5 -->
                            <tr class="hover:bg-surface-container-low transition-colors group">
                                <td class="px-6 py-5 font-body-md text-body-md">Sep 13, 07:15 PM</td>
                                <td class="px-6 py-5 font-label-md text-label-md text-primary">#BR-88278</td>
                                <td class="px-6 py-5">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="w-8 h-8 rounded-full bg-error-container text-on-error-container flex items-center justify-center text-[10px] font-bold">
                                            TR</div>
                                        <span class="font-body-md text-body-md">Tim Rivers</span>
                                    </div>
                                </td>
                                <td class="px-6 py-5 font-body-md text-body-md">$32.00</td>
                                <td class="px-6 py-5 font-body-md text-body-md font-semibold text-on-surface">$27.46</td>
                                <td class="px-6 py-5">
                                    <span
                                        class="px-3 py-1 bg-gray-100 text-gray-600 rounded-full text-[12px] font-semibold border border-gray-200">Processing</span>
                                </td>
                                <td class="px-6 py-5 text-right">
                                    <button
                                        class="material-symbols-outlined text-on-surface-variant hover:text-primary transition-colors opacity-0 group-hover:opacity-100">more_vert</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div
                    class="px-6 py-4 bg-surface-container-low flex justify-between items-center border-t border-outline-variant">
                    <p class="font-label-sm text-label-sm text-on-surface-variant">Showing 5 of 124 transactions</p>
                    <div class="flex gap-2">
                        <button
                            class="p-2 border border-outline-variant rounded-lg hover:bg-white transition-colors disabled:opacity-50"
                            disabled="">
                            <span class="material-symbols-outlined">chevron_left</span>
                        </button>
                        <button class="p-2 border border-outline-variant rounded-lg hover:bg-white transition-colors">
                            <span class="material-symbols-outlined">chevron_right</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Payout Schedule Visualizer -->
            <div class="mt-unit-8 grid grid-cols-1 lg:grid-cols-2 gap-gutter">
                <div class="bg-surface-container-lowest p-unit-6 rounded-xl border border-outline-variant">
                    <div class="flex justify-between items-center mb-6">
                        <h4 class="font-headline-md text-headline-md text-on-surface">Weekly Payout Trends</h4>
                        <span class="material-symbols-outlined text-on-surface-variant cursor-help">info</span>
                    </div>
                    <!-- Mini Bar Chart Simulation -->
                    <div class="flex items-end justify-between h-32 gap-2 mt-4 px-2">
                        <div class="w-full bg-primary/20 rounded-t-md relative group" style="height: 40%;">
                            <div
                                class="absolute -top-8 left-1/2 -translate-x-1/2 bg-on-surface text-white text-[10px] px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">
                                $4.2k</div>
                        </div>
                        <div class="w-full bg-primary/20 rounded-t-md relative group" style="height: 65%;">
                            <div
                                class="absolute -top-8 left-1/2 -translate-x-1/2 bg-on-surface text-white text-[10px] px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">
                                $6.8k</div>
                        </div>
                        <div class="w-full bg-primary/20 rounded-t-md relative group" style="height: 55%;">
                            <div
                                class="absolute -top-8 left-1/2 -translate-x-1/2 bg-on-surface text-white text-[10px] px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">
                                $5.9k</div>
                        </div>
                        <div class="w-full bg-primary rounded-t-md relative group" style="height: 90%;">
                            <div
                                class="absolute -top-8 left-1/2 -translate-x-1/2 bg-on-surface text-white text-[10px] px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">
                                $9.1k</div>
                        </div>
                        <div class="w-full bg-primary/40 rounded-t-md relative group" style="height: 75%;">
                            <div
                                class="absolute -top-8 left-1/2 -translate-x-1/2 bg-on-surface text-white text-[10px] px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">
                                $7.4k</div>
                        </div>
                        <div class="w-full bg-primary/20 rounded-t-md relative group" style="height: 45%;">
                            <div
                                class="absolute -top-8 left-1/2 -translate-x-1/2 bg-on-surface text-white text-[10px] px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">
                                $4.8k</div>
                        </div>
                    </div>
                    <div class="flex justify-between mt-2 text-[10px] text-on-surface-variant font-label-md">
                        <span>Mon</span><span>Tue</span><span>Wed</span><span
                            class="text-primary font-bold">Thu</span><span>Fri</span><span>Sat</span>
                    </div>
                </div>
                <div
                    class="bg-surface-container-lowest p-unit-6 rounded-xl border border-outline-variant flex flex-col justify-center">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="p-3 bg-tertiary-fixed text-on-tertiary-fixed rounded-xl">
                            <span class="material-symbols-outlined">account_balance</span>
                        </div>
                        <div>
                            <h4 class="font-headline-md text-headline-md text-on-surface">Verified Payout Method</h4>
                            <p class="font-body-md text-body-md text-on-surface-variant">CHASE BANKING (•••• 4920)</p>
                        </div>
                    </div>
                    <div class="mt-4 pt-4 border-t border-outline-variant">
                        <p class="font-label-md text-label-md text-on-surface-variant mb-2">Automated Payout Schedule</p>
                        <div class="flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></span>
                            <p class="font-body-md text-body-md text-on-surface">Active: Weekly transfers on Fridays at
                                02:00 AM</p>
                        </div>
                    </div>
                </div>
            </div>
        
        @endsection
        <script>
            // Micro-interaction for filter effects
            document.querySelectorAll('tr').forEach(row => {
                row.addEventListener('mouseenter', () => {
                    row.style.transform = 'scale(1.002)';
                });
                row.addEventListener('mouseleave', () => {
                    row.style.transform = 'scale(1)';
                });
            });
        </script>