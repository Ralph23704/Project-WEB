@extends('layouts.app')
@section('content')
    @vite(['resources/css/AddProduct.css','resources/js/AddProduct.js'])
<body>
<main>
    <aside id="cart-summary">
        <p>AJOUTER UN PRODUIT</p>
        <p>DE VOTRE CHOIX</p>
    </aside>
    <section id="product-form">
        <form> <label for="category">Choisir une catégorie</label> <select id="category" name="category">
                <option value="1">Catégorie 1</option>
                <option value="2">Catégorie 2</option>
                <option value="3">Catégorie 3</option>
            </select> <label for="name">Entrez le nom de votre produit</label> <input type="text" id="name"
                                                                                      name="name"> <label for="description">Entrez une description de
                votre produit</label> <textarea id="description" name="description"></textarea>
            <label for="price">Insérez le prix de votre produit(FCFA)</label>
            <div class="input-group">
                <input type="text" id="price" name="price" value="0">
                <button type="button" id="price-plus">+</button>
                <button type="button" id="price-minus">-</button>
            </div>

            <label for="image">Insérez une image de votre produit</label>
            <div class="input-group">
                <input type="file" id="image" name="image" single>
                <button type="button" id="file-plus">+</button>
            </div>
        </form>
    </section>
</main> <button type="submit" style="text-align: center;"><b>Valider</b></button>
</body>
@endsection
