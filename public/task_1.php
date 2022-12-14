<?php
$posts = [
    [
        'title' => 'Privacy',
        'desc' => 'Your privacy is important to us at SmartAdmin and the protection, confidentiality and integrity of your personal data are our prime concerns.
        We will only use your personal information to administer your account, provide the products and services you have requested from us, and to keep you informed about our products and services (if you have consented to this).
        We only use your data for the purposes for which it was collected and, where relevant, to meet local legal obligations.
        We will retain your personal information only for as long as is necessary for the purposes for which the information was collected, or as long as is required pursuant to law.',
    ],
    [
        'title' => 'Cookies and other similar technologies',
        'desc' => 'We collect certain data through cookies and similar technologies (e.g. web beacons, tags, device identifiers). Cookies are text files placed on your computer to collect standard internet log information and visitor behaviour information. This information is used to track visitor use of the website and to compile statistical reports on website activity. We register your interaction with our services in order to improve our website, content and services. Our use of such technologies and the data collected is described in more detail in our Cookie Policy. You can manage your cookie preferences through your browser settings.',
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
                <div class="fs-lg fw-300 p-5 bg-white border-faded rounded mb-g">
                    <?php foreach ($posts as $post) : ?>
                        <h2><?= $post['title']; ?></h2>
                        <p>
                            <?= $post['desc']; ?>
                        </p>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require $_SERVER['DOCUMENT_ROOT'] . '/public/templates/footer.php';
