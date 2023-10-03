<h1>Új</h1>
<form action="/api/ptype" method="POST">
    @csrf
    @method("POST")
    <input type="text" name="name" placeholder="Name"/>
    <input type="text" name="description" placeholder="Description"/>
    <input type="number" name="cost" placeholder="Cost"/>
    <input type="submit" value="Felvitel"/>
</form>

<a href="{{url('/ptype/')}}">Vissza</a>