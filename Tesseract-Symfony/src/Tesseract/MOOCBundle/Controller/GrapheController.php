<?php  
namespace Tesseract\MOOCBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller; 
use Ob\HighchartsBundle\Highcharts\Highchart; 

class GrapheController  extends Controller{ 
    public function indexAction(){
        $em = $this->getDoctrine()->getManager();
        $users=$em->getRepository('TesseractMOOCBundle:Utilisateur')->findAll();
        $nbr=count($users);
     
        $requette = $em->createQuery("select count(l.tache) as total ,l.date from TesseractMOOCBundle:Log l  where l.tache= 'signup' group by l.date order by l.date DESC");
        $signup=$requette->getResult();
        $stat= array();
        $dates = array();
        $i=0;
        foreach($signup as $s){
            $stat[$i]=$s['total'];
            $dates[$i]=$s['date'];
            $i++;
        }
       

        
	$series = array(
         array("name" => "Number of Users","data" => $stat)
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
