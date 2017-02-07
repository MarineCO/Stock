<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Liste des produits</title>
</head>
<body>
	<h1>Liste des produits</h1>

	<table>

		<tr>
			<td>Id du produit</td>
			<td>Nom du produit</td>
			<td>Prix du produit</td>
			<td>Etat du stock</td>
		</tr>

		@foreach ($products as $product)
			
			<tr>
				<td>{{ $product->id }}</td>
				<td>{{ $product->name }}</td>
				<td>{{ $product->price }} €</td>
				<td>{{ $product->stock }}</td>
			</tr>

		@endforeach

	</table>

</body>
</html>