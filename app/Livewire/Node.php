<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Node as NodeModel;

class Node extends Component
{
    public bool $selected = false;

    public NodeModel $node;

    public function mount(NodeModel $node): void
    {
        $this->node = $node;
    }

    public function toggle(): void
    {
        $this->selected = ! $this->selected;

        $this->dispatch('nodeToggled',
            selected: $this->selected,
            duration: $this->node->focus->duration
        );
    }
}
