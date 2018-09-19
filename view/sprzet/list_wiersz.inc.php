<?php
$model = GetViewModel('sprzet_item') ;
?>
<div>
    <div style="float:left;width:5%"><?php echo _3wd_link( $model['sprzet_id'], '?mod=sprzet&action=edit&id='.$model['sprzet_id'] ) ; ?></div>
    <div style="float:left;width:35%"><?php echo _3wd_link( $model['sprzet_nazwa'], '?mod=sprzet&action=edit&id='.$model['sprzet_id'] ) ; ?></div>
    <div style="float:left;width:10%">
    <?php
        if(isset($model['wypozycz_id']) &&  $model['wypozycz_id']!=='0')
        {
            echo _3wd_Link('zwróć', '?mod=wypozycz&action=back_form&id='.$model['wypozycz_id'] ) ;
        }
        else
        {
            echo _3wd_Link('wypozycz', '?mod=wypozycz&action=edit&sprzet_id='.$model['sprzet_id'] ) ;
        }
    ?>
    </div>
    <div style="clear:both"/>
</div>