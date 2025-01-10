<?php
class Magique{
    public function getClassName(){
        return "The class name is <b>".__CLASS__."</b>";
    }
    public function getLine()
    {
      return " The line number is " . __LINE__;
    }
  
    public function getFile()
    {
      return " The file is located at " . __FILE__;
    }
  
    public function getMethod()
    {
      return " The method is called " . __METHOD__;
    }
}