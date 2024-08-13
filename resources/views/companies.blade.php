<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company</title>
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrab.min.css.map') }}"/>
</head>
<body>
    <form method="POST" action="{{route('companycreate')}}">
    @csrf
        <div class="mb-3">
            <label class="form-label">Company Name</label>
            <input type="text" name="name" class="form-control" placeholder="company name">
        </div>
        <div class="mb-3">
            <label class="form-label">Company country</label>
            <input type="text" name="country" class="form-control" placeholder="company country">
        </div>
        <div class="mb-3">
            <label class="form-label">Company city</label>
            <input type="text" name="city" class="form-control" placeholder="company city">
        </div>
        <div class="mb-3">
            <label class="form-label">Company size</label>
            <input type="text" name="size" class="form-control"placeholder="company size">
        </div>
        <button type="submit" class="btn btn-primary">Add company</button>
    </form>
    <br><br><br><br>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Company name</th>
            <th scope="col">Company country</th>
            <th scope="col">Company city</th>
            <th scope="col">Company size</th>
            <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($companies as $company)
                <tr>
                    <td>{{ $company->name }}</td>
                    <td>{{ $company->country }}</td>
                    <td>{{ $company->city }}</td>
                    <td>{{ $company->size }}</td>
                    <td>
                        <form  method="GET" action="{{ route('companydelete', $company->id) }}">
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