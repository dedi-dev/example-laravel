<x-app-layout title="Tasks">
    <div class="row">
        <div class="col-6">
            <div class="card mb-4">
                <div class="card-header">
                    <h1>Create New Task</h1>
                </div>
                <div class="card-body">
                    <form action="/tasks" method="post" class="d-flex justify-content-between">
                        @csrf
                        <input type="text" name="list" placeholder="Add new task" class="form-control me-2">
                        <input type="submit" value="Add" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <table class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th scope="col" class="text-center">No.</th>
                <th scope="col" class="text-center">Task</th>
                <th scope="col" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $index => $task )
            <tr>
                <td class="align-middle text-center" scope="row">{{$index + 1}}</td>
                <td class="align-middle">{{$task}}</td>
                <td class="align-middle">
                    <div class="d-flex">
                        <a href="/tasks/{{$task->id}}/edit" class="me-2 btn btn-warning">Edit</a>
                        <form action="/tasks/{{$task->id}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <!-- <ol>
        @foreach ($tasks as $task )
        <li style="margin-bottom: 10px;">
            {{$task->list}}
            <div>
                <a href="/tasks/{{$task->id}}/edit">Edit</a>
                <form action="/tasks/{{$task->id}}" method="post" style="display: inline; margin-left: 5px">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete">
                </form>
            </div>
        </li>
        @endforeach
    </ol> -->
</x-app-layout>