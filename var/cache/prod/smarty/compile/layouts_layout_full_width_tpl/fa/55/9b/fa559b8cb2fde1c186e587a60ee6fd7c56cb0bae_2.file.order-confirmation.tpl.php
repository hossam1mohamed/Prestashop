<?php
/* Smarty version 3.1.33, created on 2019-02-28 07:10:27
  from 'C:\wamp64\www\Prestashop\themes\classic\templates\checkout\order-confirmation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c77cfb3855563_79032069',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa559b8cb2fde1c186e587a60ee6fd7c56cb0bae' => 
    array (
      0 => 'C:\\wamp64\\www\\Prestashop\\themes\\classic\\templates\\checkout\\order-confirmation.tpl',
      1 => 1549984772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:checkout/_partials/order-confirmation-table.tpl' => 1,
  ),
),false)) {
function content_5c77cfb3855563_79032069 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14688520615c77cfb38006f2_54275800', 'page_content_container');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16563985245c77cfb3819599_34835732', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'order_confirmation_header'} */
class Block_11433628785c77cfb3801d05_38078258 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <h3 class="h1 card-title">
                <i class="material-icons rtl-no-flip done">&#xE876;</i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your order is confirmed','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>

              </h3>
            <?php
}
}
/* {/block 'order_confirmation_header'} */
/* {block 'hook_order_confirmation'} */
class Block_13633701255c77cfb3813f82_78710274 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php echo $_smarty_tpl->tpl_vars['HOOK_ORDER_CONFIRMATION']->value;?>

            <?php
}
}
/* {/block 'hook_order_confirmation'} */
/* {block 'page_content_container'} */
class Block_14688520615c77cfb38006f2_54275800 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_14688520615c77cfb38006f2_54275800',
  ),
  'order_confirmation_header' => 
  array (
    0 => 'Block_11433628785c77cfb3801d05_38078258',
  ),
  'hook_order_confirmation' => 
  array (
    0 => 'Block_13633701255c77cfb3813f82_78710274',
  ),
);
public $prepend = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="content-hook_order_confirmation" class="card">
      <div class="card-block">
        <div class="row">
          <div class="col-md-12">

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11433628785c77cfb3801d05_38078258', 'order_confirmation_header', $this->tplIndex);
?>


            <p>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'An email has been sent to your mail address %email%.','d'=>'Shop.Theme.Checkout','sprintf'=>array('%email%'=>$_smarty_tpl->tpl_vars['customer']->value['email'])),$_smarty_tpl ) );?>

              <?php if ($_smarty_tpl->tpl_vars['order']->value['details']['invoice_url']) {?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can also [1]download your invoice[/1]','d'=>'Shop.Theme.Checkout','sprintf'=>array('[1]'=>"<a href='".((string)$_smarty_tpl->tpl_vars['order']->value['details']['invoice_url'])."'>",'[/1]'=>"</a>")),$_smarty_tpl ) );?>

              <?php }?>
            </p>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13633701255c77cfb3813f82_78710274', 'hook_order_confirmation', $this->tplIndex);
?>


          </div>
        </div>
      </div>
    </section>
<?php
}
}
/* {/block 'page_content_container'} */
/* {block 'order_confirmation_table'} */
class Block_12939767505c77cfb381a9f4_53006670 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/order-confirmation-table.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['order']->value['products'],'subtotals'=>$_smarty_tpl->tpl_vars['order']->value['subtotals'],'totals'=>$_smarty_tpl->tpl_vars['order']->value['totals'],'labels'=>$_smarty_tpl->tpl_vars['order']->value['labels'],'add_product_link'=>false), 0, false);
?>
        <?php
}
}
/* {/block 'order_confirmation_table'} */
/* {block 'order_details'} */
class Block_16350353495c77cfb3822f57_54302643 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <div id="order-details" class="col-md-4">
            <h3 class="h3 card-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order details','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
:</h3>
            <ul>
              <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order reference: %reference%','d'=>'Shop.Theme.Checkout','sprintf'=>array('%reference%'=>$_smarty_tpl->tpl_vars['order']->value['details']['reference'])),$_smarty_tpl ) );?>
