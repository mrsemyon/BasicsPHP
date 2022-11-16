<?php
$images = [
    [
        'image' => 'img/demo/gallery/21.jpg',
        'thumb' => 'img/demo/gallery/thumb/21.jpg',
    ],
    [
        'image' => 'img/demo/gallery/22.jpg',
        'thumb' => 'img/demo/gallery/thumb/22.jpg',
    ],
    [
        'image' => 'img/demo/gallery/23.jpg',
        'thumb' => 'img/demo/gallery/thumb/23.jpg',
    ],
    [
        'image' => 'img/demo/gallery/24.jpg',
        'thumb' => 'img/demo/gallery/thumb/24.jpg',
    ],
    [
        'image' => 'img/demo/gallery/25.jpg',
        'thumb' => 'img/demo/gallery/thumb/25.jpg',
    ],
    [
        'image' => 'img/demo/gallery/26.jpg',
        'thumb' => 'img/demo/gallery/thumb/26.jpg',
    ],
];

require $_SERVER['DOCUMENT_ROOT'] . '/public/templates/header.php';
?>
<div class="col-md-12">
    <div id="panel-1" class="panel">
        <div class="panel-hdr">
            <h2>
                Задание
            </h2>
            <div class="panel-toolbar">
                <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
            </div>
        </div>
        <div class="panel-container show">
            <div class="panel-content">
                <div class="panel-tag">
                    <p>Сформируйте массив данных и выведите полностью альбом.</p>
                </div>
                <div id="js-lightgallery">
                    <?php foreach ($images as $image) : ?>
                        <a class="" href="<?= $image['image']; ?>">
                            <img class="img-responsive" src="<?= $image['thumb']; ?>" alt="image">
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
</main>


<script src="js/vendors.bundle.js"></script>
<script src="js/app.bundle.js"></script>
<script src="js/miscellaneous/lightgallery/lightgallery.bundle.js"></script>
<script>
    // default list filter
    initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
    // custom response message
    initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
    //accordion filter
    initApp.listFilter($('#js_list_accordion'), $('#js_list_accordion_filter'));
    // nested list filter
    initApp.listFilter($('#js_nested_list'), $('#js_nested_list_filter'));
    //init navigation 
    initApp.buildNavigation($('#js_nested_list'));

    $(document).ready(function() {


        var $initScope = $('#js-lightgallery');
        if ($initScope.length) {
            $initScope.justifiedGallery({
                border: -1,
                rowHeight: 150,
                margins: 8,
                waitThumbnailsLoad: true,
                randomize: false,
            }).on('jg.complete', function() {
                $initScope.lightGallery({
                    thumbnail: true,
                    animateThumb: true,
                    showThumbByDefault: true,
                });
            });
        };
        $initScope.on('onAfterOpen.lg', function(event) {
            $('body').addClass("overflow-hidden");
        });
        $initScope.on('onCloseAfter.lg', function(event) {
            $('body').removeClass("overflow-hidden");
        });
    });
</script>
</body>

</html>