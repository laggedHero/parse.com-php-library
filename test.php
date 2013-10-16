<?php
include_once 'EnhanceTestFramework.php';

include 'Parse/Library/Exception.php';
include 'Parse/Rest/Client.php';
include 'Parse/Object.php';
include 'Parse/Query.php';
include 'Parse/User.php';
include 'Parse/File.php';
include 'Parse/Push.php';
include 'Parse/GeoPoint.php';
include 'Parse/ACL.php';
include 'Parse/Cloud.php';

// set your app id and keys here
Parse\Rest\Client::initialize(
    'appid',
    'masterkey',
    'restkey',
    'https://api.parse.com/1/' // parse rest url
);


//UNCOMMENT AN INDIVIDUAL FILE TESTS OR JUST THE DISCOVERTESTS LINE FOR ALL TESTS
// include_once 'tests/parseObjectTest.php';
// include_once 'tests/parseQueryTest.php';
// include_once 'tests/parseUserTest.php';
// include_once 'tests/parseFileTest.php';
// include_once 'tests/parsePushTest.php';
// include_once 'tests/parseGeoPointTest.php';
// \Enhance\Core::discoverTests('tests/');

// \Enhance\Core::runTests();
