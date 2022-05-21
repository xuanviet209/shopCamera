<-- pagination.blade.php -->
@if ($paginator->hasPages())
<ul class="pagination">
{{-- Previous Page Link --}}
@if ($paginator->onFirstPage())
<li class="disabled"><span>«</span></li>
@else
<a href="{{ $paginator->previousPageUrl() }}" rel="prev"><li><span>«</span></li></a>
@endif
@if($paginator->currentPage() < 5)
@foreach(range(1, $paginator->lastPage()) as $i)
@if($i >= $paginator->currentPage() - 3 && $i <= 6)
@if ($i == $paginator->currentPage())
<li class="active"><span>{{ $i }}</span></li>
@else
<a href="{{ $paginator->url($i) }}"><li><span>{{ $i }}</span></li></a>
@endif
@endif
@endforeach
@endif
@if($paginator->currentPage() >= 5)
<li class="hidden-xs"><a href="{{ $paginator->url(1) }}">1</a></li>
<li><span>...</span></li>
@foreach(range(1, $paginator->lastPage()) as $i)
@if($i >= $paginator->currentPage() - 1 && $i <= $paginator->currentPage() + 2)
@if ($i == $paginator->currentPage())
<li class="active"><span>{{ $i }}</span></li>
@else
<a href="{{ $paginator->url($i) }}"><li><span>{{ $i }}</span></li></a>
@endif
@endif
@endforeach
@endif
{{-- Next Page Link --}}
@if ($paginator->hasMorePages())
<a href="{{ $paginator->nextPageUrl() }}" rel="next"><li><span>»</span></li></a>
@else
<li class="disabled"><span>»</span></li>
@endif
</ul>
@endif