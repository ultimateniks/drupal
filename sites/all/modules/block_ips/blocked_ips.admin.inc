<?php
function block_ips_overview($keys = NULL) {
  
  if ($keys) {
     // Replace wildcards with MySQL/PostgreSQL wildcards.
     $keys = preg_replace('!\*+!', '%', $keys);
     $sql = "SELECT * FROM {url_alias} WHERE dst LIKE '%%%s%%'";
   }
  
  $header = array(
    array('data' => t('IP address'), 'field' => 'ip', 'sort' => 'asc'),
    array('data' => t('Operations')),
  );
  
  $sql = "SELECT * FROM {blocked_ips}";
  
  $sql .= tablesort_sql($header);
  
  $result = pager_query($sql, 50, 0 , NULL, $keys);
  
  $rows = array();
  
  while($data = db_fetch_array($result)) {
    $rows []= array(
      l(check_plain($data['ip']), "admin/settings/blocked_ips/edit/{$data['iid']}"), 
      l(t('delete'), "admin/settings/blocked_ips/delete/{$data['iid']}")
    );
  }
  
  if (empty($rows)) {
    $empty_message = $keys ? t('No IP addresses found.') : t('No IP addresses available.') ;
    $rows[] = array(array('data' => $empty_message, 'colspan' => 2));
  }
  
  $output .= theme('table', $header, $rows);
  $output .= theme('pager', NULL, 50, 0);

  return $output;
}

function blocked_ips_edit($iid = NULL) {
  if($iid) {
    $blocked_ip = blocked_ip_load($iid);
    drupal_set_title(check_plain($blocked_ip['ip']));
    $output = drupal_get_form('blocked_ips_form', $blocked_ip);
  } else {
    $output = drupal_get_form('blocked_ips_form');
  }
  
  return $output;
}

function blocked_ips_form(&$form_state, $edit = array('ip' => NULL, 'iid' => NULL)) {
  $form['#ip'] = $edit;
  
  $form['ip'] = array(
    '#type' => 'textfield',
    '#title' => t('IP address'),
    '#description' => t('Specify the IP address what you wish to block out. For example: 1.2.3.4'),
    '#default_value' => $edit['ip'],
    '#maxlength' => 128,
    '#size' => 45,
    '#required' => TRUE,
  );
  
  if ($edit['iid']) {
    $form['iid'] = array('#type' => 'hidden', '#value' => $edit['iid']);
    $form['submit'] = array('#type' => 'submit', '#value' => t('Update IP'));
  } else {
    $form['submit'] = array('#type' => 'submit', '#value' => t('Add'));
  }

  return $form;
}

function blocked_ips_form_validate($form, &$form_state) {
  $ip = $form_state['values']['ip'];
  $iid = isset($form_state['values']['iid']) ? $form_state['values']['iid'] : 0;
  
  if($iid == 0 AND db_result(db_query("SELECT COUNT(ip) FROM {blocked_ips} WHERE ip = '%s'", $ip))) {
    form_set_error('ip', t('IP address is already blocked'));
  }
}

function blocked_ips_form_submit($form, &$form_state) {
  $ip = $form_state['values']['ip'];
  $iid = isset($form_state['values']['iid']) ? $form_state['values']['iid'] : 0;
  
  if($iid > 0) {
    db_query("UPDATE {blocked_ips} SET ip = '%s' WHERE iid = %s", $ip, $iid); 
  } else {
    db_query("INSERT INTO {blocked_ips} (ip) VALUES ('%s')", $ip);
  }
  
  drupal_set_message(t('The IP address has been saved'));
  $form_state['redirect'] = 'admin/settings/blocked_ips';
  return;
}


function blocked_ips_delete_confirm($form_state, $iid) {
  $ip = blocked_ip_load($iid);
  
  if(user_access('adminster site configuration')) {
    $form['iid'] = array('#type' => 'value', '#value' => $iid);
    $output = confirm_form($form,
      t('Are you sure you want to unblock IP address %ip?', array('%ip' => $ip['ip'])),
      isset($_GET['destination']) ? $_GET['destination'] : 'admin/settings/blocked_ips');
  }
  
  return $output;
}

function blocked_ips_delete_confirm_submit($form, &$form_state) {
  if ($form_state['values']['confirm']) {
    db_query("DELETE FROM {blocked_ips} WHERE iid = '%s'", $form_state['values']['iid']);
    
    $form_state['redirect'] = 'admin/settings/blocked_ips';
    
    return;
  }
}