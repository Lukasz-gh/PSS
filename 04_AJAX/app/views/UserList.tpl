{extends file="Main.tpl"}

{block name=content}

    <div class="bottom-margin">
        <form action="{$conf->action_root}userNew">
            <input class="button pure-button" type="submit" value="Nowy użytkownik" />
        </form>
    </div>	

    <div class="bottom-margin">
    <form class="pure-form pure-form-stacked" action="{$conf->action_url}userList">
        <legend>Wyszukiwanie użytkownika</legend>
		<div class="row">
			<div class="col-3">
                <fieldset>
                    <input type="text" placeholder="wpisz login" name="loginSearch" value="{$searchForm->loginSearch}" /><br />
                    <button class="button pure-button" type="submit">Szukaj</button>
                </fieldset>
		    </div>
		</div>
    </form>
    </div>	

    <div>
    <h4>Lista użytkowników systemu</h4>

    <div class="row">
    <div class="off-0">
    <table id="tab_people" class="pure-table pure-table-bordered" >
    <thead>
        <tr>
            <th>Login</th>
            <th>Rola</th>
            <th>Aktywny</th>
            <th>Opcje</th>
        </tr>
    </thead>

    {foreach $people as $p}
        {strip}
            <tr>
                <td>{$p["login"]}</td>
                <td>{$p["roles"]}</td>
                <td>{if $p["active"] == 2} Tak {else} Nie {/if}</td>
                <td>
                    <a class="button-small pure-button button-secondary" href="{$conf->action_url}userEdit/{$p['idusers']}">Edytuj</a>
                    &nbsp;
                    <a class="button-small pure-button button-warning" href="{$conf->action_url}userDelete/{$p['idusers']}">Usuń</a>
                </td>
            </tr>
        {/strip}
    {/foreach}
    </table>

    </div>
    </div>

{/block}