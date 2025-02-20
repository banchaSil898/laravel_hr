<?php

namespace App\Livewire\Emp\Dashboard;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.emp')]
class Main extends Component
{
    public function render()
    {
        return view('livewire.emp.dashboard.main');
    }
}
