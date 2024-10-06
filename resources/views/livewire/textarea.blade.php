<div class="form-input form-input--textarea">
    @if ($label)
        <label for="{{ $id }}">
            {{ $label }} @if($required) <sup>*</sup> @endif
        </label>
    @endif
    <textarea id="{{ $id }}"
              name="{{ $id }}"
              @if($placeholder)placeholder="{{ $placeholder }}" @endif
              @if($required)required @endif
              @if($disabled)disabled @endif
              wire:model="value">
        {{ $content }}
    </textarea>

    @if ($infos)
        <p>
            {{ $infos }}
        </p>
    @endif
</div>
