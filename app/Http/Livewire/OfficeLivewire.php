<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Office;

class OfficeLivewire extends Component
{
    public function render() {
        $this->offices = Office::get();
        return view('admin/office/index',['offices'=>$this->offices,'me'=>'MOFF','po'=>'COFF'])->layout('layouts.admin');
    }
}
