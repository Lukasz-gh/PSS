<?php
/* Smarty version 4.3.4, created on 2025-03-24 20:57:51
  from 'C:\xampp\htdocs\04_AJAX\app\views\FluidList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67e1b93f857100_06399741',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4b502feb1cdc2c2a57a1a125d3b0a23b0bb303b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\04_AJAX\\app\\views\\FluidList.tpl',
      1 => 1742846266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67e1b93f857100_06399741 (Smarty_Internal_Template $_smarty_tpl) {
?><table class="pure-table pure-table-bordered">
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

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fluids']->value, 'f');
$_smarty_tpl->tpl_vars['f']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->do_else = false;
?>
    <tr><td><?php echo $_smarty_tpl->tpl_vars['f']->value["fluid"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['f']->value["tempOperacyjna"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['f']->value["cisOperacyjne"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['f']->value["tempObliczeniowa"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['f']->value["cisObliczeniowe"];?>
</td><td><?php if (!\core\RoleUtils::inRole("expert")) {?>Brak opcji<?php } else { ?><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
fluidEdit/<?php echo $_smarty_tpl->tpl_vars['f']->value['idfluids'];?>
">Edytuj</a>&nbsp;<a class="button-small pure-button button-warning" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
fluidDelete/<?php echo $_smarty_tpl->tpl_vars['f']->value['idfluids'];?>
">Usuń</a><?php }?></td></tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>

<div class="bottom-margin">

<th>
    <?php if ($_smarty_tpl->tpl_vars['page']->value <= 1) {?>
        <?php $_smarty_tpl->_assignInScope('disabled', "disabled");?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('disabled', '');?>
    <?php }?>
    <a class="button-small pure-button button-secondary" <?php echo $_smarty_tpl->tpl_vars['disabled']->value;?>
 name="page" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
fluidListPart?fluidSearch=<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->fluidSearch;?>
&page=1">Pierwsza strona</a>
    &nbsp;
</th>

<th>
    <?php if ($_smarty_tpl->tpl_vars['page']->value <= 1) {?>
        <?php $_smarty_tpl->_assignInScope('disabled', "disabled");?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('disabled', '');?>
    <?php }?>
    <a class="button-small pure-button button-secondary" <?php echo $_smarty_tpl->tpl_vars['disabled']->value;?>
 name="page" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
fluidListPart?fluidSearch=<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->fluidSearch;?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
">-1 Strona</a>
    &nbsp;
</th>

<th>
    Strona <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
 z <?php echo $_smarty_tpl->tpl_vars['pages']->value;?>

    &nbsp;
</th>

<th>
    <?php if ($_smarty_tpl->tpl_vars['page']->value == $_smarty_tpl->tpl_vars['pages']->value) {?>
        <?php $_smarty_tpl->_assignInScope('disabled', "disabled");?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('disabled', '');?>
    <?php }?>
    <a class="button-small pure-button button-secondary" <?php echo $_smarty_tpl->tpl_vars['disabled']->value;?>
 name="page" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
fluidListPart?fluidSearch=<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->fluidSearch;?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
">+1 Strona</a>
    &nbsp;
</th>

<th>
    <?php if ($_smarty_tpl->tpl_vars['page']->value == $_smarty_tpl->tpl_vars['pages']->value) {?>
        <?php $_smarty_tpl->_assignInScope('disabled', "disabled");?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('disabled', '');?>
    <?php }?>
    <a class="button-small pure-button button-secondary" <?php echo $_smarty_tpl->tpl_vars['disabled']->value;?>
 name="page" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
fluidListPart?fluidSearch=<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->fluidSearch;?>
&page=<?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
">Ostatnia strona</a>
    &nbsp;
</th>

</div>	<?php }
}
