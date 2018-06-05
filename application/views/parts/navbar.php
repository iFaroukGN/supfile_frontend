<?php
/**
 * Created by IntelliJ IDEA.
 * User: cedde
 * Date: 29/05/2018
 * Time: 11:14 AM
 */
?>
<div class="bmd-layout-container bmd-drawer-f-l bmd-drawer-overlay">
	<header class="bmd-layout-header">
		<div class="navbar navbar-light bg-faded">
			<button class="navbar-toggler" type="button" data-toggle="drawer" data-target="#dw-s1">
				<span class="sr-only">Toggle drawer</span>
				<i class="material-icons">menu</i>
			</button>
			<div class="nav-item dropdown">
				<button class="btn btn-secondary dropdown-toggle" type="button" id="Profil" data-toggle="dropdown"
						aria-haspopup="true" aria-expanded="false">
					<?php print_r(get_cookie('auth')); ?>
				</button>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="Profil">
					<a class="dropdown-item" href="<?php echo base_url() ?>index.php/Authentification/logOut">Log
						out</a>
				</div>
			</div>
		</div>
	</header>
	<div id="dw-s1" class="bmd-layout-drawer bg-faded">
		<header>
			<button type="button" class="btn btn-info">Nouveau</button>
		</header>
		<ul class="list-group">
			<a class="list-group-item">Link 1</a>
			<a class="list-group-item">Link 2</a>
			<a class="list-group-item">Link 3</a>
		</ul>
	</div>
	<!--</div>-->
	<main class="bmd-layout-content">
		<div class="container">
			<div class="col-md-12">
				<hr/>
				<div class="bmd-form-group bmd-collapse-inline pull-xs-right">
					<button class="btn bmd-btn-icon" for="search" data-toggle="collapse" data-target="#collapse-search"
							aria-expanded="false" aria-controls="collapse-search">
						<i class="material-icons">search</i>
					</button>
					<span id="collapse-search" class="collapse">
					<input class="form-control" type="text" id="search" placeholder="Rechercher dans Supfile">
				</span>
				</div>
			</div>
