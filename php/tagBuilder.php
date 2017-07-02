<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/**
 * Created by PhpStorm.
 * User: raphael
 * Date: 7/2/17
 * Time: 11:56 AM
 */
class tagBuilder
{
    private $tag_name;
    private $classes;
    private $style;
    private $content;

    /**
     * tagBuilder constructor.
     * @param $tag_name
     * @param $classes
     * @param $style
     * @param $content
     */
    public function __construct($tag_name, $classes, $style, $content)
    {
        $this->tag_name = $tag_name;
        $this->classes = $classes;
        $this->style = $style;
        $this->content = $content;

        return $this->buildTag();
    }

    public function __toString(){
        // TODO: Implement __toString() method.
        $tag_value = $this->getTagName();
        $classes = $this->getClasses();
        $style = $this->getStyle();
        $content = $this->getContent();

        return "<$tag_value" . " class=\""."$classes \"" . "style=\""."$style \"". ">". " $content ". "</$tag_value>";
    }

    public function buildTag(){
        $tagBuildString = $this->openTag();
        $tagBuildString .= $this->getTagName();
        $tagBuildString .= ' ';
        $tagBuildString .= $this->getClasses();
        $tagBuildString .= ' ';
        $tagBuildString .= $this->getStyle();
        $tagBuildString .= ' ';
        $tagBuildString .= $this->closingTag();

        echo $tagBuildString;

        return $tagBuildString;
    }

    /**
     * @return mixed
     */
    public function getTagName()
    {
        return $this->tag_name;
    }

    /**
     * @return mixed
     */
    public function getClasses()
    {
        return $this->classes;
    }

    /**
     * @return mixed
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    private function openTag(){
        return '<';
    }

    private function closingTag(){
        return '>';
    }


}

?>

<!--<h1 class="" style="" >Hello</h1>-->
