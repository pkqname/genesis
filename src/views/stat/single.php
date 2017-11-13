<div class="container">
    <h3>Заметка №<?=$note->id?></h3>
    <p class="text"><?=$note->text?></p>
    <p class="date">Дата создания <?=$note->date?></p>
    <p class="date">Дата создания <?=$note->date_change?></p>
    <a class="edit btn-primary" href="/notes/edit/<?=$note->id?>">Редактировать</a>
    <a class="delete btn-danger" href="/notes/delete/<?=$note->id?>">Удалить</a><br><br><br>
    <a class="btn-link" href="/notes">На главную</a>
</div>