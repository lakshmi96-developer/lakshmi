<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use mdm\admin\components\Helper;
use mdm\admin\components\MenuHelper;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap" >
    <div id="navigation">
    <?php
    
$siteName = \Yii::$app->params['siteName'];
$footerName = \Yii::$app->params['footerName'];
$footerUrl = \Yii::$app->params['footerUrl'];





    NavBar::begin([
        'brandLabel' => $siteName,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            //'id'=>'navigation',
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    
  $callback = function($menu){
    $data = eval($menu['data']);
    if(substr($menu['route'],-11) == 'site/logout') {
        return [
            'label' => $menu['name'], 
            'url' => [$menu['route']],
            'linkOptions' => ['data-method' => 'post']
        ];
    }
    else if(substr($menu['route'],-10) == 'site/login' && !Yii::$app->user->isGuest) {
       return [
            'label' => '',
           'options' => ['style' => 'display:none']
        ]; 
    }
    else if(substr($menu['route'],-11) == 'user/create' && !Yii::$app->user->isGuest) {
       return [
            'label' => '',
           'options' => ['style' => 'display:none']
        ]; 
    }
    else if(count($menu['children']) > 0 ) {
        return [
                   'label' => $menu['name'], 
                   'url' => [$menu['route']],
                    //'options' => $data,
                    'items' => $menu['children']
               ];

    }
    else {
           return [
                      'label' => $menu['name'], 
                      'url' => [$menu['route']],
                       //'options' => $data,
                  ];
       }
   };
    
$items =  MenuHelper::getAssignedMenu(Yii::$app->user->id,null,$callback);
/*$items[] = Yii::$app->user->isGuest ?
                ['label' => 'Login', 'url' => ['/site/login']] :
                [
                    'label' => 'Logout (' . Yii::$app->user->identity->firstName . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ];
 * 
 */

//$items = Helper::filter($items);
echo Nav::widget([
    'options' => ['class' => 'navbar-nav navbar-right'],
    'items' => $items
]);
  
    NavBar::end();
    
    ?>
    </div>
    <div class="container"  style="width:99%;" >
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container"  style="width:99%;">
        <p class="pull-left">&copy; <a href="<?php echo $footerUrl; ?>"><?php echo $footerName; ?> </a> <?= date('Y') ?></p>

        <!-- <p class="pull-right"><?= Yii::powered() ?></p> -->
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
