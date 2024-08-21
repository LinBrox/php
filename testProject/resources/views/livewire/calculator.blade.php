<div class="max-w-md mx-auto p-6 bg-white dark:bg-gray-800 shadow-lg rounded-lg">
    <h2 class="text-2xl font-semibold mb-4 text-gray-900 dark:text-gray-100">Livewire Calculator</h2>

    <div class="mb-4">
        <input type="number" wire:model="firstNumber" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 rounded-lg">
    </div>

    <div class="mb-4">
        <input type="number" wire:model="secondNumber" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 rounded-lg">
    </div>

    <div class="mb-4">
        <select wire:model="operation" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 rounded-lg">
            <option value="+">Addition</option>
            <option value="-">Subtraction</option>
            <option value="*">Multiplication</option>
            <option value="/">Division</option>
        </select>
    </div>

    <button wire:click="calculate" class="w-full px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-blue-600 dark:hover:bg-blue-700">
        Calculate
    </button>

    <div class="mt-4">
        <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-100">Result: {{ $result }}</h3>
    </div>
</div>
