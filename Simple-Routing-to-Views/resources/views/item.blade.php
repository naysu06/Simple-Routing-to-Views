<!DOCTYPE html>
<html>
    <head>
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        @vite('resources/css/app.css')
    </head>
    <body class="m-1">
        <div class="main-wrap bg-slate-500 max-w-[50%] rounded-md p-3 m-auto text-center    ">
            <h1 class="text-3xl font-bold text-white uppercase">Item Management</h1>
            
            <a href="{{ url('/items/create') }}" class="btn btn-primary bg-blue-800 text-white p-1 rounded-md">Add New Item</a>
            <ul>

            @foreach($items as $item)
                <li class="text-white m-1">{{ $item->name }} - {{ $item->description }} <a href="{{ route('items.show', $item->id) }}" class="text-white bg-blue-800 p-1 rounded-md">View Item</a></li>
            @endforeach

            </ul>

            @if(session('success'))
                <div class="alert alert-success text-white">
                    {{ session('success') }}
                </div>
            @endif
            
            <script src="{{ asset('js/app.js') }}"></script>
        </div>
    </body>
</html>