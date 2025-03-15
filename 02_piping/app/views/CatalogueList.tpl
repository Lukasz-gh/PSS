{extends file="Main.tpl"}

{block name=content}

    <h3>Gatunki stali</h3>

    <div class="row">
    <div class="off-0">

    <table id="tab_steel" class="pure-table pure-table-bordered">
    <thead>
        <tr>
            <th>Lp.</th>
            <th>Gatunek</th>
            <th>Granica Plastyczności</th>
            <th>Granica Wytrzymałości</th>
        </tr>
    </thead>

    {$counter1 = 1}
    {foreach $steel as $p}
        {strip}
            <tr>
                <td>{$counter1++}</td>
                <td>{$p["gatunek"]}</td>
                <td>{$p["granicaPlastycznosci"]}</td>
                <td>{$p["granicaWytrzymalosci"]}</td>
            </tr>
        {/strip}
    {/foreach}
    </table>

    </div>
    </div>

    <h3>Średnice i grubości ścianek</h3>
    <div class="row">
    <div class="off-0">

    <table id="tab_diameter" class="pure-table pure-table-bordered">
    <thead>
        <tr>
            <th>Lp.</th>
            <th>Średnica</th>
            <th>DN</th>
                {foreach $wall as $w}
                    <th>
                    {strip}
                        {$w["wallThickness"]}
                    {/strip}
                    </th>
                {/foreach}
        </tr>
    </thead>

    {$counter1 = 1}
    {foreach $diameter as $d}
        {strip}
            <tr>
                <td>{$counter1++}</td>
                <td>{$d["real"]}</td>
                <td>{$d["dn"]}</td>
                {section name=foo start=0 loop=$wallNumber step=1}
                    <td>x</td>
                {/section}
            </tr>
        {/strip}
    {/foreach}
    </table>

    </div>
    </div>

{/block}