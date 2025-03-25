{extends file="Main.tpl"}

{block name=content}

<h4>Witaj {$userObj->login}</h4>
<h4>Twoje uprawnienia w systemie to {$userObj->role}</h4>

<div class="bottom-margin">
    {if \core\RoleUtils::inRole("projectManager") OR \core\RoleUtils::inRole("admin")}
    {else}
        <form action="{$conf->action_root}calcNew">
            <input class="button pure-button" type="submit" value="Nowe obliczenia" />
        </form>
    {/if}
</div>

<div class="bottom-margin">
<form class="pure-form pure-form-stacked" action="{$conf->action_url}calcList">
    <legend>Wyszukiwanie wyników</legend>
    <div class="row">
        <div class="col-3">
            <fieldset>
                <input type="text" placeholder="wpisz płyn" name="calcSearch" value="{$searchForm->calcSearch}" /><br />
                <button class="button pure-button" type="submit">Szukaj</button>
            </fieldset>
        </div>	
    </div>	
</form>
</div>	

<h3>Lista wyników obliczeń</h3>


<div class="row">
<div class="off-0">
<table id="calc" class="pure-table pure-table-bordered">
<thead>
    <tr>
        <th>Autor</th>
        <th>Płyn</th>
        <th>Gatunek stali</th>
        <th>Średnica</th>
        <th>Grubość ścianki</th>
        <th>Najmniejsza grubość</th>
        <th>Wytrzymałość złącza</th>
        <th>Naddatek na korozje</th>
        <th>Pocienienie ścianki</th>
        <th>Tolerancja ścianki</th>
        <th>Naprężęnia projektowe</th>
        <th>Opcje</th>
    </tr>
</thead>

{foreach $calculation as $c}
    {strip}
        <tr>
            <td>{$c["login"]}</td>
            <td>{$c["fluid"]} ({$c["cisObliczeniowe"]} bar, {$c["tempObliczeniowa"]} °C)</td>
            <td>{$c["gatunek"]}</td>
            <td>{$c["real"]}</td>
            <td>{$c["wallThickness"]}</td>
            <td>{$c["najmniejszaGrubosc"]}</td>
            <td>{$c["wytrzymaloscZlacza"]}</td>
            <td>{$c["korozja"]}</td>
            <td>{$c["pocienienie"]}</td>
            <td>{$c["tolerancjaScianki"]}</td>
            <td>{$c["naprezeniaProjektowe"]}</td>
            <td>
                {if \core\RoleUtils::inRole("projectManager") OR \core\RoleUtils::inRole("admin")}
                    Brak opcji
                {else}

                    {if ({$userObj->login} == $c["login"]) OR \core\RoleUtils::inRole("expert")}
                    <a class="button-small pure-button button-secondary" href="{$conf->action_url}calcEdit/{$c['idcalulations']}">Edytuj</a>
                    &nbsp;
                    <a class="button-small pure-button button-warning"
                        onclick="confirmLink('{$conf->action_url}calcDelete/{$c['idcalulations']}','Czy na pewno usunąć obliczenia?')">Usuń</a>
                    {/if}
                    &nbsp;
                    {if \core\RoleUtils::inRole("expert")}
                        <a class="button-small pure-button button-secondary" href="{$conf->action_url}ownerEdit/{$c['idcalulations']}">Właściciel</a>
                    {/if}

                {/if}
            </td>
        </tr>
    {/strip}
    {/foreach}
</table>

</div>	
</div>	

{/block}