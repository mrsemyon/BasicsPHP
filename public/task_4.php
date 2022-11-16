<?php
$users = [
    [
        'photo' => 'img/demo/authors/sunny.png',
        'name' => 'Sunny A.',
        'profession' => 'UI/UX Expert',
        'position' => 'Lead Author',
        'twitter' => 'myplaneticket',
        'email' => 'https://wrapbootstrap.com/user/myorange',
    ],
    [
        'photo' => 'img/demo/authors/josh.png',
        'name' => 'Jos K.',
        'profession' => 'ASP.NET Developer',
        'position' => 'Partner &amp; Contributor',
        'twitter' => 'atlantez',
        'email' => 'https://wrapbootstrap.com/user/Walapa',
    ],
    [
        'photo' => 'img/demo/authors/jovanni.png',
        'name' => 'Jovanni L.',
        'profession' => 'PHP Developer',
        'position' => 'Partner &amp; Contributor',
        'twitter' => 'lodev09',
        'email' => 'https://wrapbootstrap.com/user/lodev09',
    ],
    [
        'photo' => 'img/demo/authors/roberto.png',
        'name' => 'Roberto R.',
        'profession' => 'Rails Developer',
        'position' => 'Partner &amp; Contributor',
        'twitter' => 'sildur',
        'email' => 'https://wrapbootstrap.com/user/sildur',
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
                <div class="d-flex flex-wrap demo demo-h-spacing mt-3 mb-3">
                    <?php foreach ($users as $user) : ?>
                        <div class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                            <img src="<?= $user['photo']; ?>" alt="<?= $user['name']; ?>" class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                            <div class="ml-2 mr-3">
                                <h5 class="m-0">
                                    <?= $user['name']; ?> (<?= $user['profession']; ?>)
                                    <small class="m-0 fw-300">
                                        <?= $user['position']; ?>
                                    </small>
                                </h5>
                                <a href="https://twitter.com/@<?= $user['twitter']; ?>" class="text-info fs-sm" target="_blank">@<?= $user['twitter']; ?></a> -
                                <a href="<?= $user['email']; ?>" class="text-info fs-sm" target="_blank" title="Contact <?= substr($user['name'], 0, strpos($user['name'], " ")); ?>"><i class="fal fa-envelope"></i></a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require $_SERVER['DOCUMENT_ROOT'] . '/public/templates/footer.php';
