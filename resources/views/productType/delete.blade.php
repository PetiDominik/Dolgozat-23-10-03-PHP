<h1>Törlés</h1>
@foreach ($productTypes as $productType)
    <form action="/api/ptype/{{$productType->type_id}}" method="POST">
        @csrf
        @method("DELETE")
        <input type="submit" value="{{$productType->name}}"/>
    </form>
@endforeach

<a href="{{url('/ptype/')}}">Vissza</a>