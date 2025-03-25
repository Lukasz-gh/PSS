{extends file="Main.tpl"}

{block name=content}

<article id="contact" class="wrapper style2">
	<div class="container medium">

		<h2>Witaj w aplikacji do obliczeń grubości ścianek rurociągów</h2>
		<header>
			<h3>Wprowadź swoje dane</h3>
		</header>
		<div class="row">
			<div class="off-4" >
				<form action="{$conf->action_url}login" method="post" class="form">
						<label for="id_login">Login</label>
						<input id="id_login" type="text" placeholder="Login" name="login" />

						<label for="id_pass">Hasło</label>
						<input id="id_pass" type="password" placeholder="Hasło" name="pass" />

						<button type="submit">Zaloguj</button>
				</form>
			</div>
		</div>
	</div>

</article>

{/block}