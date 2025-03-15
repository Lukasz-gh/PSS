<?php
/* Smarty version 4.3.4, created on 2025-01-17 18:18:10
  from 'C:\xampp\htdocs\piping\app\views\CalcOwner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_678a90d214a9e1_19048852',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e376a026b8c8a4fe9c200f953aa0d8716c35e6fe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\piping\\app\\views\\CalcOwner.tpl',
      1 => 1737128927,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_678a90d214a9e1_19048852 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_70682521678a90d21360c4_31483953', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Main.tpl");
}
/* {block 'content'} */
class Block_70682521678a90d21360c4_31483953 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_70682521678a90d21360c4_31483953',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <h3>Zmiana właściciela obliczeń</h3>

    <div class="bottom-margin">
    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
ownerSave" method="post" class="form">
        <fieldset>
        <div class="row">
		<div class="col-3">

            <div class="pure-control-group">
                <label for="idUser">Właściciel obliczeń</label>
                <select id="idUser" type="text" placeholder="idUser" name="idUser" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->idUser;?>
">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['form']->value->idUser;
$_prefixVariable1 = ob_get_clean();
if ($_smarty_tpl->tpl_vars['user']->value['idusers'] == $_prefixVariable1) {?>
                            <?php $_smarty_tpl->_assignInScope('selected', 'selected="selected"');?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->_assignInScope('selected', '');?>
                        <?php }?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['user']->value['idusers'];?>
" <?php echo $_smarty_tpl->tpl_vars['selected']->value;?>
><?php echo $_smarty_tpl->tpl_vars['user']->value['login'];?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select> 
            </div>


            <div class="pure-controls">
                <input type="submit" class="button pure-button" value="Zapisz"/>
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
