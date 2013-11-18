<?php
class MapController extends Controller
{    
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
                    if(empty($menuItem[children])) {
                        $leafArray[] = $menuItem['id'];
                    }
                    $this->findLeaf($menuItem[children], $leafArray);
                }
           }
        }
    }
    
    public function actionIndex()
    {
        $siteMapFile = Yii::app()->getBaseUrl(true) . '/sitemap.html';
        $siteMapHtml = file_get_contents($siteMapFile);
        $sitemapDate = filemtime('sitemap.html');
        
        $this->render('index', array(
            'siteMapHtml' => $siteMapHtml,
            'sitemapDate' => $sitemapDate,
        ));
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
        file_put_contents('sitemap.html', $tree);
        $sitemapDate = filemtime('sitemap.html');
        
        $this->redirect(array('map/index'));
    }
    
    public function buildHtmlTree($cats, $level) {
        if(is_array($cats)) {
            $tree = '<ul style = "list-style-type: none;" class="level_' . $level . '">';
            foreach($cats as $cat) {
                $tree .= '<li style="margin-left: 30px;"><a style="text-decoration: none" href="' . $cat['path'] . '">' . $cat['name'] . '</a>';
                $tree .= $this->buildHtmlTree($cat['children'], $cat['level']);
                $tree .= '</li>';
            }
            $tree .= '</ul>';
        } else {
            return null;
        }
        
        return $tree;
    }
}
