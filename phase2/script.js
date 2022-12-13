
// const observer = new IntersectionObserver((entries) => {
//     entries.forEach((entry) => {
//         console.log(entry);
//         if(entry.isIntersecting){
//             entry.target.classList.add("show");
//         } else{
//             entry.target.classList.remove("show");
//         }
//     })
// })

// const hiddenElements = document.querySelectorAll(".hidden");
// hiddenElements.forEach((el) => observer.observe(el));




$(document).ready(function stickyNavbar(){
    

    var windows = $(window);
    var screenSize = windows.width();
    var sticky = $("#main_navbar");
    var icon = $(".drop_down.icon")
    var $html = $('html');
    var $body = $('body');

    
    var mincount = 10;
    var maxcount = 20;

    
    windows.on('scroll', function(){
        var scroll = windows.scrollTop();
        var navbarHeight = sticky.height();
       

        if (screenSize >= 320){
            if (scroll > navbarHeight){
                sticky.addClass("sticky");
                icon.css("color", "black");
                $("#sub_navbar").addClass("sticky");
                $("#sub_navbar").css("color", "black");
                

               
            } else{
                sticky.removeClass("sticky");
                icon.css("color", "white");
                $("#sub_navbar").removeClass("sticky");
                // $("#sub_navbar").css("color", "white");        
               
            }
        }  

        if ($(window).scrollTop() + $(window).height() >= $(document).height() - 50) {
            $(".all_posts .posts.flex").slice(mincount, maxcount).slideDown(1400);
   
            mincount = mincount + 10;
            maxcount = maxcount + 10

           
   
        }
       

       

    })

    
   
    
    click_func($("#main_menu_1"), $("#sub_menu_1"));
    click_func($("#main_menu_2"), $("#sub_menu_2"));
    click_func($("#profile_photo"), $("#my_box"));
    box_hover($("#sub_country_1"), $("#sub_sub_city_1"));
    click_func($("#sub_country_2"), $("#sub_sub_city_2"));
    click_func($("#sub_country_3"), $("#sub_sub_city_3"));
    click_func($("#sub_country_4"), $("#sub_sub_city_4"));
    click_func($("#secondary_toggle"), $("#secondary_menu"));
    click_func($("#close_icon"), $("#secondary_menu"));
    click_func($("#secondary_drop_icon"), $("#secondary_sub_sub_menu"));
    click_func($("#hey"), $("#us_states"));
    click_func($(".more_icon"), $(".more_section"));
    click_func($(".edit_button"), $("#edit_section"));
   
   
    show_post_section();

    setContainerWidth();
    
    check_more_content();
    $("#post_btn").hover(function(){
        $("#post_show_mention").css("display", "block");
        }, function(){
        $("#post_show_mention").css("display", "none");
      });
      $("#feed_btn").hover(function(){
        $("#feed_show_mention").css("display", "block");
        }, function(){
        $("#feed_show_mention").css("display", "none");
      });
      

    

})
$(window).resize(function(){
    setContainerWidth();
 });


 function check_more_content(){
     if(!$.trim( $('#other_text').html() ).length){
        $("#post_more_content").hide();
     }
 }
 function show_more_post(){
    
    $("#other_text").show();
    $("#post_more_content").hide();
   
 }
 function setContainerWidth()
 {
     $('.gallery').css('width', 'auto'); //reset
     var windowWidth = $(document).width();
     var blockWidth = $('.gallery_image').outerWidth(true);
     var maxBoxPerRow = Math.floor(windowWidth / blockWidth);
     $('.gallery').width(maxBoxPerRow * blockWidth);
 }

function click_func(be_clicked, to_show){
    be_clicked.off().click(
        function(e){
            e.preventDefault();
            console.log("yes");
            to_show.toggle("100");
        }
    )
}

function box_hover(be_hovered, to_show) {
    be_hovered.on('mouseover', function(e) {
        if (e.target === this) {
            to_show.toggle();
        }
      })
      .on('mouseout', function() {
            to_show.toggle();
      });
}

// pop up edit section to the middle of the post 
function show_post_section(){
    $create_button = $("#create_button");
    $create_section = $("#create_post");
    $leave_button = $(".leave_button");

    $edit_button = $(".edit_button");
    $edit_section = $(".edit_section");


    $create_button.click( 
        function(){
        $create_section.addClass("show_create_post");
    });

    $leave_button.click(
        function(){
            $create_section.removeClass("show_create_post");
            // $edit_section.removeClass("show_create_post");
            // $edit_section.addClass("hide");
    });

    $edit_button.click(
        function(){
            $edit_section.removeClass("hide");
            $(".edit_section").toggle();
            // $edit_section.addClass("show_create_post");
            
    });
    $("#more_btn").click(
        function(){
            
            $(".edit_popup").toggle();
            $(".original_content").toggle();
        }
    )
    // $('#more_btn').on('click', function(e){
    //     $("#edit_popup").toggle();
    //     $(this).toggleClass('class1')
    // });
    $("#leave_btn").click(
        function(){
            window.location.href = 'mypage.php';
        }
    )
    

       
}

// resize text input after user type in 


// function preview() {
//     console.log("hi");
//     $(".previewImage").src= window.URL.createObjectURL(event.target.files[0]);
//     alert(previewImage.src);
//     // $(".previewImage").removeClass("visibility-hidden");
//     // $(".previewImage").addClass("visibility-visible");
// }

function showPreview(event){
    if(event.target.files.length > 0){
      var src = URL.createObjectURL(event.target.files[0]);
      var preview = document.getElementById("file-ip-1-preview");
      preview.src = src;
      preview.style.display = "block";
      preview.style.visibility = "visible";
    }
  }










var TxtType = function(el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 1) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
};

TxtType.prototype.tick = function() {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

    var that = this;
    var delta = 200 - Math.random() * 100;

    if (this.isDeleting) { 
        delta /= 2; 
    }

    // if (!this.isDeleting && this.txt === fullTxt) {
    // delta = this.period;
    // this.isDeleting = true;
    // } else 
    // if (this.isDeleting && this.txt === '') {
    // this.isDeleting = false;
    // this.loopNum++;
    // delta = 500;
    // }
    
    setTimeout(function() {
    that.tick();
    }, delta);
};

window.onload = function() {
    var elements = document.getElementsByClassName('typewrite');
    for (var i=0; i<elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-type');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
          new TxtType(elements[i], JSON.parse(toRotate), period);
        }
    }
    // INJECT CSS
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
    document.body.appendChild(css);
};
    




