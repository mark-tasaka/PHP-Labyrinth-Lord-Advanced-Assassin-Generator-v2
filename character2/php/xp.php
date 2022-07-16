<?php

/*Assassin*/

function getXPNextLevel ($level)
{
    $xpNext = "";


    switch ($level) 
    {
        case "1":
            $xpNext = "1,501";
          break;

        case "2":
            $xpNext = "3,001";
        break;
        
        case "3":
            $xpNext = "6,001";
        break;
        
        case "4":
            $xpNext = "12,001";
        break;
        
        case "5":
            $xpNext = "24,001";
        break;
        
        case "6":
            $xpNext = "48,001";
        break;        

        case "7":
            $xpNext = "96,001";
        break;
                
        case "8":
            $xpNext = "192,001";
        break;
                
        case "9":
            $xpNext = "332,001";
        break;
                
        case "10":
            $xpNext = "472,001";
        break;
                
        case "11":
            $xpNext = "612,001";
        break;
                
        case "12":
            $xpNext = "762,001";
        break;
                
        case "13":
            $xpNext = "902,001";
        break;
                
        case "14":
            $xpNext = "1,042,001";
        break;
                
        case "15":
            $xpNext = "---";
        break;
        
        default:
          $xpNext = " =P ";
      }

      return $xpNext;
}

?>