<?php
session_start();

require $_SERVER['DOCUMENT_ROOT'] . '/public/templates/header.php';
?>
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
                        <?php if (empty($_SESSION['email'])) : ?>
                            <div class="alert alert-danger fade show" role="alert">
                                Вы не авторизованы!
                            </div>
                        <?php else : ?>
                            <div class="alert alert-success fade show" role="alert">
                                Здравствуйте, <?= $_SESSION['email']; ?>.
                            </div>
                        <?php endif; ?>
                        <a href="/controllers/task_17.php" class="btn btn-info">Выйти</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require $_SERVER['DOCUMENT_ROOT'] . '/public/templates/footer.php';
