<div class="row justify-content-between gap-3 mb-4">
    <div class="col">
        <x-button icon="las la-arrow-circle-left me-1 fs-5" href="{{ url()->previous() }}">Back</x-button>
    </div>
    <div class="col">
        <x-button icon="las la-plus-circle me-1" data="{{$data}}" class="float-end">
            Add
        </x-button>
    </div>
</div>