//attach_nav

if ($ ('body').hasClass('home')) {

    var targetPos = $('#attach_nav').offset().top;

    $(window).scroll(function(){
        var scrollPos = $(this).scrollTop();

        if (scrollPos > targetPos) {
            $('#attach_nav').addClass('fixed')
        }else
            $('#attach_nav').removeClass('fixed')
    });
}



// Back to top


var showScrollButton = 200 ;
$(window).scroll(function(){
    var wScroll = $(this).scrollTop();

    if (wScroll > showScrollButton) {
        $('.back').fadeIn();
    }else{
        $('.back').fadeOut();
    }   
});
$('.back').click(function(){
    $('html,body').animate({
        scrollTop: 0
    }, 2000);

    return false;
});








// Smooth Scrolling


$("html").easeScroll({
    frameRate: 60,
    animationTime: 1000,
    stepSize: 120,
    pulseAlgorithm: 1,
    pulseScale: 8,
    pulseNormalize: 1,
    accelerationDelta: 20,
    accelerationMax: 1,
    keyboardSupport: true,
    arrowScroll: 50,
    touchpadSupport: true,
    fixedBackground: true
});



// Home  Slider Effect 


$(function() {
      

    // active class work

    var index = location.pathname.lastIndexOf('/');
    var href = location.pathname.slice(index+1);
    $('#attach_nav ul li a[href="'+href+'"]').parent().addClass('active');

    if($('#attach_nav ul li#other').hasClass('active')){
        $('#attach_nav ul li#home').removeClass('active');
    };
    if($('#attach_nav ul #home').hasClass('active')) {
        $('.wrapper').removeClass('top_shadow_margin')
    };
// Date

    var di = new Date();
    document.getElementById("date_islamic").innerHTML = writeIslamicDate();
    document.getElementsByClassName("islamic").innerHTML = writeIslamicDate();
});


$(function(){
    // pic Model 

    $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var src = button.data('url') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this);
        var title = button.closest('.panel').children('.panel-heading').text().trim();
        var type = button.data('type');
        console.log(button,title);
        if (type == 'audio') {
            var aud_vid = $('<p><font><h3 class="text-center" style="color: white;padding: 7px; background-color: #004D6F;">آڈیو ڈاؤن لوڈ کر نے لئے</h3></font><font style="float: right;font-size: 22px;padding-bottom: 22px;">1. نیچے دائیں طرف <img class="background-size-control" src="images/home-pic/1.png" alt=""> بٹن کو دبائیں۔ <br>2. اگلے صفحے پر جا کر <img src="images/home-pic/3-dots.png"> بٹن کو دبا کر ڈاؤن لوڈ کریں۔ <br></font><iframe src="'+src+'" class="a_v" style="width: 100%;height: 160px;"></iframe>');
        }else if (type == 'video') {
            var aud_vid = $('<div class="embed-responsive embed-responsive-16by9 a_v"><iframe class="embed-responsive-item" width="560" height="315" src="'+src+'" frameborder="0" allowfullscreen></iframe></div>');
        }else if (type == 'pic') {
            var aud_vid = $('<img class="img-responsive" src="'+src+'" alt="'+title+'" id="modalImg" class="img-responsive a_v" width="">');
        }
        modal.find('.modal-title').text(title);
        modal.find('.modal-body').html(aud_vid);
        if (type == 'pic') {
            // aud_vid.css('visibility','hidden');
            var modalWidth = aud_vid[0].width;
            var modalHeight = aud_vid[0].height;
            // img viewer
            var viwrOptions = {
                inline: true,
                url: src,
                button:false,
                toolbar:false,
                rotatable:false,
                fullscreen:false,
                navbar: false,
                minHeight: modalHeight,
                minWidth: modalWidth
            }
            // var viwer = new Viewer(document.getElementById('modalImg'), viwrOptions);
            // $('.viewer-container').removeAttr('style');
            // $(modal).find('.viewer-container>.viewer-canvas>img').removeAttr('style');
        }
    });
    $('#exampleModal').on('hidden.bs.modal', function (e) {
        $(this).find('.modal-body .a_v').remove();
    });

});

// Slider


$('.slider-first').slick({
    autoplay: true,
    prevArrow: '.controllers-first .prev',
    nextArrow: '.controllers-first .next',
});
$(function () {
    $(document).on('click','.btn-ready',function() {
        var src = $(this).data('src');
        $(this).prev('audio').attr('src',src)[0].play();
        // console.log($(this).prev('audio'));
    });
    $('audio').on('play',function() {
        // console.log($('audio'))
        $('audio').not(this).each(function(k,audio) {
            audio.pause();
        });
    });
    // $('.work').zoom();
});

// First Click Modal Show 


$(document).one('click',function() {
  // $('#myModal').modal('show');
});