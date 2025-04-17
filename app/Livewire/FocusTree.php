<?php

namespace App\Livewire;

use App\Models\Country;
use Illuminate\Support\Carbon;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Component;

class FocusTree extends Component
{
    public int $nodesSelected = 0;

    public int $duration = 0;

    public Country $country;

    public function mount(): void
    {
        $this->country = Country::with('nodes.focus')->find(1);
    }

    #[Computed]
    public function date(): Carbon
    {
        return Carbon::make('1936-01-01')->addDays($this->duration);
    }

    #[On('nodeToggled')]
    public function onNodeToggled(bool $selected, int $duration): void
    {
        // Selected
        if ($selected) {
            $this->nodesSelected++;

            $this->duration += $duration;
        }
        // Deselected
        else {
            $this->nodesSelected--;

            $this->duration -= $duration;
        }
    }
}
