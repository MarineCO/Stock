<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Editer le produit sélectionné :</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
</head>
<body>
r
	<h1>Editer le produit sélectionné</h1>

	<form action="/products/editProduct/{{$editProduct->id}}" method="POST">
		{{ method_field('PUT') }}
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<div class="form-group">
			<label for="name">Nom du produit : </label>
			<input id="name" type="text" name="name" value="{{$editProduct->name}}">
		</div>

		<div class="form-group">
			<label for="price">Prix du produit en cents: </label>
			<input id="price" type="text" name="price" value="{{$editProduct->price}}">
		</div>

		<div class="form-group">
			<label for="stock">Nb de produits:</label>
			<input id="stock" type="text" name="stock" value="{{$editProduct->stock}}">
		</div>

		<input type="submit" class="btn btn-success" value="Editer le produit">
	</form>

</body>
</html>
