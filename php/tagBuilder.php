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
    public function __construct($tag_name, $classes, $style, $content, $end_tag)
    {
        $this->tag_name = $tag_name;
        $this->classes = $classes;
        $this->style = $style;
        $this->content = $content;
        $this->end_tag = $end_tag;

        $this->__toString();
//        return $this->buildTag();
    }

    public function __toString(){
        $tag_value = $this->getTagName();
        $classes = $this->getClasses();
        $style = $this->getStyle();
        $content = $this->getContent();

        $tag_string = "<$tag_value" . " class=\""."$classes \"" . "style=\""."$style \"". ">". " $content ";

        if($this->getEndTag() == true){
            $tag_string .=  "</$tag_value>";

        }

        return $tag_string;
//        return "<$tag_value" . " class=\""."$classes \"" . "style=\""."$style \"". ">". " $content ". "</$tag_value>";
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

    /**
     * @return mixed
     */
    public function getEndTag()
    {
        return $this->end_tag;
    }




}

?>

<!--<h1 class="" style="" >Hello</h1>-->
