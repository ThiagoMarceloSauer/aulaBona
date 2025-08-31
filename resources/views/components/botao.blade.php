@props(['cor' => 'primary', 'texto' => 'Clique'])

<a {{ $attributes->merge(['class' => "btn btn-$cor"]) }}>
    {{ $texto }}
</a>
