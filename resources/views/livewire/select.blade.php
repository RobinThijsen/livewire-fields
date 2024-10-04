<div class="sm:col-span-3">
    @if ($label)
        <label for="{{ $id }}" class="block text-sm font-medium leading-6 text-gray-900">
            {{ $label }}
        </label>
    @endif

    <div class="mt-2">
        <select id="{{ $id }}"
                name="{{ $id }}"
                @if($required)required @endif
                @if($disabled)disabled @endif
                wire:model="value"
                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
            @foreach($items as $item)
                <option value="{{ is_array($item) ? $item['id'] : $item->id }}">
                    @if ($optionLabel)
                        @if (is_array($item))
                            {{ __("$optionLabel.{$item['id']}") }}
                        @else
                            {{ __("$optionLabel.{$item->id}") }}
                        @endif
                    @elseif ($optionProp)
                        @if (is_array($item))
                            {{ $item['id'] }}
                        @else
                            {{ $item->{$optionProp} }}
                        @endif
                    @endif
                </option>
            @endforeach
        </select>
    </div>
</div>
