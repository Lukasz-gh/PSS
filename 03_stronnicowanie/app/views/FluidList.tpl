{extends file="Main.tpl"}

{block name=content}

    {if \core\RoleUtils::inRole("expert")}
    <div class="bottom-margin">
        {if \core\RoleUtils::inRole("projectManager")}
        {else}
        <form action="{$conf->action_root}fluidNew">
            <input class="button pure-button" type="submit" value="Nowy płyn" />
        </form>
        {/if}
    </div>	
    {/if}

    <div class="bottom-margin">
    <form class="pure-form pure-form-stacked" action="{$conf->action_url}fluidList">
        <legend>Wyszukiwanie płynu</legend>
        <div class="row">
            <div class="col-3">
                <fieldset>
                    <input type="text" placeholder="wpisz płyn" name="fluidSearch" value="{$searchForm->fluidSearch}" /><br />
                    <button class="button pure-button" type="submit">Szukaj</button>
                </fieldset>
            </div>
        </div>                
    </form>
    </div>	

    <h3>Lista płynów w projekcie</h3>

    <div class="row">
    <div class="off-0">

    <table id="tab_fluids" class="pure-table pure-table-bordered">
    <thead>
        <tr>
            <th>Płyn</th>
            <th>Temperatura operacyjna</th>
            <th>Ciśnienie operacyjne</th>
            <th>Temperatura obliczeniowa</th>
            <th>Ciśnienie obliczeniowe</th>
            <th>Opcje</th>
        </tr>
    </thead>

    {foreach $fluids as $f}
        {strip}
            <tr>
                <td>{$f["fluid"]}</td>
                <td>{$f["tempOperacyjna"]}</td>
                <td>{$f["cisOperacyjne"]}</td>
                <td>{$f["tempObliczeniowa"]}</td>
                <td>{$f["cisObliczeniowe"]}</td>
                <td>
                    {if !\core\RoleUtils::inRole("expert")}
                        Brak opcji
                    {else}
                        <a class="button-small pure-button button-secondary" href="{$conf->action_url}fluidEdit/{$f['idfluids']}">Edytuj</a>
                        &nbsp;
                        <a class="button-small pure-button button-warning" href="{$conf->action_url}fluidDelete/{$f['idfluids']}">Usuń</a>
                    {/if}
                </td>
            </tr>
        {/strip}
    {/foreach}
    </table>

    <div class="bottom-margin">

        <th>
            {if $page <= 1}
                {$disabled = "disabled"}
            {else}
                {$disabled = ""}
            {/if}
            <a class="button-small pure-button button-secondary" {$disabled} name="page" href="{$conf->action_url}fluidList?fluidSearch={$searchForm->fluidSearch}&page=1">Pierwsza strona</a>
            &nbsp;
        </th>

        <th>
            {if $page <= 1}
                {$disabled = "disabled"}
            {else}
                {$disabled = ""}
            {/if}
            <a class="button-small pure-button button-secondary" {$disabled} name="page" href="{$conf->action_url}fluidList?fluidSearch={$searchForm->fluidSearch}&page={$page-1}">-1 Strona</a>
            &nbsp;
        </th>

        <th>
            Strona {$page} z {$pages}
            &nbsp;
        </th>

        <th>
            {if $page == $pages}
                {$disabled = "disabled"}
            {else}
                {$disabled = ""}
            {/if}
            <a class="button-small pure-button button-secondary" {$disabled} name="page" href="{$conf->action_url}fluidList?fluidSearch={$searchForm->fluidSearch}&page={$page+1}">+1 Strona</a>
            &nbsp;
        </th>

        <th>
            {if $page == $pages}
                {$disabled = "disabled"}
            {else}
                {$disabled = ""}
            {/if}
            <a class="button-small pure-button button-secondary" {$disabled} name="page" href="{$conf->action_url}fluidList?fluidSearch={$searchForm->fluidSearch}&page={$pages}">Ostatnia strona</a>
            &nbsp;
        </th>


    </div>	

    </div>
    </div>

{/block}