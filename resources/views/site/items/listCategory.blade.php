<?php
$category = \App\Models\Category::getCurrentListCategory();
?>
<div class="col-lg-3 widget-verticalmenu">
    <div class="navbar-vertical">
        <button class="navbar-toggles navbar-drop js-vertical-menu"><span>@lang('site.index.nav.category')</span></button>
    </div>
    <div class="vertical-wrapper">
        <ul class="vertical-group">
            @foreach($category as $item)
                <li class="vertical-item level1 vertical-drop"><a href="{{route('category', $item->id)}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-record" viewBox="0 0 16 16">
                            <path d="M8 12a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0 1A5 5 0 1 0 8 3a5 5 0 0 0 0 10z"/>
                        </svg>
                        {{($item->name)}}
                    </a></li>
            @endforeach
        </ul>
    </div>
</div>
