<?php
$users = [
    [
        'id'        => 1,
        'name'      => 'Oliver Kopyov',
        'photo'     => 'img/demo/avatars/avatar-b.png',
        'position'  => 'IT Director',
        'job'       => 'Gotbootstrap Inc.',
        'phone'     => '+13174562564',
        'email'     => 'oliver.kopyov@smartadminwebapp.com',
        'address'   => '15 Charist St, Detroit, MI, 48212, USA',
        'status'    => 'success',
        'facebook'  => '',
        'twitter'   => '',
        'linkedin'  => '',
    ],
    [
        'id'        => 2,
        'name'      => 'Sesha Gray',
        'photo'     => 'img/demo/avatars/avatar-c.png',
        'position'  => 'Project Manager',
        'job'       => 'Gotbootstrap Inc.',
        'phone'     => '+13174567619',
        'email'     => 'sesha.gray@smartadminwebapp.com',
        'address'   => '134 Hamtrammac, Detroit, MI, 48314, USA',
        'status'    => 'warning',
        'facebook'  => '',
        'twitter'   => '',
        'linkedin'  => '',
    ],
    [
        'id'        => 3,
        'name'      => 'Dr. John Cook PhD',
        'photo'     => 'img/demo/avatars/avatar-e.png',
        'position'  => 'Human Resources',
        'job'       => 'Gotbootstrap Inc.',
        'phone'     => '+13174564590',
        'email'     => 'john.cook@smartadminwebapp.com',
        'address'   => '55 Smyth Rd, Detroit, MI, 48341, USA',
        'status'    => 'danger',
        'facebook'  => '',
        'twitter'   => '',
        'linkedin'  => '',
    ],
    [
        'id'        => 4,
        'name'      => 'Jim Ketty',
        'photo'     => 'img/demo/avatars/avatar-k.png',
        'position'  => 'Staff Orgnizer',
        'job'       => 'Gotbootstrap Inc.',
        'phone'     => '+13174563434',
        'email'     => 'jim.ketty@smartadminwebapp.com',
        'address'   => '134 Tasy Rd, Detroit, MI, 48212, USA',
        'status'    => 'success',
        'facebook'  => '',
        'twitter'   => '',
        'linkedin'  => '',
    ],
    [
        'id'        => 5,
        'name'      => 'Dr. John Oliver',
        'photo'     => 'img/demo/avatars/avatar-g.png',
        'position'  => 'Oncologist',
        'job'       => 'Gotbootstrap Inc.',
        'phone'     => '+13174563245',
        'email'     => 'john.oliver@smartadminwebapp.com',
        'address'   => '134 Gallery St, Detroit, MI, 46214, USA',
        'status'    => 'success',
        'facebook'  => '',
        'twitter'   => '',
        'linkedin'  => '',
    ],
    [
        'id'        => 6,
        'name'      => 'Sarah McBrook',
        'photo'     => 'img/demo/avatars/avatar-h.png',
        'position'  => 'Xray Division',
        'job'       => 'Gotbootstrap Inc.',
        'phone'     => '+13174561102',
        'email'     => 'sarah.mcbrook@smartadminwebapp.com',
        'address'   => '13 Jamie Rd, Detroit, MI, 48313, USA',
        'status'    => 'success',
        'facebook'  => '',
        'twitter'   => '',
        'linkedin'  => '',
    ],
    [
        'id'        => 7,
        'name'      => 'Jimmy Fellan',
        'photo'     => 'img/demo/avatars/avatar-i.png',
        'position'  => 'Accounting',
        'job'       => 'Gotbootstrap Inc.',
        'phone'     => '+13174560321',
        'email'     => 'jimmy.fallan@smartadminwebapp.com',
        'address'   => '55 Smyth Rd, Detroit, MI, 48341, USA',
        'status'    => 'success',
        'facebook'  => '',
        'twitter'   => '',
        'linkedin'  => '',
    ],
    [
        'id'        => 8,
        'name'      => 'Arica Grace',
        'photo'     => 'img/demo/avatars/avatar-j.png',
        'position'  => 'Accounting',
        'job'       => 'Gotbootstrap Inc.',
        'phone'     => '+13174560202',
        'email'     => 'arica.grace@smartadminwebapp.com',
        'address'   => '798 Smyth Rd, Detroit, MI, 48341, USA',
        'status'    => 'success',
        'facebook'  => '',
        'twitter'   => '',
        'linkedin'  => '',
    ],

];

