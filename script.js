const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry);
        if(entry.isIntersecting){
            entry.target.classList.add("show");
        } else{
            entry.target.classList.remove("show");
        }
    })
})

const hiddenElements = document.querySelectorAll(".hidden");
hiddenElements.forEach((el) => observer.observe(el));







$(document).ready(function stickyNavbar(){


    var windows = $(window);
    var screenSize = windows.width();
    var sticky = $("#main_navbar");
    var icon = $(".drop_down.icon")
    var $html = $('html');
    var $body = $('body');

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
    
       
        


    })

     
   
    
    box_hover($("#main_menu_1"), $("#sub_menu_1"));
    box_hover($("#main_menu_2"), $("#sub_menu_2"));
    click_func($("#sub_country_1"), $("#sub_sub_city_1"));
    click_func($("#sub_country_2"), $("#sub_sub_city_2"));
    click_func($("#sub_country_3"), $("#sub_sub_city_3"));
    click_func($("#sub_country_4"), $("#sub_sub_city_4"));
    click_func($("#secondary_toggle"), $("#secondary_menu"));
    click_func($("#close_icon"), $("#secondary_menu"));
    click_func($("#secondary_drop_icon"), $("#secondary_sub_sub_menu"));
    click_func($("#hey"), $("#us_states"));
    
  
    

})

function click_func(be_clicked, to_show){
    be_clicked.click(
        function(){
            
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
    
    