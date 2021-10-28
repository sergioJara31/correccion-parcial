@csrf
<div class="container center">
    <div class="form-group">
        <label for="rut" class="">rut</label>
        <input type="text" class="form-control" name ="rut" id ="rut" value= "{{old('rut',$doctor->rut)}}">
    </div>

    <div class="form-group">
        <label for="doctor_name" class="">Nombre</label>
        <input type="text" class="form-control" name="doctor_name" id ="doctor_name" value= "{{old('doctor_name',$doctor->doctor_name)}}">
    </div>

    <div class="form-group">
        <label for="doctor_last_name" class="">Apellido</label>
        <input type="text" class="form-control" name ="doctor_last_name" id ="doctor_last_name" value= "{{old('doctor_last_name',$doctor->doctor_last_name)}}">
    </div>

    <div class="form-group">
        <label for="email" class="">Correo</label>
        <input type="email" class="form-control" name ="email" id ="email" value= "{{old('email',$doctor->email)}}">
    </div>

    <div class="form-group">
        <label for="direccion" class="">Direccion</label>
        <input type="text" class="form-control" name ="direccion" id ="direccion" value= "{{old('direccion',$doctor->direccion)}}">
    </div>

    <div class="form-group">
        <select name="especializacion" class="custom-select" id="especializacion">x
            <option value="" disabled selected>Seleccione una especializacion</option>
            <option value="neurologo">neurologo</option>
            <option value="pediatra">pediatra</option>
            <option value="cardiologo">cardiologo</option>
        </select>
    </div>
    
    <div class="row center offset-5">
        <a href="{{ URL::previous() }}" class="btn btn-danger btn-sm mr-3" >Cancelar</a>
        <button type="submit" class="btn  btn-warning btn-sm">Confirmar</button>
    </div>
</div>
    