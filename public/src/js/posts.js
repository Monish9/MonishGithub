$('document').ready(function(){
                
    $('a').on('click', function(){
                        $('.active').addClass('inactive');
                        $('.active').removeClass('active');
                      
                        $(this).addClass('active');
                        $(this).removeClass('inactive');
                        event.preventDefault();
                        var href = $(this).attr('href');
                      
                        $.ajax({
                            url: href,
                            success: function(resp){
                                $('#container-fluid').load(href);   
                            }
                        });
    });
    
    
});



 