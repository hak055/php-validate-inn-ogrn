<?php 

/**
 * 
 */
class DataValidation {
	static public $number;

	
	public static function ValidateString($data)
	{	

		if(!$data){
			echo "строка пустая";
		}
		elseif (preg_match('/[^0-9]/', $data)) {
			echo "Данные должны  состоять из цифр";
		}
		elseif (strlen($data) !== 10 && strlen($data) !== 12 && strlen($data) !== 13 && strlen($data) !== 15){
			echo "строка должна состоять из 10,12,13 или 15 значных цыфр";
		
		
		}else{
				return $data;
		}
			
		
	}

	public static function isValideINN($inn)
	{
		self::$number = $inn;
		
		$len = strlen($inn);
							if ( $len === 10 )
					    {
					        return $inn[9] === (string) (((          //Алгоритм для 10 значного ИНН
					            2*$inn[0] + 4*$inn[1] + 10*$inn[2] + 
					            3*$inn[3] + 5*$inn[4] +  9*$inn[5] + 
					            4*$inn[6] + 6*$inn[7] +  8*$inn[8]
					        ) % 11) % 10);
					    }
					    elseif ( $len === 12 )
					    {
					        $num10 = (string) (((						 //Алгоритм для 12 значного ИНН
					             7*$inn[0] + 2*$inn[1] + 4*$inn[2] +
					            10*$inn[3] + 3*$inn[4] + 5*$inn[5] + 
					             9*$inn[6] + 4*$inn[7] + 6*$inn[8] +
					             8*$inn[9]
					        ) % 11) % 10);
					        
					        $num11 = (string) (((
					            3*$inn[0] +  7*$inn[1] + 2*$inn[2] +
					            4*$inn[3] + 10*$inn[4] + 3*$inn[5] +
					            5*$inn[6] +  9*$inn[7] + 4*$inn[8] +
					            6*$inn[9] +  8*$inn[10]
					        ) % 11) % 10);
					        
					        return $inn[11] === $num11 && $inn[10] === $num10;
					    }else{
					    
							    return false;
							    
					         }
    }

    public static function isValideOGRN($ogrn)
    {
        self::$number = $ogrn;
        $len = strlen($ogrn);

        if( $len === 13){

        	$n13 = (int) substr(bcsub(substr($ogrn, 0, -1), 				
        																//Алгоритм для 13 значного ОГРН
           	bcmul(bcdiv(substr($ogrn, 0, -1), '11', 0), '11')), -1);
			
			return ($n13 === (int) $ogrn{12});
					
        	
        }elseif ( $len === 15 ){
                         return $ogrn[14] = substr(substr($ogrn, 0, -1)%13,-1);  //Алгоритм для 15 значного ОГРН
        	 
        }else{
        	             return false;
        }


    }
}