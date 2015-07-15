<?php

class AnaliticsController extends Controller
{
    public function actionIndex()
    {
        
        $this->render('index');//, array('data'=>$dataProvider, 'view'=>$view));
    }
    
    public function actionGetExcel()
    {
        Yii::import('ext.phpexcel.XPHPExcel');    
        $objPHPExcel= XPHPExcel::createPHPExcel();
        $objPHPExcel->getProperties()->setCreator("LBR")
            ->setLastModifiedBy("LBR")
            ->setTitle("Аналитика")
            ->setSubject("Аналитика")
            ->setDescription("Аналитика")
            ->setKeywords("office 2007 openxml php")
            ->setCategory("Аналитика")
        ;
        
        $objPHPExcel->setActiveSheetIndex(0);
        $sheet = $objPHPExcel->getActiveSheet();        
        
        $this->buildExcel($objPHPExcel, $sheet);
        
        // Redirect output to a clientâ€™s web browser (Excel5)
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="Аналитика ЛБР на '.date('Y.m.d H-i').'.xls"');
        header('Cache-Control: max-age=0');
        // If you're serving to IE 9, then the following may be needed
        header('Cache-Control: max-age=1');

        // If you're serving to IE over SSL, then the following may be needed
        header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
        header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
        header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
        header ('Pragma: public'); // HTTP/1.0

        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        $objWriter->save('php://output');
        Yii::app()->end(); 
    }
    
    public function buildExcel($objPHPExcel, $sheet) 
    {
        $sheet->setTitle('Посещенные страницы');
        $info = Yii::app()->db->createCommand()
            ->select('*')
            ->from('analitics')
            //->where('date_created between "'.date('Y-m-d', strtotime($from)).'" and "'.date('Y-m-d', strtotime($to.' +1 days')).'"')
            ->order('customer_id')
            ->queryAll()
        ;
        
        if(!empty($info)) {
            $index = 3;
            $timeSummary = 0;
            
            $sheet->setCellValue('A1', 'Email посетителя')
                ->setCellValue('B1', 'Посещенные страницы')
                ->setCellValue('C1', 'Длит. просмотра страниц')
                ->setCellValue('D1', 'ID подписки')
                ->setCellValue('E1', 'Переходы из рассылки')
            ;
            $sheet->getStyle('A1:E1')->getFont()->setBold(true);
            for($col = 'A'; $col != 'F'; $col++) $sheet->getColumnDimension($col)->setWidth(30); //setAutoSize(true);
            
            foreach($info as $item) {
                $timeSummary += $item['time'];
                $time = $this->getTime($item['time']);
                $objPHPExcel->setActiveSheetIndex(0)
                    ->setCellValue('A'.$index, $item['customer_id'])
                    ->setCellValue('B'.$index, $item['url'])
                    ->setCellValue('C'.$index, $time)
                    ->setCellValue('D'.$index, $item['subscription_id'])
                    ->setCellValue('E'.$index, $item['link_id'])
                ;
                $index++;
            }
            
            $timeSummary = $this->getTime($timeSummary);
            $objPHPExcel->setActiveSheetIndex(0)
                    ->setCellValue('B2', 'Всего:')
                    ->setCellValue('C2', $timeSummary)
            ;
            
            $sheet->getStyle('B2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
            $sheet->getStyle('B2')->getFont()->setBold(true);
        } else {
            $sheet->setCellValue('A1', 'Нет данных удовлетворяющих условиям отбора.');
        }
    }
    
    public function getTime($time) 
    {
        $hours = (int)($time/3600);
        $time -= $hours*3600; 
        if(strlen($hours) == 1) $hours = '0'.$hours;
        $minutes = (int)($time/60);
        if(strlen($minutes) == 1) $minutes = '0'.$minutes;
        $seconds = (int)($time%60);
        if(strlen($seconds) == 1) $seconds = '0'.$seconds;
        
        return $hours.':'.$minutes.':'.$seconds;
    }
}

