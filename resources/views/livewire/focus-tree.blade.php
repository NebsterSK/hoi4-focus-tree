<div>
    <h1>{{ $this->country->name }}</h1>

    <p>Focuses selected: {{ $this->nodesSelected }}</p>

    <p>Date: {{ $this->date->format('j.n.Y') }} ({{ $this->duration }} days)</p>

    <div id="grid">
        @foreach($this->country->nodes as $node)
            <livewire:node wire:key="{{ $node->id }}" :node="$node" />
        @endforeach
    </div>
</div>