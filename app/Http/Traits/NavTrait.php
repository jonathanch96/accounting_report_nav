<?php 
namespace App\Http\Traits;

use Illuminate\Http\Request;
use App\Model\NAV\GL_Entry_Nav;
use App\Model\GL_Account;
trait NavTrait {

    /**
     * @param Request $request
     * @return $this|false|string
     */
    public function getData($month_from,$month_to,$type='pl'){
        //date from -1 month
        $temp = $month_from;
        $temp = explode("/", $temp);
        $date_from =$start= null;
        if(count($temp)>=1){
            $temp = $temp[1]."-".$temp[0]."-01";
            $date_from  = strtotime(date("Y-m-t", strtotime($temp . "-1 month" )));
        }

        //date to
        $temp = $month_to;
        $temp = explode("/", $temp);
        $date_to = null;
        if(count($temp)>=1){
            $temp = $temp[1]."-".$temp[0]."-01";
            $date_to = strtotime(date("Y-m-t", strtotime($temp )));
        }

        $tb = array();
        while($date_from < $date_to)
        {


            $detail = array();

            $gl_account = GL_Account::whereHas('subcategory',function($q)use($type){
                $q->whereHas('category',function($q2)use($type){
                    if($type=='pl'){
                        $q2->where('report_type_id',1);
                    }else{
                        $q2->where('report_type_id',2);
                    }
                });
            })->get();
            foreach ($gl_account as $key => $gl) {
                array_push($detail, [
                    'No_'=>$gl->No_,
                    'Name'=>$gl->Name,
                    'value'=>$gl->glnav->glEntryYTD(date('Y-m-d',$date_from).' 23:59:59')->sum('Amount'),
                    'category_id'=>$gl->category_id,
                ]);
            }
            //echo date('Y-m-d', $date_from), PHP_EOL;
            //echo '<br>';

            array_push($tb,[
                'date'=> date('Y-m-d', $date_from),
                'detail'=>$detail,
            ]);


            $date_from = strtotime("+1 month", $date_from);
        }
        return $tb;

    }
    public function numberFormat($value){
    	return number_format($value,'2','.',',');
    }
    public function calculate($formula){
    	
    }


}
?>