<?php /* Smarty version 2.6.27, created on 2017-10-21 02:22:48
         compiled from CRM/Contribute/Page/Premium.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contribute/Page/Premium.tpl', 1, false),array('block', 'ts', 'CRM/Contribute/Page/Premium.tpl', 30, false),array('function', 'crmURL', 'CRM/Contribute/Page/Premium.tpl', 26, false),array('function', 'cycle', 'CRM/Contribute/Page/Premium.tpl', 45, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php ob_start(); ?><?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/admin/contribute/managePremiums','q' => "reset=1"), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('managePremiumsURL', ob_get_contents());ob_end_clean(); ?>
<?php if ($this->_tpl_vars['rows']): ?>
<div id="ltype">
    <div class="description">
        <p><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['managePremiumsURL'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>The premiums listed below are currently offered on this Contribution Page. If you have other premiums which are not already being offered on this page, you will see a link below to offer another premium. Use <a href='%1'>Contributions &raquo; Premiums</a> to create or enable additional premium choices which can be used on any Contribution page.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
    </div>
    <div class="form-item">
        <?php echo '<table><tr class="columnheader"><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Name'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'SKU'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Market Value'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Min Contribution'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Financial Type'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Order'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th></th></tr>'; ?><?php $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['row']):
?><?php echo '<tr class="'; ?><?php echo smarty_function_cycle(array('values' => 'odd-row,even-row'), $this);?><?php echo ' '; ?><?php echo $this->_tpl_vars['row']['class']; ?><?php echo ''; ?><?php if (! $this->_tpl_vars['row']['is_active']): ?><?php echo ' disabled'; ?><?php endif; ?><?php echo '"><td class="crm-contribution-form-block-product_name">'; ?><?php echo $this->_tpl_vars['row']['product_name']; ?><?php echo '</td><td class="crm-contribution-form-block-sku">'; ?><?php echo $this->_tpl_vars['row']['sku']; ?><?php echo '</td><td class="crm-contribution-form-block-price">'; ?><?php echo $this->_tpl_vars['row']['price']; ?><?php echo '</td><td class="crm-contribution-form-block-min_contribution">'; ?><?php echo $this->_tpl_vars['row']['min_contribution']; ?><?php echo '</td><td class="crm-contribution-form-block-financial_type">'; ?><?php echo $this->_tpl_vars['row']['financial_type_id']; ?><?php echo '</td><td class="nowrap crm-contribution-form-block-weight">'; ?><?php echo $this->_tpl_vars['row']['weight']; ?><?php echo '</td><td class="crm-contribution-form-block-action">'; ?><?php echo $this->_tpl_vars['row']['action']; ?><?php echo '</td></tr>'; ?><?php endforeach; endif; unset($_from); ?><?php echo '</table>'; ?>

    </div>
    <?php if ($this->_tpl_vars['products']): ?>
      <div class="action-link">
        <a href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/admin/contribute/addProductToPage','q' => "reset=1&action=update&id=".($this->_tpl_vars['id'])), $this);?>
">&raquo; <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Offer Another Premium on this Contribution Page<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
      </div>
    <?php endif; ?>
</div>
<?php else: ?>
  <?php if ($this->_tpl_vars['showForm'] == false): ?>
    <div class="messages status no-popup">
      <?php if ($this->_tpl_vars['products'] != null): ?>
        <div class="icon inform-icon"></div>
        <?php ob_start(); ?><?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/admin/contribute/addProductToPage','q' => "reset=1&action=update&id=".($this->_tpl_vars['id'])), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('crmURL', ob_get_contents());ob_end_clean(); ?>
        <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['crmURL'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>There are no premiums offered on this contribution page yet. You can <a href='%1'>add one</a>.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      <?php else: ?>
        <div class="icon inform-icon"></div>
        <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['managePremiumsURL'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>There are no active premiums for your site. You can <a href='%1'>create and/or enable premiums here</a>.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      <?php endif; ?>
    </div>
  <?php endif; ?>
<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>