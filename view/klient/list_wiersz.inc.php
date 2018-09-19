<?php
$model = GetViewModel('klient_list_wiersz') ;
//var_export( $model );

?>

<div style="border:1px black solid;">
    <div style="border-left: 1px;width:5%;float:left">
        <?php echo _3wd_Link($model['klient_id'], '?mod=klient&action=edit&id='.$model['klient_id'] ) ; ?>
    </div>
    <div style="border-left: 1px;width:15%;float:left">
        <?php echo _3wd_Link($model['klient_symbol'], '?mod=klient&action=edit&id='.$model['klient_id'] ) ; ?>
    </div>
    <div style="border-left: 1px;width:35%;float:left"><?php echo $model['klient_nazwa']; ?></div>
    <div style="border-left: 1px;width:35%;float:left"><?php echo $model['klient_adres']; ?></div>
    <div style="border-left: 1px;width:10%;float:left">
        <?php
          echo _3wd_Link('wypozycz', '?mod=wypozycz&action=add_form&klient_id='.$model['klient_id'] ) ; ?>
    </div>
  <div style="clear:both;"/>
</div>