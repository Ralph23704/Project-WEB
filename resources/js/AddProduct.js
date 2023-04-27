let panier = [];

const form = document.querySelector('form');
form.addEventListener('submit', ajouterAuPanier);

function ajouterAuPanier(event) {
    event.preventDefault();

    const category = document.querySelector('#category').value;
    const name = document.querySelector('#name').value;
    const description = document.querySelector('#description').value;
    const price = document.querySelector('#price').value;
    const images = document.querySelector('#image').files;

    const produit = {
        category,
        name,
        description,
        price,
        images
    };

    panier.push(produit);

    const cartSummary = document.querySelector('#cart-summary');
    cartSummary.innerHTML = '<h2>Récapitulatif du panier</h2>';

    if (panier.length === 0) {
        cartSummary.innerHTML += '<p>Aucun produit ajouté pour le moment</p>';
    } else {
        const ul = document.createElement('ul');
        for (let produit of panier) {
            const li = document.createElement('li');
            li.textContent = produit.name;
            ul.appendChild(li);
        }
        cartSummary.appendChild(ul);
    }

    alert('Le produit a été ajouté au panier !');
}
// Get the price input element
const priceInput = document.getElementById("price");

// Get the plus and minus buttons for the price input
const plusBtn = document.getElementById("price-plus");
const minusBtn = document.getElementById("price-minus");

// Add click event listeners to the plus and minus buttons for the price input
plusBtn.addEventListener("click", () => {
    let price = parseFloat(priceInput.value);
    price += 1;
    priceInput.value = price.toFixed(0);
});

minusBtn.addEventListener("click", () => {
    let price = parseFloat(priceInput.value);
    price -= 1;
    priceInput.value = price.toFixed(0);
});

// Get the file input element
const fileInput = document.getElementById("image");

// Get the plus and minus buttons for the file input
const filePlusBtn = document.getElementById("file-plus");

// Add click event listeners to the plus and minus buttons for the file input
filePlusBtn.addEventListener("click", () => {
    fileInput.setAttribute("Multiple", "Multiple");
});

