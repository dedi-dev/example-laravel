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
                <h1>{{$title}}</h1>
            </div>
            <div class="card-body">
                @if ($isCreate == true)
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
                @else
                <form action="{{route('tasks.update', $task->id)}}" method="post" class="">
                    @method('put')
                    @csrf
                    <div class="mb-2">
                        <input type="text" name="list" value="{{old('list', $task->list)}}" class="form-control @error('list') is-invalid @enderror">
                        @error('list')
                        <span class="invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                    <input type="submit" value="Update" class="btn btn-primary">
                </form>
                @endif
            </div>
        </div>
    </div>
</div>