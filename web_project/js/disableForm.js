$(document).ready(function(){
    $(".first").on('change',function(){
     if($(this).val()!=1)
     {
     	$("#dateFirst").attr('disabled', true);
     	document.getElementById('dateFirst').value = "";
     	$("#dateFirst1").attr('disabled', true);
     	document.getElementById('dateFirst1').value = "";
     	$("#dateFirst2").attr('disabled', true);
     	document.getElementById('dateFirst2').value = "";	
     	
     }
     else
     {
     	$("#dateFirst").attr('disabled', false);
     	document.getElementById('dateFirst').value = 1;
     	$("#dateFirst1").attr('disabled', false);
     	document.getElementById('dateFirst1').value = "มกราคม";
     	$("#dateFirst2").attr('disabled', false);
     	document.getElementById('dateFirst2').value = '<?php echo date("Y")+543 ?>';
     		
     }  
    });
    $(".second").on('change',function(){
     if($(this).val()!=1)
     {
     	$("#dateSecond").attr('disabled', true);
     	document.getElementById('dateSecond').value = "";
     	$("#dateSecond1").attr('disabled', true);
     	document.getElementById('dateSecond1').value = "";
     	$("#dateSecond2").attr('disabled', true);
     	document.getElementById('dateSecond2').value = "";	
     	
     }
     else
     {
     	$("#dateSecond").attr('disabled', false);
     	document.getElementById('dateSecond').value = 1;
     	$("#dateSecond1").attr('disabled', false);
     	document.getElementById('dateSecond1').value = "มกราคม";
     	$("#dateSecond2").attr('disabled', false);
     	document.getElementById('dateSecond2').value = '<?php echo date("Y")+543; ?>';
     		
     }  
    });
    $(".third").on('change',function(){
     if($(this).val()!=1)
     {
     	$("#dateThird").attr('disabled', true);
     	document.getElementById('dateThird').value = "";
     	$("#dateThird1").attr('disabled', true);
     	document.getElementById('dateThird1').value = "";
     	$("#dateThird2").attr('disabled', true);
     	document.getElementById('dateThird2').value = "";	
     	
     }
     else
     {
     	$("#dateThird").attr('disabled', false);
     	document.getElementById('dateThird').value = 1;
     	$("#dateThird1").attr('disabled', false);
     	document.getElementById('dateThird1').value = "มกราคม";
     	$("#dateThird2").attr('disabled', false);
     	document.getElementById('dateThird2').value = '<?php echo date("Y")+543; ?>';
     		
     }  
    });
    $(".fourth").on('change',function(){
     if($(this).val()!=1)
     {
     	$("#dateFourth").attr('disabled', true);
     	document.getElementById('dateFourth').value = "";
     	$("#dateFourth1").attr('disabled', true);
     	document.getElementById('dateFourth1').value = "";
     	$("#dateFourth2").attr('disabled', true);
     	document.getElementById('dateFourth2').value = "";	
     	
     }
     else
     {
     	$("#dateFourth").attr('disabled', false);
     	document.getElementById('dateFourth').value = 1;
     	$("#dateFourth1").attr('disabled', false);
     	document.getElementById('dateFourth1').value = "มกราคม";
     	$("#dateFourth2").attr('disabled', false);
     	document.getElementById('dateFourth2').value = '<?php echo date("Y")+543; ?>';
     		
     }  
    });
    $(".fourth").on('change',function(){
     if($(this).val()!=1)
     {
     	$("#dateFourth").attr('disabled', true);
     	document.getElementById('dateFourth').value = "";
     	$("#dateFourth1").attr('disabled', true);
     	document.getElementById('dateFourth1').value = "";
     	$("#dateFourth2").attr('disabled', true);
     	document.getElementById('dateFourth2').value = "";	
     	
     }
     else
     {
     	$("#dateFourth").attr('disabled', false);
     	document.getElementById('dateFourth').value = 1;
     	$("#dateFourth1").attr('disabled', false);
     	document.getElementById('dateFourth1').value = "มกราคม";
     	$("#dateFourth2").attr('disabled', false);
     	document.getElementById('dateFourth2').value = '<?php echo date("Y")+543; ?>';
     		
     }  
    });
    $(".fifth").on('change',function(){
     if($(this).val()==2)
     {
     	$("#dateFifth").attr('disabled', true);
     	document.getElementById('dateFifth').value = "";
     	$("#dateFifth1").attr('disabled', true);
     	document.getElementById('dateFifth1').value = "";
     	$("#dateFifth2").attr('disabled', true);
     	document.getElementById('dateFifth2').value = "";	
     	
     }
     else
     {
     	$("#dateFifth").attr('disabled', false);
     	document.getElementById('dateFifth').value = 1;
     	$("#dateFifth1").attr('disabled', false);
     	document.getElementById('dateFifth1').value = "มกราคม";
     	$("#dateFifth2").attr('disabled', false);
     	document.getElementById('dateFifth2').value = '<?php echo date("Y")+543; ?>';
     		
     }  
    });
    $(".sixth").on('change',function(){
     if($(this).val()==2)
     {
     	$("#dateSixth").attr('disabled', true);
     	document.getElementById('dateSixth').value = "";
     	$("#dateSixth1").attr('disabled', true);
     	document.getElementById('dateSixth1').value = "";
     	$("#dateSixth2").attr('disabled', true);
     	document.getElementById('dateSixth2').value = "";	
     	
     }
     else
     {
     	$("#dateSixth").attr('disabled', false);
     	document.getElementById('dateSixth').value = 1;
     	$("#dateSixth1").attr('disabled', false);
     	document.getElementById('dateSixth1').value = "มกราคม";
     	$("#dateSixth2").attr('disabled', false);
     	document.getElementById('dateSixth2').value = '<?php echo date("Y")+543; ?>';
     		
     }  
    });
});