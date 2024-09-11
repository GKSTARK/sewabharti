function showProductItems() {
  $.ajax({
    url: "./adminView/viewAllProducts.php",
    method: "post",
    data: { record: 1 },
    success: function (data) {
      $(".allContent-section").html(data);
    },
  });
}
function showDesc() {
  $.ajax({
    url: "./adminView/viewAllDesc.php",
    method: "post",
    data: { record: 1 },
    success: function (data) {
      $(".allContent-section").html(data);
    },
  });
}
function showCategory() {
  $.ajax({
    url: "./adminView/viewCategories.php",
    method: "post",
    data: { record: 1 },
    success: function (data) {
      $(".allContent-section").html(data);
    },
  });
}
function showKaryakarini() {
  $.ajax({
    url: "./adminView/viewKaryakarini.php",
    method: "post",
    data: { record: 1 },
    success: function (data) {
      $(".allContent-section").html(data);
    },
  });
}
function showDayitv() {
  $.ajax({
    url: "./adminView/viewDayitv.php",
    method: "post",
    data: { record: 1 },
    success: function (data) {
      $(".allContent-section").html(data);
    },
  });
}
function showSizes() {
  $.ajax({
    url: "./adminView/viewSizes.php",
    method: "post",
    data: { record: 1 },
    success: function (data) {
      $(".allContent-section").html(data);
    },
  });
}
function showProductSizes() {
  $.ajax({
    url: "./adminView/viewProductSizes.php",
    method: "post",
    data: { record: 1 },
    success: function (data) {
      $(".allContent-section").html(data);
    },
  });
}
function showKaryakarini_data() {
  $.ajax({
    url: "./adminView/viewKaryakariniData.php",
    method: "post",
    data: { record: 1 },
    success: function (data) {
      $(".allContent-section").html(data);
    },
  });
}

function showCustomers() {
  $.ajax({
    url: "./adminView/viewCustomers.php",
    method: "post",
    data: { record: 1 },
    success: function (data) {
      $(".allContent-section").html(data);
    },
  });
}

function showOrders() {
  $.ajax({
    url: "./adminView/viewAllOrders.php",
    method: "post",
    data: { record: 1 },
    success: function (data) {
      $(".allContent-section").html(data);
    },
  });
}

function ChangeOrderStatus(id) {
  $.ajax({
    url: "./controller/updateOrderStatus.php",
    method: "post",
    data: { record: id },
    success: function (data) {
      alert("Order Status updated successfully");
      $("form").trigger("reset");
      showOrders();
    },
  });
}

function ChangePay(id) {
  $.ajax({
    url: "./controller/updatePayStatus.php",
    method: "post",
    data: { record: id },
    success: function (data) {
      alert("Payment Status updated successfully");
      $("form").trigger("reset");
      showOrders();
    },
  });
}

//add product data
function addItems() {
  var p_name = $("#p_name").val();
  var p_desc = $("#p_desc").val();
  var p_price = $("#p_price").val();
  var category = $("#category").val();
  var upload = $("#upload").val();
  var file = $("#file")[0].files[0];

  var fd = new FormData();
  fd.append("p_name", p_name);
  fd.append("p_desc", p_desc);
  fd.append("p_price", p_price);
  fd.append("category", category);
  fd.append("file", file);
  fd.append("upload", upload);
  $.ajax({
    url: "./controller/addItemController.php",
    method: "post",
    data: fd,
    processData: false,
    contentType: false,
    success: function (data) {
      alert("Product Added successfully.");
      $("form").trigger("reset");
      showProductItems();
    },
  });
}

//edit product data
function itemEditForm(id) {
  $.ajax({
    url: "./adminView/editItemForm.php",
    method: "post",
    data: { record: id },
    success: function (data) {
      $(".allContent-section").html(data);
    },
  });
}

