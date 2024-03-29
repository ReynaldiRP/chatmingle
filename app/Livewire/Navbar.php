<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Navbar extends Component
{
    use LivewireAlert;

    public $isVisible = true;

    /**
     * Method logout for user 
     *
     * @return void
     */
    public function destroy()
    {
        Auth::guard('web')->logout();

        $this->flash('success', 'Logout Success !', [
            'position' => 'top-end',
            'timer' => 3000,
            'toast' => true,
            'timerProgressBar' => true,
        ]);

        $this->redirectRoute('login');
    }

    public function render()
    {
        return view('livewire.navbar');
    }
}
