<div class="sm:col-span-4">
    @if ($label)
        <label for="{{ $id }}" class="block text-sm font-medium leading-6 text-gray-900">
            {{ $label }}
        </label>
    @endif

    <div class="mt-2">
        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
            @if ($prepend)
                <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">
                    {{ $prepend }}
                </span>
            @endif
            <input type="text"
                   name="{{ $id }}"
                   id="{{ $id }}"
                   @if($placeholder)placeholder="{{ $placeholder }}" @endif
                   @if($required)required @endif
                   @if($disabled)disabled @endif
                   wire:model="value"
                   class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" />
        </div>
    </div>
</div>
