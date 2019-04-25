@if ($paginator->hasPages())
    <div class="pages">

            {{--@if ($paginator->onFirstPage())--}}
                {{--<span class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')" aria-hidden="true">1</span>--}}
            {{--@else--}}

                    {{--<a href="{{ $paginator->firstUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">1</a>--}}

            {{--@endif--}}

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <span class="disabled" aria-disabled="true">{{ $element }}</span>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span class="active" aria-current="page">{{ $page }}</span>
                        @elseif($page-1 <= $paginator->currentPage() && $page+2 >= $paginator->currentPage())
                            <a href="{{ $url }}">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            {{--@if ($paginator->hasMorePages())--}}
                {{--<a href="{{ $paginator->lasttUrl() }}" rel="next" aria-label="@lang('pagination.next')">{{ $paginator->lastPage () }}</a>--}}
            {{--@else--}}
                {{--<span class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">{{ $paginator->lastPage () }}</span>--}}
            {{--@endif--}}

            <a>{{$paginator->currentPage()}}/{{ $paginator->lastPage () }}</a>

    </div>

@endif