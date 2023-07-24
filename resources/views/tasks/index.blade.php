<x-app-layout title="Tasks">
    <div class="row">
        <div class="col-6">
            @if ($errors->all())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Your data was invalid
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="card mb-4">
                <div class="card-header">
                    <h1>Create New Task</h1>
                </div>
                <div class="card-body">
                    <form action="{{route('tasks.store')}}" method="post" class="">
                        @csrf
                        <div class="mb-2">
                            <input type="text" name="list" placeholder="Add new task" class="form-control @error('list') is-invalid @enderror">
                            @error('list')
                            <span class="invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
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
                <td class="align-middle text-center">{{$task->list}}</td>
                <td class="align-middle">
                    <div class="d-flex justify-content-center">
                        <a href="{{route('tasks.edit', $task->id)}}" class="me-2 btn btn-warning">Edit</a>
                        <form action="{{route('tasks.destroy', $task->id)}}" method="post">
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
</x-app-layout>