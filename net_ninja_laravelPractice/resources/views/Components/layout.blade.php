<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- @vite("resources/css/app.css"); --}}
    <title>Main layout</title>
</head>
<body>
    <h1>Watch the master layout</h1>
    <header>
        <nav>
        <h1>
            <a href="{{route("tests.index")}}">All niggas</a>
            <a href="{{route("tests.create")}}">Add new nigga</a>
            <a href="{{route("login.show")}}">Login</a>
            <a href="{{route("register.show")}}">Register</a>
            <form action="{{route("logout")}}" method="POST">
                @csrf
                <button>Logout</button>
            </form>
        </h1>
        </nav>
    </header>
    <main>{{$slot}}</main>
</body>
</html>