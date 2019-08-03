<?php include_once('./controllers/dataBaseConfig.php');
$session = isset($_SESSION['email']) ? $_SESSION['email'] : NULL;
$type = isset($_SESSION['id_user_type']) ? $_SESSION['id_user_type'] : NULL;
?>

<div class="container mt-5 mb-5">
    <h1 class="text-center  mb-5">Home page</h1>
    <?php $query = $conexion->query("SELECT * FROM post;");
    $posts = $query->fetchAll(PDO::FETCH_OBJ); ?>
    <?php foreach ($posts as $post) : ?>

        <h1 class="mb-5"><?php echo $post->titulo; ?></h1>
        <p class="text-justify mb-5"><?php echo $post->contenido; ?></p>
        <div class="media mb-4">
            <div class="row">
                <h5 class="mb-5 ml-3">Comentarios</h5>
                <?php
                $sql1 = "SELECT * FROM comments WHERE post_id = '$post->id_post'";
                $result1 = $conexion->query($sql1);
                $comments = $result1->fetchAll(PDO::FETCH_OBJ);
                $count1 = $result1->rowCount();
                ?>
                <?php if ($count1 > 0) : ?>
                    <?php foreach ($comments as $comment) : ?>
                        <div class="col-md-12 ml-5">
                            <i class="fas fa-user-edit fa-3x"></i>
                            <div class="media-body">
                                <h5 class="mt-0"><small>Usuario: <?php echo $comment->user_id ?></small></h5>
                                <hr>
                                <p class="h-25 w-50 p-3 text-justify border"><?php echo $comment->comment; ?></p>
                                <hr>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
        <?php if ($session !== NULL && $type == 3) : ?>
            <h1>Comentario</h1>
            <div class="row">
                <div class="col-md-auto">
                    <div class="card  my-4">
                        <div class="card-body">
                            <form method="post" action="./controllers/createComment.php">
                                <label for="">Ingrese su comentario</label>
                                <textarea class="form-control" rows="1" name="comment"></textarea>
                                <input type="hidden" name="post_id" value="<?php echo $post->id_post; ?>" />
                                <button type="submit" class="btn btn-primary">Comentar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        </tr>
    <?php endforeach; ?>
</div>