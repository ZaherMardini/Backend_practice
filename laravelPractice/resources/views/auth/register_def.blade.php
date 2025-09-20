<x-layout>
    <h2>Register page</h2>
    <form action="{{route("register")}}" method="POST">
        @csrf
        <label for="nm">Name</label>
        <input type="text" id="nm" name="name" value="{{old("name")}}" required>
        <br>
        <label for="em">Email</label>
        <input type="email" id="em" name="email" value="{{old("email")}}" required>
        <br>
        <br>
        <label for="pw">Password</label>
        <input type="password" id="pw" name="password">
        <br>
        <label for="pw">Confirm Password</label>
        <input type="password" id="pw" name="password_confirmation">
        <br>
        <br>
        <input type="submit" value="Register">
        <br>
        <br>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li><br>
            @endforeach
        </ul>
        @endif

    </form>
</x-layout>