<?php
/* Smarty version 4.3.4, created on 2025-03-22 12:08:01
  from 'C:\xampp\htdocs\03_stronnicowanie\app\views\FluidList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67de9a118d5538_65361977',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '544fa67c9eb73e55d88205b40264a0c0988d5d55' => 
    array (
      0 => 'C:\\xampp\\htdocs\\03_stronnicowanie\\app\\views\\FluidList.tpl',
      1 => 1742641678,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67de9a118d5538_65361977 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_49511504767de9a118aaca0_76707277', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Main.tpl");
}
/* {block 'content'} */
class Block_49511504767de9a118aaca0_76707277 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_49511504767de9a118aaca0_76707277',
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

    <div class="bottom-margin">

        <th>
            <?php if ($_smarty_tpl->tpl_vars['page']->value <= 1) {?>
                <?php $_smarty_tpl->_assignInScope('disabled', "disabled");?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('disabled', '');?>
            <?php }?>
            <a class="button-small pure-button button-secondary" <?php echo $_smarty_tpl->tpl_vars['disabled']->value;?>
 name="page" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
fluidList?fluidSearch=<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->fluidSearch;?>
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
fluidList?fluidSearch=<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->fluidSearch;?>
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
fluidList?fluidSearch=<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->fluidSearch;?>
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
fluidList?fluidSearch=<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->fluidSearch;?>
&page=<?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
">Ostatnia strona</a>
            &nbsp;
        </th>


    </div>	

    </div>
    </div>

<?php
}
}
/* {/block 'content'} */
}
