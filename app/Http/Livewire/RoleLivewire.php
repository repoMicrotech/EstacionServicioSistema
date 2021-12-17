<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Role;

class RoleLivewire extends Component
{
    public function render() {
        $this->Roles = Role::get();
        return view('admin/role/index',['Roles'=>$this->Roles,'me'=>'MROL','po'=>'CROL'])->layout('layouts.admin');
    }
}
