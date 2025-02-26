<?php

namespace App\Livewire\Admin\Calendar;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.admin')]
class Main extends Component
{
    public function render()
    {
        return view('livewire.admin.calendar.main');
    }
}
