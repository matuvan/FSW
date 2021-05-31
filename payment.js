var remove = document.getElementsByClassName('removeitem')
for (var i =0;i < remove.length; i++) {
    var button =remove[i]
    button.addEventListener('click', removecartitem)
}

var quantity = document.getElementsByClassName('quantityinput')
for (var i =0;i < quantity.length; i++) {
    var input = quantity[i]
    input.addEventListener('change', quantitynumber)
}

function quantitynumber(ev) {
    var input = ev.target
    if (isNaN(input.value) || input.value <=0) {
        input.value = 1
    }
    updatetotal()
}

function removecartitem(ev) {
    var buttonclicked = ev.target
    buttonclicked.parentElement.parentElement.remove()
    updatetotal()
}

function updatetotal() {
    var cartItem = document.getElementsByClassName('cartitems')[0]
    var cartRows = cartItem.getElementsByClassName('cartrow')
    var total = 0
    var discount  = document.getElementById('char')
    for (var i =0;i < cartRows.length; i++) {
        var cartRow = cartRows[i]
        var priceElement = cartRow.getElementsByClassName('cartprice')[0]
        var quantityElement = cartRow.getElementsByClassName('quantityinput')[0]
        var price = parseFloat(priceElement.innerText.replace('$',''))
        var quantity = quantityElement.value
        total =total + (price * quantity)
        
    }
    total = Math.round(total *100)/100

        document.getElementsByClassName('carttotalprice')[0].innerText = '$' + total
    
}

function afterdiscount(){
    var discount = document.getElementsByClassName
}