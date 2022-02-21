<?php
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'Student Application';
?>
<div class="site-index">

    <!-- <div class="jumbotron">
       <p class="lead">Welcome Back to  Student Details Maintenance</p>
    </div> -->
    <div class="main-img"> 
        <img src="<?= Yii::$app->request->baseUrl . '/uploads/students/home.png'?>" style="width:50%;">
    </div>    
    <!-- <div class="body-content">
    
        <div class="row">
            <div class="col-lg-4">
            <h2 style="text-align:center">Education</h2>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQU8SmaRjJsXie-NqK2tjEBrk5pZuur3vb-NcC-HJE1Q6XeMPpL5W2DmaRvA7psVzsrLCo&usqp=CAU" alt="Education"  height="300px" width="300px">
            </div>
            <div class="col-lg-4">
                <h2 style="text-align:center">Experience</h2>

                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtbaa4FlXdRhOjXDaTPG5CbfrIKzO1SgMdDO8fMpdkqMBsUcplkBNC2oG_TQo4_3kR260&usqp=CAU" alt="Experience"  height="300px" width="300px">

            </div>
            <div class="col-lg-4">
            
                <h2 style="text-align:center">Excellence</h2>

                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRihHe8v9p1-NXn34Wqd7UJ6aLb4jxRp3LlMi2tsannWDCB3a9A1J3Rf5Lzcl1HMK4lHhA&usqp=CAU" alt="Excellence" height="300px" width="300px">
         
            </div>
        </div>

    </div> -->
    <div class="body-content">

        <div class="row tile_count">
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
                <span class="count_top">No.Of Students</span>
                <div class="count"><?php echo $result['student']; ?></div>
                <span class="count_bottom"></span>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
                <span class="count_top">No.Of Country Reach Us</span>
                <div class="count"><?php echo $result['country']; ?></div>
                <span class="count_bottom"></span>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
                <span class="count_top">No.Of States Reach Us</span>
                <div class="count"><?php echo $result['states']; ?></div>
                <span class="count_bottom"></span>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
                <span class="count_top">No.Of District Reach Us</span>
                <div class="count"><?php echo $result['district']; ?></div>
                <span class="count_bottom"></span>
            </div>
        </div>
    </div>
</div>
