<!-- Static sidebar for desktop -->
<div class="hidden lg:flex lg:w-64 lg:flex-col lg:fixed lg:inset-y-0">
    <!-- Sidebar component, swap this element with another sidebar if you like -->
    <div class="flex flex-col flex-grow bg-{{ config("dashboard.primary-theme-color") }}-600 pt-5 pb-4 overflow-y-auto">
        <div class="flex items-center flex-shrink-0 px-2 text-white font-extrabold text-2xl">
            {{ config('dashboard.app_name') }}
            </div>

        <nav class="mt-5 flex-1 flex flex-col divide-y divide-cyan-800 overflow-y-auto" aria-label="Sidebar">
            <div class="px-2 space-y-1">
                @include('dashboard::layouts._partials._nav')
            </div>
        </nav>
    </div>
</div>
