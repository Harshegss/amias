<?php
$form_id = 2226;
$form = Forminator_API::get_entries($form_id);
echo '<pre>';
print_r($form);
foreach($form as $key => $val){
    print_r($val->meta_data['hidden-1']['value']);
}
?>