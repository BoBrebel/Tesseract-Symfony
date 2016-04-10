$(document).ready(function () {
    
        $(".cv").hide();


    $(".boxxx").click(function (){

      if($(".boxxx input[type='radio']:checked").val()==="coach"){
             $(".cv").show();
         
      }else if($(".boxxx input[type='radio']:checked").val()==="student"){
        $(".cv").hide();
          
      }
    }
        
    );
   



});