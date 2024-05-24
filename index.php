<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog de Alfredo de Lope Burgoa</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/javascript.js"></script>
</head>
<body>
    <div id="invisiblecuerpo">
        <main>
            <div class="container">
                <section class="intro">
                    <h2>Bienvenido a mi Blog</h2>
                    <p>Alfredo de Lope Burgoa es un desarrollador apasionado por HTML, CSS, JavaScript, PHP, Symfony y Composer. En este blog, compartiré mis experiencias y conocimientos en desarrollo web.</p>
                </section>
                <section class="posts">
                    <article class="post">
                        <h3>Mi primer proyecto en Symfony</h3>
                        <p>Descubre cómo fue mi experiencia desarrollando mi primer proyecto en Symfony y las lecciones aprendidas a lo largo del camino.</p>
                        
                    </article>
                    <article class="post">
                        <h3>Consejos para mejorar tu CSS</h3>
                        <p>En esta entrada, comparto algunos consejos prácticos para mejorar tus habilidades en CSS y crear diseños web más atractivos.</p>
                        
                    </article>
                </section>
            </div>
            <section id="seccion1">
                <div id="parte1">
                    <div id="imagen">
                        <img src="img/franvalenzuela.jpg" alt="" id="imagen2">
                    </div>
                    <div id="noticia">
                        <span>NOTICIA</span>
                        <span id="noticia2">Este fin de semana continúa la 'Noche de Tributos' con un homenaje a Alejandro Sanz
Este sábado, 25 de mayo, continúa la “Noche de Tributos” con diversos homenajes a grandes artistas del panorama musical nacional e internacional. Será el turno de Fran Valenzuela y su homenaje a Alejandro Sanz, destacado artista español con innumerables números 1 en su discografía.</span>
                    </div>
                </div>
                <div id="parte2">
                    <textarea name="comentario" id="comentario" class="comentario" maxlength="256" placeholder="Deje aqui su comentario: "></textarea>
                    <div id="botones">
                        <button id="ponercomentario" class="ponercomentario" name="ponercomentario" onclick = "ponercomentario()">VER COMENTARIO</button>
                        <button id="ponercomentario" class="ponercomentario" name="ponercomentario" onclick = "volveranoticia()">VOLVER A NOTICIA</button>
                    </div>
                </div>
            </section>
            <a href="portafolio.php" type="buttom" id="volver">VOLVER AL PORTAFOLIO</a>
        </main>
        
        <?php include 'includes/footer.php'; ?>
    </div>
    
</body>
</html>