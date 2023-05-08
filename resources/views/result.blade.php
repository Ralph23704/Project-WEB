@if(count($product)>0)
    @foreach($product as $data)
        <li class="list-group-item">
            <a href="{{url('/shop')}}">{{$product->name}}</a>
        </li>
    @endforeach
@else
    <li class="list-group-item">No results found</li>
@endif
