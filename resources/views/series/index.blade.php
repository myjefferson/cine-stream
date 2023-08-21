<x-layout title="Séries">
    <a href={{route('create')}} class="btn btn-primary">Criar nova série</a>
    <ul class="list-group mt-3">
        @foreach ($series as $serie)
            <li class="list-group-item">{{ $serie }}</li>
        @endforeach
    </ul>

    <script>
        const series = {{ Js::from($series) }}
        console.log(series)
    </script>
</x-layout>
