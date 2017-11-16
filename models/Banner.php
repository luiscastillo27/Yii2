<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "banner".
 *
 * @property integer $id_banner
 * @property string $imagen
 * @property string $descripcion
 * @property string $tipo
 * @property integer $estado
 */
class Banner extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'banner';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['imagen', 'descripcion', 'tipo', 'estado'], 'required'],
            [['estado'], 'integer'],
            [['imagen', 'tipo'], 'string', 'max' => 27],
            [['descripcion'], 'string', 'max' => 127],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_banner' => 'Id Banner',
            'imagen' => 'Imagen',
            'descripcion' => 'Descripcion',
            'tipo' => 'Tipo',
            'estado' => 'Estado',
        ];
    }
}
