<div wire:ignore.self class="modal fade" id="modal-confirm" role="dialog" data-backdrop="static" data-keyboard="false" aria-labelledby="modal-confirmLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-confirmLabel">{{ ucfirst($action) }} {{ $module }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    Are you sure you want to {{ $action }} this {{ $module }} <b>{{ $name }}</b> ?
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No, cancel</button>
                <button type="submit" wire:click="delete" class="btn btn-primary">Yes, delete</button>
            </div>
        </div>
    </div>
</div>

{{-- wire:click="resetFields" --}}
