<div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
    @foreach ($tabs as $key)
    <button href="#" class="btn{{ $tab == $key ?' btn-warning':'' }}" wire:click="$set('tab','{{ $key }}')">
        {{ ucfirst($key) }}
    </button>
    @endforeach
</div>
