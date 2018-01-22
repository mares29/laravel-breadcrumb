<nav class="c-breadcrumb">
    <ul>
        <li><a href="{{ route("home") }}"><i class="ico-home"></i></a></li>
        @foreach($links as $link)
            <li>
                @if($loop->last)
                    {{ $link->title }}
                @else
                    <a href="{{ $link->url }}">{{ $link->title }}</a>
                @endif
            </li>
        @endforeach
    </ul>
</nav>