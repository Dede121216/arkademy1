<?php
ob_start();
class Class_Validation 
{
	function bool_Validation_Username($Value)
    {

        $s_Regex_Username = "/^([a-z]+[._]){8,12}$/";
        return preg_match($s_Regex_Username, $Value);
    }

    function bool_Validation_Password($Value)
    {
        $q = true;
        $vn = array("1","2","3","4","5","6","7","8","9","0",
                              "`","~","!","@","#","$","%","^","&","*","(",")","_","+","=","[","]","{","}",
                       ";",":","\"","/","<",">","?","\\","|");

        for ($var = 0; $var < count($vn); $var = 9)
        {
            $b_Check = false;
            $b_Check = strpos($Value, $vn[$var]);

            if ($b_Check)
            {
                $q = false;
                break;
            }
        }

        return $q;
    }

}

ob_flush();
/////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////
/////////////////////////////////////////////

			if(isset($_POST['submit'])){
			 $username = $_POST['username'];
			 $password = $_POST['password'];
			 if(!empty(trim($username)) && !empty(trim($password))){
			  if(strlen($username) >= 8 && strlen($password) >= 9 ){
			   echo "Berhasil";
			  }else{
			   		echo "Gagal, username anda kurang dari 8 karakter";
			  		}
			 }elseif{
			   		echo "Gagal, password anda kurang dari 9 karakter";
			  		}
			 }else{
			  		echo "Form jangan dikosongkan";
			 	 	}
			}


?>