<h1>Listázás</h1>
@foreach ($productTypes as $productType)
    <form action="/ptype/edit/{{$productType->type_id}}" method="GET">
        <input type="submit" value="{{$productType->name}}"/>
    </form>
@endforeach

<a href="{{url('/ptype/new/')}}">Új típus</a><br>
<a href="{{url('/ptype/del/')}}">Elem törlése</a>