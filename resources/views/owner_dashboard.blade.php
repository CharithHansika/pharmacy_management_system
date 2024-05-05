<!DOCTYPE html>
<html>
<head>
    <title>Owner</title>
</head>
<body>

<form method="GET" action="{{ route('add-customer') }}">
    <button type="submit">Add Customer</button>
</form>

<form method="GET" action="{{ route('add-item') }}">
    <button type="submit">Add Item</button>
</form>

<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Log Out</button>
</form>

</body>
</html>
