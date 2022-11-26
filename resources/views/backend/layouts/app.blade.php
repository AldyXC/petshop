<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>

    {{-- icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>

<body class="bg-gray-200 font-[Poppins]">
    <div class="flex flex-row justify-between">

        @include('backend.layouts.sidebar')

        @yield('dashboard_content')

    </div>

    <script>
        document.getElementById('toggle-btn').addEventListener('click', () => {
            document.getElementById('dashsidebar').classList.toggle('hidden');
        });

        document.getElementById('toggle-btn2').addEventListener('click', () => {
            document.getElementById('dashsidebar').classList.toggle('hidden');
        });
    </script>
</body>

</html>
