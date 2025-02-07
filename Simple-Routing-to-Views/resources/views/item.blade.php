<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<h1>hello world</h1>
        
        <a href="{{ url('/items/create') }}" class="btn btn-primary">Add New Item</a>
        <ul>

        @foreach($items as $item)
            <li>{{ $item->name }} - {{ $item->description }} <a href="{{ route('items.show', $item->id) }}">View Item</a>;</li>
        @endforeach

        </ul>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif  
        
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</body>
</html>
