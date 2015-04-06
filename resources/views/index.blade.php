@extends('layouts.login')
@section('contenido')
				<!-- Header -->
					<div class="login" ><center>
						<h1>SICRE</h1>
						<p>Sistema Central de Reportes<p>
						</center></div>

<div class="login">
			<form action=""><center>
				<input type="text" placeholder="username" name="user"><br>
				<input type="password" placeholder="password" name="password"><br>
				<input type="button" value="Ingresa">
			</center></form>
			<p><a href="#">Olvidaste tu Contraseña?</a></p>
			<p><a href="#">Olvidaste tu Usuario?</a></p>
	</div>

<div>
						<nav>
							<ul>
								<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
								<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
								<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
							</ul>
						</nav>
</div>


@stop