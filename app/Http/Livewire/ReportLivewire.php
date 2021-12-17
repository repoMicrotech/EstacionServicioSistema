<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Report;

class ReportLivewire extends Component
{
    public function render() {
        $this->reports = Report::get();
        return view('admin/report/index',['reports'=>$this->reports,'me'=>'MREP','po'=>'CREP'])->layout('layouts.admin');
    }
}
