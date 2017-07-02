<?php

/**
 * Created by PhpStorm.
 * User: raphael
 * Date: 7/2/17
 * Time: 10:36 AM
 */
class anchors
{

    private $content;
    private $tag_key;
    private $classes;
    private $style;
    private $endingTagRequire;

    private $buildOpenTag;
    private $buildClosingTag;

    /**
     * anchors constructor.
     * @param $content
     * @param $tag_key
     * @param $classes
     * @param $style
     * @param $endingTagRequire
     */
    public function __construct($content, $tag_key, $classes, $style, $endingTagRequire)
    {
        $this->content = $content;
        $this->tag_key = $tag_key;
        $this->classes = $classes;
        $this->style = $style;
        $this->endingTagRequire = $endingTagRequire;

        return $this->display_anchor();
    }

    public function create_open_tag(){
        $tag_builder = '<';
        $tag_builder .= $this->getTagKey();
        $tag_builder .= $this->getClasses(); //classes require class=""
        $tag_builder .= $this->getStyle(); //style requires style=""
        $tag_builder .= '>';


        return $tag_builder;
    }

    public function create_closing_tag($tag_key, $endingTagRequire){
        if($endingTagRequire == false){
            return '';
        }

        return '</'."$tag_key".'>';
    }

    public function display_anchor(){
        return $this->create_open_tag() . $this->getContent() .
            $this->create_closing_tag($this->getTagKey(), $this->getEndingTagRequire());
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getTagKey()
    {
        return $this->tag_key;
    }

    /**
     * @param mixed $tag_key
     */
    public function setTagKey($tag_key)
    {
        $this->tag_key = $tag_key;
    }

    /**
     * @return mixed
     */
    public function getClasses()
    {
        return $this->classes;
    }

    /**
     * @param mixed $classes
     */
    public function setClasses($classes)
    {
        $this->classes = $classes;
    }

    /**
     * @return mixed
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * @param mixed $style
     */
    public function setStyle($style)
    {
        $this->style = $style;
    }

    /**
     * @return mixed
     */
    public function getEndingTagRequire()
    {
        return $this->endingTagRequire;
    }

    /**
     * @param mixed $endingTagRequire
     */
    public function setEndingTagRequire($endingTagRequire)
    {
        $this->endingTagRequire = $endingTagRequire;
    }



}

?>

<!--<nav class="navbar navbar-toggleable-md navbar-light bg-faded" style="background-color: aqua">-->
<!--    <a class="navbar-brand" href="#">Navbar Template</a>-->
<!--    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">-->
<!--        <ul class="navbar-nav ">-->
<!--            <li class="nav-item active underline-active">-->
<!--                <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>-->
<!--            </li>-->
<!--            <li class="nav-item underline-active">-->
<!--                <a class="nav-link" href="#">Store</a>-->
<!--            </li>-->
<!--            <li class="nav-item underline-active">-->
<!--                <a class="nav-link" href="#">Store</a>-->
<!--            </li>-->
<!--            <li class="nav-item underline-active">-->
<!--                <a class="nav-link" href="#">Store</a>-->
<!--            </li>-->
<!--        </ul>-->
<!--    </div>-->
<!--</nav>-->
