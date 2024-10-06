<div class="form-input form-input--select">
    @if ($label)
        <label for="{{ $id }}">
            {{ $label }} @if($required) <sup>*</sup> @endif
        </label>
    @endif

    <select id="{{ $id }}"
            name="{{ $id }}"
            @if($required)required @endif
            @if($disabled)disabled @endif
            wire:model="value">
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
