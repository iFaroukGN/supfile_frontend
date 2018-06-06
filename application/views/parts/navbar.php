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
			<div class="navbar-brand">
				<label>SUPFILE</label>
			</div>
			<div class="nav-item dropdown">
				<button class="btn btn-secondary dropdown-toggle" type="button" id="Profil" data-toggle="dropdown"
						aria-haspopup="true" aria-expanded="false">
					<?php print_r(get_cookie('auth')); ?>
<!--					--><?php //print_r(get_cookie('token')); ?>
				</button>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="Profil">
					<a class="dropdown-item" href="<?php echo base_url() ?>index.php/Authentification/logOut">Log
						out</a>
				</div>
			</div>

		</div>
	</header>
	<main class="col-md-12">
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
