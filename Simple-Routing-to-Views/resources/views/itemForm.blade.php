<html>
    <head>
        @vite('resources/css/app.css')
    </head>
    <body class=" p-1 text-center ">
        <div class="text-center w-fit m-auto bg-slate-500 p-1">
            <h1 class="text-white text-2xl font-bold uppercase">Add new item</h1>
            @if(isset($id))
            <form method="POST" action="/items/{{ $id }}" class="m-auto">
                @method('PUT')
            @else
            <form method="POST" action="/items" class="m-auto">
            @endif
                @csrf

                @if(isset($id))
                    <input type="hidden" name="id" value="{{ $id }}">
                    <input type="text" name="name" placeholder="Name" class="border-2 border-solid border-red-800 rounded p-1 w-[25%]" value="{{ $name }}" required>
                    <input type="text" name="description" placeholder="Description" class="border-2 border-solid border-red-800 rounded p-1 w-[25%]" value="{{ $description }}" required>
                @else
                    <input type="text" name="name" placeholder="Name" class="border-2 border-solid border-red-800 rounded p-1 w-[25%]" required>
                    <input type="text" name="description" placeholder="Description" class="border-2 border-solid border-red-800 rounded p-1 w-[25%]" required>
                @endif

                <input type="submit" value="Submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded cursor-pointer">
            </form>
        </div>
    </body>
</html>
