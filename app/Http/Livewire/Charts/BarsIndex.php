<?php

namespace App\Http\Livewire\Charts;

use App\Models\Balance;
use Livewire\Component;

class BarsIndex extends Component
{
    public function render()
    {
        $balances = Balance::all();

        return view('livewire.charts.bars-index', compact('balances'));

    }
}
