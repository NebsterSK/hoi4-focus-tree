<?php

namespace App\Livewire;

use App\Models\Country;
use Livewire\Component;

class FocusTree extends Component
{
    protected Country $country;

    public function mount(): void
    {
        $this->country = Country::with('nodes.focus')->find(1);
    }
}
