<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Laravel website | {{ $title ?? '' }}</title>
    <meta name="description" content="{{ $metaDescription ?? '' }}" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-layouts.navigation />

    @if (session('status'))
        <h5>{{ session('status') }}</h5>
    @endif

    {{ $slot }}
</body>
</html>
