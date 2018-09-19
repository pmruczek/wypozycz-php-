<?php
$model= GetViewModel('klient_list') ;

ShowPartial('klient', 'filtr') ;
?>
<div>
    <div style="border-left: 1px;width:5%;float:left">ident.</div>
    <div style="border-left:1px;width:15%;float:left">symbol</div>
    <div style="border-left:1px;width:35%;float:left">nazwa</div>
    <div style="border-left:1px;width:35%;float:left">adres</div>
    <div style="border-left:1px;width:10%;float:left">adres</div>
    <div style="clear:both;"/>
</div>
<?php
foreach($model as $item)
{
    ShowPartial('klient', 'list_wiersz', array('klient_list_wiersz', $item )) ;
?>
<?php
}

?>


<a href="?mod=klient&action=edit">dodaj</a>