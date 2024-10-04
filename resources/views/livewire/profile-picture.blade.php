<label for="{{ $id }}" class="col-span-full">
    @if ($label)
        <span class="block text-sm font-medium leading-6 text-gray-900">
            {{ $label }}
        </span>
    @endif
    <input type="file"
           id="{{ $id }}"
           name="{{ $id }}"
           @if($required)required @endif
           @if($disabled)disabled @endif
           wire:model="value"
           class="hidden" />

    <div class="mt-2 flex items-center gap-x-3">
        @if ($value instanceof  \Livewire\Features\SupportFileUploads\TemporaryUploadedFile)
            <img src="{{ $value->temporaryUrl() }}" alt="{{ $value->getClientOriginalName() }}" class="h-12 w-12 flex-none rounded-full bg-gray-50" />
        @else
            <svg class="h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
                <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" clip-rule="evenodd" />
            </svg>
        @endif
        <button type="button" class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">{{ $button }}</button>
    </div>
</label>
