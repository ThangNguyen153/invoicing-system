<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
       <title>Export PDF</title>
    </head>
    <body class="antialiased">
    <table>
        <thead>
        <tr>
            <th colspan="2">Customer</th>
            <th>{{$invoice->customer_name}}</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>

        </tr>
        <tr>
            <th>No</th>
            <th>Category</th>
            <th>Fruit</th>
            <th>Unit</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Amount</th>
        </tr>
        </thead>
        <tbody>
        @php
            $details = $invoice->details;
            $total = 0;
        @endphp
        @foreach($details as $detail)
            <tr>
                @php
                    $fruit = $detail->fruit;
                    $total += $detail->amount;
                @endphp
                <td>{{$detail->id}}</td>
                <td>{{$fruit->category->name}}</td>
                <td>{{$fruit->name}}</td>
                <td>{{$fruit->unit}}</td>
                <td>{{$fruit->price}}</td>
                <td>{{$detail->quantity}}</td>
                <td>{{$detail->amount}}</td>
            </tr>
        @endforeach
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>Total</td>
            <td>{{$total}}</td>
        </tr>
        </tbody>
    </table>
    <br>
    </body>
</html>
