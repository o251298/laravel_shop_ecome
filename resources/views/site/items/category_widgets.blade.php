<ul class="wiget-content v3">
    <li class="active"><a href="#">All Categories</a>
        <ul class="wiget-content v4">
{{--            <li><h3>Cell Phone & Acsssscessories <span class="number">(120)</span></h3></li>--}}
            @foreach(\Illuminate\Support\Facades\Cache::get('category') as $item)
            <li><a href="{{route('category', $item->id)}}">{{$item->name}}</a></li>
            @endforeach
        </ul>
    </li>
</ul>
