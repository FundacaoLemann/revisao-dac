<dl class="my-0 p-1">
    @forelse($publico as $item)
        <dd>{{ $item }}</dd>
    @empty
        <dd>-</dd>
    @endforelse
    @if(!empty($publico_outro)) <dd>{{ $publico_outro }}</dd> @endif
</dl>
