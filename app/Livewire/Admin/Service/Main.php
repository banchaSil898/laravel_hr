<?php

namespace App\Livewire\Admin\Service;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.admin')]
class Main extends Component
{
    public function render()
    {
        return view('livewire.admin.service.main');
    }
}
