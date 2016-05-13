<?php  
namespace Tesseract\MOOCBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller; 
use Ob\HighchartsBundle\Highcharts\Highchart; 

class GrapheController  extends Controller{ 
    public function indexAction(){
        $em = $this->getDoctrine()->getManager();
        $users=$em->getRepository('TesseractMOOCBundle:Utilisateur')->findAll();
        $nbr=count($users);
     
        $requette = $em->createQuery("select  count(l.tache) as total ,l.date from TesseractMOOCBundle:Log l  where l.tache= 'signup' group by l.date order by l.date ASC");
        $signup=$requette->setMaxResults(7)->getResult();
        $stat= array(null,null,null,null,null,null,null);
        $dates = array(null,null,null,null,null,null,null);
        $i=0;
        foreach($signup as $s){
            if($s['total']!=0){
                $stat[$i]=$s['total'];
            }
            
            $dates[$i]=$s['date']->format("d/m/Y");
            $i++;
        }
	$series = array(
         array("name" => "Number of Users","data" => array(intval($stat[0]),intval($stat[1]),intval($stat[2]),intval($stat[3]),intval($stat[4]),intval($stat[5]),intval($stat[6])))
         );  
    $days = $dates;
    $ob = new Highchart();     
    $ob->chart->renderTo('linechart');      
    $ob->title->text('New Users');
    $ob->xAxis->title(array('text'  => "Day")); 
    $ob->xAxis->categories($days);
    $ob->yAxis->title(array('text'  => "Number "));     
    $ob->series($series);  
    return $this->render('TesseractMOOCBundle:Admin:LineChart.html.twig', array('chart' => $ob,
                                                                                'nbr' => $nbr)); 
} 
}
