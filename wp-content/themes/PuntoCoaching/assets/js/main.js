 $(document).ready(function(){
      $('.slider').slider({full_width: true});
    });
        

  $(".button-collapse").sideNav();


    $(document).ready(function(){
    $('.collapsible').collapsible({
      accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
    });
  });
  

  // $('.dropdown-button').dropdown({
  //     inDuration: 300,
  //     outDuration: 225,
  //     constrain_width: false, // Does not change width of dropdown to that of the activator
  //     hover: false, // Activate on hover
  //     gutter: 0, // Spacing from edge
  //     belowOrigin: false, // Displays dropdown below the button
  //     alignment: 'left' // Displays dropdown with edge aligned to the left of button
  //   }
  // );
  $(".dropdown-toggle").click(function (){

    $(".dropdown-toggle").not(this).parent('li').children(".dropdown-menu").removeClass('show');
    $(this).parent('li').children(".dropdown-menu").toggleClass('show');
});

  $(".dropHover").hover(function (){
    $(".dropdown-toggle").not(this).parent('li').children(".dropdown-menu").removeClass('show');
    // $(this).parent('li').children(".dropdown-menu").toggleClass('show');
});




//$('.button-collapse').sideNav('hide');
  // $(".dropdown-toggle").click(function () {
  //       $( this ).children(".deg").toggleClass("rotate180");
  //       //$( this ).toggleClass( "highlight" );        
  // });


 
var step = 320;
var scrolling = false;

// Wire up events for the 'scrollUp' link:
$("#scrollUp").bind("click", function(event) {
    event.preventDefault();
    // Animates the scrollTop property by the specified
    // step.
    $("#content").animate({
        scrollTop: "-=" + step + "px"
    });
}).bind("mouseover", function(event) {
    scrolling = true;
    scrollContent("up");
}).bind("mouseout", function(event) {
    scrolling = false;
});


$("#scrollDown").bind("click", function(event) {
    event.preventDefault();
    $("#content").animate({
        scrollTop: "+=" + step + "px"
    });
}).bind("mouseover", function(event) {
    scrolling = true;
    scrollContent("down");
}).bind("mouseout", function(event) {
    scrolling = false;
});

function scrollContent(direction) {
    var amount = (direction === "up" ? "-=1px" : "+=1px");
    $("#content").animate({
        scrollTop: amount
    }, 1, function() {
        if (scrolling) {
            scrollContent(direction);
        }
    });
}



    var stepLeft = 25;
    var scrollingLeft = false;

    // Wire up events for the 'scrollUp' link:
    $("#scrollLeft").bind("click", function(event) {
        event.preventDefault();
        // Animates the scrollTop property by the specified
        // step.
        $("#content3").animate({
            scrollLeft: "-=" + stepLeft + "px"
        });
    }).bind("mouseover", function(event) {
        scrollingLeft = true;
        scrollContent("left");
    }).bind("mouseout", function(event) {
        scrollingLeft = false;
    });


    $("#scrollRight").bind("click", function(event) {
        event.preventDefault();
        $("#content3").animate({
            scrollLeft: "+=" + stepLeft + "px"
        });
    }).bind("mouseover", function(event) {
        scrollingLeft = true;
        scrollContent("right");
    }).bind("mouseout", function(event) {
        scrollingLeft = false;
    });

    function scrollContent(direction) {
        var amount = (direction === "left" ? "-=6px" : "+=6px");
        $("#content3").animate({
            scrollLeft: amount
        }, 1, function() {
            if (scrollingLeft) {
                scrollContent(direction);
            }
        });
    }
