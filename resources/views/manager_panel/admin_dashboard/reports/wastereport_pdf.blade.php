<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Waste Report PDF</title>
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

    <h2>Wastage Report</h2>
    <table>
        <thead>
            <tr>
                <th>Dish </th>
                <th>Ingredient</th>
                <th>Unit</th>
                <th>Quantity</th>
                <th>purpose</th>
                <th>Chef</th>
                <th>Created At</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($wastes as $waste)
                <tr>
                    <td>
                        @php
                            $dishes = DB::table('dishes')
                                ->where('id', $waste->dish_id)
                                ->pluck('name')
                                ->first();
                        @endphp
                        {{ $dishes }}</td>
                    <td>
                        @php
                            $ingredient_names = DB::table('ingredient_names')
                                ->where('id', $waste->waste_ingr_id)
                                ->pluck('name')
                                ->first();
                        @endphp
                        {{ $ingredient_names }}</td>
                    <td>


                        @php
                            $units = DB::table('units')
                                ->where('id', $waste->waste_unit)
                                ->pluck('unit')
                                ->first();
                        @endphp
                        {{ $units }}</td>



                    <td>{{ $waste->waste_qty }}</td>

                    <td>{{ $waste->purpose }}</td>
                    <td>
                        @php
                            $chef = DB::table('chefs')
                                ->where('id', $waste->chef_id)
                                ->pluck('name')
                                ->first();
                        @endphp
                        {{ $chef }}</td>
                    <td>{{ $waste->created_at->format('Y-m-d') }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
