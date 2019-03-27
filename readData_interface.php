<?php
interface readDate{

public static function Create($type);

public static function Read($type);

}

class carFactory implements readDate {


    public static function Create($type = '') {

        if($type == '') {
            throw new Exception('Invalid Data Type.');

        }elseif (!in_array($type, array('json', 'xml', 'csv'))) {
          throw new Exception('type not found in Create Function');
        }else {

            $className = 'Data_'.ucfirst($type);
            spl_autoload_register(function ($className) {
            include  $className . '.php';
        });

            // Assuming Class files are already loaded using autoload concept
            if(class_exists($className)) {
                return new $className();
            } else {
                throw new Exception('type not found.');
            }
        }
    }


    public static function Read($type = '') {

        if($type == '') {
            throw new Exception('Invalid Data Type.');
        }elseif (!in_array($type, array('json', 'xml', 'csv'))) {
          throw new Exception('type not found in Read Function');
        } else {

            $className = 'Data_'.ucfirst($type);
            spl_autoload_register(function ($className) {
            include  $className . '.php';
        });

            if(class_exists($className)) {
                return new $className();
            } else {
                throw new Exception('type not found.');
            }
        }
    }
}
$sedan = carFactory::Read('ghh');







 ?>
