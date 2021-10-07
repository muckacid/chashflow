<?php

namespace App\Http\Livewire\Balance;

use App\Models\Balance;
use Livewire\Component;
use App\Models\User;

use Livewire\WithPagination;

class BalanceIndex extends Component
{
    use withPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $balances = Balance::paginate();
        return view('livewire.balance.balance-index', compact('balances'));
    }
}
