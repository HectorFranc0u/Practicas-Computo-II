Editar Registro de Mascota

<form action="{{ url('/pet/'.$pet->id) }}" method="POST">
    
    @csrf
    {{ method_field('PATCH') }}
    @include('pet.form')
</form>