@props(['cor' => 'primary', 'texto' => 'Clique'])

<a {{ $attributes->merge(['class' => "btn btn-$cor"]) }}>
    {{ $texto }}
</a>

@props(['cor' => 'primary', 'texto' => 'OK', 'href' => '#'])

<a href="{{ $href }}" class="btn btn-{{ $cor }}">
    {{ $texto }}
</a>
