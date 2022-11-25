<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>

<body class="bg-blue-600 font-[Poppins]">
    @include('backend.layouts.sidebar')

    @yield('dashboard_content')

    <script>
        document.getElementById('toggle-btn').addEventListener('click', () => {
            document.getElementById('dashsidebar').classList.toggle('left-[-300px]');
        });

        document.getElementById('toggle-btn2').addEventListener('click', () => {
            document.getElementById('dashsidebar').classList.toggle('left-[-300px]');
        });
    </script>

</body>

</html>
