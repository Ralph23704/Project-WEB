// Récupération des éléments HTML
const decreaseBtn = document.getElementById("decrease-quantity");
const increaseBtn = document.getElementById("increase-quantity");
const productQuantity = document.getElementById("product-quantity");
const addToCartBtn = document.getElementById("add-to-cart");
const buyNowBtn = document.getElementById("buy-now");

// Évènement du bouton "Decrease quantity"
decreaseBtn.addEventListener("click", () => {
    let quantity = parseInt(productQuantity.textContent);

    if (quantity > 1) {
        quantity--;
        productQuantity.textContent = quantity;
    }
});

// Évènement du bouton "Increase quantity"
increaseBtn.addEventListener("click", () => {
    let quantity = parseInt(productQuantity.textContent);
    let quantityLeft = parseInt(document.getElementById("quantity-left").textContent);

    if (quantity < quantityLeft) {
        quantity++;
        productQuantity.textContent = quantity;
    }
});

// Évènement du bouton "Add to cart"
addToCartBtn.addEventListener("click", () => {
    let quantity = parseInt(productQuantity.textContent);
    let quantityLeft = parseInt(document.getElementById("quantity-left").textContent);

    if (quantity <= quantityLeft) {
        // Ajouter le produit au panier
        alert("Le produit a été ajouté au panier !");
    } else {
        alert("La quantité demandée est supérieure à la quantité disponible !");
    }
});

// Évènement du bouton "Buy now"
buyNowBtn.addEventListener("click", () => {
    let quantity = parseInt(productQuantity.textContent);
    let quantityLeft = parseInt(document.getElementById("quantity-left").textContent);

    if (quantity <= quantityLeft) {
        // Rediriger vers la page de paiement
        alert("Redirection vers la page de paiement...");
    } else {
        alert("La quantité demandée est supérieure à la quantité disponible !");
    }
});
