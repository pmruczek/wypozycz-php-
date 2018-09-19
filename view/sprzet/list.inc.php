<?php
$model = GetViewModel('sprzet_list');

ShowPartial('sprzet', 'filtr' ) ;

?>

<div>
    <div style="float:left;width:5%;">Ident:
      <div style="position:relative;top:0px;left:50px;width:5px;height:5px">
        <span style="font-size:0.5em;">
            <?php echo _3wd_Link('asc', '?mod=sprzet&action=list&order=1-a') ?>
        </span>
      </div>
      <div style="position:relative;top:6px;left:50px;width:5px;height:5px">
        <span style="font-size:0.5em;">
            <?php echo _3wd_Link('desc', '?mod=sprzet&action=list&order=1-d') ?>
        </span>
      </div>
    </div>
    <div style="float:left;width:35%;">Nazwa
      <div style="position:relative;top:0px;left:50px;width:5px;height:5px">
        <span style="font-size:0.5em;">
            <?php echo _3wd_Link('asc', '?mod=sprzet&action=list&order=2-a') ?>
        </span>
      </div>
      <div style="position:relative;top:6px;left:50px;width:5px;height:5px">
        <span style="font-size:0.5em;">
            <?php echo _3wd_Link('desc', '?mod=sprzet&action=list&order=2-d') ?>
        </span>
      </div>
    </div>
    <div style="float:left;width:10%;">akcja</div>
    <div style="clear:both"/>
</div>

<?php
foreach($model as $item)
{
    ShowPartial('sprzet', 'list_wiersz', array('sprzet_item', $item)) ;
}


echo _3wd_Link('dodaj', '?mod=sprzet&action=edit' ) ;
?>
