<?php
namespace frontend\components;
use Yii;
class RoleHelper {

	function checkRole($controllerName){

		if(!isset(Yii::$app->user->identity->user_role)){
						return ['login'];
		}

		switch($controllerName){


			case 'site':

					if(Yii::$app->user->identity->user_role==1){
						//If that is admin
						$actionLists = ['logout', 'index','create','view','update','delete','student','role','user','error','schoolclass','taluk','district','state','country'];
						return $actionLists;
					}
					elseif(Yii::$app->user->identity->user_role==2){
						//If that is user
						return ['logout'];
					}
					else{

						return ['logout'];
					}
					break;
                    
			
				if(Yii::$app->user->identity->user_role==1){
                    //If that is admin
                    $actionLists = ['index','create','view','update','delete'];
                    return $actionLists;
                }
                elseif(Yii::$app->user->identity->user_role==2){
                    //If that is user
                    $actionLists = ['index','create','view','update','delete'];
                    return $actionLists;
                }else{

                    return [''];
                }
                break;

		}
	}
}

?>
