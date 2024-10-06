<div class="form-input form-input--input">
    <label for="{{ $id }}">
        {{ $label }} @if ($required) <sup>*</sup>@endif
    </label>

    <input type="text"
           id="{{ $id }}"
           name="{{ $id }}"
           @if($placeholder )placeholder="{{ $placeholder }}" @endif
           @if($required)required @endif
           @if($disabled)disabled @endif
           wire:model="value" />
</div>
