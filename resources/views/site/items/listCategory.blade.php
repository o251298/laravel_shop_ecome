<?php
\App\Models\Category::cacheCategory();
$category = \Illuminate\Support\Facades\Cache::get('category');
?>
<div class="col-lg-3 widget-verticalmenu">
    <div class="navbar-vertical">
        <button class="navbar-toggles navbar-drop js-vertical-menu"><span>@lang('site.index.nav.category')</span></button>
    </div>
    <div class="vertical-wrapper">
        <ul class="vertical-group">
{{--            <li class="vertical-item level1 mega-parent"><a href="#">New Arrivals</a></li>--}}
            @foreach($category as $item)
                <li class="vertical-item level1 vertical-drop"><a href="{{route('category', $item->id)}}">{{($item->name)}}</a></li>
            @endforeach


        </ul>
    </div>
</div>
