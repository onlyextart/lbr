<div class="main_menu_wrapper">
    <div class="main_menu_first_level">
        <ul>
            <?php 
            foreach( $this->firstLevelItems as $firstLevelItem){
                $colorCssClass='menu_color_group_'.$firstLevelItem->group->id;
                echo CHtml::openTag('li', array(
                    'class'=>( $this->menuBranch[2]->id==$firstLevelItem->id )?
                    'active '.$colorCssClass:$colorCssClass,
                ));
                echo CHtml::link(
                        $firstLevelItem->name, 
                        $firstLevelItem->path,
                        array('class'=>$colorCssClass)
                );
                echo CHtml::closeTag('li');
            }
            ?>
        </ul>
    </div>
    <?php if( !empty($this->secondLevelItems)): ?>
    <div class="main_menu_second_level">
        <ul>
            <?php 
            foreach( $this->secondLevelItems as $itemNum => $secondLevelItem){
                $colorCssClass='menu_color_group_'.$secondLevelItem->group->id;
                echo CHtml::openTag('li', array(
                    'class'=>( isset($this->menuBranch[3]) && $this->menuBranch[3]->id==$secondLevelItem->id )?
                    'active '.$colorCssClass:$colorCssClass,
                ));
                    echo CHtml::openTag(
                            'a',
                            array(
                                'class'=>$colorCssClass.' ',
                                'href'=>$secondLevelItem->path,
                            )
                    );
                        echo CHtml::image($secondLevelItem->icon, $secondLevelItem->name);
                        echo CHtml::openTag('span');
                            echo $secondLevelItem->name; 
                        echo CHtml::closeTag('span');
                    echo CHtml::closeTag('a');
                    $itemsInGroup=1;
                    $nextItem = $this->secondLevelItems[($itemNum+$itemsInGroup)];
                    while( $secondLevelItem->group->id==$nextItem->group->id){
                        $itemsInGroup++;
                        $nextItem = $this->secondLevelItems[($itemNum+$itemsInGroup)];
                    }
                    if($itemsInGroup>1 && $secondLevelItem->group->id!==$this->secondLevelItems[($itemNum-1)]->group->id){
                        echo('<span class="menu_group_name '.$colorCssClass.'" style="width:'.($itemsInGroup*125).'px;">'.$secondLevelItem->group->name.'</span>');
                        
                    }
                echo CHtml::closeTag('li');
            }
            ?>
        </ul>
    </div>
    <?php endif; ?>
    <?php if( !empty($this->thirdLevelItems) ): ?>
    <div class="main_menu_third_level">
        <div class="main_menu_third_level_icon">
            <a class="<?php echo 'menu_color_group_'.$this->menuBranch[3]->group->id ?>" href="<?php echo $this->menuBranch[3]->path ?>">
                <img src="<?php echo $this->menuBranch[3]->icon ?>" >
            </a>
        </div>
        <ul id="third_level_menu" style="<?php echo (Yii::app()->params[currentMenuItem]->type == MenuItems::PRODUCT_MENU_ITEM_TYPE)?"width:700px;":""?>" class="clearfix">
            <?php 
                foreach( $this->thirdLevelItems as $thirdLevelItem){
                    $colorCssClass='menu_color_group_'.$thirdLevelItem->group->id;
                    echo CHtml::openTag('li', array(
                        'class'=>( $this->menuBranch[4]->id==$thirdLevelItem->id )?
                        'active '.$colorCssClass:$colorCssClass,
                    ));
                    echo CHtml::link(
                            $thirdLevelItem->name, 
                            $thirdLevelItem->path,
                            array(
                                'class'=>$colorCssClass,
                                'style'=>( $this->menuBranch[4]->id==$thirdLevelItem->id )?
                                'border-color:#'.$thirdLevelItem->group->color:'',
                            )
                    );
                    echo CHtml::closeTag('li');
                }
            ?>
        </ul>
        <?php
        if(Yii::app()->params[currentMenuItem]->type == MenuItems::PRODUCT_MENU_ITEM_TYPE){
            $parent = Yii::app()->params[currentMenuItem]->parent()->find();
            $productMenuItems = $parent->children()->findAll();
            echo CHtml::openTag('ul', array('class'=>'menu_products_list', 'style'=>'border-color:#'.$thirdLevelItem->group->color));
                echo CHtml::openTag('li');
                    echo CHtml::link(
                        Yii::app()->params[currentMenuItem]->name,
                        Yii::app()->params[currentMenuItem]->path
                    );
                echo CHtml::closeTag('li');
            if(is_array($productMenuItems) && !(empty($productMenuItems))){
                foreach ($productMenuItems as $productMenuItem){
                    if($productMenuItem->id ==  Yii::app()->params[currentMenuItem]->id)
                        continue;
                    echo CHtml::openTag('li');
                        echo CHtml::link(
                            $productMenuItem->name,
                            $productMenuItem->path
                        );
                    echo CHtml::closeTag('li');

                }

            }
            echo CHtml::closeTag('ul');
        }
        ?>
    </div>
    <?php endif; ?>
</div>