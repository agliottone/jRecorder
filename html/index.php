<html>
<head>
  
<script src="jquery.min.js"> </script>
<script src="jRecorder.js"> </script>

<title>Recorder</title>  
<style type="text/css">
#flashrecarea{
 float: right; width: 399px; height: 289px;

}
 </style>
</head>


<body style="height: 162px; width: 662px;">
  
       <script type="text/javascript">
   
   $.jRecorder(
     
     { 
    
        
        callback_started_recording:     function(){callback_started(); },
        callback_stopped_recording:     function(){callback_stopped(); },
        callback_activityLevel:          function(level){callback_activityLevel(level); },
        callback_activityTime:     function(time){callback_activityTime(time); },
        
        callback_finished_sending:     function(time){ callback_finished_sending() },
        bgcolor: 'white',
        wmode: 'transparent',
        swf_path : 'jRecorder.swf'
     
     }
     
   
        
   
   );
   
    
   
   </script>
 
        
       
   
<div id="wrapper" style="height: 162px; top: 0pt; float: left; width: 262px;">

 
<form enctype="multipart/form-data" method="POST" action="salva.php">
<h4>RECORDER</h4>
<div align="left" style="margin-left:10px">
Name <input type="text" name="name"/>
Recorder
<input type="button" id="record" value="" style="background: white no-repeat top;background-repeat:no-repeat;background-position: top;width:30px; height:30px;background-image:url(http://cdn1.iconfinder.com/data/icons/discovery/24x24/actions/stock_media-rec.png);color:red">  
<input type="button" id="stop" value="" style="background: white no-repeat top;background-repeat:no-repeat;background-position: top;display:none;width:30px; height:30px;background-image:url(http://cdn1.iconfinder.com/data/icons/defaulticon/icons/png/24x24/media-stop.png);color:red">
<input type="button" id="play" value="" style="background: white no-repeat top;background-repeat:no-repeat;background-position: top;display:none;width:30px; height:30px;background-image:url(http://cdn1.iconfinder.com/data/icons/strabo/24/play.png);color:red">

 
<span id="time"></span>

<span id="status"></status>
 

</div>
<input id="rec" type="input" name="rec" value="false" style="display:none; opacity:0">
</div>




</form>


</div>
<div style="width: 400px; height: 100%; float: left;" id="divdebug">

</div>
 

</body>
</html>


 <script type="text/javascript">
$('#rec').val('false')
                  
      
      
      
                  $('#record').click(function(){
                    
                    
                      $.jRecorder.record(30);
                    
                  })
                
                  $('#play').click(function(){
                      $.jRecorder.play();


                  })
                  $('#stop').click(function(){
                    
                    
                    
                     $.jRecorder.stop();
                    
                    
                  })
                  
                  
                   $('#send').click(function(){
                    
                    
                    
                     $.jRecorder.sendData();
                    
                    
                  })
                  

                  function callback_finished()
                  {
      
	$('#stop').hide();
    $('#record').show();
    $('#play').show();
    $('#status').html('Rec end');
                    
                  }
                  
                  function callback_started()
                  {
      
                      $('#status').html('');
                       $('#rec').val('false');

                    
                  }
                  
                  
                  
                  
                  function callback_error(code)
                  {
                      $('#status').html('Error' + code);
                  }
                  
                  
                  function callback_stopped()
                  {
                	  $('#stop').hide();
                      $('#record').show();
                      $('#play').show();
                      $('#status').html('Rec end');
                  }

                  function callback_finished_recording()
                  {
                	  $('#stop').hide();
                      $('#record').show();
                      $('#play').show();
                      $('#status').html('Rec end');
                    
                    
                  }
                  
                  function callback_finished_sending()
                  {
                    
            
                      $('#rec').val("true");
                      
                  }
                  
             
                  
                  function callback_activityTime(time)
                  {
                	  $('#stop').show();
                      $('#record').hide();
                      $('#play').hide();
                	  $('#status').html('rec.');
                            $('#time').html(time);
                    
                  }

                  
                  
		   
		   
		              

           
        </script>
		
