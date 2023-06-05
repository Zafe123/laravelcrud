@if ($paginator->hasPages())
<div class="pagination">
    @if($paginator->onFirstPage())
    <a href="#" disabled>&laquo;</a>
    @else
    <a class="active-page" href="{{$paginator->previousPageUrl()}}">&laquo;</a>
    @endif

    @foreach(range(1, $paginator->lastPage()) as $page)
    @if ($page == $paginator->currentPage())
    <a class="active-page">{{$page}}</a>
    @else
    <a href="{{ $paginator->url($page) }}">{{ $page }}</a>
    @endif
    @endforeach

    @if ($paginator->hasMorePages())
    <a href="{{$paginator->nextPageUrl()}}">&raquo;</a>
    @else
    <a href="#">&raquo;</a>
    @endif
</div>
@endif