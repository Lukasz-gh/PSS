<?php
/* Smarty version 4.3.4, created on 2025-03-15 18:10:02
  from 'C:\xampp\htdocs\02_piping\app\views\FluidList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67d5b46ad4f9e3_80652518',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a37d8560b4ef46227b80a457271d3f0d0dfcac0d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\02_piping\\app\\views\\FluidList.tpl',
      1 => 1737130620,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67d5b46ad4f9e3_80652518 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_71266323567d5b46ad3db65_24866079', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Main.tpl");
}
/* {block 'content'} */
class Block_71266323567d5b46ad3db65_24866079 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_71266323567d5b46ad3db65_24866079',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php if (\core\RoleUtils::inRole("expert")) {?>
    <div class="bottom-margin">
        <?php if (\core\RoleUtils::inRole("projectManager")) {?>
        <?php } else { ?>
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
fluidNew">
            <input class="button pure-button" type="submit" value="Nowy płyn" />
        </form>
        <?php }?>
    </div>	
    <?php }?>

    <div class="bottom-margin">
    <form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
fluidList">
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

    <table id="tab_fluids" class="pure-table pure-table-bordered">
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

    </div>
    </div>

<?php
}
}
/* {/block 'content'} */
}
