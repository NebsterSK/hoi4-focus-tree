<div wire:click="$toggle('selected')">
    <p>{{ $this->node->focus->name . ' ' . ($this->selected ? '1' : '') }}</p>
</div>
