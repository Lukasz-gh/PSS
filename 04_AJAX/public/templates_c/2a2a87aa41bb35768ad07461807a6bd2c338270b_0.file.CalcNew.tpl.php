<?php
/* Smarty version 4.3.4, created on 2025-03-15 18:12:37
  from 'C:\xampp\htdocs\03_stronnicowanie\app\views\CalcNew.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67d5b505d54fe6_52054274',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a2a87aa41bb35768ad07461807a6bd2c338270b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\03_stronnicowanie\\app\\views\\CalcNew.tpl',
      1 => 1737135225,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67d5b505d54fe6_52054274 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_172480028467d5b505d39eb5_68675225', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Main.tpl");
}
/* {block 'content'} */
class Block_172480028467d5b505d39eb5_68675225 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_172480028467d5b505d39eb5_68675225',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <h3>Wprowadź dane do obliczeń</h3>

    <div class="bottom-margin">
    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcSave" method="post" class="form">
        <fieldset>

        <div class="row">
		<div class="col-3">

            <div class="pure-control-group">
                <label for="idfluids">Płyn</label>
                <select id="idfluids" type="text" placeholder="idfluids" name="idfluids" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->idfluids;?>
">
                    <option value=""></option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fluids']->value, 'fluid');
$_smarty_tpl->tpl_vars['fluid']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fluid']->value) {
$_smarty_tpl->tpl_vars['fluid']->do_else = false;
?>
                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['form']->value->idfluids;
$_prefixVariable1 = ob_get_clean();
if ($_smarty_tpl->tpl_vars['fluid']->value['idfluids'] == $_prefixVariable1) {?>
                            <?php $_smarty_tpl->_assignInScope('selected', 'selected="selected"');?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->_assignInScope('selected', '');?>
                        <?php }?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['fluid']->value['idfluids'];?>
" <?php echo $_smarty_tpl->tpl_vars['selected']->value;?>
><?php echo $_smarty_tpl->tpl_vars['fluid']->value['fluid'];?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select> 
            </div>

            <div class="pure-control-group">
                <label for="idSteel">Gatunek stali</label>
                <select id="idSteel" type="text" placeholder="idSteel" name="idSteel" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->idSteel;?>
">
                    <option value=""></option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['steels']->value, 'steel');
$_smarty_tpl->tpl_vars['steel']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['steel']->value) {
$_smarty_tpl->tpl_vars['steel']->do_else = false;
?>
                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['form']->value->idSteel;
$_prefixVariable2 = ob_get_clean();
if ($_smarty_tpl->tpl_vars['steel']->value['idsteel'] == $_prefixVariable2) {?>
                            <?php $_smarty_tpl->_assignInScope('selected', 'selected="selected"');?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->_assignInScope('selected', '');?>
                        <?php }?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['steel']->value['idsteel'];?>
" <?php echo $_smarty_tpl->tpl_vars['selected']->value;?>
><?php echo $_smarty_tpl->tpl_vars['steel']->value['gatunek'];?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select> 
            </div>

            <div class="pure-control-group">
                <label for="idDiameer">Średnica</label>
                <select id="idDiameter" type="text" placeholder="idDiameter" name="idDiameter" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->idDiameter;?>
">
                    <option value=""></option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['diameters']->value, 'diameter');
$_smarty_tpl->tpl_vars['diameter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['diameter']->value) {
$_smarty_tpl->tpl_vars['diameter']->do_else = false;
?>
                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['form']->value->idDiameter;
$_prefixVariable3 = ob_get_clean();
if ($_smarty_tpl->tpl_vars['diameter']->value['iddiameter'] == $_prefixVariable3) {?>
                            <?php $_smarty_tpl->_assignInScope('selected', 'selected="selected"');?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->_assignInScope('selected', '');?>
                        <?php }?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['diameter']->value['iddiameter'];?>
" <?php echo $_smarty_tpl->tpl_vars['selected']->value;?>
><?php echo $_smarty_tpl->tpl_vars['diameter']->value['real'];?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select> 
            </div>

            <div class="pure-control-group">
                <label for="idWallThickness">Grubość ścianki</label>
                <select id="idWallThickness" type="text" placeholder="idWallThickness" name="idWallThickness" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->idWallThickness;?>
">
                    <option value=""></option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wallThicknesses']->value, 'wallThickness');
$_smarty_tpl->tpl_vars['wallThickness']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wallThickness']->value) {
$_smarty_tpl->tpl_vars['wallThickness']->do_else = false;
?>
                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['form']->value->idWallThickness;
$_prefixVariable4 = ob_get_clean();
if ($_smarty_tpl->tpl_vars['wallThickness']->value['idwallThickness'] == $_prefixVariable4) {?>
                            <?php $_smarty_tpl->_assignInScope('selected', 'selected="selected"');?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->_assignInScope('selected', '');?>
                        <?php }?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['wallThickness']->value['idwallThickness'];?>
" <?php echo $_smarty_tpl->tpl_vars['selected']->value;?>
><?php echo $_smarty_tpl->tpl_vars['wallThickness']->value['wallThickness'];?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select> 
            </div>

            <div class="pure-control-group">
                <label for="korozja">Naddatek na korozje</label>
                <input id="korozja" type="text" placeholder="naddatek na korozje" name="korozja" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->korozja;?>
">
            </div>

            <div class="pure-control-group">
                <label for="pocienienie">Pocienienie ścianki</label>
                <input id="pocienienie" type="text" placeholder="naddatek na pocienienie" name="pocienienie" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->pocienienie;?>
">
            </div>

            <div class="pure-control-group">
                <label for="wytrzymaloscZlacza">Wytrzymałość złącza</label>
                <input id="wytrzymaloscZlacza" type="text" placeholder="wtrzymalość złącza" name="wytrzymaloscZlacza" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->wytrzymaloscZlacza;?>
">
            </div>

            <div class="pure-controls">
                <input class="button pure-button" type="submit" value="Zapisz"/>
                <a class="button pure-button" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcList">Powrót</a>
            </div>

            </div>
            </div>

        </fieldset>
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id;?>
">
    </form>	
    </div>

<?php
}
}
/* {/block 'content'} */
}
