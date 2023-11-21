<!DOCTYPE html>
<html lang="en" class="h-full bg-white">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('image/favicon-sm.png') }}">

    <title>Booking ApP</title>

    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

</head>

<body class="h-full">
    <div id="ap" class="min-h-screen bg-gray-50 text-gray-700" x-data="{ openHelp: false }">
        <div class=" flex justify-end px-20 pt-10">
            <a href="/" class="flex items-center px-3 py-1 rounded  bg-red-50"><i class='bx bxs-chevron-left'></i>
                Back</a>
        </div>

        {{ $slot }}
    </div>

    @livewireScripts

</body>

</html>
