<?php

namespace backend\models;
use common\models\User;

use Yii;

/**
 * This is the model class for table "rol".
 *
 * @property integer $id
 * @property string $rol_name
 * @property integer $rol_valor
 */
class Rol extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rol';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rol_name', 'rol_valor'], 'required'],
            [['rol_valor'], 'integer'],
            [['rol_name'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'rol_name' => 'Rol Name',
            'rol_valor' => 'Rol Valor',
        ];
    }
    public function getUsers()
    {
    return $this->hasMany(User::className(), ['rol_id' => 'id']);
    }
}
