<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Menu;

class MenuLivewire extends Component
{
	public $menus;
    public $accion = "store";
    
    public function render() {
        $this->menus = Menu::get();
        return view('admin/menu/index',['menus'=>$this->menus,'me'=>'MMEN','po'=>'CMEN'])->layout('layouts.admin');
    }

    public function openModal($accion) {
        $this->accion = $accion;
        $this->modalToogle = true;
        $this->reset('name', 'description', 'complete_price');
        $this->dayCheck = false;
        $this->repeat_price = false;
    }

    public function store(Request $request) {
        Menu::insert(request()->except('_token'));
        Session::flash('success','Menu successfully registered!');
        return redirect('/admin/menu');
    }

    public function show($id) {
    }

    public function edit($id) {
        $menu = Menu::findOrFail($id);
        return view('admin/menu/edit',compact('menu'),['me'=>'MMEN']);
    }

    public function update(Request $request, $id) {
        $data = request()->except(['_token','_method']);
        Menu::where('id',$id)->update($data);
        Session::flash('success','Menu successfully edited!');
        return redirect('/admin/menu');
    }

    public function destroy($id) {
        Menu::destroy($id);
        Session::flash('success','Menu successfully removed!');
        return redirect('/admin/menu');
    }
}
