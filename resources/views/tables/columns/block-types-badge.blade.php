@php
    $state = collect($getState())->groupBy('type')->map->count();
    $color = $getColor($state);
@endphp

        @foreach($state as $type => $count)
            <x-filament::badge
                :color="$color"
            >
                {{ __($type) }} ({{ $count }})
            </x-filament::badge>
        @endforeach
    </div>
</div>
