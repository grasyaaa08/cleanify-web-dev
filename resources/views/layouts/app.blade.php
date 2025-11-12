<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title') - Cleanify</title>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<header>
    <span style="color:#F5A623; font-weight:bold;">CLEANIFY</span>
    @auth
        <form action="{{ route('logout') }}" method="POST" style="display:inline; float:right; margin-right:20px;">
            @csrf
            <button type="submit" class="green">Logout</button>
        </form>
    @endauth
</header>

@yield('content')

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>