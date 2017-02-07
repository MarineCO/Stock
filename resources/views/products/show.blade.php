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
		<li>Prix : {{ $produit->price }} €</li>
		<li>Stock actuel : {{ $produit->stock }}</li>
	</ul>

</body>
</html>