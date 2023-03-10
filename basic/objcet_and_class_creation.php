<?php
	class PersonName{
       var $name;
       function setName($data)
       {
        $this->name=$data;
       }
       function getName()
       {
        return $this->name;
       }
    }
    $raiph=new PersonName();
    $raiph->setName("aashiqui");
    echo $raiph->getName();
?>
