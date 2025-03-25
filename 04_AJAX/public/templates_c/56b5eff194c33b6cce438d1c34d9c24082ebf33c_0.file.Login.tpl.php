<?php
/* Smarty version 4.3.4, created on 2025-03-15 18:10:03
  from 'C:\xampp\htdocs\02_piping\app\views\Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67d5b46bbf0644_47640235',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56b5eff194c33b6cce438d1c34d9c24082ebf33c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\02_piping\\app\\views\\Login.tpl',
      1 => 1737128940,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67d5b46bbf0644_47640235 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_110980814467d5b46bbec491_10139462', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Main.tpl");
}
/* {block 'content'} */
class Block_110980814467d5b46bbec491_10139462 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_110980814467d5b46bbec491_10139462',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<article id="contact" class="wrapper style2">
	<div class="container medium">

		<h2>Witaj w aplikacji do obliczeń grubości ścianek rurociągów</h2>
		<header>
			<h3>Wprowadź swoje dane</h3>
		</header>
		<div class="row">
			<div class="off-4" >
				<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post" class="form">
						<label for="id_login">Login</label>
						<input id="id_login" type="text" placeholder="Login" name="login" />

						<label for="id_pass">Hasło</label>
						<input id="id_pass" type="password" placeholder="Hasło" name="pass" />

						<button type="submit">Zaloguj</button>
				</form>
			</div>
		</div>
	</div>

</article>

<?php
}
}
/* {/block 'content'} */
}
