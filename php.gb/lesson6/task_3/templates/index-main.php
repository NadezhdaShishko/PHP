<?php
require ROOT_DIR.'templates/modal.php';
require './public/index-main.php';
?>
<!-- Button trigger modal -->
<button type="button" class="ml-3 mb-3 btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Добавить отзыв
</button>


<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Имя</th>
        <th scope="col">Отзыв</th>
        <th scope="col">Дата</th>
    </tr>
    </thead>
    <tbody>

    <?php foreach ($result as $review):?>
    <tr>
        <th scope="row"><?=$review['id']?></th>
        <td><?=$review['name']?></td>
        <td><?=$review['otziv']?></td>
        <td><?=$review['date']?></td>
    </tr>
<?php endforeach ?>
    </tbody>
</table>
