<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">{{ $title }}</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    @foreach ($breadcrumbs as $bc)
                        @if ($loop->last)
                            <li class="breadcrumb-item active">{{ $bc['name'] }}</li>
                        @else
                            <li class="breadcrumb-item">
                                <a class="text-dark" href="{{ $bc['url'] }}">{{ $bc['name'] }}</a>
                            </li>
                        @endif
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
</div>
