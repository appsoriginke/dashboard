
<div x-data="{ isMobile: false }"
     @notify.window="isMobile = $event.detail.setIsMobile"

>
    <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
    <div class="relative z-40 lg:hidden" role="dialog" aria-modal="true"

         x-show="isMobile" >

        <div class="fixed inset-0 bg-gray-600 bg-opacity-75"></div>

        <div class="fixed inset-0 flex z-40" >

            <div class="relative flex-1 flex flex-col max-w-xs w-full pt-5 pb-4 bg-{{ config('dashboard.theme-color') }}-700">

                <div class="absolute top-0 right-0 -mr-12 pt-2">
                    <button
                        x-on:click="isMobile = ! isMobile"
                        type="button" class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                        <span class="sr-only">Close sidebar</span>
                        <!-- Heroicon name: outline/x -->
                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <div class="flex-shrink-0 flex items-center px-4">
                    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/easywire-logo-{{ config('dashboard.theme-color') }}-300-mark-white-text.svg" alt="Easywire logo">
                </div>
                <nav
                    class="mt-5 flex-shrink-0 h-full divide-y divide-{{ config('dashboard.theme-color') }}-800 overflow-y-auto" aria-label="Sidebar">
                    <div class="px-2 space-y-1">

                        @include('dashboard::layouts._partials._nav')
                    </div>
                </nav>
            </div>

            <div class="flex-shrink-0 w-14" aria-hidden="true" x-show="isMobile">
                <!-- Dummy element to force sidebar to shrink to fit close icon -->
            </div>
        </div>
    </div>
</div>

