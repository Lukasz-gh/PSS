{extends file="Main.tpl"}

{block name=content}

    <h3>Zmiana właściciela obliczeń</h3>

    <div class="bottom-margin">
    <form action="{$conf->action_root}ownerSave" method="post" class="form">
        <fieldset>
        <div class="row">
		<div class="col-3">

            <div class="pure-control-group">
                <label for="idUser">Właściciel obliczeń</label>
                <select id="idUser" type="text" placeholder="idUser" name="idUser" value="{$form->idUser}">
                    {foreach $users as $user}
                        {if $user['idusers'] == {$form->idUser}}
                            {$selected = 'selected="selected"'}
                        {else}
                            {$selected = ""}
                        {/if}
                        {strip}
                            <option value="{$user['idusers']}" {$selected}>{$user['login']}</option>
                        {/strip}
                    {/foreach}
                </select> 
            </div>


            <div class="pure-controls">
                <input type="submit" class="button pure-button" value="Zapisz"/>
                <a class="button pure-button" href="{$conf->action_root}calcList">Powrót</a>
            </div>

        </div>
        </div>

        </fieldset>
        <input type="hidden" name="id" value="{$form->id}">
    </form>	
    </div>

{/block}