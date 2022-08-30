@if (searching($search) && isset($total_search))
<small>{{ count($data) == 0 ? 0 : $offset + 1 }} to {{ count($data) + $offset }} of {{ $total_search }} entries (filtered from {{ $total }} total)&nbsp;</small>
@else
{{ count($data) == 0 ? 0 : $offset + 1 }} to {{ count($data) + $offset }} of {{ $total }} entries&nbsp;
@endif
<div class="btn-group">
    <button {{ $offset == 0 ? 'disabled' : '' }} type="button" class="btn btn-default btn-sm" wire:click="toggle('prev')">
        <i class="fas fa-chevron-left"></i>
    </button>
    <button {{ count($data) + $offset == $total ? 'disabled' : '' }} type="button" class="btn btn-default btn-sm" wire:click="toggle('next')">
        <i class="fas fa-chevron-right"></i>
    </button>
    <button type="button" class="btn btn-default btn-sm" wire:click="$refresh()">
        <i class="fas fa-sync-alt"></i>
    </button>
    &nbsp;
    <input wire:model.debounce.500ms="search" class="form-control form-control-sm" placeholder="Search .."> &nbsp;
</div>
