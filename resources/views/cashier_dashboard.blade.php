<!DOCTYPE html>
<html>
<head>
    <title>Cashier</title>
</head>
<body>

<h1>Customers List</h1>
    <ul>
        @foreach ($items as $item)
            <li>Name: {{ $item->name }}</li>
            <li>Quantity: {{ $item->quantity }}</li>
            <li>Price: {{ $item->price }}</li>

            <a href="{{ route('item.edit', ['id' => $item->id]) }}">Edit</a>

            <!-- Form for deleting customer data -->
            <form method="POST" action="{{ route('item.delete', ['id' => $item->id]) }}" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit">Delete Data</button>
            </form>

        @endforeach
    </ul>

<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Log Out</button>
</form>

</body>
</html>
