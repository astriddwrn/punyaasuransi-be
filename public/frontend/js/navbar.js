$(document).ready(function(){

    $(window).resize(function() {
        var width = $(window).width();
        if (width >= 768){
        //   alert('Your screen is too small');
            $('#mainnavList').css('display', 'block');
            $('#row').css('height', 'fit-content');
        }
        else{
            $('#mainnavList').css('display', 'none');
        }
      });

    
        $('.icon').click(function(){
            if($('#mainnavList').css('display')==='none'){
                $('#mainnavList').css('display', 'flex');
                $('#row').css('height', '250px');

            }
            else if($('#mainnavList').css('display')==='flex'){
                    $('#mainnavList').css('display', 'none');
                    $('#row').css('height', 'fit-content');
                    // $('#mainnavList').removeClass('navshow');
                
            }
        });
});