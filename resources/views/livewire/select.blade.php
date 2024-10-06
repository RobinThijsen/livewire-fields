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
        @foreach($options as $option)
            <option value="{{ is_array($option) ? $option['id'] : $option->id }}">
                @if ($optionLabel)
                    @if (is_array($option))
                        {{ __("$optionLabel.{$option['id']}") }}
                    @else
                        {{ __("$optionLabel.{$option->id}") }}
                    @endif
                @elseif ($optionProp)
                    @if (is_array($option))
                        {{ $option['id'] }}
                    @else
                        {{ $option->{$optionProp} }}
                    @endif
                @endif
            </option>
        @endforeach
    </select>
</div>
