<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
         
            
            $options = Yii::app()->params['ldap'];
            $dc_string = "dc=" . implode(",dc=",$options['dc']);

            $connection = ldap_connect($options['host'],$options['port']);
            ldap_set_option($connection, LDAP_OPT_PROTOCOL_VERSION, 3);
            ldap_set_option($connection, LDAP_OPT_REFERRALS, 0);
            if($connection)
         
		{
                
    		$bind = @ldap_bind($connection, $this->username, $this->password);
                }
    		if($bind)
          
    		{
                       
                    Yii::app()->session['role'] ='';
                 
                    $this->errorCode = self::ERROR_USERNAME_INVALID;
                    $model = NtSuperadmin::model()->findByAttributes(array('EMAIL'=>$this->username));
                    
                   if($model != NULL)
                   {
                       Yii::app()->session['role'] ='superadmin';
                       $this->setState('userid', $model->ID);
                    //   $this->_LastLoginTime = $user->LastLoginTime;
                      // $this->setState('lastLoginTime', $user->LastLoginTime);
                       
                       $this->errorCode=self::ERROR_NONE;  
                   }else{
                        
                        $model=  NtUser::model()->findByAttributes(array('EMAIL'=>$this->username));
                        $role=$model->ROLE;
                        $this->setState('userid', $model->ID);
                        $this->setState('section', $model->SECTION);
                        $this->setState('uname', $model->USER_NAME);
                        $this->setState('urole',$model->ROLE);
                        //echo "test";
                        if($role === '1' )
                        {
                            Yii::app()->session['role'] ='uploader';
                            
                        }elseif($role === '2')
                        {
                           Yii::app()->session['role'] ='approver';
                            
                        }
                        $this->errorCode=self::ERROR_NONE;  
                   }     
                 
    		
    		}else 
    		{
                   $this->errorCode = self::ERROR_USERNAME_INVALID;
                }
            
            
            //
                
		return !$this->errorCode;
	
        
        }
}