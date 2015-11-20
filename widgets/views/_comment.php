<?php
/**
 * Created by PhpStorm.
 * User: Jonas
 * Date: 19.11.2015
 * Time: 22:28
 */

use jonasw91\loggablebehavior\widget\LogEntryWidget;
use yii\helpers\Url;

$index = 0;
$url = substr($model->model_type, strrpos($model->model_type, '\\') + 1, strlen($model->model_type));
echo '<li class="list-group-item" style="width: 100%;">
        <a href="' . Url::to([strtolower($url) . '/view', 'id' => $model->model_id]) . '">' . $model->id . '</a>'
    . LogEntryWidget::widget([
            'model' => $model,
            'type' => LogEntryWidget::HAVE_SEEN_VIEW]
    ) .
    '<p>'.$model->comment.'</p>'.
    '</li>';
?>