@if ($paginator->hasPages())
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body row" style="justify-content: space-between;">
                    <div class="col-sm-4 col-md-5">
                        <div class="dataTables_info" id="order-listing_info" role="status" aria-live="polite">
                            {{ __('Showing') }} {{ ($paginator->currentPage() - 1) * $paginator->perPage() + 1 }}
                            {{ __('to') }}
                            {{ min($paginator->currentPage() * $paginator->perPage(), $paginator->total()) }}
                            {{ __('of') }} {{ $paginator->total() }} {{ __('entries') }}
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="order-listing_paginate">
                            <ul class="pagination">
                                @if ($paginator->onFirstPage())
                                    <li class="paginate_button page-item previous disabled" id="order-listing_previous">
                                        <a aria-controls="order-listing" aria-disabled="true" role="link"
                                            data-dt-idx="previous" tabindex="-1" class="page-link">Previous</a>
                                    </li>
                                @else
                                    <li class="paginate_button page-item previous" id="order-listing_previous">
                                        <a aria-controls="order-listing" aria-disabled="true"
                                            href="{{ $paginator->previousPageUrl() }}" rel="prev"
                                            data-dt-idx="previous" tabindex="-1" aria-label="@lang('pagination.previous')"
                                            class="page-link">Previous</a>
                                    </li>
                                @endif

                                {{-- Pagination Elements --}}
                                @foreach ($elements as $element)
                                    {{-- "Three Dots" Separator --}}
                                    @if (is_string($element))
                                        <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                                    @endif

                                    {{-- Array Of Links --}}
                                    @if (is_array($element))
                                        @foreach ($element as $page => $url)
                                            @if ($page == $paginator->currentPage())
                                                <li class="paginate_button page-item active" aria-current="page">
                                                    <span class="page-link">{{ $page }}</span>
                                                </li>
                                            @else
                                                <li class="paginate_button page-item"><a href="{{ $url }}"
                                                        aria-controls="order-listing" role="link" aria-current="page"
                                                        data-dt-idx="0" tabindex="0"
                                                        class="page-link">{{ $page }}</a></li>
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach

                                {{-- Next Page Link --}}
                                @if ($paginator->hasMorePages())
                                    <li class="paginate_button page-item next" id="order-listing_next">
                                        <a href="{{ $paginator->nextPageUrl() }}" aria-controls="order-listing"
                                            rel="next" role="link" data-dt-idx="next" tabindex="0"
                                            aria-label="@lang('pagination.next')" class="page-link">Next</a>
                                    </li>
                                @else
                                    <li class="paginate_button page-item next disabled" aria-label="@lang('pagination.next')"
                                        id="order-listing_next">
                                        <span aria-hidden="true" class="page-link">Next</span>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
