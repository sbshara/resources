{{-- breadcrumbs goes here --}}

{{-- you can build your own breadcrumbs, or you can install a ready package: sbshara/laraCrumbs, then you can use the below as a ready out of the box breadcrumbs --}}

<ol class="breadcrumb">
    <li>
        <a href="{{ url('home') }}">
            <i class="fa fa-home"></i>
        </a>
    </li>
    @foreach(request()->breadcrumbs()->segments() as $segment)
    <li class="{{ $segment->model() ? ' active' : '' }}">
        <a href="{{ $segment->segmentURL() }}">
            {{ optional($segment->model())->name ?: $segment->name() }}
        </a>
    </li>
    @endforeach
</ol>
