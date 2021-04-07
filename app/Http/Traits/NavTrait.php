<?php 
namespace App\Traits;
  
use Illuminate\Http\Request;
use App\Model\NAV\GL_Entry_Nav;
  
trait NavTrait {
  
    /**
     * @param Request $request
     * @return $this|false|string
     */
    public function getData($from_date,$to_date){

    }
    public function numberFormat($value){
    	return number_format($value,'2','.',',');
    }
    public function calculate($formula){
    	
    }
   
  
}
 ?>