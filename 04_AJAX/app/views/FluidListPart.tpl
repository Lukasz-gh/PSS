<table class="pure-table pure-table-bordered">
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
                    <a class="button-small pure-button button-warning" 
                        onclick="confirmLink('{$conf->action_url}fluidDelete/{$f['idfluids']}','Czy na pewno usunąć płyn?')">Usuń</a>
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
    <a class="button-small pure-button button-secondary" {$disabled} name="page" onclick="ajaxPostForm('search-form','{$conf->action_root}fluidListPart?fluidSearch={$searchForm->fluidSearch}&page=1','tab_fluids');">Pierwsza strona</a>
    &nbsp;
</th>

<th>
    {if $page <= 1}
        {$disabled = "disabled"}
    {else}
        {$disabled = ""}
    {/if}
    <a class="button-small pure-button button-secondary" {$disabled} name="page" onclick="ajaxPostForm('search-form','{$conf->action_root}fluidListPart?fluidSearch={$searchForm->fluidSearch}&page={$page-1}','tab_fluids');">-1 Strona</a>
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
    <a class="button-small pure-button button-secondary" {$disabled} name="page" onclick="ajaxPostForm('search-form','{$conf->action_root}fluidListPart?fluidSearch={$searchForm->fluidSearch}&page={$page+1}','tab_fluids');">+1 Strona</a>
    &nbsp;
</th>

<th>
    {if $page == $pages}
        {$disabled = "disabled"}
    {else}
        {$disabled = ""}
    {/if}

    <a class="button-small pure-button button-secondary" {$disabled} name="page" onclick="ajaxPostForm('search-form','{$conf->action_root}fluidListPart?fluidSearch={$searchForm->fluidSearch}&page={$pages}','tab_fluids');">Ostatnia strona</a>
    &nbsp;
</th>

</div>	