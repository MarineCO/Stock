<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Caractéristique d'un produit de la liste</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
</head>
<body>
	<h1>Caractéristique du produit : {{ $produit->name }}</h1>
	
	<ul>
		<li>Id : {{ $produit->id }}</li>
		<!-- Price in cents in DB -> /100 -->
		<li>Prix : {{ $produit->price / 100 }} €</li> 
	</ul>
	<h3>Etat du stock actuel : </h3>
	<div>
		<form action="/products/sell/{{ $produit->id }}" method="POST">{{csrf_field()}}
			<button class="btn btn-primary">-</button>
			<H4>{{ $produit->stock }}</h4>
		</form>
		<form action="/products/restock/{{ $produit->id }}" method="POST">{{csrf_field()}}
			<button class="btn btn-primary">+</button>
		</form>
	</div>

</body>
</html>