# iOS Ad-hoc

With this system you can install iOS apps via over-the-air installation.

Use this code for detect device:
```markdown
<?php

//Detect
$iPod    = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
$iPhone  = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$iPad    = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");

//do something with this information
if( $iPod || $iPhone ){
    //browser reported as an iPhone/iPod touch -- do something here
}else if($iPad){
    //browser reported as an iPad -- do something here
}

?>
```
