<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Location;

class LocationLivewire extends Component
{
    public function render() {
        $this->locations = Location::get();
        return view('admin/location/index',['locations'=>$this->locations,'me'=>'MLOC','po'=>'CLOC'])->layout('layouts.admin');
    }
}
