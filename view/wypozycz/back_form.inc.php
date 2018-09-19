<?php
$model = GetViewModel('wypozycz_backform') ;

?>
<div><?php echo $model['wypozycz_id']?></div>
<div><?php echo $model['wypozycz_data'] ?></div>
<div><?php echo $model['klient_symbol'] ?></div>
<div><?php echo $model['sprzet_nazwa'] ?></div>

    <form action="?mod=wypozycz&action=back" method="post" >
      <input type="hidden" value="<?php echo $model['wypozycz_id'];?>" name="wypozycz_id" />
      <input type="hidden" value="<?php echo $model['sprzet_id'];?>" name="sprzet_id" />
      <input type="text" value="<?php echo date('Y-m-d H:i:s') ?>" name="wypozycz_datazwrotu" />
      <input type="submit" value="zwrot" name="wypozycz_backsubmit" />
    </form>
