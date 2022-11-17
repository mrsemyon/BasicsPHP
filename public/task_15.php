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
                        <div class="alert alert-info fade show" role="alert">
                            Кнопка была нажата: <b><?= (!empty($_SESSION['count'])) ? $_SESSION['count'] : '0'; ?></b> раз
                        </div>
                        <form action="/controllers/task_15.php" method="POST">
                            <button name="submit" class="btn btn-success mt-3">Submit</button>
                            <button name="reset" class="btn btn-danger mt-3">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require $_SERVER['DOCUMENT_ROOT'] . '/public/templates/footer.php';
