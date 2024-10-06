<div class="form-input form-input--input" x-data="{ show: false }">
    <label for="{{ $id }}">
        {{ $label }} @if ($required) <sup>*</sup>@endif
    </label>

    <input x-bind:type="show ? 'text' : 'password'"
           id="{{ $id }}"
           name="{{ $id }}"
           @if($placeholder )placeholder="{{ $placeholder }}" @endif
           @if($required)required @endif
           @if($disabled)disabled @endif
           wire:model="value" />

    @if ($withShowContent)
        <button type="button" x-on:click="show = !show">
            {!! $icon !!}
        </button>
    @endif
</div>
