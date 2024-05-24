<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publicación - Blog de Alfredo de Lope Burgoa</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
 
    <main>
        <div class="container">
            <section class="post-content">
                <?php
                // Simulación de contenido basado en el ID de la publicación
                $posts = [
                    1 => [
                        'title' => 'Mi primer proyecto en Symfony',
                        'content' => 'Descubre cómo fue mi experiencia desarrollando mi primer proyecto en Symfony y las lecciones aprendidas a lo largo del camino.'
                    ],
                    2 => [
                        'title' => 'Consejos para mejorar tu CSS',
                        'content' => 'En esta entrada, comparto algunos consejos prácticos para mejorar tus habilidades en CSS y crear diseños web más atractivos.'
                    ],
                ];

                $post_id = $_GET['id'] ?? 1;
                if (isset($posts[$post_id])) {
                    $post = $posts[$post_id];
                    echo "<h2>{$post['title']}</h2>";
                    echo "<p>{$post['content']}</p>";
                } else {
                    echo "<h2>Publicación no encontrada</h2>";
                }
                ?>
            </section>
        </div>
    </main>
    <?php include 'includes/footer.php'; ?>
</body>
</html