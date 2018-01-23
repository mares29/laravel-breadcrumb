<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        @foreach($links as $link)
            @if($loop->last)
                <li aria-current="page">{{ $link->title }}</li>
            @else
                <li>
                    <a href="{{ $link->url }}">
                        <span>{{ $link->title }}</span>
                    </a>
                </li>
            @endif
        @endforeach
    </ol>
</nav>
