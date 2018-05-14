<?php
if(\Yii::$app->user->can('administrator')):?>
<div class="admin-default-index">
    <div class="admin-default-index">
        <h1>Вы зашли как администратор!</h1>
        <p>
            Вам доступны все разделы!
        </p>
    </div>
</div>
<?php elseif(\Yii::$app->user->can('managers')):?>
    <div class="admin-default-index">
        <h1>Вы зашли как менеджер!</h1>
        <p>
            Вам доступны только некоторые разделы!
        </p>
    </div>
<?php endif;?>