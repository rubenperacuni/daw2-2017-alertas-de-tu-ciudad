<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\UsuarioIncidencia */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Usuario Incidencias'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usuario-incidencia-view">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'crea_fecha',
            'clase_incidencia_id',
            'texto:ntext',
            'destino_usuario_id',
            'origen_usuario_id',
            'alerta_id',
            'comentario_id',
            'fecha_lectura',
            'fecha_borrado',
            'fecha_aceptado',
        ],
    ]);
	
	if($model->clase_incidencia_id == 'C'){
		
		echo Html::a(Yii::t('app', 'Responder Consulta'), ['createmensaje', 'id' => $model->origen_usuario_id], ['class' => 'btn btn-success']);
	}
	
	?> 

</div>
