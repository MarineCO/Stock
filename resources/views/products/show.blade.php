<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Caractéristique d'un produit de la liste</title>
</head>
<body>
	<h1>Caractéristique du produit : {{ $produit->name }}</h1>
	
	<ul>
		<li>Id : {{ $produit->id }}</li>
		<!-- Price in cents in DB -> /100 -->
		<li>Prix : {{ $produit->price / 100 }} €</li>
		<li>Stock actuel : 
			<form action="/products/sell/{{ $produit->id }}" method="POST">{{csrf_field()}}
			<button>-</button>
			<div>{{ $produit->stock }}</div>
			</form>
			<form action="/products/restock/{{ $produit->id }}" method="POST">{{csrf_field()}}
			<button>+</button>
			</form>
		</li>
	</ul>



</body>
</html>