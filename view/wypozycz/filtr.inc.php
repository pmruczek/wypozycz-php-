<?php

// Filtr panel

?>

<form action="?mod=wypozycz&action=filtr" method="post">
<div>
    <div style="border-left: 1px;width:5%;float:left"><input type="text" name="filtr_w@wypozycz_id"/></div>
    <div style="border-left:1px;width:5%;float:left"><input type="text" name="filtr_w@klient_id"/></div>
    <div style="border-left:1px;width:25%;float:left"><input type="text" name="filtr_k@klient_nazwa"/></div>
    <div style="border-left:1px;width:5%;float:left"><input type="text" name="filtr_w@sprzet_id"/></div>
    <div style="border-left:1px;width:25%;float:left"><input type="text" name="filtr_s@sprzet_nazwa"/></div>
    <div style="border-left:1px;width:10%;float:left"><input type="text" name="filtr_w@wypozycz_data"/></div>
    <div style="border-left:1px;width:10%;float:left"><input type="text" name="filtr_w@wypozycz_datazwrotu"/></div>
    <div style="border-left:1px;width:10%;float:left"><input type="submit" name="submit_filtrwypozycz" value="filtruj"/></div>
    <div style="clear:both;"/>
</div>
    
</form>
