<div class="min-h-full"  x-data>
    <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->

    @include('dashboard::layouts._partials._mobile_nav')

    @include('dashboard::layouts._partials._sidabar')
    <div class="lg:pl-64 flex flex-col flex-1">

        <div class="relative z-10 flex-shrink-0 flex h-16 bg-white border-b border-gray-200 lg:border-none"
        >
            <button
                type="button" @click="$dispatch('notify' , {setIsMobile: true})"
                class="px-4 border-r border-gray-200 text-gray-400 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-cyan-500 lg:hidden">
                <span class="sr-only">Open sidebar</span>
                <!-- Heroicon name: outline/menu-alt-1 -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                     stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h8m-8 6h16"/>
                </svg>
            </button>
            @include('dashboard::layouts._partials._header')
        </div>


        <main class="mx-auto container">
            <!-- Page header -->


            {{ $slot }}
        </main>
    </div>

</div>
