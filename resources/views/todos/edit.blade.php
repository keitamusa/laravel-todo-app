<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white rounded-lg shadow-md p-8 w-96">
            <h1 class="text-2xl font-semibold mb-4">Edit Todo</h1>

            <!-- Update Todo Form -->
            <form action="{{ route('todos.update', $todos->id) }}" method="POST" class="mb-4">
                @csrf
                <div class="flex">
                    <input value="{{$todos->description}}" required name="description" type="text" class="flex-1 border rounded py-2 px-3 mr-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Add a new todo" />
                    <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 transition duration-300">Save</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
