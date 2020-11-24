
// Add To Cart Action
function addToCart(id) {
  // Get Stroage Item
  let ary = JSON.parse(localStorage.getItem("items"));
  if (ary == null) {
    // Set Storage Item
    let itmArys = [id];
    localStorage.setItem("items", JSON.stringify(itmArys));
  } else {
    // Check Item exist or not
    let cond = ary.indexOf(id);
    if (cond == -1) {
      ary.push(id);
      localStorage.setItem("items", JSON.stringify(ary));
    }
  }
  let cartLength = document.querySelector("#cart-length");
  cartLength.innerHTML = getItems().length;
}

// Get Item Value
function getItems() {
  let ary = JSON.parse(localStorage.getItem("items"));
  // console.log(ary);
  return ary;
}

// Clear LoaclStorage
function clear() {
  localStorage.removeItem("items");
}
