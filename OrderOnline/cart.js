if (document.readyState == 'loading') { /* checks whether out document is loaded or not before we actual try to access differnt parts to it */
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}

function ready() {
    var removeCartItemButtons = document.getElementsByClassName('btn-danger')
    for (var i = 0; i < removeCartItemButtons.length; i++) {
        var button = removeCartItemButtons[i]
        button.addEventListener('click', removeCartItem) /* addEventListener Click is used when we click on smthng it do smthng in this it removes the items  */
    }

    var quantityInputs = document.getElementsByClassName('cart-quantity-input')
    for (var i = 0; i < quantityInputs.length; i++) {
        var input = quantityInputs[i]
        input.addEventListener('change', quantityChanged) /* change listener is used in order to input any times we chamges the value */
    }

    var addToCartButtons = document.getElementsByClassName('shop-item-button')
    for (var i = 0; i < addToCartButtons.length; i++) {
        var button = addToCartButtons[i]
        button.addEventListener('click', addToCartClicked)
    }


    document.getElementsByClassName('btn-purchase')[0].addEventListener('click', purchaseClicked)
}

function purchaseClicked(event) {
    var purchase = event.target
    var shopItem = purchase.parentElement.parentElemen
    var title = shopItem.getElementsByClassName('food-heading')[0].innerText
    purchaseitems(title)
    alert('Your cart is empty please add the items');
}

function purchaseitems(title) {
    var cartItems = document.getElementsByClassName('cart-items')[0]
    var cartItemNames = cartItems.getElementsByClassName('cart-item-title')
    for (var i = 0; i < cartItemNames.length; i++) {
        if (cartItemNames[i].innerText == title) {
            alert('Your order has been recorded '); /* checks whether it is added to the cart  */
        }
        return
    }
}

function removeCartItem(event) {
    var buttonClicked = event.target /* targets our event with the actual inputs we need  */
    buttonClicked.parentElement.parentElement.remove()
    updateCartTotal()
}

function quantityChanged(event) {
    var input = event.target /* targets our event with the actual inputs we need  */
    if (isNaN(input.value) || input.value <= 0) {
        input.value = 1
    }
    updateCartTotal()
}

function addToCartClicked(event) {
    var button = event.target
    var shopItem = button.parentElement.parentElement /* this will access the food-menu-desc class and its elements like food-heading , food-price... */
    var title = shopItem.getElementsByClassName('food-heading')[0].innerText
    var price = shopItem.getElementsByClassName('food-price')[0].innerText
    var imageSrc = shopItem.getElementsByClassName('img-responsive img-curve')[0].src /* since image do not have the text we use the source attributes */
    addItemToCart(title, price, imageSrc) /* creates the cart section  */
    updateCartTotal()
}

function addItemToCart(title, price, imageSrc) {
    var cartRow = document.createElement('div')
    cartRow.classList.add('cart-row') /* just adds the class cart-row to the list  */
    var cartItems = document.getElementsByClassName('cart-items')[0]
    var cartItemNames = cartItems.getElementsByClassName('cart-item-title')
    for (var i = 0; i < cartItemNames.length; i++) {
        if (cartItemNames[i].innerText == title) { /* checks whether it is added to the cart so that it dosen't add one more time */
            alert('This item is already added to the cart')
            return /* returns back to addItemtoCart function if it is not same */
        }
    }
    /* creating(adding)  new elements  to a cart section with image, title price */
    var cartRowContents = `
        <div class="cart-item cart-column">
            <img class="cart-item-image" src="${imageSrc}" width="100" height="100">
            <span class="cart-item-title">${title}</span>
        </div>
        <span class="cart-price cart-column">${price}</span>
        <div class="cart-quantity cart-column">
            <input class="cart-quantity-input" type="number" value="1">
            <button class="btn btn-danger" type="button">REMOVE</button>
        </div>`
    cartRow.innerHTML = cartRowContents
    cartItems.append(cartRow)
    cartRow.getElementsByClassName('btn-danger')[0].addEventListener('click', removeCartItem) /* removes the items from the list */
    cartRow.getElementsByClassName('cart-quantity-input')[0].addEventListener('change', quantityChanged) /* changes the quantity*/
}

function updateCartTotal() {
    var cartItemContainer = document.getElementsByClassName('cart-items')[0] /* cart-items[0] selects the very first element in the cart */
    var cartRows = cartItemContainer.getElementsByClassName('cart-row')
    var total = 0;
    for (var i = 0; i < cartRows.length; i++) {
        var cartRow = cartRows[i]
        var priceElement = cartRow.getElementsByClassName('cart-price')[0]
        var quantityElement = cartRow.getElementsByClassName('cart-quantity-input')[0]
        var price = parseFloat(priceElement.innerText.replace('$', ''))
            /* parseFloat returns every strings into the float number and replace function replaces the '$' into some space */
        var quantity = quantityElement.value /* value is used for gettings the value not the inner text , as inputs do not have the text inside it */
        total = total + (price * quantity)
    }
    total = Math.round(total * 100) / 100 /* rounds our total to the nearest two decimal places */
    document.getElementsByClassName('cart-total-price')[0].innerText = '$' + total
}