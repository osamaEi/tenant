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
            direction: rtl;
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
        .text-center {
            text-align: center;
        }
        .text-capitalize {
            text-transform: capitalize;
        }
        .alert {
            padding: 6px 12px;
            border-radius: 4px;
            display: inline-block;
        }
        .alert-success {
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
            color: #155724;
        }
        .alert-warning {
            background-color: #fff3cd;
            border: 1px solid #ffeeba;
            color: #856404;
        }
        .alert-danger {
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            color: #721c24;
        }
        .alert-info {
            background-color: #d1ecf1;
            border: 1px solid #bee5eb;
            color: #0c5460;
        }
    </style>
</head>
<body>

<h2>{{__('All Orders')}}</h2>

<table>
    <tr>
        <th>{{__('Order ID')}}</th>
        <th>{{__('Billing Name')}}</th>
        <th>{{__('Billing Email')}}</th>
        <th>{{__('Total Amount')}}</th>
        <th>{{__('Payment Gateway')}}</th>
        <th>{{__('Payment Status')}}</th>
        <th>{{__('Order Status')}}</th>
        <th>{{__('Date')}}</th>
    </tr>
    <!-- Add your dynamic data here -->
    @foreach($all_orders as $data)
        <tr>
            <td class="text-center">{{$data->id}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td>{{amount_with_currency_symbol($data->total_amount)}}</td>
            <td class="text-capitalize">{{$data->checkout_type !== 'cod' ? __($data->payment_gateway) : __('Cash On Delivery')}}</td>
            <td>
                @if($data->payment_status === 'success')
                    <span class="alert alert-success text-capitalize">{{__($data->payment_status)}}</span>
                @else
                    <span class="alert alert-warning text-capitalize">{{__($data->payment_status) ?? __('Pending')}}</span>
                @endif
            </td>
            <td>
                @if($data->status == 'pending')
                    <span class="alert alert-warning text-capitalize">{{__($data->status)}}</span>
                @elseif($data->status == 'cancel')
                    <span class="alert alert-danger text-capitalize">{{__($data->status)}}</span>
                @elseif($data->status == 'in_progress')
                    <span class="alert alert-info text-capitalize">{{__(str_replace('_', ' ',ucwords($data->status)))}}</span>
                @else
                    <span class="alert alert-success text-capitalize">{{__($data->status)}}</span>
                @endif
            </td>
            <td>{{$data->created_at->format('d F Y')}}</td>
        </tr>
    @endforeach

</table>

</body>
</html>
