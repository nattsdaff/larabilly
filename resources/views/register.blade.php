@extends('templates/master')

@section('title', 'm o b i l i • h o m e')

@section('content')
    <!--REGISTER-->
    <!--LOGIN-->
    <section class="register">
      <div class="container">
      <div style="text-align:center;"><p>¿Ya tenés cuenta en Mobili? <a href="login.php">Ingresar</a></p></div>
          <div class="container-form">
            
            <h2 class="alt-title">Registrarme</h2>
            <p class="register-info">Disfrutá del 1-click checkout, accedé a tus pedidos y gestioná tu cuenta.</p>
            <form action="#" method="post" enctype="multipart/form-data" class="form">
              @csrf
              

              <!-- EMAIL -->
              <div class="form-item">
                <label for="email" class="form-label">Email <span style="color:red;">*</span></label>
                <input type="text" id="email" class="form-field" name="email" value="{{ old('email') }}" required>
              </div>

              <!-- NOMBRE -->
              <div class="form-group wrap">
                <div class="form-item" id="nombre">
                  <label for="nombre" class="form-label">Nombre <span style="color:red;">*</span></label>
                  <input type="text" id="nombre" name="first_name" class="form-field" value="{{ old('first_name') }}" required>
                </div>
                <!-- APELLIDO -->
                <div class="form-item" id="apellido">
                  <label for="apellido" class="form-label">Apellido <span style="color:red;">*</span></label>
                  <input type="text" id="apellido" class="form-field" name="last_name" value="{{ old('last_name') }}" required>
                </div>
              </div> 

              <!-- CONTRASEÑA -->
              <div class="form-group wrap">
                <div class="form-item">
                  <label for="inputPassword" class="form-label">Contraseña <span style="color:red;">*</span></label>
                  <input type="password" id="inputPassword" name="password" class="form-field" value="" required placeholder="Al menos 6 caracteres">
                </div>

                <!-- CONFIRMACIÓN DE CONTRASEÑA -->
                <div class="form-item">
                  <label for="passwordConfirm" class="form-label">Confirmar contraseña <span style="color:red;">*</span></label>
                  <input type="password" id="passwordConfirm" name="password_confirmation" class="form-field" value="" required>
                </div>
              </div>

              <!-- FECHA DE NACIMIENTO -->
              <div class="form-group wrap column">
                <label for="birthdate" class="form-label">Fecha de nacimiento <span style="color:red;">*</span></label>
                <div class="form-group">
                  <input type="date" name="birthdate" value="{{ old('birthdate') }}">
                </div>
              </div>

              <!-- TELÉFONO -->
              <div class="form-group wrap telefono">
                <div class="form-item numero">
                  <label for="telefono" class="form-label">Teléfono</label>
                  <input type="text" id="telefono" name="phone" class="form-field" value="{{ old('phone') }}" >
                </div>
              </div>


              <!-- DNI -->
              <div class="form-item">
                <label for="dni" class="form-label">DNI</label>
                <input type="text" id="dni" name="dni" class="form-field" value="{{ old('dni') }}">
              </div>


              <!-- IMAGEN -->
              <!-- <div class="form-item">
                <label for="avatar" class="form-label">Foto de perfil <span style="color:red;">*</span></label>
                <input type="file" id="avatar" name="avatar" class="file" value="">
              </div> -->

              <input type="submit" value="Crear cuenta" class="submit-btn verde">
            </form>
          </div>
        </div>


    </section>
@endsection