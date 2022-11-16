<?php
$items = [
    [
        'title' => 'My Tasks',
        'color' => 'bg-fusion-400',
        'value' => '130 / 500',
        'width' => 65,
    ],
    [
        'title' => 'Transfered',
        'color' => 'bg-success-500',
        'value' => '440 TB',
        'width' => 34,
    ],
    [
        'title' => 'Bugs Squashed',
        'color' => 'bg-info-400',
        'value' => '77%',
        'width' => 77,
    ],
    [
        'title' => 'User Testing',
        'color' => 'bg-primary-300',
        'value' => '7 days',
        'width' => 84,
    ],
];

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
                <?php foreach ($items as $item) : ?>
                    <div class="d-flex mt-2">
                        <?= $item['title']; ?>
                        <span class="d-inline-block ml-auto"><?= $item['value']; ?></span>
                    </div>
                    <div class="progress progress-sm mb-3">
                        <div class="progress-bar <?= $item['color']; ?>" role="progressbar" style="width: <?= $item['width']; ?>%;" aria-valuenow="<?= $item['width']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<?php
require $_SERVER['DOCUMENT_ROOT'] . '/public/templates/footer.php';
