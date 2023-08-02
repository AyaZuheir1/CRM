<!DOCTYPE html>
<html>
<head>
    <title>contacts list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5"> contacts list</h1>
        <a href="{{ route('contacts.create') }}" class="btn btn-primary mb-3">create new contact</a>

        <ul class="list-group">
            @foreach ($contacts as $contact)
                <li class="list-group-item">
                    {{ $contact->name }} - {{ $contact->email }}
                    <a href="{{ route('contacts.show', $contact) }}" class="btn btn-info btn-sm">show</a>
                    <a href="{{ route('contacts.edit', $contact) }}" class="btn btn-warning btn-sm">edit</a>
                    <form action="{{ route('contacts.destroy', $contact) }}" method="post" class="d-inline">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm">delete</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>