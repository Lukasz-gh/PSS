<?php
/* Smarty version 4.3.4, created on 2025-03-25 19:01:15
  from 'C:\xampp\htdocs\04_AJAX\app\views\FluidListFull.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67e2ef6b43ae13_56754481',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16b8251ce190fed33265c7f8ec8fccf96b630ac7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\04_AJAX\\app\\views\\FluidListFull.tpl',
      1 => 1742924790,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:FluidListPart.tpl' => 1,
  ),
),false)) {
function content_67e2ef6b43ae13_56754481 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7786638767e2ef6b42ec99_94915165', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Main.tpl");
}
/* {block 'content'} */
class Block_7786638767e2ef6b42ec99_94915165 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7786638767e2ef6b42ec99_94915165',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php if (\core\RoleUtils::inRole("expert")) {?>
    <div class="bottom-margin">
        <?php if (\core\RoleUtils::inRole("projectManager")) {?>
        <?php } else { ?>
        <form id="new-form" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
fluidNew">
            <input class="button pure-button" type="submit" value="Nowy płyn" />
        </form>
        <?php }?>
    </div>	
    <?php }?>

            

    <div class="bottom-margin">
    <form id="search-form" class="pure-form pure-form-stacked" onsubmit="ajaxPostForm('search-form','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
fluidListPart','tab_fluids'); return false;">
        <legend>Wyszukiwanie płynu</legend>
        <div class="row">
            <div class="col-3">
                <fieldset>
                    <input type="text" placeholder="wpisz płyn" name="fluidSearch" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->fluidSearch;?>
" /><br />
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
        <?php $_smarty_tpl->_subTemplateRender("file:FluidListPart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>

    </div>
    </div>

<?php
}
}
/* {/block 'content'} */
}
