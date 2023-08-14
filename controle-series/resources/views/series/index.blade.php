<x-layout title="Séries">
    <a href="/series/criar" class="btn btn-dark mb-2">Adicionar</a>
    <ul>
        @foreach ($series as $serie)
            <!-- sintaxe de objeto -->
            <li class="list-group-item">{{ $serie-> nome }}</li>
        @endforeach
    </ul>
    @{{ nome }}
</x-layout>

