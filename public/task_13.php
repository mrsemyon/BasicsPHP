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
                        <?php if (!empty($_SESSION['danger'])) : ?>
                            <div class="alert alert-danger fade show" role="alert">
                                <?= $_SESSION['danger']; ?>
                            </div>
                            <?php unset($_SESSION['danger']); ?>
                        <?php endif; ?>
                        <?php if (!empty($_SESSION['success'])) : ?>
                            <div class="alert alert-success fade show" role="alert">
                                <?= $_SESSION['success']; ?>
                            </div>
                            <?php unset($_SESSION['success']); ?>
                        <?php endif; ?>
                        <form action="/controllers/task_13.php" method="POST">
                            <div class="form-group">
                                <label class="form-label" for="simpleinput">Email</label>
                                <input name="email" type="text" name="email" id="simpleinput" class="form-control">
                            </div>
                            <label class="form-label" for="simpleinput">Password</label>
                            <input name="password" type="password" name="password" id="simpleinput" class="form-control">
                            <button class="btn btn-success mt-3">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require $_SERVER['DOCUMENT_ROOT'] . '/public/templates/footer.php';
