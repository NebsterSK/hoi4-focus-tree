<div wire:click="toggle" @class([
        'node',
        'selected' => $this->selected,
    ])>
    <p class="mb-0">{{ $this->node->focus->name }}</p>
</div>
