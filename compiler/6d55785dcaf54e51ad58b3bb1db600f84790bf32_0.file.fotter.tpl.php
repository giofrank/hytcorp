<?php
/* Smarty version 3.1.29, created on 2016-03-01 06:27:49
  from "C:\xampp\htdocs\hyt\styles\templates\overall\fotter.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56d52855991c97_72473250',
  'file_dependency' => 
  array (
    '6d55785dcaf54e51ad58b3bb1db600f84790bf32' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hyt\\styles\\templates\\overall\\fotter.tpl',
      1 => 1456810066,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56d52855991c97_72473250 ($_smarty_tpl) {
?>
</body>
</html>
<?php echo '<script'; ?>
>
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
<?php echo '</script'; ?>
><?php }
}
