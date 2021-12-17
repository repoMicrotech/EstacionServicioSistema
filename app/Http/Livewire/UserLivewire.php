<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class UserLivewire extends Component
{
    public function render() {
        $this->users = User::get();
        return view('admin/user/index',['users'=>$this->users,'me'=>'MUSE','po'=>'CUSE'])->layout('layouts.admin');
    }
}
