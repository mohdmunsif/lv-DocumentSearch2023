<div>
    <span>{{ $count }}</span>
    <button wire:click="decrement">-</button>
    <button wire:click="increment">+</button>


    <span>{{ $search }}</span>

    <form method="GET" action="">

        <x-input class="ml-3 border-b py-2 px-3 text-grey-darkest shadow-none" name="search" wire:model="search"
            id="search">

        </x-input>
        <x-button class="ml-3" wire:click.prevent="updatevalue">Search</x-button>
    </form>

</div>
