<div class="max-w-lg mx-auto p-6 bg-gray-100 dark:bg-gray-900 shadow-lg rounded-lg">
    <h1 class="text-2xl font-semibold mb-4 text-white-900 dark:text-white-50">Todo List</h1>

    <div class="flex mb-4">
        <input
            type="text"
            wire:model="newTodo"
            placeholder="Add a new todo"
            class="flex-1 px-4 py-2 border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
        />
        <button
            wire:click="addTodo"
            class="px-4 py-2 bg-blue-600 text-white font-semibold rounded-r-lg hover:bg-blue-700 dark:bg-blue-500 dark:hover:bg-blue-400 focus:outline-none focus:ring-2 focus:ring-blue-500"
        >
            Add
        </button>
    </div>

    <ul class="space-y-2">
        @forelse($todos as $index => $todo)
            <li class="flex justify-between items-center p-2 bg-gray-200 dark:bg-gray-800 rounded-lg shadow">
                <span class="text-gray-800 dark:text-gray-300">{{ $todo }}</span>
                <button
                    wire:click="removeTodo({{ $index }})"
                    class="text-red-600 hover:text-red-700 dark:text-red-400 dark:hover:text-red-300 focus:outline-none"
                >
                    &times;
                </button>
            </li>
        @empty
            <li class="text-gray-600 dark:text-gray-400 text-center">No todos yet!</li>
        @endforelse
    </ul>
</div>
