    <div class="footer">
        <div class="info">
            Всю подробную информацию по заинтересовавшим Вас моделям техники, а также опыт эксплуатации и отзывы потребителей Вы сможете получить у Вашего персонального менеджера. 
        </div>
        <div class="filial">
            <div class="f-h1">Ждем Вас в филиале ЛБР-АгроМаркет (<?php echo $filial['name']; ?>)!</div>
            <div class="f-time"><?php echo $filial['work_time']; ?></div>
            <div class="f-address"><?php echo $filial['address']; ?></div>
            <div class="f-phone"><?php echo $filial['telephone']; ?></div>
        </div>
        <?php echo AuthUser::getPasteboard($data['login']); ?>
    </div>