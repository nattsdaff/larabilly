<!DOCTYPE html>
<html lang="en">
    @include('admin.partials.head')
    @section('title', 'Acceso al CMS')
<body class="bg-dark">
    <div class="container">
        <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
            <div class="card-body">
                <form>
                <div class="form-group">
                    <div class="form-label-group">
                    <input type="email" id="inputEmail" class="form-control" placeholder="Usuario" required="required" autofocus="autofocus">
                    <label for="inputEmail">Usuario</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                    <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required="required">
                    <label for="inputPassword">Contraseña</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me">
                        Recordarme
                    </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block" href="#">Ingresar</button>
                </form>
                <div class="text-center">
                    <a class="d-block small" href="#">¿Olvidaste la contrase&ntilde;a?</a>
                </div>
            </div>
        </div>
    </div>
    @include('admin.partials.scripts')
</body>
</html>

