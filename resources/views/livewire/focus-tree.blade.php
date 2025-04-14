<div>
    <h1>Focus Tree</h1>

    @foreach($this->country->nodes as $node)
        <livewire:node wire:key="{{ $node->id }}" :node="$node" />
    @endforeach
</div>