<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Liste des produits</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
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

		@foreach ($produits as $product)

		<tr>
			<td>{{ $product->id }}</td>
			<td>{{ $product->name }}</td>
			<td>{{ $product->price / 100}} €</td>
			<td>{{ $product->stock }}</td>
			<td>
				<form action="/products/edit/{{$product->id}}" method="GET">{{csrf_field()}}
					<button class="btn btn-warning">Editer</button>
				</form>
			</td>
			<td>
				<form action="/products/delete/{{$product->id}}" method="POST">{{csrf_field()}}
				{{ method_field('DELETE') }}
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<button class="btn btn-danger">Supprimer</button>
				</form>
			</td>
		</tr>

		@endforeach
		
	</table>

	<form action="/products/add">
		<button class="btn btn-primary">Ajouter un produit</button>
	</form>
</body>
</html>