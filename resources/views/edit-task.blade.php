<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Edit Task</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
            crossorigin="anonymous"
        />
    </head>
    <body>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-3">
                    <form method="POST" action="{{ route('updateTask', $task->id) }}">
                        @csrf
                        <h3 class="mb-3">Edit Task</h3>
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input
                                type="text"
                                class="form-control"
                                id="title"
                                name="title"
                                value="{{ $task->title }}"
                            />
                        </div>
                        <div class="mb-3">
                            <label for="details" class="form-label"
                                >Details</label
                            >
                            <textarea
                                name="details"
                                id="details"
                                cols="30"
                                rows="2"
                                class="form-control"
                            >{{ $task->details }}</textarea
                            >
                        </div>
                        <div class="mb-3">
                            <label for="priority" class="form-label">
                                Priority
                            </label>
                            <select
                                name="priority"
                                id="priority"
                                class="form-select"
                            >
                                <option value="Low" @if($task->priority == "Low")  selected @endif>Low</option>
                                <option value="Medium"@if($task->priority == "Medium")  selected @endif>Medium</option>
                                <option value="High"@if($task->priority == "High")  selected @endif>High</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="priority" class="form-label">
                                User
                            </label>
                            <select
                                name="user_id"
                                id="priority"
                                class="form-select"
                            >
                            @forelse ($users as $user)
                                <option  value="{{ $user->id }}">{{ $user->name }}</option>
                            @empty
                                <option selected value="">No User</option>
                            @endforelse
                            </select>
                        </div>
                        <div class="row justify-content-center">
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
