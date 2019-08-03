<?php include_once('../../controllers/dataBaseConfig.php'); ?>
<?php $postID = isset($_GET['post']) ? $_GET['post'] : NULL; ?>
<div class="row">
    <div class="col-md-12 text-center">
        <?php if ($postID !== NULL) : ?>
            <h2>Noticias</h2>
            <hr>
            <div class="form-group col-md-12 text-justify">
                <?php
                $sql = "SELECT * FROM post WHERE id_post = '$postID'";
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
                                $sql1 = "SELECT * FROM comments WHERE post_id = '$postID'";
                                $result1 = $conexion->query($sql1);
                                $comments = $result1->fetchAll(PDO::FETCH_OBJ);
                                $count1 = $result1->rowCount();
                                ?>
                                <?php if ($count1 > 0) : ?>
                                    <?php foreach ($comments as $comment) : ?>
                                        <div class="col-md-12 ml-5">
                                            <i class="fas fa-user-edit fa-2x"></i>
                                            <div class="media-body">
                                                <h5 class="mt-0">Usuario: <?php echo $comment->user_id ?></h5>
                                                <p class="h-25 w-50 p-3 text-justify border"><?php echo $comment->comment; ?></p>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <div>
                        <h3>Post no existe</h3>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
        <hr>
        <div class="card my-4">
            <h5 class="card-header">Escribe una nueva publicación</h5>
            <div class="card-body">
                <form method="post" action="../controllers/createPost.php">
                    <div class="form-group">
                        <label for="">Titulo de la publicación</label>
                        <input class="form-control" name="titulo"></input>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="contenido" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>