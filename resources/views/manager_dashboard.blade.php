<!DOCTYPE html>
<html>
<head>
    <title>Manager</title>
</head>
<body>

<h1>Customers List</h1>
    <ul>
        @foreach ($customers as $customer)
            <li>Name: {{ $customer->name }}</li>
            <li>Address: {{ $customer->address }}</li>
            <li>Mobile Number: {{ $customer->mobile }}</li>

            <!-- Link to edit customer details -->
            <a href="{{ route('customer.edit', ['id' => $customer->id]) }}">Edit</a>

            <!-- Form for deleting customer data -->
            <form method="POST" action="{{ route('customer.delete', ['id' => $customer->id]) }}" style="display:inline">
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
