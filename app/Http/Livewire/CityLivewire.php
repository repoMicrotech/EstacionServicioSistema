<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\City;

class CityLivewire extends Component
{
    public function render() {
        $this->cities = City::get();
        return view('admin/city/index',['cities'=>$this->cities,'me'=>'MCIT','po'=>'CCIT'])->layout('layouts.admin');
    }
}
