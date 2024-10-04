<div class="flex items-center gap-x-3">
    <input type="radio"
           id="{{ $id }}"
           name="{{ $id }}"
           @if($required)required @endif
           @if($disabled)disabled @endif
           wire:model="value"
           class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" />
    @if ($label)
        <label for="{{ $id }}" class="block text-sm font-medium leading-6 text-gray-900">
            {{ $label }}
        </label>
    @endif
</div>
