<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class UserList extends Component
{
    // public $users;
    // public function mount()
    // {
    //     $this->users = User::all();
    // }

    use WithPagination;

    public function render()
    {
        $users = User::paginate(10);
        return view('livewire.user-list', compact('users'));
    }
}
