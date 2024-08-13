<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrab.min.css.map') }}"/>
</head>
<body>
    <form method="POST" action="{{route('productcreate')}}">
    @csrf
        <div class="mb-3">
            <label class="form-label">Product Name</label>
            <input type="text" name="name" class="form-control" placeholder="Product name">
        </div>
        <div class="mb-3">
        <label class="form-label">Company</label>
        <select class="form-select">
            <option value="">Select a company</option>
            @foreach($companies as $company)
                <option value="{{ $company->id }}">{{ $company->name }}</option>
            @endforeach
        </select>
        </div>
        <div class="mb-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" disabled>
        </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Details</label>
            <textarea class="form-control" name="details" rows="5"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Save product</button>
    </form>
    <br><br><br><br>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Product id</th>
            <th scope="col">Product name</th>
            <th scope="col">Company id</th>
            <th scope="col">Company name</th>
            <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->company_id }}</td>
                    <td>{{ $product->company_name }}</td>
                    <td>
                        <form  method="GET" action="{{ route('productdelete', $product->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-primary">Delete</button>
                        </form>
                    </td>
                </tr>
             @endforeach
        </tbody>
    </table>
</body>
</html>