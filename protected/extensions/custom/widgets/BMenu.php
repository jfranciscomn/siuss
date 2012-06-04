<?php
    Yii::import('zii.widgets.CMenu');
    class BMenu extends CMenu {
        public function init() {
            parent::init();
			Yii::app()->clientScript->registerCoreScript('jquery');
            $cs = Yii::app()->clientScript;
            $cs->registerScriptFile(Yii::app()->theme->baseUrl.'/js/bootstrap.js', CClientScript::POS_END);
        }
    }
?>