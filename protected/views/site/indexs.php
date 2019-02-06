<?php

/* @var $this SiteController */

 $this->pageTitle=Yii::app()->name;

?>


<h1></h1>

<?php



$ert=Yii::app()->user->getState("urole");
if($ert!=NULL)
{
$qw=Yii::app()->user->getState("section");
    $ert=Yii::app()->user->getState("urole");
$this->widget(
    'booster.widgets.TbPanel',
    array(
        'title' => 'Welcome',
    	'context' => 'primary',
        'headerIcon' => 'home',
        'content' =>Yii::app()->user->getState("uname").'<pre>'.'<br>'.'Section:'. NtNotice::model()->getSection($qw).'<br>'. NtNotice::model()->getRole($ert).'<br>',
    ));
}
else
{
    echo 'Welcome SuperAdmin';  
    //echo Yii::app()->user->lastLoginTime;    
    
}


?>
