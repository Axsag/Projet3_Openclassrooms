<link href="public/css/child.theme.css" rel="stylesheet">
<link
	href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css"
	rel="stylesheet" id="bootstrap-css">
<script
	src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<link
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css"
	rel='stylesheet' type='text/css'>

<div class="container">

	<div class="row">

		
		<div class="col-md-10 col-md-offset-1">

			<div class="panel panel-default panel-table">

				<a href="index.php?action=listPosts"><button type="button"
						class="btn btn-sm btn-primary btn-create">Accueil</button></a>

				<div class="panel-heading">
					<div class="row">
						<div class="col col-xs-6">
							<h3 class="panel-title">Modifier/supprimer un article</h3>

						</div>
					</div>
				</div>
				<div class="panel-body">
					<table class="table table-striped table-bordered table-list">
						<thead>
							<tr>
								<th>titre</th>
								<th>contenu</th>
							</tr>
						</thead>
<?php echo $adminBillet;?>
</table>

				</div>
				<div class="panel-footer"></div>
			</div>

		</div>
	</div>
</div>
