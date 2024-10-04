<div class="relative flex gap-x-3">
    <div class="flex h-6 items-center">
        <input type="checkbox"
               id="{{ $id }}"
               name="{{ $id }}"
               @if($required)required @endif
               @if($disabled)disabled @endif
               wire:model="value"
               class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600" />
    </div>
    <div class="text-sm leading-6">
        @if ($label)
            <label for="comments" class="font-medium text-gray-900">
                {{ $label }}
            </label>
        @endif
        @if ($additionalContent)
            <p class="text-gray-500">
                {{ $additionalContent }}
            </p>
        @endif
    </div>
</div>
