
<script type="text/javascript">
$(function() {
  // CODE TO CLOSE THE POPUP
  // USE THE .on METHOD IN CASE WE
  // WANT TO MODIFY THIS TO LOAD POPUP
  // CONTENT VIA AJAX
  $('body').on('click','.closePopup', function() {
    // CHANGE BACKGROUND TO GREEN 
  // FOLLOWED BY A FADEOUT TO GIVE
  // A DELAY TO SHOW CHANGE IN COLOUR
    $('.action input').css({backgroundColor: 'green'}).fadeOut(300, function() {
    // REMOVE ALL ELEMENTS WITH THE 
    // popupElement STYLE - INCLUDES OVERLAY
    // AND POUP
      $('.popupElement').remove()
    });
  });
  // HANDLE THE WINDOW RESIZE.
  // WHEN WINDO IS RESIZED - MAKE SURE
  // POPUP STAYS CENTERED.
  $(window).resize(function() {
    // FIND THE POPUP
    var popup = $('#popupWindow');
  // IF IT EXISTS CENTRE IT
    if (popup.length > 0) {
      centerPopup();
    }
  });
  // TRIGER DISPLAY OF POPUP
  $('a').click(function(e) {
    // DISABLE DEFAULT CLICK FUNCTIONALITY FOR <a>
    e.preventDefault();
  // CREATE OUR OVERLAY AND APPEND TO BODY
    var overlay = $('<div/>').addClass('overlay').addClass('popupElement');
    $('body').append(overlay);
  // CREATE OUR POPUP AND POSITION OFFSCREEN.
  // WE DO THIS SO WE CAN DISPLAY IT AND CALCULATE
  // ITS WIDTH AND HEIGHT SO WE CAN CENTRE IT
    var popup = $('<div/>').attr('id','popupWindow').addClass('popup').addClass('popupElement').css({left: '-999px'});
  // CREATE THE HTML FOR THE POPUP
    var html = '<img src="' + $(this).attr('href') + '" /><div class="action"><input type="button" value="Continue" class="closePopup"/></div>';
    popup.html(html);
  // APPEND THE POPUP TO THE BODY
    $('body').append(popup);
  // AND CENTER IT
    centerPopup();
  });
});
// FUNCTION TO CENTER THE POPUP
function centerPopup()
{
  var popup = $('#popupWindow');
  // LEFT AND TOP VALUES IS HALF THE DIFFERENCE 
  // BETWEEN THE WINDOW AND POPUP METRICS.
  // USE THE SHIFT RIGHT OPERATOR TO DO DIV BY 2
  var left = ($(window).width() - popup.width()) >> 1;
  var top = ($(window).height() - popup.height()) >> 1;
  // SET LEFT AND TOP STYLES TO CALCULATED VALUES
  popup.css({left: left + 'px', top: top + 'px'});
}
</script>
<style type="text/css">
.overlay {
  background: #999;
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  top: 0;
  opacity: 0.95;
  filter: alpha(opacity=95);
  z-index: 1;
}
.popup {
  background: #fff;
  border: 2px solid #333;
  border-radius: 5px;
  padding: 10px;
  position: absolute;
  z-index: 1000;
}
.popup img {
  display: block;
  margin-bottom: 15px;
}
.popup div.action {
  text-align: right;
}
.popup div.action input {
  background: red;
  color: white;
  border: red;
}
</style>
</head>
<body>
<a href="logo.png">Click me</a>
</body>
</html>