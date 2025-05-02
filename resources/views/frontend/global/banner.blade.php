<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="breadcrumb-wrap">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            @if ($parentname && $parentlink)
                                <li class="breadcrumb-item ">
                                    <a href="{{ $parentlink ?? '' }}">{{ $parentname ?? '' }}</a>
                                </li>
                            @endif
                            <li class="breadcrumb-item active" aria-current="page">{{ $name ?? '' }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
