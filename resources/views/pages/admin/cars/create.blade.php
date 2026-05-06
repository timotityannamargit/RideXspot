<h1>Új autó hozzáadása</h1>
<form action="{{ route('admin.cars.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="model" placeholder="Modell (pl. Audi A4)">
    <input type="file" name="image">
    <button type="submit">Mentés</button>
</form>