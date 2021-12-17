<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Functionality;

class FunctionalityLivewire extends Component
{
    public function render() {
        $this->functionalities = Functionality::get();
        return view('admin/functionality/index',['functionalities'=>$this->functionalities,'me'=>'MFUN','po'=>'CFUN'])->layout('layouts.admin');
    }
}
