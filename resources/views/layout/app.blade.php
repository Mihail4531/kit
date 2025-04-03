<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}-{{config('app.name')}}</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body x-data="{ openMenu : false }" :class="openMenu ? 'overflow-hidden' : 'overflow-visible' "  >
    <style>
        [x-cloak] {
          display: none !important;
        }
      </style>



    @include('layout.partials.header')
    {{$slot}}
    @include("layout.partials.footer")

</body>
</html>
