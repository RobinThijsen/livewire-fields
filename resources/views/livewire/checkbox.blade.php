<div class="form-input form-input--checkbox">
    <input type="checkbox"
           id="{{ $id }}"
           name="{{ $id }}"
           @if($required)required @endif
           @if($disabled)disabled @endif
           wire:model="value"
           class="@if($isSwitch)switch @endif" />
    <div>
        <label for="{{ $id }}">
            @if (!$required) (Facultatif) @endif {{ $label }}
        </label>
        @if ($additionalContent)
            <p>
                {{ $additionalContent }}
            </p>
        @endif
    </div>
</div>
