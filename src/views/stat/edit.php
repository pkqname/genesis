<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
?>
<div class="container">
    <?php if($model->isNewRecord) {?>
    <h3>Новая заметка</h3>
    <?php } else {?>
        <h3>Заметка №<?= $model->id?></h3>
    <?php } ?>
    <?php $form = ActiveForm::begin(); ?>
        <?=$form->field($model, 'text')->textarea(['style' => 'width:300px'])->label(false);?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    <? ActiveForm::end()?>

</div>