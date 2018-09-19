<?php

// Filtr panel

?>

<form action="?mod=klient&action=filtr" method="post">
<div>
    <div style="border-left: 1px;width:5%;float:left"><input type="text" name="filtr_klient_id"/></div>
    <div style="border-left: 1px;width:15%;float:left"><input type="text" name="filtr_klient_symbol"/></div>
    <div style="border-left:1px;width:35%;float:left"><input type="text" name="filtr_klient_nazwa"/></div>
    <div style="border-left:1px;width:35%;float:left"><input type="text" name="filtr_klient_adres"/></div>
    <div style="border-left:1px;width:10%;float:left"><input type="submit" name="submit_filtrklient" value="filtruj"/></div>
    <div style="clear:both;"/>
</div>
    
</form>