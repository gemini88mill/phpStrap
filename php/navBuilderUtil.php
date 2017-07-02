<?php

//class to create a navbar built to certain customization specifications

error_reporting(E_ALL);
ini_set('display_errors', 1);

class navBuilderUtil{

    private $nav_color_background;
    private $nav_brand_Title;
    private $list_title_name;
    private $link_dest;

    public function display_navbar(){

    }

    /**
     * navBuilderUtil constructor.
     * @param $nav_color_background
     * @param $nav_brand_Title
     * @param $list_title_name
     * @param $link_dest
     */
    public function __construct($nav_color_background, $nav_brand_Title, $list_title_name, $link_dest)
    {
        $this->nav_color_background = $nav_color_background;
        $this->nav_brand_Title = $nav_brand_Title;
        $this->list_title_name = $list_title_name;
        $this->link_dest = $link_dest;

    }

    private function nav_open(){
        $nav_color = $this->getNavColorBackground();
        return '<nav class="navbar navbar-toggleable-md navbar-light bg-faded" style="background-color:'."$nav_color".' ">';
    }

    private function close_nav(){
        echo '</nav>';
    }

    private function open_list(){
        return '<ul class="navbar-nav">';
    }

    private function close_list(){
        echo '</ul>';
    }

    private function create_list_item($list_item_name, $link){
        echo '<li class="nav-item underline-active">';
        echo "$list_item_name";
        echo '</li>';
    }

    private function create_link(){

    }

    private function open_div(){
        return '<div class="collapse navbar-collapse justify-content-end" id="navbarNav">';
    }

    private function close_div(){
        return '</div>';
    }

    /**
     * @return mixed
     */
    public function getNavColorBackground()
    {
        return $this->nav_color_background;
    }

    /**
     * @param mixed $nav_color_background
     */
    public function setNavColorBackground($nav_color_background)
    {
        $this->nav_color_background = $nav_color_background;
    }

    /**
     * @return mixed
     */
    public function getNavBrandTitle()
    {
        return $this->nav_brand_Title;
    }

    /**
     * @param mixed $nav_brand_Title
     */
    public function setNavBrandTitle($nav_brand_Title)
    {
        $this->nav_brand_Title = $nav_brand_Title;
    }

    /**
     * @return mixed
     */
    public function getListTitleName()
    {
        return $this->list_title_name;
    }

    /**
     * @param mixed $list_title_name
     */
    public function setListTitleName($list_title_name)
    {
        $this->list_title_name = $list_title_name;
    }

    /**
     * @return mixed
     */
    public function getLinkDest()
    {
        return $this->link_dest;
    }

    /**
     * @param mixed $link_dest
     */
    public function setLinkDest($link_dest)
    {
        $this->link_dest = $link_dest;
    }


}

?>

<!--<nav class="navbar navbar-toggleable-md navbar-light bg-faded" style="background-color: aqua">-->
<!--        <a class="navbar-brand" href="#">Navbar Template</a>-->
<!--        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">-->
<!--            <ul class="navbar-nav ">-->
<!--                <li class="nav-item active underline-active">-->
<!--                    <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>-->
<!--                </li>-->
<!--                <li class="nav-item underline-active">-->
<!--                    <a class="nav-link" href="#">Store</a>-->
<!--                </li>-->
<!--                <li class="nav-item underline-active">-->
<!--                    <a class="nav-link" href="#">Store</a>-->
<!--                </li>-->
<!--                <li class="nav-item underline-active">-->
<!--                    <a class="nav-link" href="#">Store</a>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </nav>-->