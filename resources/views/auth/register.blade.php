<x-app-layout title="Register">
    <div class="row">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">Register New Account</div>
                <div class="card-body">
                    <form action="{{route('register')}}" method="post">
                        @csrf
                        <label class="mt-2" for="name">Name</label>
                        <input type="text" name="name" id="name" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror">
                        @error('name')
                        <span class="invalid-feedback">{{$message}}</span>
                        @enderror
                        <label class="mt-2" for="username">Username</label>
                        <input type="text" name="username" id="username" value="{{old('username')}}" class="form-control @error('username') is-invalid @enderror">
                        @error('username')
                        <span class="invalid-feedback">{{$message}}</span>
                        @enderror
                        <label class="mt-2" for="email">Email</label>
                        <input type="email" name="email" id="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror">
                        @error('email')
                        <span class="invalid-feedback">{{$message}}</span>
                        @enderror
                        <label class="mt-2" for="password">Password</label>
                        <input type="text" name="password" id="password" value="{{old('password')}}" class="form-control @error('password') is-invalid @enderror">
                        @error('password')
                        <span class="invalid-feedback">{{$message}}</span>
                        @enderror

                        <input type="submit" value="Register" class="btn btn-primary mt-2">
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>