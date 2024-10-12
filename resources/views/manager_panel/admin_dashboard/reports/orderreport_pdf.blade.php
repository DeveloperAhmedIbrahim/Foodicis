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
    <h2 class="text-center mb-4">{{$start->format('d-m-Y')}} to {{$end->format('d-m-Y')}} </h2>

    <h2>Order Report</h2>
    <table>
        <thead>
            <tr>
                <th>Manager Name </th>
                <th>Sub-Total</th>
                <th>Tax</th>
                <th>Total</th>
                <th>Status</th>
                <th>Order code</th>
                <th>Created At</th>

            </tr>
        </thead>
        <tbody>
            @php
                $totalSubtotal = 0;
                $totalTax = 0;
                $totalAmount = 0;
            @endphp
            @foreach ($orders as $order)
                @php
                    $totalSubtotal += $order->subtotal;
                    $totalTax += $order->tax;
                    $totalAmount += $order->total;
                @endphp
                <tr>
                    <td>
                        @php
                            $manager = DB::table('managers')
                                ->where('id', $order->manager_id)
                                ->pluck('name')
                                ->first();
                        @endphp
                        {{ $manager }}
                    </td>

                    <td>{{ $order->subtotal }}</td>
                    <td>{{ $order->tax }}</td>
                    <td>{{ $order->total }}</td>
                    <td>
                        @if ($order->status == '1')
                            <span class="badge bg-success">Completed</span>
                        @elseif ($order->status == '2')
                            <span class="badge bg-warning">Pending</span>
                        @elseif($order->status == '3')
                            <span class="badge bg-danger">Cancelled</span>
                        @else
                            <span class="badge bg-primary">Active</span>
                        @endif
                    </td>
                    <td>{{ $order->order_code }}</td>
                    <td>{{ $order->created_at->format('Y-m-d') }}</td>
                </tr>
            @endforeach
            <tr>
                <td><strong>Total</strong></td>
                <td><strong>{{ $totalSubtotal }}</strong></td>
                <td><strong>{{ $totalTax }}</strong></td>
                <td><strong>{{ $totalAmount }}</strong></td>
                <td colspan="3"></td> <!-- Empty columns for other fields -->
            </tr>
        </tbody>
    </table>
</body>

</html>
