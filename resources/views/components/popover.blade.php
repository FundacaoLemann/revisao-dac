<ul>
    @forelse($data as $item)
        <li>{{ $item->$field }}</li>
    @empty
        <li>Nada encontrado.</li>
    @endforelse
</ul>
