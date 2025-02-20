<?php

namespace App\Livewire\Emp\Auth;

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.guest')]// ใช้ layout สำหรับ employee
class Login extends Component
{
    public LoginForm $form;

    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirectIntended(route('emp.dashboard'), navigate: true);
    }

    public function render()
    {
        return view('livewire.emp.auth.login');
    }
}
