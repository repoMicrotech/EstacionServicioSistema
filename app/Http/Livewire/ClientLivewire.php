<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Client;

class ClientLivewire extends Component
{
    public function render() {
        $this->clients = Client::get();
        return view('admin/menu/index',['clients'=>$this->clients,'me'=>'MCLI','po'=>'CCLI'])->layout('layouts.admin');
    }
}
