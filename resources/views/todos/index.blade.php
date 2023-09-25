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
            <h1 class="text-2xl font-semibold mb-4">Create a new Todo</h1>

            <!-- Todo Form -->
            <form action="{{ route('todos.create') }}" method="POST" class="mb-4">
                @csrf
                <div class="flex">
                    <input required name="description" type="text" class="flex-1 border rounded py-2 px-3 mr-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Add a new todo" />
                    <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 transition duration-300">Add</button>
                </div>
            </form>

            <!-- Todo List -->

                <ul>
                    <h1 class="text-2xl font-semibold mb-4">Todo List</h1>
                    <!-- Replace with dynamic todo list items -->

                    @if ($todos->count())

                    @foreach ($todos as $todo)
                        <li class="flex items-center justify-between mb-2">
                        <div class="flex">
                        <input class="mr-1" type="checkbox">
                        <span class="" class="text-gray-800">{{$todo->description}}</span>
                        </div>
                        <div class="flex space-x-2">
                            <form action="{{ route('todos.edit', $todo->id) }}">
                            @csrf
                            <button href="" class="text-blue-500 hover:text-blue-700 transition duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path   fill-rule="evenodd" d="M2 5a2 2 0 012-2h12a2 2 0 012 2v11a2 2 0 01-2 2H4a2 2 0 01-2-2V5zm2-2a1 1 0 00-1 1v9a1 1 0 001 1h12a1 1 0 001-1V4a1 1 0 00-1-1H4z" clip-rule="evenodd" />
                                    <path fill-rule="evenodd" d="M8 12a1 1 0 011-1h2a1 1 0 010 2H9a1 1 0 01-1-1z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            </form>

                            <form action="{{ route('todos.delete', $todo->id) }}">
                            @csrf
                            <button href="" class="text-red-500 hover:text-red-700 transition duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M13.293 6.293a1 1 0 011.414 1.414L9.414 12l5.293 5.293a1 1 0 01-1.414 1.414L8 13.414l-5.293 5.293a1 1 0 01-1.414-1.414L6.586 12 1.293 6.707a1 1 0 111.414-1.414L8 10.586l5.293-5.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            </form>
                        </div>
                    </li>
                    @endforeach

                    @else

                    Your todo list is empty!

                    @endif

                </ul>

    <!-- End of dynamic todo list items -->
        </div>
    </div>

     @include('sweetalert::alert')
</body>
</html>
