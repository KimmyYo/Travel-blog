<?php include "include/config.php";?>
<?php include "header.php";?>

<div class="cities sub container " id="posts_section">
    <div class="title" id="posts">Latest Post</div>
        <div class="all_posts flex">
        </div>
    </div>
</div>

<script type="text/javascript">

    var start = 0;
    var limit = 2;
    var reachedMax = false;
   
    
    $(window).on('scroll', function() {
       
        if ($(window).scrollTop() + $(window).height() >= $(document).height() - 50) {
           
            getData();

        }
    });

    $(document).ready(function(){
       
        getData();
    });

    function getData(){
       
        if(reachedMax){
            return;
        }

        $.ajax({
            url: 'data.php',
            method: 'POST',
            dataType: 'text',
            data:{
                getData: 1,
                start: start,
                limit: limit,
            },
            success: function(response){
               
                if(response == 'reachedMax'){
                    reachedMax = true;
                }
                else{
                    start = start + limit;
                    
                  
                    $(".all_posts").append(response);
                }
            },
            error: function(xhr, status, erro){
                
               
            }
           
        });
    }




</script>