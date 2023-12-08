function decreaseQuantity(button) {
  var quantityElement = button.parentNode.nextElementSibling;
  var currentQuantity = parseInt(quantityElement.value);
  if (currentQuantity > 1) {
    quantityElement.value = currentQuantity - 1;
  }
  updateTotalPrice();
}

// Hàm tăng số lượng
function increaseQuantity(button) {
  var quantityElement = button.parentNode.previousElementSibling;
  var currentQuantity = parseInt(quantityElement.value);
  quantityElement.value = currentQuantity + 1;
  updateTotalPrice();
}

// Hàm xóa sản phẩm
function removeProduct(button) {
  var row = button.parentNode.parentNode;
  row.parentNode.removeChild(row);
  updateTotalPrice();
}

// Hàm cập nhật tổng giá
function updateTotalPrice() {
  var productPrices = document.querySelectorAll(".product-price");
  var quantities = document.querySelectorAll(".quantity");
  var totalPriceElement = document.getElementById("total-price");
  var totalPrice = 0;

  for (var i = 0; i < productPrices.length; i++) {
    var price = parseFloat(productPrices[i].innerHTML.replace("$", ""));
    var quantity = parseInt(quantities[i].value);
    totalPrice += price * quantity;
  }

  totalPriceElement.innerHTML = "$" + totalPrice.toFixed(2);
}
