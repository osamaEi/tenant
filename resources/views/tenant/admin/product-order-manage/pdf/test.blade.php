<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Orders Report</h2>

<table>
    <tr>
        <th>Order ID</th>
        <th>Order Name</th>
        <th>Email</th>
        <th>Total Amount</th>
        <th>Status</th>
        <th>Payment Status</th>
        <th>Payment Gateway</th>
    </tr>
    <!-- Add your dynamic data here -->
    @foreach($all_orders as $order)
        <tr>
            <td>{{ $order->id }}</td>
            <td>{{ $order->name }}</td>
            <td>{{ $order->email }}</td>
            <td>{{ $order->total_amount }}</td>
            <td>{{ $order->status }}</td>
            <td>{{ $order->payment_status }}</td>
            <td>{{ $order->payment_gateway }}</td>
        </tr>
    @endforeach

</table>

</body>
</html>
