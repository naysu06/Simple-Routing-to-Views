<!DOCTYPE html>
<html>
    <head>
        @vite('resources/css/app.css')
    </head>
    <body class="m-1">
        <div class="main-wrap bg-slate-500 max-w-[50%] rounded-md p-3 m-auto text-center">
            <h1 class="text-3xl font-bold uppercase text-white">Show Item</h1>
            <a href="{{ route('items.edit', $id) }}" class="btn btn-primary bg-blue-800 text-white p-1 rounded-md">Edit Item</a>

            <form action="{{ route('items.destroy', $id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Are you sure you want to delete this item?')" class="btn btn-danger bg-red-800 text-white p-1 rounded-md">
                    Delete Item
                </button>
            </form>

            <ul>
                <li class="text-white">{{ $name }} - {{ $description }}</li>
            </ul>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>