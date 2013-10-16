PHP parse.com API library
===========================
More on the parse.com api here: https://www.parse.com/docs/rest

### This is apotropaic's Parse.com PHP library using namespaces ###
The original is here: https://github.com/apotropaic/parse.com-php-library

### Feedback Wanted ###

I may had broken something. Dunno. Also, apotropaic wants some feedback to. Look at the original project.


SETUP
=========================

This is where things chanced... a lot.

EXAMPLE
=========================

Must say: didn't run this code. :/

### sample of upload.php ###

```
<?php
    //This example is a sample video upload stored in parse

    // set your app id and keys here
    Parse\Rest\Client::initialize(
        'appid',
        'masterkey',
        'restkey',
        'https://api.parse.com/1/' // parse rest url
    );

    $parse = new Parse\Object('Videos');
    $parse->title = $data['upload_data']['title'];
    $parse->description = $data['upload_data']['description'];
    $parse->tags = $data['upload_data']['tags'];

    //create new geo
    $geo = new Parse\GeoPoint($data['upload_data']['lat'],$data['upload_data']['lng']);
    $parse->location = $geo->location;

    //use pointer to other class
    $parse->userid = array("__type" => "Pointer", "className" => "_User", "objectId" => $data['upload_data']['userid']);

    //create acl
    $parse->ACL = array("*" => array("write" => true, "read" => true));
    $r = $parse->save();
    ?>
```
