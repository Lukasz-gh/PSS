<?php
/* Smarty version 4.3.4, created on 2024-12-22 22:31:14
  from 'C:\xampp\htdocs\piping\app\views\userList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_676885223e8756_54497575',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc27d80d7ad079ebe044f424bdc0f2c9b2aae7c6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\piping\\app\\views\\userList.tpl',
      1 => 1734902885,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_676885223e8756_54497575 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1806245195676885223db0f7_43111790', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Main.tpl");
}
/* {block 'content'} */
class Block_1806245195676885223db0f7_43111790 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1806245195676885223db0f7_43111790',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="bottom-margin">
    <a class="pure-button button-success" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
userNew">Nowy użytkownik</a>
    </div>	

    <h3>Lista userów</h3>

    Witaj <?php echo $_smarty_tpl->tpl_vars['login']->value;?>


    <table id="tab_people" class="pure-table pure-table-bordered">
    <thead>
        <tr>
            <th>Login</th>
            <th>Hasło</th>
            <th>Rola</th>
            <th>Opcje</th>
        </tr>
    </thead>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['people']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
        <tr><td><?php echo $_smarty_tpl->tpl_vars['p']->value["login"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["password"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["roles"];?>
</td><td><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
userEdit/<?php echo $_smarty_tpl->tpl_vars['p']->value['idusers'];?>
">Edytuj</a>&nbsp;<a class="button-small pure-button button-warning" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
userDelete/<?php echo $_smarty_tpl->tpl_vars['p']->value['idusers'];?>
">Usuń</a></td></tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


<?php
}
}
/* {/block 'content'} */
}
