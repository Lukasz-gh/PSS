<?php
/* Smarty version 4.3.4, created on 2025-03-25 18:11:02
  from 'C:\xampp\htdocs\04_AJAX\app\views\fluidNew.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67e2e3a6470383_92063883',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86ae71b78d0dffd0cbf6421670a2c0300c42ac4e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\04_AJAX\\app\\views\\fluidNew.tpl',
      1 => 1737128935,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67e2e3a6470383_92063883 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78776499567e2e3a6469785_32595562', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Main.tpl");
}
/* {block 'content'} */
class Block_78776499567e2e3a6469785_32595562 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_78776499567e2e3a6469785_32595562',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <h3>Nowy płyn</h3>

    <div class="bottom-margin">
    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
fluidSave" method="post" class="form">
    <div class="row">
    <div class="col-3">
    
        <fieldset>
            <legend>Dane nowego płynu</legend>

            <div class="pure-control-group">
                <label for="fluid">Nazwa płynu</label>
                <input id="fluid" type="text" placeholder="Nazwa płynu" name="fluid" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->fluid;?>
">
            </div>

            <div class="pure-control-group">
                <label for="cisOperacyjne">Ciśnienie operacyjne</label>
                <input id="cisOperacyjne" type="text" placeholder="Ciśnienie operacyjne" name="cisOperacyjne" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->cisOperacyjne;?>
">
            </div>

            <div class="pure-control-group">
                <label for="cisObliczeniowe">Ciśnienie obliczeniowe</label>
                <input id="cisObliczeniowe" type="text" placeholder="Ciśnienie obliczeniowe" name="cisObliczeniowe" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->cisObliczeniowe;?>
">
            </div>

            <div class="pure-control-group">
                <label for="tempOperacyjna">Temperatura operacyjna</label>
                <input id="tempOperacyjna" type="text" placeholder="Temperatura operacyjna" name="tempOperacyjna" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->tempOperacyjna;?>
">
            </div>

            <div class="pure-control-group">
                <label for="tempObliczeniowa">Temperatura obliczeniowa</label>
                <input id="tempObliczeniowa" type="text" placeholder="Temperatura obliczeniowa" name="tempObliczeniowa" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->tempObliczeniowa;?>
">
            </div>

            <div class="pure-controls">
                <input type="submit" class="pure-button pure-button-primary" value="Zapisz"/>
                <a class="button pure-button" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
fluidList">Powrót</a>
            </div>

        </fieldset>

        </div>
        </div>
        <input type="hidden" name="idfluids" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->idfluids;?>
">
    </form>	
    </div>

<?php
}
}
/* {/block 'content'} */
}
