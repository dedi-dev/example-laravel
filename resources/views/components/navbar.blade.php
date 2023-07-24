<nav class="navbar navbar-expand-lg bg-body-tertiary border-bottom mb-4">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        @foreach ($navbar as $item => $url )
            <a class="nav-link" href="{{$url}}">{{$item}}</a>
        @endforeach
      </div>
      <div class="">
        <a href="{{route('register')}}" class="btn btn-outline-success" type="submit">Register</a>
      </div>
    </div>
  </div>
</nav>