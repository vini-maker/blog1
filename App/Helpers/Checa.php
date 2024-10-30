<<<<<<< HEAD
<?php
=======
<?php 
>>>>>>> 33129ec43b55028269abdbb3d46b1ef463f9fc49
class Checa{
    public static function checarNome($nome){
        if(!preg_match('/^([áÁàÀãÃâÂéÉèÈêÊíÍìÌóÓòÒõÕôÔúÚùÙçÇaA-zZ]+)+((\s[áÁàÀãÃâÂéÉèÈêÊíÍìÌóÓòÒõÕôÔúÚùÙçÇaA-zZ]+)+)?$/', $nome)):
            return true;
        else:
<<<<<<< HEAD
            return false;
        endif;

    }//fim da função da checarNome
=======
        return false;
    endif;
    }
>>>>>>> 33129ec43b55028269abdbb3d46b1ef463f9fc49
    public static function checarEmail($email){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
            return true;
        else:
            return false;
        endif;
<<<<<<< HEAD
    }//fim da função checarEmail

}//fim da classe Checa
=======
    }    
}//fim da classe Checa
    
>>>>>>> 33129ec43b55028269abdbb3d46b1ef463f9fc49
