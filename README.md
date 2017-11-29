# iOS Ad-hoc

With this system you can install iOS apps via over-the-air installation.

## Usage

1 - Download the repo and put files in your public_html or www folder of host.

2 - Change _example.com_ in _install.php_ and _x.plist_ to your domain.

3 - Change bundle id in _x.plist_ to your app's bundle id.

```
<key>bundle-identifier</key>
<string>change-me</string>
```

4 - Change App Name in _x.plist_ to your app's App Name.

```
<key>title</key>
<string>change-me</string>
```

5 - Now if you browse _install.php_ in your IOS device you can download the app.

## Extra notes

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
