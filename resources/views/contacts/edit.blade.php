<!DOCTYPE html>
<html>
<head>
    <title>edit Contact</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1> edit Contact </h1>

        <form action="{{ route('contacts.update', $contact) }}" method="post">
            @csrf
            @method('put')

            <div class="form-group">
                <label for="name">name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $contact->name }}" required>
            </div>

            <div class="form-group">
                <label for="email"> email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $contact->email }}" required>
            </div>

            <div class="form-group">
                <label for="phone">phone :</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ $contact->phone }}">
            </div>
            <div class="form-group">
                <label for="name">address:</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ $contact->address }}" required>
            </div>

            <div class="form-group">
                <label for="email"> job:</label>
                <input type="text" class="form-control" id="job" name="job" value="{{ $contact->job }}" required>
            </div>

            <div class="form-group">
                <label for="phone"> note:</label>
                <input type="text" class="form-control" id="note" name="note" value="{{ $contact->note }}">
            </div>
            <div class="form-group">
                <label for="phone"> city_state:</label>
                <input type="text" class="form-control" id="city_state" name="city_state" value="{{ $contact->city_state }}">
            </div>

            <button type="submit" class="btn btn-primary">update</button>
        </form>
    </div>
</body>
</html>
