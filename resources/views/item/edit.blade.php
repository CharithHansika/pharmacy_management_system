<!DOCTYPE html>
<html>
<head>
    <title>Edit Customer Details</title>
</head>
<body>

<h1>Edit Item Details</h1>

<form method="POST" action="{{ route('item.update', ['id' => $item->id]) }}">
    @csrf
    @method('PUT')

    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $item->name }}" required>
    </div>

    <div>
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" value="{{ $item->quantity }}" required>
    </div>

    <div>
        <label for="price">Price:</label>
        <input type="number" id="price" name="price" value="{{ $item->price }}" required>
    </div>

   

    <button type="submit">Update Item</button>
</form>

</body>
</html>
