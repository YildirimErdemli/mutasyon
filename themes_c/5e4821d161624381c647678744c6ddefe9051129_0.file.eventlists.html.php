<?php /* Smarty version 3.1.27, created on 2016-03-15 22:17:59
         compiled from "/var/www/html/mutasyon/themes/default/widget/eventlists.html" */ ?>
<?php
/*%%SmartyHeaderCode:43073152556e86df766dca6_37091191%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e4821d161624381c647678744c6ddefe9051129' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/widget/eventlists.html',
      1 => 1456420643,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43073152556e86df766dca6_37091191',
  'variables' => 
  array (
    '_events' => 0,
    'events' => 0,
    'e' => 0,
    '_event_one' => 0,
    '_event_two' => 0,
    '_event_three' => 0,
    '_event_not_found' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56e86df76abd82_61212974',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56e86df76abd82_61212974')) {
function content_56e86df76abd82_61212974 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '43073152556e86df766dca6_37091191';
?>
<div class="panel">
	  <div class="portlet-header border-bottom invoice-icon">
	     <span class="pull-right addevent" style="margin-right:10px;" data-toggle="collapse" href="#addevent"><i class="fa fa-plus-square"></i></span>
	    <i class="glyphicon glyphicon-home" style="font-size: 20px"></i>
	    <span class="invoice-header"><?php echo $_smarty_tpl->tpl_vars['_events']->value;?>
</span>
	</div>
	     <div class="events">
		  <table class="table table-hover">
		    <tbody>
			<?php
$_from = $_smarty_tpl->tpl_vars['events']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['e'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['e']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['e']->value) {
$_smarty_tpl->tpl_vars['e']->_loop = true;
$foreach_e_Sav = $_smarty_tpl->tpl_vars['e'];
?>
			<?php echo $_smarty_tpl->getSubTemplate ('themes/default/event/editevent.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

			    <tr>
				    <td style="width:15%">
				      <span class="label label-default">
					<?php echo $_smarty_tpl->tpl_vars['e']->value['day'];?>
 <?php echo Check::datetr($_smarty_tpl->tpl_vars['e']->value['month']);?>

				      </span>  
				    </td>
				    <td style="width:80%">
					<span class="event-detail <?php if ($_smarty_tpl->tpl_vars['e']->value['event_status'] == 1) {?>event-complete<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['e']->value['event_id'];?>
">
					  <input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['e']->value['event_status'] == 1) {?>checked<?php }?> class="eventcomp"></input> 
					  <input type="hidden" class="eventid" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['event_id'];?>
"></input> 
					  <?php echo $_smarty_tpl->tpl_vars['e']->value['event_detail'];?>

					 </span>
					 <span class="label <?php if ($_smarty_tpl->tpl_vars['e']->value['event_level'] == 1) {?>label-danger<?php } elseif ($_smarty_tpl->tpl_vars['e']->value['event_level'] == 2) {?>label-warning<?php } else { ?>label-default<?php }?>">
					    <?php if ($_smarty_tpl->tpl_vars['e']->value['event_level'] == 1) {
echo $_smarty_tpl->tpl_vars['_event_one']->value;
} elseif ($_smarty_tpl->tpl_vars['e']->value['event_level'] == 2) {
echo $_smarty_tpl->tpl_vars['_event_two']->value;
} else {
echo $_smarty_tpl->tpl_vars['_event_three']->value;
}?>
					  </span>
				    </td>
				    <td style="width:5%" title="<?php echo $_smarty_tpl->tpl_vars['e']->value['event_id'];?>
">
					  <a class="fa fa-pencil-square-o eventedit" data-toggle="collapse" href="#editevent-<?php echo $_smarty_tpl->tpl_vars['e']->value['event_id'];?>
"></a>
					  <i class="fa fa-trash-o colorRed eventdel"></i>
				    </td>
				    <?php
$_smarty_tpl->tpl_vars['e'] = $foreach_e_Sav;
}
if (!$_smarty_tpl->tpl_vars['e']->_loop) {
?>
					<span class="alert-info"> <?php echo $_smarty_tpl->tpl_vars['_event_not_found']->value;?>
</span>
				    <?php
}
?>
			    </tr>
		    </tbody>
		  </table>
	     </div>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ('themes/default/event/addevent.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>