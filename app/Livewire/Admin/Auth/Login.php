<?php

namespace App\Livewire\Admin\Auth;

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.guest')]// ใช้ layout สำหรับ admin
class Login extends Component
{
    public LoginForm $form;

    public function Login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirectIntended(route('admin.dashboard'), navigate: true);
    }
    
    public function render()
    {
        return view('livewire.admin.auth.login');
    }
}
