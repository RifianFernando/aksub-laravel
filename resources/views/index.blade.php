<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>To-Do</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
            crossorigin="anonymous"
        />
    </head>
    <body>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4 mt-5">To-Do List</h1>
                <p class="lead">Welcome to your To-Do List manager!</p>
            </div>
        </div>

        <div class="container mt-5">
            <a href="{{ route('addTask') }}" class="btn btn-primary" type="submit">
                Add New Task
            </a>

            <div class="d-flex flex-wrap align-content-start mt-5">
                @foreach ($tasks as $task)
                <div class="card mb-4 me-4" style="width: 18rem">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="h5 card-title">{{ $task->title }} - {{ $task->user->name}}</div>
                            <div>
                                <div class="rounded p-1 @if($task->priority == 'High') bg-danger text-white @elseif($task->priority == 'Medium') bg-warning text-dark @else bg-success text-white @endif">
                                    {{ $task->priority }}
                                </div>
                            </div>
                        </div>
                        <p class="card-text">
                            {{ $task->details }}
                        </p>

                        <div class="mt-3 d-flex">
                            <form method="POST" action="{{ route('deleteTask',$task->id) }}">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-primary"> Done </button>
                            </form>
                            <a
                                href="{{ route('editTask', ['id'=>$task->id]) }}"
                                class="btn btn-warning ms-2"
                                >Edit</a
                            >
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
