<div>
    <h2 class="text-xl font-bold mb-4">Livewire Counter</h2>
    <button wire:click="increment" class="bg-blue-500 text-white px-4 py-2 rounded">
        Increment
    </button>
    <button wire:click="decrease" class="bg-blue-500 text-white px-4 py-2 rounded">
        Decrease
    </button>
    <button wire:click="x2" class="bg-blue-500 text-white px-4 py-2 rounded">
        x2
    </button>
    <span class="ml-4 text-lg">{{ $count }}</span>
</div>
