<?php
/* Smarty version 4.3.4, created on 2025-01-17 17:41:13
  from 'C:\xampp\htdocs\piping\app\views\CalcList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_678a882999bf56_47728198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e62b396188b28f751b950ce5296fbdbf2f616cb9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\piping\\app\\views\\CalcList.tpl',
      1 => 1737131670,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_678a882999bf56_47728198 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_295466231678a8829943dc8_67010982', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Main.tpl");
}
/* {block 'content'} */
class Block_295466231678a8829943dc8_67010982 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_295466231678a8829943dc8_67010982',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h4>Witaj <?php echo $_smarty_tpl->tpl_vars['userObj']->value->login;?>
</h4>
<h4>Twoje uprawnienia w systemie to <?php echo $_smarty_tpl->tpl_vars['userObj']->value->role;?>
</h4>

<div class="bottom-margin">
    <?php if (\core\RoleUtils::inRole("projectManager") || \core\RoleUtils::inRole("admin")) {?>
    <?php } else { ?>
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcNew">
            <input class="button pure-button" type="submit" value="Nowe obliczenia" />
        </form>
    <?php }?>
</div>

<div class="bottom-margin">
<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcList">
    <legend>Wyszukiwanie wyników</legend>
    <div class="row">
        <div class="col-3">
            <fieldset>
                <input type="text" placeholder="wpisz płyn" name="calcSearch" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->calcSearch;?>
" /><br />
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

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['calculation']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
    <tr><td><?php echo $_smarty_tpl->tpl_vars['c']->value["login"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['c']->value["fluid"];?>
 (<?php echo $_smarty_tpl->tpl_vars['c']->value["cisObliczeniowe"];?>
 bar, <?php echo $_smarty_tpl->tpl_vars['c']->value["tempObliczeniowa"];?>
 °C)</td><td><?php echo $_smarty_tpl->tpl_vars['c']->value["gatunek"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['c']->value["real"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['c']->value["wallThickness"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['c']->value["najmniejszaGrubosc"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['c']->value["wytrzymaloscZlacza"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['c']->value["korozja"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['c']->value["pocienienie"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['c']->value["tolerancjaScianki"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['c']->value["naprezeniaProjektowe"];?>
</td><td><?php if (\core\RoleUtils::inRole("projectManager") || \core\RoleUtils::inRole("admin")) {?>Brak opcji<?php } else {
ob_start();
echo $_smarty_tpl->tpl_vars['userObj']->value->login;
$_prefixVariable1 = ob_get_clean();
if (($_prefixVariable1 == $_smarty_tpl->tpl_vars['c']->value["login"]) || \core\RoleUtils::inRole("expert")) {?><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcEdit/<?php echo $_smarty_tpl->tpl_vars['c']->value['idcalulations'];?>
">Edytuj</a>&nbsp;<a class="button-small pure-button button-warning" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcDelete/<?php echo $_smarty_tpl->tpl_vars['c']->value['idcalulations'];?>
">Usuń</a><?php }?>&nbsp;<?php if (\core\RoleUtils::inRole("expert")) {?><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
ownerEdit/<?php echo $_smarty_tpl->tpl_vars['c']->value['idcalulations'];?>
">Właściciel</a><?php }
}?></td></tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>

</div>	
</div>	

<?php
}
}
/* {/block 'content'} */
}
