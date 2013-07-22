<?php
/*
 * @property integer $id
 * @property integer $name
 * @property string $alias
 * @property boolean $published
 * @property string $domain
 * @property string $address
 * @property string $telephone
 * @property string $work_time
 * @property string $email
 * @property string $map_code
 * @property string $message_email
 * @property string $info
 * @property string $images
 */
?>
<style>
.admin_main_features{float:left; width:40%;}
.admin_additional_features{float:left; width:60%;}
.manage_buttons{
        position: fixed;
        top: 50px;
        right: 30px;
    }
div.manage_buttons input{
        margin:0px;
    }
ul.menuTreeView  .menuItemCheckBox{
        width: auto;
        height: auto;
        margin: 0px 20px 0px 0px;
        padding: 0px;
        position: absolute;
        right: 20px;
    }
    ul.menuTreeView li.even_menu_item{
        background-color: #F5F5F5;
    }
    ul.menuTreeView li.odd_menu_item{
        background-color: #EEEEEE;
    }
    ul.menuTreeView li.even_menu_item:hover {
        background-color: #E0E0E0;
    }
    ul.menuTreeView li.odd_menu_item:hover{
        background-color: #E0E0E0;
    }
</style>
<div class="form">
    <?php $form = $this->beginWidget( 'CActiveForm', array(
                'id'=>'contect_form',
            ) 
        );
    ?>
    <div class="admin_main_features">
        <div class="row" >
            <?php echo $form->error( $contactModel, 'name' ); ?>
            <?php echo $form->labelEx( $contactModel, 'name' ); ?>
            <?php echo $form->textField( $contactModel, 'name' ); ?>
        </div>
        <div class="row">
            <?php echo $form->error( $contactModel, 'alias' ); ?>
            <?php echo $form->labelEx( $contactModel, 'alias' ); ?>
            <?php echo $form->textField( $contactModel, 'alias' ); ?>
        </div>
        <div class="row">
            <?php echo $form->error( $contactModel, 'published' ); ?>
            <?php echo $form->labelEx( $contactModel, 'published' ); ?>
            <?php echo $form->checkBox( $contactModel, 'published' ); ?>
        </div>
        <div class="row">
            <?php echo $form->error( $contactModel, 'domain' ); ?>
            <?php echo $form->labelEx( $contactModel, 'domain' ); ?>
            <?php echo $form->textField( $contactModel, 'domain' ); ?>
        </div>
        <div class="row">
            <?php echo $form->error( $contactModel, 'address' ); ?>
            <?php echo $form->labelEx( $contactModel, 'address' ); ?>
            <?php echo $form->textarea( $contactModel, 'address' ); ?>
        </div>
        <div class="row">
            <?php echo $form->error( $contactModel, 'telephone' ); ?>
            <?php echo $form->labelEx( $contactModel, 'telephone' ); ?>
            <?php echo $form->textField( $contactModel, 'telephone' ); ?>
        </div>
        <div class="row">
            <?php echo $form->error( $contactModel, 'work_time' ); ?>
            <?php echo $form->labelEx( $contactModel, 'work_time' ); ?>
            <?php echo $form->textField( $contactModel, 'work_time' ); ?>
        </div>
        <div class="row">
            <?php echo $form->error( $contactModel, 'email' ); ?>
            <?php echo $form->labelEx( $contactModel, 'email' ); ?>
            <?php echo $form->textField( $contactModel, 'email' ); ?>
        </div>
        <div class="row">
            <?php echo $form->error( $contactModel, 'map_code' ); ?>
            <?php echo $form->labelEx( $contactModel, 'map_code' ); ?>
            <?php echo $form->textarea( $contactModel, 'map_code' ); ?>
        </div>
        <div class="row">
            <?php echo $form->error( $contactModel, 'message_email' ); ?>
            <?php echo $form->labelEx( $contactModel, 'message_email' ); ?>
            <?php echo $form->textarea( $contactModel, 'message_email' ); ?>
        </div>
        <div class="row">
            <?php echo $form->error( $contactModel, 'info' ); ?>
            <?php echo $form->labelEx( $contactModel, 'info' ); ?>
            <?php echo $form->textarea( $contactModel, 'info' ); ?>
        </div>
    </div>
    <div class="admin_additional_features">
        <label>Дополнительные параметры</label>
        <h3>Пункты меню отображающие страницу</h3>
        <div class="admin_additional_features_content">
            <?php
                //получение массива дерева меню
                function getMenuItemConteintigStatusClosure( $contactModel )
                {
                    $status = function( $menuItemId ) use ( &$contactModel ){       
                        return $contactModel->hasMenuItem( $menuItemId );       
                    };
                    return $status;
                }
                $menuItemConteintigStatusClosure = getMenuItemConteintigStatusClosure( $contactModel );
                $this->widget('CTreeView', array(
                    'data' => MenuItems::getMenuTreeWithCheckbox(
                            'MenuItemConteintigThisContact', 
                            $menuItemConteintigStatusClosure,
                            array(MenuItems::CONTACT_MENU_ITEM_TYPE)
                        ), 
                    'animated'=>100, 
                    'htmlOptions'=>array(
                        'class'=>'menuTreeView'
                        )
                    )
                );
            ?>
        </div>
    </div>
    <div class="manage_buttons buttons">
        <?php echo CHtml::link('Закрыть', '/administrator/regions/', array('class'=>'btn del')); ?>
        <?php echo CHtml::submitButton($regionModel->isNewRecord?'Создать':'Сохранить', array('class'=>'btn btn-green')); ?>
    </div>
    <?php $this->endWidget(); ?>
</div>
<script>
<?php if(Yii::app()->user->hasFlash('saved')): ?>
    alertify.success("<?php echo Yii::app()->user->getFlash('saved'); ?>");
<?php endif; ?>
$(".admin_additional_features").accordion({ header: "h3" , collapsible: true, active:false, heightStyle: "content"});
$(".menuTreeView li:even",this).addClass("even_menu_item"); 
$(".menuTreeView li:odd",this).addClass("odd_menu_item");
</script>

