<?php
/**
   * @backupGlobals disabled
   * @backupStaticAttributes disabled
   */

   require_once "src/Book.php";
   require_once "src/Copy.php";


   $DB = new PDO('pgsql:host=localhost;dbname=test_catalog');

   class CopyTest extends PHPUnit_Framework_TestCase {

       protected function tearDown() {
           Book::deleteAll();
           Author::deleteAll();
           Copy::deleteAll();
       }
