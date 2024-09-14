<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class UserTable extends Component
{
    protected $listeners = [
        'refresh-table' => '$refresh'
    ];

    public $users;

    public function mount() {
        $this->users = User::orderBy('id')->get();
    }

    public function delete($id) {
        $user = User::find($id);

        if(!$user)
            return;

        $user->delete();
        session()->flash('message', 'User successfully deleted.');

        $this->dispatch('refresh-table');
    }

    public function render()
    {
        return view('livewire.user-table');
    }
}
