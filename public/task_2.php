<?php
$items = [
    [
        'title' => 'Reports',
        'tags' => [
            'reports',
            'file'
        ],
    ],
    [
        'title' => 'Analytics',
        'tags' => [
            'analytics',
            'graphs'
        ],
    ],
    [
        'title' => 'Export',
        'tags' => [
            'export',
            'download'
        ],
    ],
    [
        'title' => 'Storage',
        'tags' => [
            'storage'
        ],
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
                <div class="panel-content">
                    <div class="bg-warning-100 border border-warning rounded">
                        <div class="input-group p-2 mb-0">
                            <input type="text" class="form-control form-control-lg shadow-inset-2 bg-warning-50 border-warning" id="js-list-msg-filter" placeholder="Filter list">
                            <div class="input-group-append">
                                <div class="input-group-text bg-warning-500 border-warning">
                                    <i class="fal fa-search fs-xl"></i>
                                </div>
                            </div>
                        </div>
                        <ul id="js-list-msg" class="list-group px-2 pb-2 js-list-filter">
                            <?php foreach ($items as $item) : ?>
                                <li class="list-group-item">
                                    <span data-filter-tags="<?= implode(' ', $item['tags']); ?>"><?= $item['title']; ?></span>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="filter-message js-filter-message mt-0 fs-sm"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require $_SERVER['DOCUMENT_ROOT'] . '/public/templates/footer.php';
