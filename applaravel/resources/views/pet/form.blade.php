Nombre:
<input type="text" name="name" id="name" value="{{ isset($pet)?$pet->name:'' }}" /><br />
Edad:
<input type="number" name="age" id="age" value="{{ isset($pet)?$pet->age:'' }}" /><br />

<button type="submit">Guardar</button>