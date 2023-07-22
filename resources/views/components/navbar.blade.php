<nav>
    <ul>
    @foreach ($navbar as $item => $url )
        <li><a href="{{$url}}">{{$item}}</a></li>  
    @endforeach
    </ul>
</nav>