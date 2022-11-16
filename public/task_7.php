<?php
$elements = [
    [
        'title' => 'Главная',
        'link'  => '#',
    ],
    [
        'title' => 'PHP',
        'link'  => '#',
    ],
    [
        'title' => 'Функции',
        'link'  => '#',
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
                <ol class="breadcrumb page-breadcrumb">
                    <?php foreach ($elements as $element) : ?>
                        <?php if ($element != end($elements)) : ?>
                            <li class="breadcrumb-item"><a href="<?= '1' . $element['link']; ?>"><?= $element['title']; ?></a></li>
                        <?php else : ?>
                            <li class="breadcrumb-item active"><?= $element['title']; ?></li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ol>
            </div>
        </div>
    </div>
</div>
<?php
require $_SERVER['DOCUMENT_ROOT'] . '/public/templates/footer.php';
