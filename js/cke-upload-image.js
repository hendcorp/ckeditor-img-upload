var imageAdder = function(){
var browser = document.getElementById('displayImg');
var images = browser.getElementsByTagName('img');
    
//Add click event to all images within image browser
for(var i=0;i<images.length;i++){
      images[i].onclick = update;
}
    
//function to update the CKEditor
function update(){
  img = "<img src='"+this.src+"' style='width:500px' />"; //here you can set the default width of your image
     CKEDITOR.instances.ckeditor.insertHtml(img);
  } 
}
  
window.onload = function(){
    imageAdder();
}


$(document).ready(function() { 
    
    $('#deskImg').die('click').live('change', function(){ 
          
        $("#frm").ajaxForm({target: '#displayImg', 
          beforeSubmit:function(){ 
           $("#imgLoading").show();
           $("#ingLoadButton").hide();
           }, 
          success:function(){ 
           $("#imgLoading").hide();
           $("#ingLoadButton").show();
           imageAdder();
          }, 
          error:function(){ 
           $("#imgLoading").hide();
           $("#ingLoadButton").show();
          } }).submit();
      	  
      });
}); 