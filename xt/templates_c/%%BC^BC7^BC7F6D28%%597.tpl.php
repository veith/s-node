<?php /* Smarty version 2.6.9, created on 2011-01-24 09:53:19
         compiled from _pages/597.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'plugin', '_pages/597.tpl', 2, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/header/header_admin_empty.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  echo load_plugin(array('package' => "ch.iframe.snode.filemanager",'module' => 'setvalues'), $this);?>

<?php echo load_plugin(array('package' => "ch.iframe.snode.filemanager",'module' => 'picker'), $this);?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/footer/footer_admin_empty.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>