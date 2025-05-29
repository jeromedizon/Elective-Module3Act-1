<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details Page</title>
    <style>
        body { font-family: sans-serif; margin: 20px; }
        nav a { margin-right: 15px; text-decoration: none; color: blue; }
        nav a:hover { text-decoration: underline; }
        .content { margin-top: 20px; }
    </style>
</head>
<body>
    <header>
        <h1>Order Details Page</h1>
        
    </header>

    <div class="content">
        <form>
            <label for="transaction_id">Transaction ID:</label><br>
            <input type="text" id="transaction_id" name="transaction_id"><br><br>
            <input type="submit" value="Submit">
        </form>
    </div>

    <div> <nav>
            <a href="{{ route('customer.page') }}">Customer</a>
            <a href="{{ route('item.page') }}">Item</a>
            <a href="{{ route('order.page') }}">Order</a>
            <a href="{{ route('order.details.page') }}">Order Details</a>
        </nav></div>
</body>
</html>