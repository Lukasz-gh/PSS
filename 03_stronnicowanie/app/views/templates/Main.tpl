<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
	<meta charset="utf-8"/>
	<title>Aplikacja bazodanowa</title>
	<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css"
		integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
	<link rel="stylesheet" href="{$conf->app_url}/css/main.css">
</head>

<body style="margin: 20px;">
	<nav id="nav" >
			<ul class="container">
				{if count($conf->roles)>0}
				{if \core\RoleUtils::inRole("admin")}
					<li><a href="{$conf->action_root}userList">Użytkownicy</a></li>
				{/if}
				<li><a href="{$conf->action_root}fluidListPa?page=1">Płyny</a></li>
				<li><a href="{$conf->action_root}calc">Wyniki</a></li>
				{if \core\RoleUtils::inRole("projectManager") OR \core\RoleUtils::inRole("admin")}
				{else}
					<li><a href="{$conf->action_root}calcNew">Obliczenia</a></li>
				{/if}
				<li><a href="{$conf->action_root}catList">Katalogi</a></li>
				<li><a href="{$conf->action_root}logout">Wyloguj</a>
				{else}	
					<a href="{$conf->action_root}loginShow">Zaloguj</a>
				{/if}</li>
			</ul>
	</nav>

	<div class="content">
		{block name=content}
			Domyślna treść zawartości ....
		{/block}
	</div>

	<article class="wrapper style3">
	{block name=messages}
		{if $msgs->isMessage()}
		<div>
			<ul>
			{foreach $msgs->getMessages() as $msg}
			{strip}
				<li class="msg {if $msg->isError()}error{/if} {if $msg->isWarning()}warning{/if} {if $msg->isInfo()}info{/if}">{$msg->text}</li>
			{/strip}
			{/foreach}
			</ul>
		</div>
		{/if}
	{/block}
	</article>

	<article class="wrapper style4">
		<div class="footer">
			<p>
				{block name=footer}Przykładowa tresć stopki wpisana do szablonu aplikacji{/block}
			</p>
	
			<ul id="copyright">
				<li>&copy; Untitled</li><li>Widok oparty na stylu z <a href="https://html5up.net/" target="_blank">Html5up</a>.</li>
			</ul>
		</div>
	
	</article>

</body>
</html>