<ul class="wiget-content v3">
    <li class="active">
        <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-stack" viewBox="0 0 16 16">
                <path d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.598.598 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.598.598 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.598.598 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535L7.733.063z"/>
                <path d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.598.598 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.659z"/>
            </svg>
             @lang('site.index.nav.category')
        </a>
        <ul class="wiget-content v4">
{{--            <li><h3>Cell Phone & Acsssscessories <span class="number">(120)</span></h3></li>--}}
            @foreach(\App\Models\Category::getCurrentListCategory() as $item)
            <li>

                <a href="{{route('category', $item->id)}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-record" viewBox="0 0 16 16">
                        <path d="M8 12a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0 1A5 5 0 1 0 8 3a5 5 0 0 0 0 10z"/>
                    </svg>
                    {{$item->name}}
                </a>
            </li>
            @endforeach
        </ul>
    </li>
</ul>
