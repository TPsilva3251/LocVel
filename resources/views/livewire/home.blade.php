<div>
    {{-- Título da página --}}
    <title>LocVel - Inicio</title>
    {{--  --}}
    @include('livewire.navbar')

    {{--  --}}

    @if (Auth::user())
        <h1>{{ $rule->name }}</h1>
        {{ Auth::user()->name }}
    @endif
</div>
