<?php
$model = GetViewModel('klient_form') ;

?>

    <form action="?mod=klient&action=save" method="post" >
      <input type="hidden" value="<?php echo $model['klient_id'] ?>" name="klient_id" />  
      <input type="text" value="<?php echo $model['klient_symbol']  ?>" name="klient_symbol" />  
      <textarea name="klient_nazwa"><?php echo $model['klient_nazwa']  ?></textarea>  
      <textarea name="klient_adres" ><?php echo $model['klient_adres']  ?></textarea>
      <?php
      if( !is_null($model['klient_id']) && $model['klient_id']!=='' )  
      echo '<input type="submit" name="klient_editsubmit" value="zapisz" />' .
      '<input type="submit" name="klient_delsubmit" value="usuń" />';
      else 
       echo '<input type="submit" name="klient_editsubmit" value="dodaj" /> ' ; ?> 
    </form>
