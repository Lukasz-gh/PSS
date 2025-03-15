<?php
/* Smarty version 4.3.4, created on 2025-03-15 18:10:00
  from 'C:\xampp\htdocs\02_piping\app\views\CatalogueList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67d5b468c4d601_59882891',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3536dd16d755a273029f24ffc3c5bd722f363c9d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\02_piping\\app\\views\\CatalogueList.tpl',
      1 => 1737131651,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67d5b468c4d601_59882891 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_67699105367d5b468c31275_63844329', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Main.tpl");
}
/* {block 'content'} */
class Block_67699105367d5b468c31275_63844329 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_67699105367d5b468c31275_63844329',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


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

    <?php $_smarty_tpl->_assignInScope('counter1', 1);?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['steel']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
        <tr><td><?php echo $_smarty_tpl->tpl_vars['counter1']->value++;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["gatunek"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["granicaPlastycznosci"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["granicaWytrzymalosci"];?>
</td></tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wall']->value, 'w');
$_smarty_tpl->tpl_vars['w']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['w']->value) {
$_smarty_tpl->tpl_vars['w']->do_else = false;
?>
                    <th>
                    <?php echo $_smarty_tpl->tpl_vars['w']->value["wallThickness"];?>

                    </th>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tr>
    </thead>

    <?php $_smarty_tpl->_assignInScope('counter1', 1);?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['diameter']->value, 'd');
$_smarty_tpl->tpl_vars['d']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->do_else = false;
?>
        <tr><td><?php echo $_smarty_tpl->tpl_vars['counter1']->value++;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['d']->value["real"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['d']->value["dn"];?>
</td><?php
$__section_foo_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['wallNumber']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_foo_0_start = min(0, $__section_foo_0_loop);
$__section_foo_0_total = min(($__section_foo_0_loop - $__section_foo_0_start), $__section_foo_0_loop);
$_smarty_tpl->tpl_vars['__smarty_section_foo'] = new Smarty_Variable(array());
if ($__section_foo_0_total !== 0) {
for ($__section_foo_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['index'] = $__section_foo_0_start; $__section_foo_0_iteration <= $__section_foo_0_total; $__section_foo_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['index']++){
?><td>x</td><?php
}
}
?></tr>
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
