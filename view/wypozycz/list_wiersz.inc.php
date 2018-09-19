<?php
$model = GetViewModel('wypozycz_list_wiersz') ;
?>

<div>
<div style="border-left: 1px;width:5%;float:left"><?php echo $model['wypozycz_id']?> </div>    
<div style="border-left: 1px;width:5%;float:left"><?php echo $model['klient_id']?> </div>    
<div style="border-left: 1px;width:25%;float:left"><?php echo $model['klient_symbol']?> </div>    
<div style="border-left: 1px;width:5%;float:left"><?php echo $model['sprzet_id']?> </div>    
<div style="border-left: 1px;width:25%;float:left"><?php echo $model['sprzet_nazwa']?> </div>    
<div style="border-left: 1px;width:10%;float:left"><?php echo $model['wypozycz_data']?> </div>    
<div style="border-left: 1px;width:10%;float:left"><?php
        if(isset($model['wypozycz_datazwrotu']) && $model['wypozycz_datazwrotu']!=='') echo $model['wypozycz_datazwrotu'] ;
        else echo _3wd_Link('zwrot','?mod=wypozycz&action=back_form&id='.$model['wypozycz_id'],'','') ;?> </div>    
<div style="clear:both"/>
    
</div>

