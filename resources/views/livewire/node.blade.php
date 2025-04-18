<div wire:click="toggle"
@class([
    'node',
    'selected' => $this->selected,
])
style="top:{{ $this->node->position_x * 100 }}px;left:{{ $this->node->position_y * 100 }}px;"
>
    <p class="mb-0">{{ $this->node->focus->name }}</p>
</div>
