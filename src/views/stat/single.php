<div class="container">
    <h3>Заметка №<?=$note->id?></h3>
    <p><?=$note->text?></p>
    <p>Дата создания <?=$note->date?></p>
    <a href="/notes/edit/<?=$note->id?>">Редактировать</a>
    <a href="/notes/delete/<?=$note->id?>">Удалить</a>
</div>