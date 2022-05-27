<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <table class="table table-striped">
            <tr>
                <th>Name</th>
                <th>Task</th>
            </tr>

            @foreach($tasks as $task)
            <tr>
                <td>{{ $task->user->name }}</td>
                <td>{{ $task->title }}</td>
            </tr>
            @endforeach

        </table>
    </div>

    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addRow">Add new row</button>

    <div class="modal" id="addRow">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    Adding new row
                </div>
                <div class="modal-body">

                    <form action="task/create" method="post">
                        @csrf
                        <div class="mt-2">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="mt-2">
                            <label for="task" class="form-label">Task:</label>
                            <input type="text" name="task" id="task" class="form-control">
                        </div>

                        <div class="my-2">
                            <input type="submit" value="Add" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>