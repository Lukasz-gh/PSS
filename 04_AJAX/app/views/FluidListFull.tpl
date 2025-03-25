{extends file="Main.tpl"}

{block name=content}

    {if \core\RoleUtils::inRole("expert")}
    <div class="bottom-margin">
        {if \core\RoleUtils::inRole("projectManager")}
        {else}
        <form id="new-form" action="{$conf->action_root}fluidNew">
            <input class="button pure-button" type="submit" value="Nowy płyn" />
        </form>
        {/if}
    </div>	
    {/if}

    {* ajaxPostFormEx(id_form,url,user_function) *}
    {* action="{$conf->action_root}fluidNew" *}
    {* onclick="ajaxPostFormEx('new-form','{$conf->action_root}fluidNew'); return false;" *}


    <div class="bottom-margin">
    <form id="search-form" class="pure-form pure-form-stacked" onsubmit="ajaxPostForm('search-form','{$conf->action_root}fluidListPart','tab_fluids'); return false;">
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

    <div id="tab_fluids">
        {include file="FluidListPart.tpl"}
    </div>

    </div>
    </div>

{/block}