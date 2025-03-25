<?php
/* Smarty version 4.3.4, created on 2025-03-24 21:00:15
  from 'C:\xampp\htdocs\04_AJAX\app\views\templates\Main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67e1b9cf33f7e3_90771445',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69b99730124cfe89dacc41dcfdbef15bdb25f29f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\04_AJAX\\app\\views\\templates\\Main.tpl',
      1 => 1742846406,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67e1b9cf33f7e3_90771445 (Smarty_Internal_Template $_smarty_tpl) {
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
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/functions.js"><?php echo '</script'; ?>
>
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
fluidListFull">Płyny</a></li>
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2187541767e1b9cf331f05_76942243', 'content');
?>

	</div>

	<article class="wrapper style3">
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_60052157767e1b9cf332681_85161728', 'messages');
?>

	</article>

	<article class="wrapper style4">
		<div class="footer">
			<p>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_176225462067e1b9cf33ea38_37734407', 'footer');
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
class Block_2187541767e1b9cf331f05_76942243 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2187541767e1b9cf331f05_76942243',
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
class Block_60052157767e1b9cf332681_85161728 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_60052157767e1b9cf332681_85161728',
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
class Block_176225462067e1b9cf33ea38_37734407 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_176225462067e1b9cf33ea38_37734407',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Przykładowa tresć stopki wpisana do szablonu aplikacji<?php
}
}
/* {/block 'footer'} */
}
