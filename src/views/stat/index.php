<div class="container">
    <h1>Список заметок</h1>
     <a class="added btn-success" href="notes/added">Добавить заметку</a>
    <div class="notes">
    <?php foreach($notes as $note) { ?>
        <div class="note">
            <h3>Заметка №<?=$note->id?></h3>
            <p><?=$note->text?></p>
            <span class="date">Дата создания <?=$note->date?></span>
            <span class="date" style="float:right">Дата последнего изменения <?=$note->date_change?></span><br><br>
            <a class="btn-default view" href="notes/<?=$note->id?>">Просмотреть</a>
        </div>
    <?php } ?>
    </div>
</div>