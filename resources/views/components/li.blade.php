<li class="nav-item">
    <a
    @if(Request::is('admin') || Request::is('admin/*'))
        <a href="{{ route($route) }}"
    @else
        <a href="{{ route($route,['instance' => \Instantiation::instance()]) }}"
    @endif


    class="nav-link

    @isset($secondaries)
        @foreach(explode(',', $secondaries) as $secondary)
            @if(Route::currentRouteName() == $secondary)
                active
            @endif
        @endforeach
    @endisset

    {{ (Route::currentRouteName() == $route) ? 'active' : '' }}" >

        <i class="{{$icon}}"></i> {{$name}}

    </a>
</li>
