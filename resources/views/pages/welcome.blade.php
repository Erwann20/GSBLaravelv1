

@extends('layouts.app', ['title' => 'Connexion'])

@section('content')

Bonjour frero : {{ $sesionLogin}}

	 <div class="container-fluid">
	<div class="row">
		<div class="col-md-6">
			<div class="jumbotron">
				<h2>
					Practiciens
				</h2>
				<p>
					Cet page vous permettera de voir tous les practiciens de GSB
				</p>
				<p>
					<a class="btn btn-primary btn-large" href="practiciens.php">Voir plus</a>
				</p>
			</div>
		</div>
		<div class="col-md-6">
			<div class="jumbotron">
				<h2>
					Medicaments
				</h2>
				<p>
					Cet page vous permettera de voir tout les medicaments que nous avons
				</p>
				<p>
					<a class="btn btn-primary btn-large" href="medicament.php">Voir plus</a>
				</p>
			</div>
		</div>
	</div>
</div>

@stop


@section('contentOnline')
<div class="row">
 	<div class="col-md-6">
			<div class="jumbotron">
				<h2>
					Compte-rendus
				</h2>
				<p>
					Vous voulez faire des compte-rendus pour vos rendez vous ? c'est par ici ! 
				</p>
				<p>
					<a class="btn btn-primary btn-large" href="compte-rendus.php">Voir plus</a>
				</p>
			</div>
		</div>
		<div class="col-md-6">
			<div class="jumbotron">
				<h2>
					Visiteurs
				</h2>
				<p>
					Cette page vous permettera de voir tout les visiteurs de l'entreprise GSB
				</p>
				<p>
					<a class="btn btn-primary btn-large" href="visiteurs.php">Voir plus</a>
				</p>
			</div>
		</div>
	</div>
	
    

@stop
