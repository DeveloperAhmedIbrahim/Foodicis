<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Receipt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
            color: #333;
        }

        .receipt-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        .total {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="receipt-container">
        <h1>Order Receipt</h1>
        <p><strong>Order Code:</strong> {{ $order->order_code }}</p>
        {{-- <p><strong>Manager ID:</strong> {{ $order->manager_id }}</p> --}}

        <table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Extras</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                    <tr>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['quantity'] }}</td>
                        <td>{{ $item['price'] }} AED</td>
                        <td>
                            @foreach ($item['extras'] as $extra)
                                {{ $extra['name'] }} ({{ $extra['price'] }})<br>
                            @endforeach
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <p><strong>Subtotal:</strong> {{ $subtotal }}</p>
        <p><strong>Tax:</strong> {{ $tax }}</p>
        <p class="total"><strong>Total:</strong> {{ $total }}</p>
    </div>
</body>

</html>