//update product after submit
function updateItems() {
  var product_id = $("#product_id").val();
  var p_name = $("#p_name").val();
  var p_desc = $("#p_desc").val();
  var p_price = $("#p_price").val();
  var category = $("#category").val();
  var existingImage = $("#existingImage").val();
  var newImage = $("#newImage")[0].files[0];
  var fd = new FormData();
  fd.append("product_id", product_id);
  fd.append("p_name", p_name);
  fd.append("p_desc", p_desc);
  fd.append("p_price", p_price);
  fd.append("category", category);
  fd.append("existingImage", existingImage);
  fd.append("newImage", newImage);

  $.ajax({
    url: "./controller/updateItemController.php",
    method: "post",
    data: fd,
    processData: false,
    contentType: false,
    success: function (data) {
      alert("Data Update Success.");
      $("form").trigger("reset");
      showProductItems();
    },
  });
}

//delete product data
function itemDelete(id) {
  $.ajax({
    url: "./controller/deleteItemController.php",
    method: "post",
    data: { record: id },
    success: function (data) {
      alert("Items Successfully deleted");
      $("form").trigger("reset");
      showProductItems();
    },
  });
}

//add Description Data
function addDesc() {
  var desc_info = $("#desc_info").val();
  var category = $("#category").val();
  var upload = $("#upload").val();
  var file = $("#file")[0].files[0];

  var fd = new FormData();
  fd.append("desc_info", desc_info);
  fd.append("category", category);
  fd.append("file", file);
  fd.append("upload", upload);
  $.ajax({
    url: "./controller/addDescController.php",
    method: "post",
    data: fd,
    processData: false,
    contentType: false,
    success: function (data) {
      alert("Data Added successfully.");
      $("form").trigger("reset");
      showDesc();
    },
  });
}

//edit Desciption Data
function descEditForm(id) {
  $.ajax({
    url: "./adminView/editDescForm.php",
    method: "post",
    data: { record: id },
    success: function (data) {
      $(".allContent-section").html(data);
    },
  });
}

//update Description after submit
function updateDesc() {
  var desc_id = $("#desc_id").val();
  var desc_info = $("#desc_info").val();
  var category = $("#category").val();
  var existingImage = $("#existingImage").val();
  var newImage = $("#newImage")[0].files[0];
  var fd = new FormData();
  fd.append("desc_id", desc_id);
  fd.append("desc_info", desc_info);
  fd.append("category", category);
  fd.append("existingImage", existingImage);
  fd.append("newImage", newImage);

  $.ajax({
    url: "./controller/updateDescController.php",
    method: "post",
    data: fd,
    processData: false,
    contentType: false,
    success: function (data) {
      alert("Data Update Success.");
      $("form").trigger("reset");
      showDesc();
    },
  });
}

//delete Description data
function descDelete(id) {
  $.ajax({
    url: "./controller/deleteDescController.php",
    method: "post",
    data: { record: id },
    success: function (data) {
      alert("Description Successfully deleted");
      $("form").trigger("reset");
      showDesc();
    },
  });
}

//delete cart data
function cartDelete(id) {
  $.ajax({
    url: "./controller/deleteCartController.php",
    method: "post",
    data: { record: id },
    success: function (data) {
      alert("Cart Item Successfully deleted");
      $("form").trigger("reset");
      showMyCart();
    },
  });
}

function eachDetailsForm(id) {
  $.ajax({
    url: "./view/viewEachDetails.php",
    method: "post",
    data: { record: id },
    success: function (data) {
      $(".allContent-section").html(data);
    },
  });
}

//delete category data
function categoryDelete(id) {
  $.ajax({
    url: "./controller/catDeleteController.php",
    method: "post",
    data: { record: id },
    success: function (data) {
      alert("Category Successfully deleted");
      $("form").trigger("reset");
      showCategory();
    },
  });
}

//delete karyakarini data
function karyakariniDelete(id) {
  $.ajax({
    url: "./controller/karDeleteController.php",
    method: "post",
    data: { record: id },
    success: function (data) {
      alert("Karyakarini Position Successfully Deleted");
      $("form").trigger("reset");
      showKaryakarini();
    },
  });
}

//delete dayitv data
function dayitvDelete(id) {
  $.ajax({
    url: "./controller/dayDeleteController.php",
    method: "post",
    data: { record: id },
    success: function (data) {
      alert("Dayitv Successfully Deleted");
      $("form").trigger("reset");
      showDayitv();
    },
  });
}

