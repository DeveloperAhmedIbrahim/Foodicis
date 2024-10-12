<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Purchase Report PDF</title>
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
    <h2 class="text-center mb-4">Date : {{ $start->format('d-m-Y') }} to {{ $end->format('d-m-Y') }} </h2>

    <h2>Purchase Report</h2>
    <table>
        <thead>
            <tr>
                <th>Ingredient</th>
                <th>Purchase Quantity</th>
                <th>Expiry Date</th>
                <th>Amount</th>
                <th>Unit</th>
                <th>Stock Availability</th>
                <th>Weight</th>
                <th>Manager</th>
                <th>Chef</th>
                <th>Purchase Date</th>
            </tr>
        </thead>
        <tbody>
            @php
                $totalQuantity = 0;
                $totalAmount = 0;
                $totalWeight = 0;
            @endphp

            @foreach ($purchases as $purchase)
                @php
                    $totalQuantity += $purchase->purchase_quantity;
                    $totalAmount += $purchase->amount;
                    $totalWeight += $purchase->weight;
                @endphp

                <tr>
                    <td>
                        @php
                            $name = DB::table('ingredient_names')
                                ->where('id', $purchase->ingredient_id)
                                ->pluck('name')
                                ->first();
                        @endphp
                        {{ $name }}
                    </td>
                    <td>{{ $purchase->purchase_quantity }}</td>
                    <td>{{ $purchase->expiry_date }}</td>
                    <td>{{ $purchase->amount }} AED</td>
                    <td>
                        @php
                            $unit = DB::table('units')
                                ->where('id', $purchase->unit_id)
                                ->pluck('unit')
                                ->first();
                        @endphp
                        {{ $unit }}
                    </td>
                    <td>{{ $purchase->stock_availability }}</td>
                    <td>{{ $purchase->weight }}</td>
                    <td>
                        @php
                            $manager = DB::table('managers')
                                ->where('id', $purchase->manager_id)
                                ->pluck('name')
                                ->first();
                        @endphp
                        {{ $manager }}
                    </td>
                    <td>{{ $purchase->chef_id }}</td>
                    <td>{{ $purchase->created_at->format('Y-m-d') }}</td>
                </tr>
            @endforeach

            <!-- Total Row -->
            <tr>
                <td><strong>Total</strong></td>
                <td><strong>{{ $totalQuantity }}</strong> AED</td>
                <td></td> <!-- Empty column for expiry date -->
                <td><strong>{{ $totalAmount }}</strong> AED</td>
                <td></td> <!-- Empty column for unit -->
                <td></td> <!-- Empty column for stock availability -->
                {{-- <td><strong>{{ $totalWeight }}</strong></td> --}}
                <td colspan="4"></td> <!-- Empty columns for manager_id, chef_id, created_at -->
            </tr>
        </tbody>
    </table>
</body>

</html>
