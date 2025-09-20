<x-layout>
    <h2>Login Page</h2>

    <form action="{{route("login")}}" method="POST">
        @csrf
        <label for="em">Email</label>
        <input type="email" id="em" name="email" value="{{old("email")}}" required>
        <br>
        <br>
        <label for="pw">Password</label>
        <input type="password" id="pw" name="password">
        <br>
        <br>
        <input type="submit" value="login">
    </form>
</x-layout>