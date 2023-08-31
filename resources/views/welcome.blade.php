<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @livewireStyles
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    @vite(['resources/css/app.css','resources/js/app.js'])

</head>

<body class="antialiased">
    <div>
        @livewire('nav', key('nav'))
    </div>
    <div class="flex-row">
        <div>
            @livewire('side', key('side'))
        </div>
        <div>
            @livewire('main', key('main'))
        </div>
    </div>
    @livewireScriptConfig

</body>

</html>