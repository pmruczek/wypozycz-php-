<?php

$model = GetViewModel('wypozycz_list') ;

ShowPartial('wypozycz', 'filtr') ;
?>

<div>
<div>
    <div style="border-left: 1px;width:5%;float:left">Ident. wypozycz</div>
    <div style="border-left:1px;width:5%;float:left">Ident. klienta</div>
    <div style="border-left:1px;width:25%;float:left">Symbol. klienta</div>
    <div style="border-left:1px;width:5%;float:left">Ident. sprzetu</div>
    <div style="border-left:1px;width:25%;float:left">Nazwa. sprzetu</div>
    <div style="border-left:1px;width:10%;float:left">Data wypozyczenia</div>
    <div style="border-left:1px;width:10%;float:left">data zwrotu</div>
    <div style="clear:both;"/>
</div>
<?php


  foreach($model as $item)
  {
    ShowPartial('wypozycz','list_wiersz', array('wypozycz_list_wiersz', $item)) ;
  }
?>
<div>
    <a href="?mod=wypozycz&action=edit">dodaj wypozyczenie</a>
</div>
</div>