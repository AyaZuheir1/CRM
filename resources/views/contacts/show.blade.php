<!DOCTYPE html>
<html>
<head>
    <title>Contact details</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Contact details</h1>

        <div class="card">
            <div class="card-body">
                <h2 class="card-title">name: {{ $contact->name }}</h2>
                <p class="card-text">email: {{ $contact->email }}</p>
                <p class="card-text">phone: {{ $contact->phone }}</p>
                <p class="card-text">address: {{ $contact->address }}</p>
                <p class="card-text">job: {{ $contact->job }}</p>
                <p class="card-text">note: {{ $contact->note }}</p>
                <p class="card-text">city_state: {{ $contact->city_state }}</p>

            </div>
        </div>

        <a class="btn btn-primary mt-3" href="{{ route('contacts.index') }}">contacts list</a>
    </div>
</body>
