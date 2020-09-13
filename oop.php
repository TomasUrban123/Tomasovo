<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//abstraktní trida ustredny a v ni protected $napetí
abstract class  ustredny_Urban_Tomas{
    protected $napeti_Urban_Tomas;
    //nastavení napeti
    public function setNapeti_Urban_Tomas($napeti_Urban_Tomas){
        $this->napeti_Urban_Tomas = $napeti_Urban_Tomas;
    }
    //precteni napeti
    public function getNapeti_Urban_Tomas() {
        return $this-> napeti_Urban_Tomas;
    }
}
// class ustredna se dedi do abs. class ustredny
class  ustredna_Urban_Tomas extends ustredny_Urban_Tomas{
   public $Napeti_Urban_Tomas= 15;
   //nastaveni konstanty type
   const TYPE ="12";
}
//class iustredna dedi interface od abs. class ustredny
    //vypise nastavene hodnoty
//}
//pres vardummp vypise hodnotu v type a hodnotu napeti na ustredne
 var_dump (ustredna_Urban_Tomas::TYPE);
