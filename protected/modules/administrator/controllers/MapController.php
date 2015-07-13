<?php
class MapController extends Controller
{    
    public $positionInExcel = 1;
    
    public function actionIndex()
    {
        $siteMapFile = Yii::app()->getBaseUrl(true) . '/images/file.html';
        $siteMapHtml = file_get_contents($siteMapFile);
        $sitemapDate = filemtime('images/file.html');
        $this->render('index', array(
            'siteMapHtml' => $siteMapHtml,
            'sitemapDate' => $sitemapDate,
        ));
    }
    
    public function addNodes(&$menuTreeArray, $items)
    {
        foreach($menuTreeArray as &$menuItem) {
            if(isset($menuItem['children'])) {
                if(array_key_exists($menuItem['id'], $items)) {
                    foreach($items[$menuItem['id']] as $productId) {
                        if($productId) {
                            $product = MapItems::getProductInformation($productId);
                            eval('$product[text] = MapItems::getMenuManageRow($product);');
                            $menuItem['children'][] = $product;
                        }
                    }
                }
                
                if(is_array($menuItem['children'])) {
                    $this->addNodes($menuItem['children'], $items);
                }
           }
        }
    }
    
    public function findLeaf(&$menuTreeArray, &$leafArray)
    {
        foreach($menuTreeArray as &$menuItem) {
            if(isset($menuItem[children])) {
                if(is_array($menuItem[children])) {
                    if(empty($menuItem[children]) && $menuItem['type'] == 0) {
                        $leafArray[] = $menuItem['id'];
                    }
                    $this->findLeaf($menuItem[children], $leafArray);
                }
           }
        }
    }
    
    public function actionUpdateSitemapHtml()
    {
        $leafArray = array();
        $mapModel = MapItems::model()->findAll();
        $menuTreeArray = MapItems::getMenuTree();

        $this->findLeaf($menuTreeArray, $leafArray);
       
        $items = MapItems::getBanners(array_unique($leafArray));
        $this->addNodes($menuTreeArray, $items);
        
        $tree = $this->buildHtmlTree($menuTreeArray, 0);
        file_put_contents('images/file.html', $tree);
        //$sitemapDate = filemtime('images/file.html');

        $this->redirect(array('map/index'));
    }
    
    public function buildHtmlTree($cats, $level) {
        if(is_array($cats)) {
            $listStyleType = 'disc';
            if($level > 0){
                $listStyleType = $level == 1 ? 'circle' : 'square';
            }
            
            $tree = '<ul style = "list-style-type: ' . $listStyleType . ';" class="level_' . $level . '">';
            foreach($cats as $cat) {
                $path = $cat['path'];
                
                if($path == '/index') { 
                    $path = '';
                } else {
                    $find = strpos($path, 'www');
                    if($find) {
                        $path = 'http://' . substr($path, $find); 
                    }
                }
                
                $display = $cat['published'] ? '' : 'display: none';
                $li = '<li style="' . $display . '"><a style="text-decoration: none" href="' . $path . '/">' . $cat['name'] . '</a>';
                
                //href="/http://www.lbr.nichost.ru/spareparts/?c=83/">Запчасти</a>'
                $find = strpos($li, '/http://');
                $tree .= $li;
                $tree .= $this->buildHtmlTree($cat['children'], $cat['level']);
                $tree .= '</li>';
            }
            $tree .= '</ul>';
        } else {
            return null;
        }
        
        return $tree;
    }
    
    public function actionGetExcel()
    {
        Yii::import('ext.phpexcel.XPHPExcel');    
        $objPHPExcel= XPHPExcel::createPHPExcel();
        $objPHPExcel->getProperties()->setCreator("LBR")
            ->setLastModifiedBy("LBR")
            ->setTitle("Карта сайта Excel")
            ->setSubject("Карта сайта Excel")
            ->setDescription("Карта сайта Excel")
            ->setKeywords("office 2007 openxml php")
            ->setCategory("Карта сайта Excel")
        ;
        
        $objPHPExcel->setActiveSheetIndex(0);
        $sheet = $objPHPExcel->getActiveSheet();
        $sheet->setTitle('Карта сайта Excel');
        $sheet->setCellValue('A1', 'Уровень')
            ->setCellValue('B1', 'Url')
            ->setCellValue('C1', 'Заголовок')
        ;
        //for($col = 'B'; $col != 'D'; $col++) 
        //   $sheet->getColumnDimension($col)->setAutoSize(true);//setWidth(30);
        $sheet->getStyle('A1:C1')->getFont()->setBold(true);
        $sheet->getColumnDimension('B')->setWidth(70);
        $sheet->getColumnDimension('C')->setWidth(70);
        
        $this->buildExcel($objPHPExcel, $sheet);
        
        // Redirect output to a clientâ€™s web browser (Excel5)
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="Карта сайта ЛБР на '.date('Y.m.d H-i').'.xls"');
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
        $leafArray = array();
        $mapModel = MapItems::model()->findAll();
        $cats = MapItems::getMenuTree();

        $this->findLeaf($cats, $leafArray);
       
        $items = MapItems::getBanners(array_unique($leafArray));
        $this->addNodes($cats, $items);
        
        $this->buildExcelItems($objPHPExcel, $cats, 0);
    }
   
    public function buildExcelItems($objPHPExcel, $cats, $level) 
    {
        if(is_array($cats)) {
            $mark = '';
            if($level > 0){
                for($i = 0; $i < $level; $i++)
                   $mark .= '-';
            }
            
            foreach($cats as $cat) {
                $path = $cat['path'];
                if($path == '/index') { 
                    $path = '';
                    $path = Yii::app()->getBaseUrl(true);
                } else {
                    $find = strpos($path, 'www');
                    if($find) {
                        $path = 'http://' . substr($path, $find); 
                    } else {
                        $path = Yii::app()->getBaseUrl(true).$path;
                    }
                } 
                
                $this->positionInExcel++;
                
                $objPHPExcel->setActiveSheetIndex(0)
                    ->setCellValue('A'.$this->positionInExcel, $mark)
                    ->setCellValue('B'.$this->positionInExcel, $path)
                    ->setCellValue('C'.$this->positionInExcel, $cat['name'])
                ;

                $this->buildExcelItems($objPHPExcel, $cat['children'], $cat['level']);
            }
        }
    }
}
