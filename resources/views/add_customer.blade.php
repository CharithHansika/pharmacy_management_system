<!DOCTYPE html>
<html>
<head>
    <title>Add customer</title>
</head>
<body>

<form method="POST" action="{{ route('SubmitAddCustomer') }}">
        @csrf

        <div>
            <label for="name">Customer Name:</label>
            <input type="text" size="50" id="name" name="name" required autofocus>
        </div>

        <div>
            <label for="address">Address</label>
            <input type="text" id="address" name="address" placeholder="No.55, Kandy road, Colombo" required>
        </div>

        
        <div>
            <label for="mobile">Mobile Number:</label>
            <input type="text" id="mobile" name="mobile" placeholder="077712456" required>
        </div>

        <button type="submit">Add Customer</button>

       
    </form>

</body>
</html>