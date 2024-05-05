<!DOCTYPE html>
<html>
<head>
    <title>Cashier</title>
</head>
<body>

<form method="GET" action="{{ route('show-item') }}">
    <button type="submit">Items</button>
</form>

<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Log Out</button>
</form>

</body>
</html>
