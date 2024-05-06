<!DOCTYPE html>
<html>
<head>
    <title>Edit Customer Details</title>
</head>
<body>

<h1>Edit Customer Details</h1>

<form method="POST" action="{{ route('customer.update', ['id' => $customer->id]) }}">
    @csrf
    @method('PUT')

    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $customer->name }}" required>
    </div>

    <div>
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" value="{{ $customer->address }}" required>
    </div>

    <div>
        <label for="mobile">Mobile:</label>
        <input type="text" id="mobile" name="mobile" value="{{ $customer->mobile }}" required>
    </div>

    <!-- Add more fields as needed -->

    <button type="submit">Update Details</button>
</form>

</body>
</html>
