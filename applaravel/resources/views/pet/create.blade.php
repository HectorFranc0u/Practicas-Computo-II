Nuevo Registro de Mascota

<form action="{{ url('/pet') }}" method="POST">
    
    @csrf
    @include('pet.form')
</form>