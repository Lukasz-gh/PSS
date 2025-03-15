<?php
/* Smarty version 4.3.4, created on 2025-03-15 18:09:59
  from 'C:\xampp\htdocs\02_piping\app\views\templates\Main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67d5b467ab3e52_44518024',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e690a3a67c51b872b299d3258a5fda01065a59ed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\02_piping\\app\\views\\templates\\Main.tpl',
      1 => 1737131674,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67d5b467ab3e52_44518024 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
	<meta charset="utf-8"/>
	<title>Aplikacja bazodanowa</title>
	<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css"
		integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/main.css">
</head>

<body style="margin: 20px;">
	<nav id="nav" >
			<ul class="container">
				<?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
				<?php if (\core\RoleUtils::inRole("admin")) {?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
userList">Użytkownicy</a></li>
				<?php }?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
fluidList">Płyny</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calc">Wyniki</a></li>
				<?php if (\core\RoleUtils::inRole("projectManager") || \core\RoleUtils::inRole("admin")) {?>
				<?php } else { ?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcNew">Obliczenia</a></li>
				<?php }?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
catList">Katalogi</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout">Wyloguj</a>
				<?php } else { ?>	
					<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginShow">Zaloguj</a>
				<?php }?></li>
			</ul>
	</nav>

	<div class="content">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_71095548567d5b467aaf3d1_39075491', 'content');
?>

	</div>

	<article class="wrapper style3">
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_137869490867d5b467aafbb9_93269771', 'messages');
?>

	</article>

	<article class="wrapper style4">
		<div class="footer">
			<p>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_148032147167d5b467ab3683_39231237', 'footer');
?>

			</p>
	
			<ul id="copyright">
				<li>&copy; Untitled</li><li>Widok oparty na stylu z <a href="https://html5up.net/" target="_blank">Html5up</a>.</li>
			</ul>
		</div>
	
	</article>

</body>
</html><?php }
/* {block 'content'} */
class Block_71095548567d5b467aaf3d1_39075491 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_71095548567d5b467aaf3d1_39075491',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			Domyślna treść zawartości ....
		<?php
}
}
/* {/block 'content'} */
/* {block 'messages'} */
class Block_137869490867d5b467aafbb9_93269771 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_137869490867d5b467aafbb9_93269771',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
		<div>
			<ul>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
			<li class="msg <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>error<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>warning<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>info<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
		</div>
		<?php }?>
	<?php
}
}
/* {/block 'messages'} */
/* {block 'footer'} */
class Block_148032147167d5b467ab3683_39231237 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_148032147167d5b467ab3683_39231237',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Przykładowa tresć stopki wpisana do szablonu aplikacji<?php
}
}
/* {/block 'footer'} */
}
