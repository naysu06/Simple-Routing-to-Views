<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <h1>Show Item</h1>
        <a href="{{ route('items.edit', $id) }}">Edit Item</a>

        <form action="{{ route('items.destroy', $id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Are you sure you want to delete this item?')">
                Delete Item
            </button>
        </form>

        <ul>
            <li>{{ $name }} - {{ $description }}</li>
        </ul>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>