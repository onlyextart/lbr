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
                        CategoryUrlRule::getUrl($firstLevelItem->id),
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
            foreach( $this->secondLevelItems as $secondLevelItem){
                $colorCssClass='menu_color_group_'.$secondLevelItem->group->id;
                echo CHtml::openTag('li', array(
                    'class'=>( isset($this->menuBranch[3]) && $this->menuBranch[3]->id==$secondLevelItem->id )?
                    'active '.$colorCssClass:$colorCssClass,
                ));
                    echo CHtml::openTag(
                            'a',
                            array(
                                'class'=>$colorCssClass,
                                'href'=>CategoryUrlRule::getUrl($secondLevelItem->id),
                            )
                    );
                        
                        echo CHtml::image($secondLevelItem->icon, $secondLevelItem->name);
                        echo CHtml::openTag('span');
                            echo $secondLevelItem->name; 
                        echo CHtml::closeTag('span');
                    echo CHtml::closeTag('a');
                echo CHtml::closeTag('li');
            }
            ?>
        </ul>
    </div>
    <?php endif; ?>
    
    <?php if( !empty($this->thirdLevelItems) ): ?>
    <div class="main_menu_third_level">
        <div class="main_menu_third_level_icon">
            <a class="<?php echo 'menu_color_group_'.$this->menuBranch[3]->group->id ?>" href="<?php echo CategoryUrlRule::getUrl($this->menuBranch[3]->id) ?>">
                <img src="<?php echo $this->menuBranch[3]->icon ?>" >
            </a>
        </div>
        <ul id="third_level_menu">
            <?php 
                foreach( $this->thirdLevelItems as $thirdLevelItem){
                    $colorCssClass='menu_color_group_'.$thirdLevelItem->group->id;
                    echo CHtml::openTag('li', array(
                        'class'=>( $this->menuBranch[4]->id==$thirdLevelItem->id )?
                        'active '.$colorCssClass:$colorCssClass,
                    ));
                    echo CHtml::link(
                            $thirdLevelItem->name, 
                            CategoryUrlRule::getUrl($thirdLevelItem->id),
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
    </div>
    <?php endif; ?>
</div>