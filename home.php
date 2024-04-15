<?php
include('principal.php');
?>
<div class="container">
    <div class="row">
        <div class="col">
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./imagene/tecno1.jpg" class="d-block w-100" height="500" alt="...">|
                    </div>
                    <div class="carousel-item active">
                        <img src="./imagene/logo.jpg" class="d-block w-100" height="500" alt="...">|
                    </div>
                    <div class="carousel-item">
                        <img src="./imagene/tecno2.jpeg" class="d-block w-100" height="500" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./imagene/tecno3.jpg" class="d-block w-100" height="500" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./imagene/tecno4.jpg" class="d-block w-100" height="500" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <h2>REGISTRATE</h2>
            <div class="form-container">
                <form>
                    <div class="mb-3">
                        <label for="Nombre" class="form-label">Nombres y Apellidos</label>
                        <input type="text" class="form-control" id="Nombre" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="Email1" class="form-label">Correo Electronico</label>
                        <input type="email" class="form-control" id="Email1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Telefono</label>
                        <input type="number" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">REGISTRAR</button>
                </form>
            </div>
        </div>

        <div class="col">

            <h2 class="mision">Misión de Galaxy Empire:</h2>

            <p> Galaxy Empire, nuestra misión es revolucionar el mundo de la tecnología a través de la innovación continua y el
                desarrollo sostenible. Nos dedicamos a crear soluciones tecnológicas avanzadas y accesibles que empoderen a individuos
                y organizaciones, permitiéndoles alcanzar su máximo potencial. Nos esforzamos por ofrecer productos y servicios de la más alta
                calidad, diseñados para mejorar la vida diaria y propulsar el progreso de nuestra sociedad global. Comprometidos con la excelencia,
                la integridad y la colaboración, trabajamos incansablemente para anticipar y satisfacer las necesidades cambiantes de nuestros clientes,
                manteniéndonos siempre a la vanguardia de la tecnología. En Galaxy Empire, no solo buscamos liderar la industria tecnológica; aspiramos
                a crear un futuro donde la tecnología sea una fuerza unificadora que abra infinitas posibilidades para todos.</p>

            <h2 class="vision">Visión de Galaxy Empire:</h2>

            <p>La visión de Galaxy Empire es ser la empresa líder y referente mundial en innovación tecnológica, redefiniendo los límites
                de lo posible y estableciendo nuevos estándares de excelencia. Aspiramos a construir un futuro en el que nuestras tecnologías
                sirvan como pilares fundamentales para el desarrollo sostenible, la inclusión social y el empoderamiento individual. Visualizamos un
                mundo donde cada persona, independientemente de su ubicación o condiciones, tenga acceso a tecnología de punta, facilitando así
                oportunidades iguales para crecer, aprender y prosperar. En este futuro, Galaxy Empire se destaca como catalizador del cambio positivo,
                impulsando innovaciones que no solo responden a los desafíos actuales, sino que también anticipan las necesidades del mañana.
                Comprometidos con la responsabilidad social y ambiental, nos esforzamos por liderar con el ejemplo, demostrando que es posible alcanzar
                el éxito empresarial mientras se contribuye activamente al bienestar de la comunidad global y al cuidado del planeta. En Galaxy Empire,
                creemos en un futuro donde la tecnología une a las personas, transforma sociedades y forja un legado duradero para las generaciones venideras.</p>
        </div>

    </div>
</div>

<?php
include('footer.php');
?>