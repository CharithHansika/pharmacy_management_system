<!DOCTYPE html>
<html>
<head>
    <title>Manager</title>
</head>
<body>

<form method="GET" action="{{ route('show-customer') }}">
    <button type="submit">Customers</button>
</form>

<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Log Out</button>
</form>

</body>
</html>
