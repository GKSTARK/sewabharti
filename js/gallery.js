$(document).ready(function () {
  var galleryItems = $(".gallery li");
  var numItems = galleryItems.length;
  var perPage = 6; // Change this value to adjust items per page
  var totalPages = Math.ceil(numItems / perPage);
  var currentPage = 1;

  function showPage(page) {
    galleryItems
      .hide()
      .slice((page - 1) * perPage, page * perPage)
      .show();
  }

  showPage(currentPage);

  $(".prev").click(function () {
    if (currentPage > 1) {
      currentPage--;
      showPage(currentPage);
    }
  });

  $(".next").click(function () {
    if (currentPage < totalPages) {
      currentPage++;
      showPage(currentPage);
    }
  });

  if (totalPages <= 1) {
    $(".pagination").addClass("hide");
  }
});
