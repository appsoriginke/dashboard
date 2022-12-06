<div class="px-2 space-y-1">

    @foreach(config('dashboard.navigations') as $name => $navigation)
        @can($navigation['canAccess'])
        <a href="{{ route($navigation['url'] ) }}"
           class="text-{{ config('dashboard.primary-theme-color') }}-100 hover:text-white hover:bg-{{ config('dashboard.hover-theme-color') }}-500 group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md"
           aria-current="page">
            <x-dynamic-component :component="$navigation['icon']" class="h-6 w-6 mr-1" />


            {{ $name }}

        </a>
        @endcan
    @endforeach
</div>
