<?php

// This is the database connection configuration.
return array(
	//'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	

        // uncomment the following lines to use a MySQL database
	
	'connectionString' => 'mysql:host=localhost;dbname=yii',
	'emulatePrepare' => true,
	'username' => 'root',
	'password' => '',
	'charset' => 'utf8',
    
    
         //uncomment the following to use a oracle database OCSI
    
    
       
//              'class'=>'ext.oci8Pdo.oci8Pdo.OciDbConnection',
//              'connectionString' => 'oci:dbname=(DESCRIPTION=(ADDRESS=(PROTOCOL=TCP)(HOST=10.200.3.29)(PORT=1521))(CONNECT_DATA=(SERVICE_NAME=BLADB)));charset=AL32UTF8;',
//              'username' => 'apar',
//              'password' => 'apar',
//             
//              'enableProfiling' => true,
//              'enableParamLogging' => true,
        
    
    //uncomment the following to use a oracle database through PDO
    
//                'class'=>'CDbConnection',
//                'connectionString'=>'oci:dbname=10.10.4.106:1521/orcl;charset=UTF8',
//                'username'=>'',
//                'password'=>'',
    
    
    
	
);
//'db'=>array(
//              'class'=>'application.extensions.oci8Pdo.OciDbConnection',
//             
//          		//'connectionString' => 'oci:dbname=BLADB;charset=AL32UTF8;',
//             'connectionString'=>'oci:dbname=10.200.3.29:1521/BLADB;charset=AL32UTF8',
//              
//           
//              	'username' => 'apar',
//              	'password' => 'apar',
//				'schemaCachingDuration' => '3600',
//				'initSQLs'=>array('ALTER SESSION SET NLS_DATE_FORMAT = "DD-MM-YYYY"'),
//             
//              	'enableProfiling' => true,
//              	'enableParamLogging' => true,
//                'schemaCachingDuration'=>3600,
//        ),