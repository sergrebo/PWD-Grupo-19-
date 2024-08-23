<!DOCTYPE html>
<html lang="es-AR">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Ejercicio 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>
    <div class="container">

        <div class="col border border-secondary-subtle mt-5 mb-5">
            
            <h5 class="shadow-sm mb-3 py-2 px-4 bg-light text-primary">
                Cinem@s
            </h5> 

            <form method="post" id="formulario" name="formulario" action="./Action/respuesta.php" class="needs-validation p-4" novalidate enctype="multipart/form-data">
                <div class="row g-3">
            
                    <!-- Campo Título -->
                    <div class="col-sm-6">
                        <label for="titulo" class="form-label fw-medium" id="label-titulo">Título</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título" required aria-required="true" aria-labelledby="label-titulo" aria-describedby="error-titulo" />
                        <div class="invalid-feedback" id="error-titulo">El campo título es obligatorio.</div>
                    </div>
            
                    <!-- Campo Actores -->
                    <div class="col-sm-6">
                        <label for="actores" class="form-label fw-medium" id="label-actores">Actores</label>
                        <input type="text" class="form-control" id="actores" name="actores" placeholder="Actores" required aria-required="true" aria-labelledby="label-actores" aria-describedby="error-actores" />
                        <div class="invalid-feedback" id="error-actores">El campo actores es obligatorio.</div>
                    </div>
            
                    <!-- Campo Director -->
                    <div class="col-sm-6">
                        <label for="director" class="form-label fw-medium" id="label-director">Director</label>
                        <input type="text" class="form-control" id="director" name="director" placeholder="Director" required aria-required="true" aria-labelledby="label-director" aria-describedby="error-director" />
                        <div class="invalid-feedback" id="error-director">El campo director es obligatorio.</div>
                    </div>
            
                    <!-- Campo Guion -->
                    <div class="col-sm-6">
                        <label for="guion" class="form-label fw-medium" id="label-guion">Guion</label>
                        <input type="text" class="form-control" id="guion" name="guion" placeholder="Guion" required aria-required="true" aria-labelledby="label-guion" aria-describedby="error-guion" />
                        <div class="invalid-feedback" id="error-guion">El campo guion es obligatorio.</div>
                    </div>
            
                    <!-- Campo Producción -->
                    <div class="col-sm-6">
                        <label for="produccion" class="form-label fw-medium" id="label-produccion">Producción</label>
                        <input type="text" class="form-control" id="produccion" name="produccion" required aria-required="true" aria-labelledby="label-produccion" aria-describedby="error-produccion" />
                        <div class="invalid-feedback" id="error-produccion">El campo producción es obligatorio.</div>
                    </div>
            
                    <!-- Campo Año -->
                    <div class="col-sm-2">
                        <label for="anio" class="form-label fw-medium" id="label-anio">Año</label>
                        <input type="number" min="1" max="9999" class="form-control" id="anio" name="anio" required aria-required="true" aria-labelledby="label-anio" aria-describedby="error-anio" />
                        <div class="invalid-feedback" id="error-anio">El campo año es obligatorio.</div>
                    </div>
            
                    <!-- Campo Nacionalidad -->
                    <div class="col-sm-6">
                        <label for="nacionalidad" class="form-label fw-medium" id="label-nacionalidad">Nacionalidad</label>
                        <input type="text" class="form-control" id="nacionalidad" name="nacionalidad" required aria-required="true" aria-labelledby="label-nacionalidad" aria-describedby="error-nacionalidad" />
                        <div class="invalid-feedback" id="error-nacionalidad">El campo nacionalidad es obligatorio.</div>
                    </div>
            
                    <!-- Campo Género -->
                    <div class="col-md-4">
                        <label for="genero" class="form-label fw-medium" id="label-genero">Género</label>
                        <select class="form-select" id="genero" name="genero" required aria-required="true" aria-labelledby="label-genero" aria-describedby="error-genero">
                            <option selected disabled value="">Elegir...</option>
                            <option value="accion">Acción</option>
                            <option value="aventura">Aventura</option>
                            <option value="ciencia-ficcion">Ciencia Ficción</option>
                            <option value="comedia">Comedia</option>
                            <option value="drama">Drama</option>
                            <option value="fantasia">Fantasía</option>
                            <option value="terror">Terror</option>
                        </select>
                        <div class="invalid-feedback" id="error-genero">El campo género es obligatorio.</div>
                    </div>
            
                    <!-- Campo Duración -->
                    <div class="col-md-4">
                        <label for="duracion" class="form-label fw-medium" id="label-duracion">Duración</label>
                        <input type="number" min="1" max="999" class="form-control" id="duracion" name="duracion" required aria-required="true" aria-labelledby="label-duracion" aria-describedby="error-duracion" />
                        <small class="text-body-secondary">(minutos)</small>
                        <div class="invalid-feedback" id="error-duracion">El campo duración es obligatorio.</div>
                    </div>
            
                    <!-- Campo Restricciones de Edad -->
                    <div class="col-md-8" role="group" aria-labelledby="label-edad">
                        <label for="edad-permitida" class="form-label fw-medium" id="label-edad">Restricciones de edad</label>
                        <div class="d-flex gap-4">
                            <div class="form-check">
                                <input id="todo-publico" name="edad-permitida" type="radio" class="form-check-input" value="Todo publico" required />
                                <label class="form-check-label" for="todo-publico">Todo público</label>
                                <div class="invalid-feedback">Debe seleccionar una opción.</div>
                            </div>
                            <div class="form-check">
                                <input id="mayor-siete" name="edad-permitida" type="radio" class="form-check-input" value="Mayor a 7" required />
                                <label class="form-check-label" for="mayor-siete">Mayores de 7 años</label>
                            </div>
                            <div class="form-check">
                                <input id="mayor-dieciocho" name="edad-permitida" type="radio" class="form-check-input" value="Mayor a 18" required />
                                <label class="form-check-label" for="mayor-dieciocho">Mayores de 18 años</label>
                            </div>
                        </div>
                    </div>

                    <!-- Campo Imagen -->
                    <div class="col-12">
                        <label for="imagen" class="form-label fw-medium" id="label-imagen">Imagen de la película</label>
                        <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*" required aria-required="true" aria-labelledby="label-imagen" aria-describedby="error-imagen" />
                        <div class="invalid-feedback" id="error-imagen">Debe seleccionar una imagen.</div>
                    </div>
            
                    <!-- Campo Sinopsis -->
                    <div class="col">
                        <label for="sinopsis" class="form-label fw-medium" id="label-sinopsis">Sinopsis</label>
                        <textarea class="form-control" id="sinopsis" name="sinopsis" style="height: 100px" required aria-required="true" aria-labelledby="label-sinopsis" aria-describedby="error-sinopsis"></textarea>
                        <div class="invalid-feedback" id="error-sinopsis">El campo sinopsis es obligatorio.</div>
                    </div>
            
                    <!-- Botones -->
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-primary" type="submit">Enviar</button>
                        <button class="btn btn-outline-secondary" type="reset">Borrar</button>
                    </div>
                </div>
            </form>
            
        </div>

    </div>


    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <!-- Bootstrap JS (including Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous">
    </script>

    <script>
        (() => {
            'use strict'
            const forms = document.querySelectorAll('.needs-validation')

            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
                }, false)

                form.addEventListener('reset', () => {
                    form.classList.remove('was-validated');
                    const invalidFeedbacks = form.querySelectorAll('.invalid-feedback');
                    invalidFeedbacks.forEach(feedback => {
                        feedback.style.display = 'none';
                    })
                })
            })
        })()
    </script>



</body>
</html>