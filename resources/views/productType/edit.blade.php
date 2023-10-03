<h1>Szerkesztés</h1>
<form action="/api/ptype/{{$pType->type_id}}" method="POST">
    @method("PUT")
    @csrf
    <input type="text" name="name" value="{{$pType->name}}" placeholder="Name"/>
    <input type="text" name="description" value="{{$pType->description}}" placeholder="Description"/>
    <input type="number" name="cost" value="{{$pType->cost}}" placeholder="Cost"/>
    <input type="submit" value="Módosít"/>
</form>

<a href="{{url('/ptype/')}}">Vissza</a>