<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[AlertaImagen]].
 *
 * @see AlertaImagen
 */
class AlertaImagenQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/
    
    public function tomarImagenesDesdeAlerta($id_alerta)
    {
        return $this->andWhere('[[alerta_id]] = '.$id_alerta);
    }

    /**
     * @inheritdoc
     * @return AlertaImagen[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return AlertaImagen|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
