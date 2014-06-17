<div class="mightinessSelector">
    Выберите технологический цикл:
    <select id="mightiness-for-tractor">
        <?php 
           $roots = TechSchema::model()->roots()->findAll();
           foreach ($roots as $root) {
               var_dump($root);
               
               //$cycle = TechSchema::model()->findByPk(1);
               //$descendants=$category->descendants()->findAll();
           }
        ?>
        
        <!--option value="0" val="choice">Выберите мощность</option>
        <option value="1" val="80">До 80 л.с.</option>
        <option value="2" val="80-120">80-120 л.с.</option>
        <option value="3" val="120-150">120-150 л.с.</option>
        <option value="4" val="150-180">150-180 л.с.</option>
        <option value="5" val="180-210">180-210 л.с.</option>
        <option value="6" val="210-350">210-350 л.с.</option>
        <option value="7" val="350-10000">Свыше 350 л.с.</option-->
    </select>
</div>