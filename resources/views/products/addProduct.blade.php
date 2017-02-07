<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Ajouter un produit</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
</head>
<body>
	<form action="/products/addProduct" method="POST">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="form-group">
			<label for="name">Nom du produit : </label>
			<input id="name" type="text" name="name">
		</div>

		<div class="form-group">
			<label for="price">Prix du produit en cents: </label>
			<input id="price" type="text" name="price">
		</div>

		<div class="form-group">
		<label for="stock">Nb de produits:</label>
		<input id="stock" type="text" name="stock">
		</div>

		<input type="submit" class="btn btn-success" value="Ajouter le produit">

	</form>
</body>
</html>