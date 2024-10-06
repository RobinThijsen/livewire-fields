<div class="form-input form-input--radio">
    <input type="radio"
           id="{{ $id }}"
           name="{{ $id }}"
           @if($required)required @endif
           @if($disabled)disabled @endif
           wire:model="value" />
    @if ($label)
        <label for="{{ $id }}">
            {{ $label }} @if($required) <sup>*</sup> @endif
        </label>
    @endif
</div>
