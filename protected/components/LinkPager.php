<?php
class LinkPager extends CLinkPager
{
    public $cssFile = '/css/pagers/pager.css'; 
    public $pageUrl;

    protected function createPageUrl($page)
    {
        if ($page)
            return $this->pageUrl.'/company/events/page-'.($page+1);
        return '/company/events/';
    }
}

