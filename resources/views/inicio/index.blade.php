<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
      integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
      crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}" />
    <title>Menu Principal</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-md fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="images/logo.png" alt="logo" class="logo"></a>
      </div>
    </nav>

    <div class="busqueda">
        <div align="center">
            <input type="search" placeholder="Buscar un lugar..." name="busquedaInicio">
            <br>
            <label>¿Qué estás buscando?</label>
        </div>
        <div class="icons-busqueda">
            <a href="#">
                <span>
                    <i class="fa-solid fa-house"></i>
                    <label class="label-icon-busqueda">Casas</label>
                </span>
            </a>
            <a href="#">
                <span>
                    <i class="fa-solid fa-hotel"></i>
                    <label class="label-icon-busqueda">Hoteles</label>
                </span>
            </a>
            <a href="#">
                <span>
                    <i class="fa-solid fa-campground"></i>
                    <label class="label-icon-busqueda">Cabañas</label>
                </span>
            </a>
        </div>
    </div>

    <div class="content-inicio">
        <div class="card d-flex flex-column justify-content-between ml-2">
            <img src="{{ asset('images/lugar.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
               <h5 class="card-title">LUGAR 1</h5>
               <a href="#" class="btn btn-primary btn-block">Ver Lugar</a>
            </div>
        </div>

        <div class="card d-flex flex-column justify-content-between ml-2">
            <img src="{{ asset('images/lugar.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
               <h5 class="card-title">LUGAR 1</h5>
               <a href="#" class="btn btn-primary btn-block">Ver Lugar</a>
            </div>
        </div>

        <div class="card d-flex flex-column justify-content-between ml-2">
            <img src="{{ asset('images/lugar.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
               <h5 class="card-title">LUGAR 1</h5>
               <a href="#" class="btn btn-primary btn-block">Ver Lugar</a>
            </div>
        </div>

        <div class="card d-flex flex-column justify-content-between ml-2">
            <img src="{{ asset('images/lugar.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
               <h5 class="card-title">LUGAR 1</h5>
               <a href="#" class="btn btn-primary btn-block">Ver Lugar</a>
            </div>
        </div>

        <div class="card d-flex flex-column justify-content-between ml-2">
            <img src="{{ asset('images/lugar.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
               <h5 class="card-title">LUGAR 1</h5>
               <a href="#" class="btn btn-primary btn-block">Ver Lugar</a>
            </div>
        </div>

        <div class="card d-flex flex-column justify-content-between ml-2">
            <img src="{{ asset('images/lugar.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
               <h5 class="card-title">LUGAR 1</h5>
               <a href="#" class="btn btn-primary btn-block">Ver Lugar</a>
            </div>
        </div>

        <div class="card d-flex flex-column justify-content-between ml-2">
            <img src="{{ asset('images/lugar.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
               <h5 class="card-title">LUGAR 1</h5>
               <a href="#" class="btn btn-primary btn-block">Ver Lugar</a>
            </div>
        </div>
        
    </div>

    <footer class="footer-inicio">
        <div class="col-sm-4 d-flex flex-column align-items-right">
           <a href="#">Nosotros</a>
           <a href="#">Terminos y Condiciones</a>
           <a href="#">Contacto</a>
        </div>
        <hr>
        <!---<a href="https://www.flaticon.es/iconos-gratis/cabina" title="cabina iconos">Cabina iconos creados por Freepik - Flaticon</a>--->
     </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>