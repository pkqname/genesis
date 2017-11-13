<div class="container">
     <a href="notes/added">Добавить заметку</a>
<?php foreach($notes as $note) { ?>
    <div class="note">
        <h3>Заметка №<?=$note->id?></h3>
        <p><?=$note->text?></p>
        <p>Дата создания <?=$note->date?></p>
        <p>Дата последнего изменения <?=$note->date_change?></p>
        <a href="notes/<?=$note->id?>">Просмотреть</a>
    </div>
<?php } ?>
</div>