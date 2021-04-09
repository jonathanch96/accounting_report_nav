<?php 
namespace App\Http\Traits;

use Illuminate\Http\Request;
use App\Model\NAV\GL_Entry_Nav;
use App\Model\GL_Account;
use App\Model\GL_SubCategory;
trait NavTrait {

    /**
     * @param Request $request
     * @return $this|false|string
     */
    public function tbtopl($tb){


        $subcategory = GL_SubCategory::whereHas("category",function($q){
            $q->where('report_type_id',1);
        })->orderBy('order')->get();
        $pl = array();
        $ytd_categorized_data = array();
        //dd($tb);//check gl counter
        foreach ($tb as $key => $t) {
            $temp_data = array();
            $temp_data["date"]=$t["date"];
            $temp_data_detail = array();
            //print($t["date"]."<br>");
            foreach ($subcategory as $key => $sc) {
                $sum = 0;
                foreach ($t["detail"] as $key => $tbd) {
                    foreach ($sc->gl_accounts as $key => $gl) {
                        if($gl->No_==$tbd["No_"]){
                           // print($sc->name. " - ".$gl->No_." - ".$gl->Name." = ".$this->numberFormat($tbd["value"])."<br>");
                            $sum+=$tbd["value"];
                        }
                        
                    }
                }  
                array_push($temp_data_detail, [
                    'id'=>$sc->id,
                    'category_id'=>$sc->category_id,
                    'name'=>$sc->name,
                    'value'=>$sum,
                ]);
            }
            $temp_data["detail"]=$temp_data_detail;
            array_push($ytd_categorized_data,$temp_data);
            //print("<br><br>");

        }
        $prev_data = $ytd_categorized_data[0]; //pasti lebih dari 1 harusnya
        $flag_first = true;
        $divide = 1;

        foreach ($ytd_categorized_data as $key => $ytd) {
            $temp_ytd = $ytd;
            if($flag_first){
                $flag_first=false;
            }else{
                $counter = 0;
                foreach ($temp_ytd["detail"] as $key => $ytddet) {
                    if($ytddet['name']=="Penjualan Net"){
                        $ytddet["value"]=-$ytddet["value"]+$prev_data["detail"][$counter]["value"];
                        $ytddet["percentage"]=1;
                        $divide =  $ytddet["value"];
                    }else{
                        $ytddet["value"]-=$prev_data["detail"][$counter]["value"];
                        $ytddet["percentage"]=round(($ytddet["value"]/$divide),4,PHP_ROUND_HALF_UP );

                    }
                    $temp_ytd["detail"][$counter]=$ytddet;
                    $counter++;

                }
                array_push($pl, $temp_ytd);
                $prev_data = $ytd;
            }
        }
        return $pl;

    }
    public function getData($month_from,$month_to,$type='pl'){
        //date from -1 month
        $temp = $month_from;
        $temp = explode("/", $temp);
        $date_from =$start= null;
        if(count($temp)>=1){
            $temp = $temp[1]."-".$temp[0]."-01";
            $date_from  = strtotime(date("Y-m-d", strtotime($temp . "-1 month" )));
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
                    'value'=>$gl->glnav->glEntryYTD(date('Y-m-t',$date_from).' 23:59:59')->sum('Amount'),
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