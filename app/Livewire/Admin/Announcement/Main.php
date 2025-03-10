<?php

namespace App\Livewire\Admin\Announcement;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.admin')]
class Main extends Component
{
    public function render()
    {
        return view('livewire.admin.announcement.main');
    }
}
