@extends('hospitals.master')
@section('content')

    <div class="bg-dark text-white d-flex justify-content-around">
        <h1 class="mt-3">Registro doctores</h1>
        <a href="{{ route('doctor.create') }}" class="btn btn-light mb-3 mt-3">+</a>
    </div>
    <table class="table table-striped table-over mb-3">
        <thead class="thead-dark">
            <tr>
                <th scope="col">codigo</th>
                <th scope="col">RUT</th>
                <th scope="col">nombre</th>
                <th scope="col">apellidos</th>
                <th scope="col">Correo</th>
                <th scope="col">Direccion</th>
                <th scope="col">especializacion</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($doctors as $doctor)
                <tr>
                    <th scope="row">{{ $doctor->id }}</th>
                    <td>{{ $doctor->rut }}</td>
                    <td>{{ $doctor->doctor_name }}</td>
                    <td>{{ $doctor->doctor_last_name }}</td>
                    <td>{{ $doctor->email }}</td>
                    <td>{{ $doctor->direccion }}</td>
                    <td>{{ $doctor->especializacion }}</td>
                    <td>
                        <a href="{{ route('doctor.edit', $doctor->id) }}" class="btn btn-info">Editar</a>
                        <button class="btn btn-danger" data-toggle="modal" data-target="#exampleModal"
                            data-id="{{ $doctor->id }}">Eliminar</button>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

    <div class="mb-3">
        <a href="{{ URL::previous() }}" class="btn btn-info">Regresar</a>
    </div>

@endsection
{{ $doctors->links() }}


{{-- anuncio para eliminar --}}
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel"></h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <label class="text-muted">¿Seguro que deseas eliminar el doctor seleccionado?</label>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <form method="POST" id="formDelete" action="{{ route('doctor.destroy', 0) }}"
                    data-action="{{ route('doctor.destroy', 0) }}">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm">Confirmar</button>
                </form>

            </div>
        </div>
    </div>
</div>
<script>
    window.onload = function() {
        $('#exampleModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            action = $('#formDelete').attr('data-action').slice(0, -1)
            action += id
            $('#formDelete').attr('action', action)
            var modal = $(this)
            modal.find('.modal-title').text('Vas a eliminar el doctor con el ID ' + id)
        })
    }
</script>