//delete size data
function sizeDelete(id) {
  $.ajax({
    url: "./controller/deleteSizeController.php",
    method: "post",
    data: { record: id },
    success: function (data) {
      alert("Size Successfully deleted");
      $("form").trigger("reset");
      showSizes();
    },
  });
}

//delete variation data
function variationDelete(id) {
  $.ajax({
    url: "./controller/deleteVariationController.php",
    method: "post",
    data: { record: id },
    success: function (data) {
      alert("Successfully deleted");
      $("form").trigger("reset");
      showProductSizes();
    },
  });
}

//edit variation data
function variationEditForm(id) {
  $.ajax({
    url: "./adminView/editVariationForm.php",
    method: "post",
    data: { record: id },
    success: function (data) {
      $(".allContent-section").html(data);
    },
  });
}

//update variation after submit
function updateVariations() {
  var v_id = $("#v_id").val();
  var product = $("#product").val();
  var size = $("#size").val();
  var qty = $("#qty").val();
  var fd = new FormData();
  fd.append("v_id", v_id);
  fd.append("product", product);
  fd.append("size", size);
  fd.append("qty", qty);

  $.ajax({
    url: "./controller/updateVariationController.php",
    method: "post",
    data: fd,
    processData: false,
    contentType: false,
    success: function (data) {
      alert("Update Success.");
      $("form").trigger("reset");
      showProductSizes();
    },
  });
}

//delete Karyakarini Details data
function kdDelete(id) {
  $.ajax({
    url: "./controller/deleteKDController.php",
    method: "post",
    data: { record: id },
    success: function (data) {
      alert("Successfully deleted");
      $("form").trigger("reset");
      showKaryakarini_data();
    },
  });
}

//edit Karyakarini Details data
function kdEditForm(id) {
  $.ajax({
    url: "./adminView/editKDForm.php",
    method: "post",
    data: { record: id },
    success: function (data) {
      $(".allContent-section").html(data);
    },
  });
}

//update Karyakarini Details after submit
function updateKD() {
  var kd_id = $("#kd_id").val();
  var karyakarini = $("#karyakarini").val();
  var dayitv = $("#dayitv").val();
  var kname = $("#kname").val();
  var mobile = $("#mobile").val();
  var fd = new FormData();
  fd.append("kd_id", kd_id);
  fd.append("karyakarini", karyakarini);
  fd.append("dayitv", dayitv);
  fd.append("kname", kname);
  fd.append("mobile", mobile);

  $.ajax({
    url: "./controller/updateKDController.php",
    method: "post",
    data: fd,
    processData: false,
    contentType: false,
    success: function (data) {
      alert("Update Success.");
      $("form").trigger("reset");
      showKaryakarini_data();
    },
  });
}

function search(id) {
  $.ajax({
    url: "./controller/searchController.php",
    method: "post",
    data: { record: id },
    success: function (data) {
      $(".eachCategoryProducts").html(data);
    },
  });
}

function quantityPlus(id) {
  $.ajax({
    url: "./controller/addQuantityController.php",
    method: "post",
    data: { record: id },
    success: function (data) {
      $("form").trigger("reset");
      showMyCart();
    },
  });
}
function quantityMinus(id) {
  $.ajax({
    url: "./controller/subQuantityController.php",
    method: "post",
    data: { record: id },
    success: function (data) {
      $("form").trigger("reset");
      showMyCart();
    },
  });
}

function checkout() {
  $.ajax({
    url: "./view/viewCheckout.php",
    method: "post",
    data: { record: 1 },
    success: function (data) {
      $(".allContent-section").html(data);
    },
  });
}

function removeFromWish(id) {
  $.ajax({
    url: "./controller/removeFromWishlist.php",
    method: "post",
    data: { record: id },
    success: function (data) {
      alert("Removed from wishlist");
    },
  });
}

function addToWish(id) {
  $.ajax({
    url: "./controller/addToWishlist.php",
    method: "post",
    data: { record: id },
    success: function (data) {
      alert("Added to wishlist");
    },
  });
}