require $_SERVER['DOCUMENT_ROOT'] . '/public/templates/header.php';
?>
<div class="row">
    <div class="col-xl-12">
        <div class="border-faded bg-faded p-3 mb-g d-flex">
            <input type="text" id="js-filter-contacts" name="filter-contacts" class="form-control shadow-inset-2 form-control-lg" placeholder="Filter contacts">
            <div class="btn-group btn-group-lg btn-group-toggle hidden-lg-down ml-3" data-toggle="buttons">
                <label class="btn btn-default active waves-effect waves-themed">
                    <input type="radio" name="contactview" id="grid" checked="" value="grid"><i class="fas fa-table"></i>
                </label>
                <label class="btn btn-default waves-effect waves-themed">
                    <input type="radio" name="contactview" id="table" value="table"><i class="fas fa-th-list"></i>
                </label>
            </div>
        </div>
    </div>
</div>
<div class="row js-list-filter" id="js-contacts">
    <?php foreach ($users as $user) : ?>
        <div class="col-xl-4">
            <div id="c_<?= $user['id']; ?>" class="card border shadow-0 mb-g shadow-sm-hover" data-filter-tags="<?= strtolower($user['name']); ?>">
                <div class="card-body border-faded border-top-0 border-left-0 border-right-0 rounded-top">
                    <div class="d-flex flex-row align-items-center">
                        <span class="status status-<?= $user['status']; ?> mr-3">
                            <span class="rounded-circle profile-image d-block " style="background-image:url('<?= $user['photo']; ?>'); background-size: cover;"></span>
                        </span>
                        <div class="info-card-text flex-1">
                            <p class="fs-xl text-truncate text-truncate-lg text-info">
                                <?= $user['name']; ?>
                            </p>

                            <span class="text-truncate text-truncate-xl"><?= $user['position']; ?>, <?= $user['job']; ?></span>
                        </div>
                        <button class="js-expand-btn btn btn-sm btn-default d-none waves-effect waves-themed" data-toggle="collapse" data-target="#c_1 > .card-body + .card-body" aria-expanded="false">
                            <span class="collapsed-hidden">+</span>
                            <span class="collapsed-reveal">-</span>
                        </button>
                    </div>
                </div>
                <div class="card-body p-0 collapse show">
                    <div class="p-3">
                        <a href="tel:<?= $user['phone']; ?>" class="mt-1 d-block fs-sm fw-400 text-dark">
                            <i class="fas fa-mobile-alt text-muted mr-2"></i><?= $user['phone']; ?></a>
                        <a href="mailto:<?= $user['email']; ?>" class="mt-1 d-block fs-sm fw-400 text-dark">
                            <i class="fas fa-mouse-pointer text-muted mr-2"></i><?= $user['email']; ?></a>
                        <address class="fs-sm fw-400 mt-4 text-muted">
                            <i class="fas fa-map-pin mr-2"></i><?= $user['address']; ?>
                        </address>
                        <div class="d-flex flex-row">
                            <a href="<?= $user['facebook']; ?>" class="mr-2 fs-xxl" style="color:#3b5998">
                                <i class="fab fa-facebook-square"></i>
                            </a>
                            <a href="<?= $user['twitter']; ?>" class="mr-2 fs-xxl" style="color:#38A1F3">
                                <i class="fab fa-twitter-square"></i>
                            </a>
                            <a href="<?= $user['linkedin']; ?>" class="mr-2 fs-xxl" style="color:#0077B5">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
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

        $('input[type=radio][name=contactview]').change(function() {
            if (this.value == 'grid') {
                $('#js-contacts .card').removeClassPrefix('mb-').addClass('mb-g');
                $('#js-contacts .col-xl-12').removeClassPrefix('col-xl-').addClass('col-xl-4');
                $('#js-contacts .js-expand-btn').addClass('d-none');
                $('#js-contacts .card-body + .card-body').addClass('show');

            } else if (this.value == 'table') {
                $('#js-contacts .card').removeClassPrefix('mb-').addClass('mb-1');
                $('#js-contacts .col-xl-4').removeClassPrefix('col-xl-').addClass('col-xl-12');
                $('#js-contacts .js-expand-btn').removeClass('d-none');
                $('#js-contacts .card-body + .card-body').removeClass('show');
            }

        });

        //initialize filter
        initApp.listFilter($('#js-contacts'), $('#js-filter-contacts'));
    });
</script>
</body>

</html>