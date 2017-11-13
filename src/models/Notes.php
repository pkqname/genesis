<?php

namespace Pkqname\Notes\Models;

use Yii;
use yii\db\ActiveRecord;

class Notes extends ActiveRecord{

    public static function tableName()
    {
        return '{{%notes}}';
    }

    public function rules()
    {
        return [
            [['text'], 'required', 'message' => 'Поле не может быть пустым'],
            [['text'], 'string'],
            [['date', 'date_change'], 'safe'],
        ];
    }

}