<!DOCTYPE html>
<html>
<head>
    <title>create contacts</title>
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">create contacts</h1>

        <form action="{{ route('contacts.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">name:</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">email:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">phone:</label>
                <input type="text" id="phone" name="phone" class="form-control">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">address:</label>
                <input type="text" id="address" name="address" class="form-control">
            </div>
            <div class="mb-3">
                <label for="job" class="form-label">job:</label>
                <input type="text" id="job" name="job" class="form-control">
            </div>
            <div class="mb-3">
                <label for="note" class="form-label">note:</label>
                <input type="text" id="note" name="note" class="form-control">
            </div>
            <div class="mb-3">
                <label for="city_state" class="form-label">city_state:</label>
                <input type="text" id="city_state" name="city_state" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">create</button>
        </form>
    </div>
</body>
</html>