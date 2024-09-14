<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateEditUserForm extends Component
{
    public $id;

    public $name;
    public $email;
    public $password;

    public function save() {
        if (!$this->id) {
            $data = $this->validate([
                'name' => ['required', 'min:4', 'max:255'],
                'email' => ['required', 'email', 'unique:users,email'],
                'password' => ['required', 'min:8', 'max:255'],
            ]);

            User::create($data);

            session()->flash('message', 'User successfully created.');
        } else {
            $data = $this->validate([
                'name' => ['required', 'min:4', 'max:255'],
                'email' => ['required', 'email', 'unique:users,email,'.$this->id],
                'password' => ['nullable', 'min:8', 'max:255'],
            ]);

            $data = array_filter($data);

            User::find($this->id)
                ->update($data);

            session()->flash('message', 'User successfully edited.');

            $this->dispatch('refresh-table');
            $this->reset();
        }
    }

    #[On('edit-user')]
    public function edit($id) {
        $user = User::find($id);

        $this->fill($user);
    }

    public function cancleEdit() {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.create-edit-user-form');
    }
}
