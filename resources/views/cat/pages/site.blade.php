<x-filament-panels::page>
    <form wire:submit="save">
        {{ $this->form }}
        <x-filament::button type="submit">
            {{ __('cat/site.action.save') }}
        </x-filament::button>
    </form>
</x-filament-panels::page>
