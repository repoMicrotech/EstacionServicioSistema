<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{!!URL::to('icons/logo.png')!!}" />
  <link rel="icon" type="image/png" href="{!!URL::to('icons/logo.png')!!}" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Grupo Lotus</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link type="text/css" href="{{url('css\MentisMe.css')}}" rel="stylesheet" />
  <link type="text/css" href="{{url('css\datatables.css')}}" rel="stylesheet" />
  <link type="text/css" href="{{url('css\materialdesignicons.min.css')}}" rel="stylesheet" />
  @yield('admincss')
</head>
<?php if(!isset($me)){$me='';} if(!isset($po)){$po='';} ?>
<body>
  @include('alerts.success')
  @include('alerts.alert')
  @include('alerts.error')
  <aside>
    <div class="logo">
      <a href="{{url::to('admin')}}">
        <img src="{!!URL::to('icons/icono.png')!!}"> GRUPO LOTUS
      </a>
    </div>
    <div class="sidebar">
      <ul>
        @foreach (Auth::user()->role->menus() as $menu)
        <li class="nav_menu @if($me == $menu->code){{'active'}}@endif" href="#">
          <a href="#" onclick="return false;">
            <i class="mdi mdi-{{$menu->icon}}"></i><p>{{$menu->label}}</p>
          </a>
          <ul tamano="{{$menu->tamanyo}}">
            @foreach (Auth::user()->role->functionalitiesByMenuCode($menu->code)->where('mostrar',1) as $functionality)
            <li class="{{$functionality->code}}">
              <a class="@if($po == $functionality->code){{'estoy'}}@endif" href="{{url($functionality->path)}}"><i class="mdi mdi-menu-right"></i><p>{{$functionality->label}}</p></a>
            </li>
            @endforeach
          </ul>
        </li>
        @endforeach
      </ul>
    </div>
  </aside>
  <section>
    <nav>
      <div class="nav-menu-btn">
        <a onclick="mostrar_aside();">
          <i class="mdi mdi-menu"></i>
        </a>
      </div>
      <div class="nav-search">
        <input type="text" value="" id="input_buscador" onclick="buscar(this);" class="form-control buscador" placeholder="Buscar..">
        <button type="button" onclick="buscar(this);">
          <i class="mdi mdi-magnify"></i>
        </button>
        <ul id="ul_est">
        </ul>
      </div>
      <div class="nav-log">
        <a onclick="desplegar_log(this);">
          <i class="mdi mdi-account"></i>
        </a>
        <ul>
          <li><a href="{!!URL::to('user/'.Auth::id().'/edit')!!}"><i class="mdi mdi-pencil"></i>Edit profile</a></li>
          <li><a href="{!!URL::to('pass/changePasswordForm')!!}"><i class="mdi mdi-key"></i>Change password</a></li>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
          <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="mdi mdi-logout"></i>Log out</a>
          </li>
        </ul>
      </div>
      <div class="nav-user"><p>{{Auth::user()->name}}</p><p>{{Auth::user()->email}}</p></div>
    </nav>
    <div class="content">
      @yield('content')
    </div>
    <x-jet-dialog-modal wire:model="modalToogle">
      <x-slot name="title">
        @yield('title')
      </x-slot>
      <x-slot name="content">
        @yield('modal')
      </x-slot>
      <x-slot name="footer">
        @if ($accion == 'store')
        <button wire:click="store()" type="button"
        class="btn primary col-4">Registrar</button>
        @else
        <button wire:click="update()" type="button"
        class="btn primary col-4">Actualizar</button>
        @endif
      </x-slot>
    </x-jet-dialog-modal>
  </section>
  <script src="{{url('js/jquery.js')}}"></script>
  <script src="{{url('js/jquery-ui.min.js')}}"></script>
  <script src="{{url('js/datatables.min.js')}}"></script>
  <script src="{{url('js/boot.js')}}"></script>
  <script src="{{url('js/admin.js')}}"></script>
  @yield('adminjs')
  @yield('adminjs2')
</body>
</html>
