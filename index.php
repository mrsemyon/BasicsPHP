<?php
require $_SERVER['DOCUMENT_ROOT'] . '/public/templates/header.php';
?>
<div class="col-md-6">
    <div id="panel-1" class="panel">
        <div class="panel-hdr">
            <h2>
                Задания
            </h2>
            <div class="panel-toolbar">
                <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
            </div>
        </div>
        <div class="panel-container show">
            <div class="panel-content">
                <?php for ($i = 1; $i <= 20; $i++) : ?>
                    <p><a href="/public/task_<?= $i ?>.php">Задание № <?= $i ?></a></p>
                <?php endfor ?>
            </div>
        </div>
    </div>
</div>
<?php
require $_SERVER['DOCUMENT_ROOT'] . '/public/templates/footer.php';
