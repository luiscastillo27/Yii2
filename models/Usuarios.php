<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuarios".
 *
 * @property integer $id
 * @property string $usuario
 * @property string $password
 * @property integer $estado
 * @property string $fecha
 */
class Usuarios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuarios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['usuario', 'password', 'estado', 'fecha'], 'required'],
            [['estado'], 'integer'],
            [['usuario', 'password'], 'string', 'max' => 27],
            [['fecha'], 'string', 'max' => 11],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'usuario' => 'Usuario',
            'password' => 'Password',
            'estado' => 'Estado',
            'fecha' => 'Fecha',
        ];
    }
}
