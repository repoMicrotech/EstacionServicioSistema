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
  <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet">
  <link type="text/css" href="{{url('css\materialdesignicons.min.css')}}" rel="stylesheet" />
  <link type="text/css" href="{{url('css\datatables.css')}}" rel="stylesheet" />
  <link type="text/css" href="{{url('css\MentisMe.css')}}" rel="stylesheet" />

</head>
<?php if(!isset($me)){$me='';} if(!isset($po)){$po='';} ?>
<body>
  <div id="app" {{--class="content"--}}>
  </div>
  <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
  <script src="{{url('js/jquery.js')}}"></script>
  <script src="{{url('js/jquery-ui.min.js')}}"></script>
  <script src="{{url('js/datatables.min.js')}}"></script>
  <script src="{{url('js/boot.js')}}"></script>
  <script src="{{url('js/admin.js')}}"></script>

</body>
</html>
