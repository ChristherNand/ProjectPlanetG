<?php $conexion = new PDO("mysql:host=localhost;dbname=planetgeek", 'root', ''); ?>
<?php $postID = isset($_GET['post']) ? $_GET['post'] : NULL; ?>
<?php if ($postID !== NULL) : ?>
    <div class="row">
        <div class="col-md-12 text-center">
            <h2>Noticias</h2>
            <hr>
            <div class="form-group col-md-12 text-justify">
                <?php
                $sql = "SELECT * FROM comentarios WHERE idComentario = '$postID'";
                $result = $conexion->query($sql);
                $posts = $result->fetchAll(PDO::FETCH_OBJ);
                $count = $result->rowCount();
                ?>
                <?php if ($count > 0) : ?>
                    <?php foreach ($posts as $post) : ?>
                        <h1 class="mt-4"><?php echo $post->titulo; ?></h1>
                        <p class="lead">
                            Autor <a href="#">John Jaramillo</a>
                        </p>
                        <hr>
                        <p>Posted on January 1, 2019 at 12:00 PM</p>
                        <hr>
                        <p><?php echo $post->texto; ?></p>
                        <hr>
                        <div class="card my-4">
                            <h5 class="card-header">Escribe una nueva publicación</h5>
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                        <div class="media mb-4">
                            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                            <div class="media-body">
                                <h5 class="mt-0">Usuario que realiza el comentario</h5>
                                <p>Comentario de la publicación</p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <div>
                        <h3>Post no existe</h3>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php endif; ?>