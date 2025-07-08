<form action="{{route('login')}}" method="post">
    @csrf
    Email-address:<br>
    <input type="email" name="email"><br>
    Password:<br>
    <input type="password" name="password"><br>
    <input type="submit" name="submit" value="Save">
</form>

