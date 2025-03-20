{extends file="Main.tpl"}

{block name=content}

    <h3>Wprowadź dane do obliczeń</h3>

    <div class="bottom-margin">
    <form action="{$conf->action_root}calcSave" method="post" class="form">
        <fieldset>

        <div class="row">
		<div class="col-3">

            <div class="pure-control-group">
                <label for="idfluids">Płyn</label>
                <select id="idfluids" type="text" placeholder="idfluids" name="idfluids" value="{$form->idfluids}">
                    <option value=""></option>
                    {foreach $fluids as $fluid}
                        {if $fluid['idfluids'] == {$form->idfluids}}
                            {$selected = 'selected="selected"'}
                        {else}
                            {$selected = ""}
                        {/if}
                        {strip}
                            <option value="{$fluid['idfluids']}" {$selected}>{$fluid['fluid']}</option>
                        {/strip}
                    {/foreach}
                </select> 
            </div>

            <div class="pure-control-group">
                <label for="idSteel">Gatunek stali</label>
                <select id="idSteel" type="text" placeholder="idSteel" name="idSteel" value="{$form->idSteel}">
                    <option value=""></option>
                    {foreach $steels as $steel}
                        {if $steel['idsteel'] == {$form->idSteel}}
                            {$selected = 'selected="selected"'}
                        {else}
                            {$selected = ""}
                        {/if}
                        {strip}
                            <option value="{$steel['idsteel']}" {$selected}>{$steel['gatunek']}</option>
                        {/strip}
                    {/foreach}
                </select> 
            </div>

            <div class="pure-control-group">
                <label for="idDiameer">Średnica</label>
                <select id="idDiameter" type="text" placeholder="idDiameter" name="idDiameter" value="{$form->idDiameter}">
                    <option value=""></option>
                    {foreach $diameters as $diameter}
                        {if $diameter['iddiameter'] == {$form->idDiameter}}
                            {$selected = 'selected="selected"'}
                        {else}
                            {$selected = ""}
                        {/if}
                        {strip}
                            <option value="{$diameter['iddiameter']}" {$selected}>{$diameter['real']}</option>
                        {/strip}
                    {/foreach}
                </select> 
            </div>

            <div class="pure-control-group">
                <label for="idWallThickness">Grubość ścianki</label>
                <select id="idWallThickness" type="text" placeholder="idWallThickness" name="idWallThickness" value="{$form->idWallThickness}">
                    <option value=""></option>
                    {foreach $wallThicknesses as $wallThickness}
                        {if $wallThickness['idwallThickness'] == {$form->idWallThickness}}
                            {$selected = 'selected="selected"'}
                        {else}
                            {$selected = ""}
                        {/if}
                        {strip}
                            <option value="{$wallThickness['idwallThickness']}" {$selected}>{$wallThickness['wallThickness']}</option>
                        {/strip}
                    {/foreach}
                </select> 
            </div>

            <div class="pure-control-group">
                <label for="korozja">Naddatek na korozje</label>
                <input id="korozja" type="text" placeholder="naddatek na korozje" name="korozja" value="{$form->korozja}">
            </div>

            <div class="pure-control-group">
                <label for="pocienienie">Pocienienie ścianki</label>
                <input id="pocienienie" type="text" placeholder="naddatek na pocienienie" name="pocienienie" value="{$form->pocienienie}">
            </div>

            <div class="pure-control-group">
                <label for="wytrzymaloscZlacza">Wytrzymałość złącza</label>
                <input id="wytrzymaloscZlacza" type="text" placeholder="wtrzymalość złącza" name="wytrzymaloscZlacza" value="{$form->wytrzymaloscZlacza}">
            </div>

            <div class="pure-controls">
                <input class="button pure-button" type="submit" value="Zapisz"/>
                <a class="button pure-button" href="{$conf->action_root}calcList">Powrót</a>
            </div>

            </div>
            </div>

        </fieldset>
        <input type="hidden" name="id" value="{$form->id}">
    </form>	
    </div>

{/block}