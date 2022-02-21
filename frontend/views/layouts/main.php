<?php

/* @var $this \yii\web\View */
/* @var $content string */
/**
 * @var string $content
 * @var \yii\web\View $this
 */
use yii\helpers\Html;
// use yii\bootstrap\Nav;
// use yii\bootstrap\NavBar;
// use yii\widgets\Breadcrumbs;
// use frontend\assets\AppAsset;
// use common\widgets\Alert;


$bundle = yiister\gentelella\assets\Asset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link href="<?= Yii::$app->homeUrl ?>/css/custom.css" rel="stylesheet">
</head>
<body class="nav-<?= !empty($_COOKIE['menuIsCollapsed']) && $_COOKIE['menuIsCollapsed'] == 'true' ? 'sm' : 'md' ?>" >
<?php $this->beginBody() ?>

<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;background: #1ABB9C;">
                    <a href="<?php echo Yii::$app->urlManager->createAbsoluteUrl(['site/index'])?>" class="site_title"><i class="fa fa-university"></i> <span>Student App</span></a>
                </div>
                <div class="clearfix"></div>
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="<?= Yii::$app->request->baseUrl . '/' . \Yii::$app->user->identity->user_image; ?>" style="width: 50px;height: 50px;border-radius: 50%;margin-left: 15px;margin-top: 23px;" alt="User Image"/>
                    </div>
                    <div class="profile_info">
                        <p style="font-size: 16px;font-weight: 600;margin: 0 0 1px;color: #f4f4f4;"><?php echo Yii::$app->user->identity->username; ?></p>
                        <a href="" style="color: #f4f4f4;"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                    <?php
                        if (Yii::$app->user->identity->user_role==1) 
                        {
                            $menuItems=[
                                ['label' => 'Dashboard', 'url' => ['/site/index'], "icon" => "home"],
                                ['label' => 'Roles', 'url' => ['/role/index'], "icon" => "sitemap"],
                                ['label' => 'Users', 'url' => ['/user/index'], "icon" => "users"],
                                ['label' => 'Student', 'url' => ['/student/index'], "icon" => "user"],
                                ['label' => 'Class', 'url' => ['/schoolclass/index'], "icon" => "leaf"],
                                ['label' => 'Gallery', 'url' => ['/gallery/index'], "icon" => "picture-o"],
                                [
                                    "label" => "Nations",
                                    "icon" => "th",
                                    "url" => "#",
                                    "items" =>
                                    [
                                        ['label' => 'Country', 'url' => ['/country/index'], "icon" => "rocket"],
                                        ['label' => 'State', 'url' => ['/state/index'], "icon" => "wifi"],
                                        ['label' => 'District', 'url' => ['/district/index'], "icon" => "signal"],
                                        ['label' => 'Taluk', 'url' => ['/taluk/index'], "icon" => "send"],
                                    ],
                                ],
                            ];
                        }
                        elseif(Yii::$app->user->identity->user_role==2)
                        {
                            $menuItems=[
                                ['label' => 'Dashboard', 'url' => ['/site/index'], "icon" => "home"],
                                //['label' => 'Roles', 'url' => ['/role/index'], "icon" => "sitemap"],
                                //['label' => 'Users', 'url' => ['/user/index'], "icon" => "users"],
                                ['label' => 'Student', 'url' => ['/student/index'], "icon" => "user"],
                                ['label' => 'Gallery', 'url' => ['/gallery/index'], "icon" => "picture-o"],
                                // ['label' => 'Class', 'url' => ['/schoolclass/index'], "icon" => "leaf"],
                                // ['label' => 'Taluk', 'url' => ['/taluk/index'], "icon" => "send"],
                                // ['label' => 'District', 'url' => ['/district/index'], "icon" => "signal"],
                                // ['label' => 'State', 'url' => ['/state/index'], "icon" => "wifi"],
                                // ['label' => 'Country', 'url' => ['/country/index'], "icon" => "rocket"],
                            ];
                        }
                    ?>
                    <?=
                        
                        \yiister\gentelella\widgets\Menu::widget(
                            [
                                "items" => $menuItems
                            ]
                        )
                    ?>
                    </div>
                </div>
                <div class ="sidebar-footer hidden-small">
                <a href="<?php echo Yii::$app->urlManager->createAbsoluteUrl(['site/logout'])?>" data-method="post" style="width:100%;color:#E7E7E7"><i class="glyphicon glyphicon-off"></i> Log Out</a>
                    <!-- <a data-toggle="tooltip" data-placement="top" title="" href="login.html" data-original-title="Logout">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a> -->
                </div>
            </div>            
        </div>
        <div class="top_nav">
            <div class="nav_menu" style="background: #1abb9c52;">
                <nav class="" role="navigation">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <!-- <img src="../uploads/students/menu.jpg" alt=""> -->
                                <img src="<?= Yii::$app->request->baseUrl . '/' . \Yii::$app->user->identity->user_image; ?>" style="width: 30px;height: 30px;border-radius: 50%;" alt="User Image"/>
                               <!-- <img src="<?php echo Yii::$app->user->identity->user_image; ?>"/> -->
                                <?php echo Yii::$app->user->identity->username; ?>
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="<?php echo Yii::$app->urlManager->createAbsoluteUrl(['site/logout'])?>" data-method="post"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="right_col" role="main">
            <?php //if (isset($this->params['h1'])): ?>
                <!-- <div class="page-title">
                    <div class="title_left">
                        <h1><?//= $this->params['h1'] ?></h1>
                    </div>
                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Go!</button>
                            </span>
                            </div>
                        </div>
                    </div>
                </div> -->
            <?php //endif; ?>
            <div class="clearfix"></div>

            <?= $content ?>
        </div>
    </div>
</div>


    <?php
    // NavBar::begin([
    //     'brandLabel' => Yii::$app->name,
    //     'brandUrl' => Yii::$app->homeUrl,
    //     'options' => [
    //         'class' => 'navbar-inverse navbar-fixed-top',
    //     ],
    // ]);
    
    // if (Yii::$app->user->isGuest) {
    //     $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
    //     $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    // } else {
    //     $menuItems = [
    //         ['label' => 'Home', 'url' => ['/site/index']],
    //         // ['label' => 'About', 'url' => ['/site/about']],
    //         // ['label' => 'Contact', 'url' => ['/site/contact']],
    //         // ['label' => 'Products', 'url' => ['/products/index']],
    //         // ['label' => 'Category', 'url' => ['/category/index']],
    //         // ['label' => 'Mark', 'url' => ['/settings/mark/index']],
    //         ['label' => 'Student', 'url' => ['/student/index']],
    //         ['label' => 'Class', 'url' => ['/schoolclass/index']],
    //         ['label' => 'Taluk', 'url' => ['/taluk/index']],
    //         ['label' => 'District', 'url' => ['/district/index']],
    //         ['label' => 'State', 'url' => ['/state/index']],
    //         ['label' => 'Country', 'url' => ['/country/index']],
    //     ];
    //     $menuItems[] = '<li>'
    //         . Html::beginForm(['/site/logout'], 'post')
    //         . Html::submitButton(
    //             'Logout (' . Yii::$app->user->identity->username . ')',
    //             ['class' => 'btn btn-link logout']
    //         )
    //         . Html::endForm()
    //         . '</li>';
    // }
    // echo Nav::widget([
    //     'options' => ['class' => 'navbar-nav navbar-right'],
    //     'items' => $menuItems,
    // ]);
    // NavBar::end();
    // ?>

   
<!-- <footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer> -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
