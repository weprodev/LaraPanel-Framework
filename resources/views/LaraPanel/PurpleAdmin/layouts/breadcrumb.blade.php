<div class="page-header">
    <h3 class="page-title">{{ $title ?? '' }}</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            @foreach ($lists as $item)
                <li class="breadcrumb-item {{ $loop->last ? 'active' : '' }}">
                    @php
                        $link = WeProDev\LaraPanel\Infrastructure\Shared\Helper\BreadcrumbHelper::generateLink($item);
                    @endphp

                    @if ($loop->last || $link == '#')
                        {{ $item['name'] }}
                    @else
                        <a href="{{ $link }}"> {{ $item['name'] }} </a>
                    @endif
                </li>
            @endforeach
        </ol>
    </nav>
</div>
