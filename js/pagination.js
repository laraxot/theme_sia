'use strict';

var numberOfItems = $('#page .blog-article-wide').length;
var limitPerPage = 7;
$('#page .blog-article-wide:gt(' + (limitPerPage - 1) + ')').hide();
var totalPages = Math.ceil(numberOfItems / limitPerPage);
$(".pagination").append("<li class='current-page active'><a href='javascript:void(0)'>" + 1 + "</a></li>");

for (var i = 2; i <= totalPages; i++) {
  $(".pagination").append("<li class='current-page'><a href='javascript:void(0)'>" + i + "</a></li>");
}


$(".pagination").append("<li id='next-page'><a href='javascript:void(0)' aria-label=Next><span aria-hidden=true>&raquo;</span></a></li>");


$(".pagination li.current-page").on("click", function() {

  if ($(this).hasClass('active')) {
    return false;
  } else {
    var currentPage = $(this).index();
    $(".pagination li").removeClass('active');
    $(this).addClass('active');
        $("#page .blog-article-wide").hide();
    var grandTotal = limitPerPage * currentPage;


    for (var i = grandTotal - limitPerPage; i < grandTotal; i++) {
      $("#page .blog-article-wide:eq(" + i + ")").show();
    }
  }

});


$("#next-page").on("click", function() {
  var currentPage = $(".pagination li.active").index();
    if (currentPage === totalPages) {
    return false;
  } else {
    currentPage++;
    $(".pagination li").removeClass('active');
    $("#page .blog-article-wide").hide();
    var grandTotal = limitPerPage * currentPage;


    for (var i = grandTotal - limitPerPage; i < grandTotal; i++) {
      $("#page .blog-article-wide:eq(" + i + ")").show();
    }

    $(".pagination li.current-page:eq(" + (currentPage - 1) + ")").addClass('active');
    }
});


$("#previous-page").on("click", function() {
  var currentPage = $(".pagination li.active").index();

  if (currentPage === 1) {
    return false;
  } else {
    currentPage--;
    $(".pagination li").removeClass('active');
    $("#page .blog-article-wide").hide();
    var grandTotal = limitPerPage * currentPage;


    for (var i = grandTotal - limitPerPage; i < grandTotal; i++) {
      $("#page .blog-article-wide:eq(" + i + ")").show();
        }

    $(".pagination li.current-page:eq(" + (currentPage - 1) + ")").addClass('active');
  }
});
