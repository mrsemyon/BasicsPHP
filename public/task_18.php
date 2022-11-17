<?php
$pdo = new PDO("mysql:host=127.0.0.1;dbname=basicsphp;charset=utf8", "root", "root");

$statement = $pdo->query('SELECT * FROM `images`');
$images = $statement->fetchAll();

require $_SERVER['DOCUMENT_ROOT'] . '/public/templates/header.php';
?>
<div class="row">
    <div class="col-md-6">
        <div id="panel-1" class="panel">
            <div class="panel-hdr">
                <h2>
                    Задание
                </h2>
                <div class="panel-toolbar">
                    <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                    <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <div class="panel-content">
                        <div class="form-group">
                            <form action="/controllers/task_18.php" enctype="multipart/form-data" method="POST">
                                <div class="form-group">
                                    <label class="form-label" for="simpleinput">Image</label>
                                    <input name="image" type="file" id="simpleinput" class="form-control">
                                </div>
                                <button class="btn btn-success mt-3">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div id="panel-1" class="panel">
            <div class="panel-hdr">
                <h2>
                    Загруженные картинки
                </h2>
                <div class="panel-toolbar">
                    <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                    <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <div class="panel-content image-gallery">
                        <div class="row">
                            <?php if (!empty($images)) : ?>
                                <?php foreach ($images as $image) : ?>
                                    <?php if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/upload/' . $image['image'])) : ?>
                                        <div class="col-md-3 image">
                                            <img style="width : 100px;" src="/upload/<?= $image['image'] ?>">
                                        </div>
                                    <?php endif ?>
                                <?php endforeach ?>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require $_SERVER['DOCUMENT_ROOT'] . '/public/templates/footer.php';
