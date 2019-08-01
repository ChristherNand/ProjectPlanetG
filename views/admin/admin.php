<?php include_once('../../controllers/dataBaseConfig.php'); ?>
<?php $user_id = isset($_GET['user']) ? $_GET['user'] : NULL; ?>
<div class="row">
    <div class="col-md-12 text-center">
        <?php if ($user_id !== NULL) : ?>
            <h2>Noticias</h2>
            <hr>
            <div class="form-group col-md-12 text-justify">
                <?php
                $sql = "SELECT * FROM post WHERE user_id = '$user_id'";
                $result = $conexion->query($sql);
                $posts = $result->fetchAll(PDO::FETCH_OBJ);
                $count = $result->rowCount();
                ?>
                <?php if ($count > 0) : ?>
                    <?php foreach ($posts as $post) : ?>
                        <h1 class="mt-4"><?php echo $post->titulo; ?></h1>
                        <p class="lead">Autor <?php echo $post->user_id; ?>
                        </p>
                        <hr>
                        <p><?php echo $post->fecha_publicacion; ?></p>
                        <hr>
                        <p><?php echo $post->contenido; ?></p>
                        <div class="media mb-4">
                            <div class="row">
                                <?php
                                $sql1 = "SELECT * FROM comments WHERE post_id = '$post->id_post'";
                                $result1 = $conexion->query($sql1);
                                $comments = $result1->fetchAll(PDO::FETCH_OBJ);
                                $count1 = $result1->rowCount();
                                ?>
                                <?php if ($count1 > 0) : ?>
                                    <?php foreach ($comments as $comment) : ?>
                                        <div class="col-md-12">
                                            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                                            <div class="media-body">
                                                <h5 class="mt-0">Usuario: <?php echo $comment->user_id ?></h5>
                                                <p><?php echo $comment->comment; ?></p>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <div>
                        <h3>Este usuario no tiene publicaciones</h3>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>

    </div>
</div>