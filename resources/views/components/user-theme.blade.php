@php $font="font-size: 30.0px" @endphp

<i class="feather feather-sun {{ user()->theme=='dark'?'text-secondary':'text-warning' }}" style="{{ $font }}"></i>
<i wire:click="toggleTheme" class="feather feather-toggle-{{ user()->theme=='dark'?'right':'left' }}" style="{{ $font }}"></i>
<i class="feather feather-moon {{ user()->theme=='dark'?'text-warning':'text-secondary' }}" style="{{ $font }}"></i>
