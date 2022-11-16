<?php
$pdo = new PDO("mysql:host=127.0.0.1;dbname=basicsphp;charset=utf8", "root", "root");
$statement = $pdo->query('SELECT * FROM `tasks`');
$tasks = $statement->fetchAll(PDO::FETCH_ASSOC);

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
                <h5 class="frame-heading">
                    Обычная таблица
                </h5>
                <div class="frame-wrap">
                    <table class="table m-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($tasks as $task) : ?>
                                <tr>
                                    <th scope="row"><?= $task['id']; ?></th>
                                    <td><?= $task['first_name']; ?></td>
                                    <td><?= $task['last_name']; ?></td>
                                    <td>@<?= $task['username']; ?></td>
                                    <td class="container">
                                        <a href="show.php?id=<?= $task['id']; ?>" class="mx-1 btn btn-info">Просмотреть</a>
                                        <a href="edit.php?id=<?= $task['id']; ?>" class="mx-1 btn btn-warning">Изменить</a>
                                        <a href="delete.php?id=<?= $task['id']; ?>" class="mx-1 btn btn-danger">Удалить</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require $_SERVER['DOCUMENT_ROOT'] . '/public/templates/footer.php';
