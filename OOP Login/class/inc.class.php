<?php

class Inc {
   
    function inc_css() {
        foreach (glob("style/*.php") as $filename)
        {
            include_once $filename;
        }
    }
    function inc_class() {
       
        foreach (glob("class/*.php") as $filename)
        {
            include_once $filename;
        }
    }
    function inc_img_all() {

        $i = "";
        foreach (glob("img/*.jpg") as $img) {
            $i .= "<img src=".$img.">";
        }
        return $i;
    }
    function header($link) {
        header("Location: https://chrisouboter.com/{$link}");
    }
    function access_admin(){
        
        $i = "admin page";
        return $i;
    }
}