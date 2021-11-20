<form action="{{route('shop')}}" method="get">
<div class="filter filter-group">
    <h1 class="widget-blog-title">@lang('site.index.filter.filter')</h1>
    <div class="filter-price filter-inside">
        <h3>@lang('site.index.filter.price')</h3>
        @error('max')
        <div class="alert alert-warning" role="alert" style="margin-right: 20px">
           {{$message}}
        </div>
        @enderror
        @error('min')
        <div class="alert alert-warning" role="alert" style="margin-right: 20px">
            {{$message}}
        </div>
        @enderror
        <div class="filter-content">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">@lang('site.index.filter.min')</label>
                <input type="text" name="min" value="{{request()->min}}" class="form-control"  style="margin-bottom: 10px">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">@lang('site.index.filter.max')</label>
                <input type="text" class="form-control" name="max" value="{{request()->max}}" style="margin-bottom: 10px">
{{--                <input type="hidden" class="form-control" name="search_hidden" value="@isset(request()->search) {{request()->search}} @endisset" style="margin-bottom: 10px">--}}
            </div>
        </div>
    </div>
    <div class="filter-brand filter-inside">
        <h3>@lang('site.index.filter.labels')</h3>
        <ul class="e-filter brand-filter">
            <label for="hit">
                <input type="checkbox" name="hit" @if(request()->has('hit')) checked @endif> Хиты
            </label>
            <br>
            <label for="new">
                <input type="checkbox" name="new" @if(request()->has('new')) checked @endif> Новинки
            </label>
            <br>
            <label for="recommend">
                <input type="checkbox" name="recommend" @if(request()->has('recommend')) checked @endif> Рекомендации
            </label>
        </ul>
    </div>
    <div class="filter-price filter-inside">
        <div class="filter-conten">


        <div class="mb-3">
            <button class="btn-filter e-gradient">
                <svg xmlns="http://www.w3.org/2000/svg" style="margin-bottom: -5px" width="20" height="20" fill="currentColor" class="bi bi-filter" viewBox="0 0 16 16">
                    <path d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
                </svg>
                @lang('site.index.filter.filter')
            </button>
        </div>
        </div>
    </div>
</div>
</form>
