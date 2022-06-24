var shoppinglist = document.getElementById('idshop');

window.onclick = function(event) {
    if (event.target == shoppinglist) {
        shoppinglist.style.display = "none";
    }
}

var orderlist = document.getElementById('order');

window.onclick = function(event) {
    if (event.target == orderlist) {
        orderlist.style.display = "none";
    }
}