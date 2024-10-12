<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sales Report PDF</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>

<body>
    <h2 class="text-center mb-4">$start->format('d-m-Y') to $end->format('d-m-Y') </h2>

    <h2>Sales Report</h2>
    <table>
        <thead>
            <tr>
                <th>Order ID </th>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Extra Item</th>
                <th>Extra item Price</th>
                <th>Manager Name</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            @php
                // Initialize total variables
                $totalQuantity = 0;
                $totalPrice = 0;
                $totalExtraItemPrice = 0;
            @endphp
            @foreach ($sales as $sale)
                <tr>
                    <td>
                        @php
                            $code = DB::table('orders')
                                ->where('id', $sale->order_id)
                                ->pluck('order_code')
                                ->first();
                        @endphp
                        {{ $code }}</td>
                    <td>
                        @php
                            $ingr = DB::table('ingredient_names')
                                ->where('id', $sale->product_id)
                                ->pluck('name')
                                ->first();
                        @endphp
                        {{ $ingr }}</td>

                    <td>{{ $sale->quantity }}</td>
                    <td>{{ $sale->price }} AED</td>

                    <td>{{ $sale->extra_item }}</td>
                    <td>{{ $sale->extra_item_price }} AED</td>
                    <td>
                        @php
                            $manager = DB::table('managers')
                                ->where('id', $sale->manager_id)
                                ->pluck('name')
                                ->first();
                        @endphp
                        {{ $manager }}
                    </td>
                    <td>{{ $sale->created_at->format('Y-m-d') }}</td>
                </tr>
                @php
                    // Add the current sale's values to the total
                    $totalQuantity += $sale->quantity;
                    $totalPrice += $sale->price;
                    $totalExtraItemPrice += $sale->extra_item_price;
                @endphp
            @endforeach
            <tr>
                <td colspan="2"><strong>Total:</strong></td>
                <td><strong>{{ $totalQuantity }}</strong> AED</td>
                <td><strong>{{ $totalPrice }}</strong> AED</td>
                <td></td>
                <td><strong>{{ $totalExtraItemPrice }} </strong>AED</td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</body>

</html>
