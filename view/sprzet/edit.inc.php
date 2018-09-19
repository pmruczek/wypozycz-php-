<?php
$model = GetViewModel('sprzet_item') ;
//var_export($model) ;

?>
<form action="?mod=sprzet&action=save"  method="post">
<div>
    <span>Ident:</span>
    <?php if(isset($model['sprzet_id']) &&  ($model['sprzet_id']!=='') )
    {
        echo $model['sprzet_id'];
    }
    else
        echo '<input type="hidden" name="sprzet_id" value="'.$model['sprzet_id'].'"/>' ;
    ?> 
</div>
<div>
    <span>Nazwa: </span>
    <input type="text" name="sprzet_nazwa" value="<?php echo $model['sprzet_nazwa'] ?>"/>
</div>
<div>
    <input type="submit" name="sprzet_savesubmit" value="zapisz" />
</div>

</form>