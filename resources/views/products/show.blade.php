<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
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

		<button id="sell" data-id="{{ $produit->id }}" class="btn btn-primary">-</button>
		<h4 id="stock">{{ $produit->stock }}</h4>	
		<button id="restock" data-id="{{ $produit->id }}" class="btn btn-primary">+</button>
	</div>

	<script type="text/javascript" src="{{mix('/js/app.js')}}"></script>
</body>
</html>