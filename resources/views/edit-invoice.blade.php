<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
    </style>

    <style>
        /*body {*/
        /*    font-family: 'Nunito', sans-serif;*/
        /*}*/

        /*input[type=text], select {*/
        /*    width: 100%;*/
        /*    padding: 12px 20px;*/
        /*    margin: 8px 0;*/
        /*    display: inline-block;*/
        /*    border: 1px solid #ccc;*/
        /*    border-radius: 4px;*/
        /*    box-sizing: border-box;*/
        /*}*/
        table, th, td {
            border: 1px solid black;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input,
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .fruit-item {
            display: flex;
            flex-direction: column;
            margin-bottom: 16px;
        }

        .fruit-item select,
        .fruit-item input {
            margin-bottom: 8px;
        }
    </style>
</head>
<body class="antialiased">
<div class="row">
    <div style="display: flex;">
        <div style="float: left;width: 10%; padding: 10px; height: 300px">

            <form action="{{ url('/edit-invoice') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$invoice->id}}">
                <p>Edit Fruit Category</p>
                <label for="customer_name">Customer Name:</label>
                <input type="text" name="customer_name" id="customer_name" required value="{{$invoice->customer_name}}">

                <label for="fruits">Fruit Items:</label>
                <div id="fruit-container">
                    @php
                        $details = $invoice->details;
                        $i = 0;
                    @endphp
                    @foreach($details as $detail)
                        @php
                            $fruitDetail = $detail->fruit;
                        @endphp
                    <div class="fruit-item">
                        <select name="fruits[{{$i}}][fruit_id]" onchange="updateFruitData(this, {{$i}})" required>
                            <option value="{{ $fruitDetail->id }}" data-unit="{{ $fruitDetail->unit }}" data-price="{{ $fruitDetail->price }}">{{ $fruitDetail->name }}</option>
                            @foreach($fruits as $fruit)
                                <option value="{{ $fruit->id }}" data-unit="{{ $fruit->unit }}" data-price="{{ $fruit->price }}">{{ $fruit->name }}</option>
                            @endforeach
                        </select>
                        <input type="text" name="fruits[{{$i}}][unit]" placeholder="Unit" readonly required value="{{ $fruitDetail->unit }}">
                        <input type="number" name="fruits[{{$i}}][price]" placeholder="Price" readonly required value="{{ $fruitDetail->price }}">
                        <input type="number" name="fruits[{{$i}}][quantity]" placeholder="Quantity" onchange="updateAmount(this, {{$i}})" required  value="{{ $detail->quantity }}">
                        <input type="number" name="fruits[{{$i}}][amount]" placeholder="Amount" readonly required value="{{ $detail->amount }}">
                    </div>
                        @php
                            $i++;
                        @endphp
                    @endforeach
                </div>
                <button type="button" onclick="addFruit()">Add Fruit</button>

                <button type="submit">Submit</button>
            </form>

            <script>
                function addFruit() {
                    const container = document.getElementById('fruit-container');
                    const index = container.children.length;
                    const item = document.createElement('div');
                    item.className = 'fruit-item';
                    item.innerHTML = `
                    <select name="fruits[${index}][fruit_id]" onchange="updateFruitData(this, ${index})" required>
                        <option value="" disabled selected>Select Fruit</option>
                    @foreach($fruits as $fruit)
                        <option value="{{ $fruit->id }}" data-unit="{{ $fruit->unit }}" data-price="{{ $fruit->price }}">{{ $fruit->name }}</option>
                    @endforeach
                    </select>
                    <input type="text" name="fruits[${index}][unit]" placeholder="Unit" readonly required>
                    <input type="number" name="fruits[${index}][price]" placeholder="Price" readonly required>
                    <input type="number" name="fruits[${index}][quantity]" placeholder="Quantity" onchange="updateAmount(this, ${index})" required>
                    <input type="number" name="fruits[${index}][amount]" placeholder="Amount" readonly required>
                    `;
                    container.appendChild(item);
                }

                function updateFruitData(select, index) {
                    const container = select.parentNode;
                    const unitInput = container.querySelector(`input[name="fruits[${index}][unit]"]`);
                    const priceInput = container.querySelector(`input[name="fruits[${index}][price]"]`);
                    const selectedOption = select.options[select.selectedIndex];

                    unitInput.value = selectedOption.dataset.unit;
                    priceInput.value = selectedOption.dataset.price;
                }

                function updateAmount(select, index) {
                    const container = select.parentNode;
                    const priceInput = container.querySelector(`input[name="fruits[${index}][price]"]`);
                    const quantityInput = container.querySelector(`input[name="fruits[${index}][quantity]"]`);
                    const amountInput = container.querySelector(`input[name="fruits[${index}][amount]"]`);

                    amountInput.value = quantityInput.value * priceInput.value;
                }
            </script>
        </div>
    </div>
</div>

</body>
</html>
