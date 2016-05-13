<?php  
namespace Tesseract\MOOCBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller; 
use Ob\HighchartsBundle\Highcharts\Highchart; 

class GrapheController  extends Controller{ 
    public function indexAction(){
        $em = $this->getDoctrine()->getManager();
     
        //$requette = $em->createQuery("select count(l.tache) from TesseractMOOCBundle:Log l where l.tache= 'signup'group by l.date");
        //$requette->setParameter(0, 'signup');
        //$signup=$requette->getResult();
        $nbr=5;
	$series = array(
         array("name" => "Number of Users","data" => array(1,2,4,5,6,3,$nbr))
         );  
    $days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
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
