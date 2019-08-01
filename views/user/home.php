<?php include_once('./controllers/dataBaseConfig.php');
$session = isset($_SESSION['email']) ? $_SESSION['email'] : NULL;
$type = isset($_SESSION['id_user_type']) ? $_SESSION['id_user_type'] : NULL;
?>

<div class="container-fluid mt-5 mb-5">
    <h1>Home page</h1>
    <p>Get all news</p>

    <?php $query = $conexion->query("SELECT * FROM post;");
    $posts = $query->fetchAll(PDO::FETCH_OBJ); ?>
    <?php foreach ($posts as $post) : ?>
        <tr>
            <h1><?php echo $post->titulo; ?></h1>
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