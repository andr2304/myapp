<aside class="main-sidebar">

    <section class="sidebar">

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],
                    ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'], 'visible' => Yii::$app->user->can('administrator')],
                    ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'], 'visible' => Yii::$app->user->can('administrator')],
                    ['label' => 'Пользователи', 'url' => ['/admin/user'],'active' => Yii::$app->controller->id == 'user', 'visible' => Yii::$app->user->can('administrator')],
                    ['label' => 'Роли', 'url' => ['/rbac/role'], 'visible' => Yii::$app->user->can('administrator')],
                    ['label' => 'Генерация Word', 'url' => ['/admin/generation']],
                    ['label' => 'Правила загрузки', 'url' => ['/admin/generation/upload-rules']],

                ],
            ]
        ) ?>

    </section>

</aside>
