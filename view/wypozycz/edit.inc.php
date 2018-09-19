<?php
$model = GetViewModel('wypozycz_form') ;
?>

    <form action="?mod=wypozycz&action=save" method="post" >
      <input type="hidden" value="<?php echo $model['wypozycz_id'] ?>" name="wypozycz_id" />
      <div>
      <span>Data: </span>
      <?php if( isset($model['wypozycz_data']) && $model['wypozycz_data']!=='' )
      {
        echo '<input type="text" value="'.$model['wypozycz_data'].'" name="wypozycz_data" />' ;
        echo '<input type="submit" name="wypozycz_back" value="zwrot"/>' ;
      } else
      {
        echo '<input type="text" value="'.date('Y-m-d H:i:s').'" name="wypozycz_data" />' ;
      }
      ?>
      </div>
      <div>
        <span>Sprzęt: </span>
      <select name="sprzet_id"><option value="0">-- wybierz --</option>
        <?php echo DB_SelectOptions('select sprzet_id, sprzet_nazwa from 3wd_sprzet',$model['sprzet_id']) ; ?>
      </select>
      </div>
      <div>
        <span>Klient: </span>
      <select name="klient_id"><option value="0">-- wybierz --</option>
        <?php echo DB_SelectOptions('select klient_id, klient_symbol from 3wd_klient',$model['klient_id']) ; ?>
      </select>
      <a href="?mod=klient&action=edit">dodaj</a>
      </div>
      <div>
      <input type="submit" name="wypozycz_addsubmit" value="dodaj" />
      </div>
    </form>
