function openNav() {
  document.getElementById("Sidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("Sidebar").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
}


//https://www.solodev.com/blog/web-design/creating-a-toggled-search-bar.stml
$( document ).ready(function() {
  $('[data-toggle=search-form]').click(function() {
      $('.search-form-wrapper').toggleClass('open');
      $('.search-form-wrapper .search').focus();
      $('html').toggleClass('search-form-open');
    });
    $('[data-toggle=search-form-close]').click(function() {
      $('.search-form-wrapper').removeClass('open');
      $('html').removeClass('search-form-open');
    });
  $('.search-form-wrapper .search').keypress(function( event ) {
    if($(this).val() == "Search") $(this).val("");
  });
});