</li>
              <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment method: %method%','d'=>'Shop.Theme.Checkout','sprintf'=>array('%method%'=>$_smarty_tpl->tpl_vars['order']->value['details']['payment'])),$_smarty_tpl ) );?>
</li>
              <?php if (!$_smarty_tpl->tpl_vars['order']->value['details']['is_virtual']) {?>
                <li>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping method: %method%','d'=>'Shop.Theme.Checkout','sprintf'=>array('%method%'=>$_smarty_tpl->tpl_vars['order']->value['carrier']['name'])),$_smarty_tpl ) );?>
<br>
                  <em><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['carrier']['delay'], ENT_QUOTES, 'UTF-8');?>
</em>
                </li>
              <?php }?>
            </ul>
          </div>
        <?php
}
}
/* {/block 'order_details'} */
/* {block 'hook_payment_return'} */
class Block_55307825c77cfb383c808_26210406 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (!empty($_smarty_tpl->tpl_vars['HOOK_PAYMENT_RETURN']->value)) {?>
    <section id="content-hook_payment_return" class="card definition-list">
      <div class="card-block">
        <div class="row">
          <div class="col-md-12">
            <?php echo $_smarty_tpl->tpl_vars['HOOK_PAYMENT_RETURN']->value;?>

          </div>
        </div>
      </div>
    </section>
    <?php }?>
  <?php
}
}
/* {/block 'hook_payment_return'} */
/* {block 'customer_registration_form'} */
class Block_16398258735c77cfb3843c61_40135409 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['customer']->value['is_guest']) {?>
      <div id="registration-form" class="card">
        <div class="card-block">
          <h4 class="h4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save time on your next order, sign up now','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</h4>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('file'=>'customer/_partials/customer-form.tpl','ui'=>$_smarty_tpl->tpl_vars['register_form']->value),$_smarty_tpl ) );?>

        </div>
      </div>
    <?php }?>
  <?php
}
}
/* {/block 'customer_registration_form'} */
/* {block 'hook_order_confirmation_1'} */
class Block_18337251885c77cfb384cae4_04342041 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderConfirmation1'),$_smarty_tpl ) );?>

  <?php
}
}
/* {/block 'hook_order_confirmation_1'} */
/* {block 'hook_order_confirmation_2'} */
class Block_10239575415c77cfb38508d9_82702487 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="content-hook-order-confirmation-footer">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderConfirmation2'),$_smarty_tpl ) );?>

    </section>
  <?php
}
}
/* {/block 'hook_order_confirmation_2'} */
/* {block 'page_content_container'} */
class Block_16563985245c77cfb3819599_34835732 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_16563985245c77cfb3819599_34835732',
  ),
  'order_confirmation_table' => 
  array (
    0 => 'Block_12939767505c77cfb381a9f4_53006670',
  ),
  'order_details' => 
  array (
    0 => 'Block_16350353495c77cfb3822f57_54302643',
  ),
  'hook_payment_return' => 
  array (
    0 => 'Block_55307825c77cfb383c808_26210406',
  ),
  'customer_registration_form' => 
  array (
    0 => 'Block_16398258735c77cfb3843c61_40135409',
  ),
  'hook_order_confirmation_1' => 
  array (
    0 => 'Block_18337251885c77cfb384cae4_04342041',
  ),
  'hook_order_confirmation_2' => 
  array (
    0 => 'Block_10239575415c77cfb38508d9_82702487',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section id="content" class="page-content page-order-confirmation card">
    <div class="card-block">
      <div class="row">

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12939767505c77cfb381a9f4_53006670', 'order_confirmation_table', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16350353495c77cfb3822f57_54302643', 'order_details', $this->tplIndex);
?>


      </div>
    </div>
  </section>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_55307825c77cfb383c808_26210406', 'hook_payment_return', $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16398258735c77cfb3843c61_40135409', 'customer_registration_form', $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18337251885c77cfb384cae4_04342041', 'hook_order_confirmation_1', $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10239575415c77cfb38508d9_82702487', 'hook_order_confirmation_2', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_content_container'} */
}
