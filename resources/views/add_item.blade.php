<!DOCTYPE html>
<html>
<head>
    <title>Add Item</title>
</head>
<body>

<form method="POST" action="{{ route('SubmitAddItem') }}" enctype="multipart/form-data">
        @csrf

        <div>
            <label for="name">Item Name:</label>
            <input type="text" size="50" id="name" name="name" required>
        </div>

        <div>
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" required>
        </div>

        
        <div>
            <label for="price">Price:</label>
            <input type="text" id="price" name="price" placeholder="price for 1pcs" required>
        </div>

        <button type="submit">Add Item</button>

       
    </form>

</body>
</html>