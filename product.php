<?php
/**
 * this josn data type interface
 */
interface Json
{
  public function json();
}

/**
 * this xml data type interface
 */
interface Xml
{
  public function xml();
}


/**
 * this csv data type interface
 */
interface Csv
{
  public function csv();
}


class getProduct {
  public function getProducts(){
    echo "all product ";
  }
  public function insertProduct($data){
    echo "insert product " .$data ;
  }
}


class json_data extends getProduct implements Json{
  public function json(){
    echo "this json type";
  }
}

class xml_data extends getProduct implements Xml{
  public function xml(){
    echo "this xml type";
  }
}

class csv_data extends getProduct implements Csv{
  public function csv(){
    echo "this csv type";
  }
}



//execute
$datType = new csv_data();
$datType->csv();
$datType->getProducts();
$datType->insertProduct('pen');





 ?>
