</body>
</html>
<script>
    $('.mo-ad').on('click', function(){
      $('.administration').slideToggle();
      $('.logistic, .contability, .ssoysgi, .production').slideUp();
    });
    $('.mo-lo').on('mouseover', function(){
      $('.logistic').slideToggle();
      $('.administration, .contability, .ssoysgi, .production').slideUp();
      $(this).on('click', function(){
        $(this).attr('href', 'index.php?view=logistica');
      });
    });
    $('.mo-co').on('click', function(){
      $('.menu-logistica').fadeIn();
      $('.contability').slideToggle();
      $('.administration, .logistic, .ssoysgi, .production').slideUp();
    });
    $('.mo-ss').on('click', function(){
      $('.ssoysgi').slideToggle();
      $('.logistic, .contability, .administration, .production').slideUp();
    });
    $('.mo-pr').on('click', function(){
      $('.production').slideToggle();
      $('.logistic, .contability, .ssoysgi, .administration').slideUp();
    });

    $(".fa-bars").mouseover( function(){
        $(".sesion").css('display','block').fadeIn(1000);

    });
    $('body').on('click', function(){
        $('.sesion').fadeOut();
    });
    $(".fa-times").mouseover( function(){
        $(".cabecera").css('background','#900F0F');

    });
    $(".fa-times").mouseout( function(){
        $(".cabecera").css('background','#167159');

    });
</script>