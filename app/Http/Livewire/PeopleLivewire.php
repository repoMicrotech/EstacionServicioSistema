<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Person;

class PeopleLivewire extends Component
{
    public function render() {
        $this->people = Person::get();
        return view('admin/person/index',['people'=>$this->people,'me'=>'MPER','po'=>'CPER'])->layout('layouts.admin');
    }
}
