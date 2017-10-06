<?php

namespace App;

/**
 *
 * Simple pagination class
 * @author Paulo Cesar Hendges
 *
 */
class Pagination{
    
    public $page = 1;
    
    public $perPage;
        
    private $total;
        
    public $pages;
        
    public $offset;
    
    public $limit;
    
    /**
     * 
     * @param type $page - atual page
     * @param type $perpage - regs per page
     */
    function __construct($page, $perpage) {
        $this->page = $page;
        $this->perPage = $perpage;
        $this->offset = ($this->getPerPage() * $this->getPage()) - $this->getPerPage();
    }
    
    function getPage() {
        return $this->page;
    }

    function getPerPage() {
        return $this->perPage;
    }

    function getTotal() {
        return $this->total;
    }

    function getPages() {
        return $this->pages;
    }

    function getOffset() {
        return $this->offset;
    }

    function setPage($page) {
        $this->page = $page;
    }

    function setPerPage($perPage) {
        $this->perPage = $perPage;
    }

    function setTotal($total) {
        $this->total = $total;
    }

    function setPages($pages) {
        $this->pages = $pages;
    }

    function setOffset() {
        $this->offset = ($this->getPerPage() * $this->getPage()) - $this->getPerPage();
    }

    function setLimit(){
    }
    
    function getLimit(){
        return $this->limit;
    }
    
    function getNumberOfPages(){
        return $this->pages;
    }
    
    /**
     * Setting total of pages
     */
    function setNumberOfPages(){
        $this->pages = ceil($this->getTotal()/$this->getPerPage());
    }
    
    /**
     * return previous page for html control
     */
    public function getPreviousPage() {
        return $this->getPage() - 1;
    }
    
    /**
     * Return next page for html control
     */
    public function getNextPage() {
        return $this->getPage() + 1;
    }
    
    /**
    * Return array with index of pages
    */
    private function getMapPages(){
        for($pag = 1; $pag < $this->getPages() + 1; $pag++) {
            $pages[$pag] = $pag;
        }
        return $pages;
    }
    
    /**
     * Mount and return pagination
     */
    public function getPagination(){
        
        $html = "";
        
        if ($this->getPages() > 1) {
            
            $pages = $this->getMapPages();
            
            $html = '<tr><th class="center" colspan="4"><ul class="pagination">';

            if ($this->getPreviousPage() != 0) { 
                $html .= '<li class="waves-effect"><a href="#!" onclick="nextPage('.$this->getPreviousPage().')"><i class="material-icons">chevron_left</i></a></li>';
            }else{
                $html .= '<li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>';
            }

            if(array_key_exists($this->getPage() - 1, $pages)){
                $html .= '<li class="waves-effect"><a href="#!" onclick="previousPage('. ($this->getPage() - 1) .')")>'. ($this->getPage() - 1) .'</a></li>';
            }

            $html .= '<li class="active"><a href="#!">'. ($this->getPage()) .'</a></li>';

            if(array_key_exists($this->getPage() + 1, $pages)){
                $html .= '<li class="waves-effect"><a href="#!" onclick="nextPage('. ($this->getPage() + 1) .')">'. ($this->getPage() + 1) .'</a></li>';
            }

            if ($this->getNextPage() <= $this->getPages()) {
                $html .= '<li class="waves-effect"><a href="#!" onclick="nextPage('.$this->getNextPage().')"><i class="material-icons">chevron_right</i></a></li>';
            }else{
                $html .= '<li class="disabled"><a href="#!"><i class="material-icons">chevron_right</i></a></li>';
            }
            
            $html .= '<span style="float: left !important; width: 100% !important">
                        <span class="black-text total-registros">Total de registros: '.$this->getTotal().' | </span>';
            
            $html .= '<span class="black-text total-registros"><strong>Mudar para a Página:</strong></span>
                        <select class="browser-default black-text" name="select-pagination" style="width: 50px !important; height: 35px !important; display: inline !important;" onChange="goToPage()">';
            
            foreach ($pages as $pg) {
                $html .= '<option value="'.$pg.'" >'.$pg.'</option>';
            }
            $html .= '</select></span>';
            
            $html .= '</tr></ul>';
            
        }
        
        return $html;
    }
    
}