<?php


function WypozyczModel_Type()
{
    return array('typefiltr_w@wypozycz_id'=>'0',
                 'typefiltr_w@klient_id'=>'0',
                 'typefiltr_k@klient_nazwa'=>'1',
                 'typefiltr_w@sprzet_id'=>'0',
                 'typefiltr_s@sprzet_nazwa'=>'1',
                 'typefiltr_w@wypozycz_data'=>'2',
                 'typefiltr_w@wypozycz_datazwrotu'=>'2',
                ) ;
}

function WypozyczModel_Oper()
{
    return array('operfiltr_w@wypozycz_id'=>'0',
                 'operfiltr_w@klient_id'=>'0',
                 'operfiltr_k@klient_nazwa'=>'1',
                 'operfiltr_w@sprzet_id'=>'0',
                 'operfiltr_s@sprzet_nazwa'=>'1',
                 'operfiltr_w@wypozycz_data'=>'0',
                 'operfiltr_w@wypozycz_datazwrotu'=>'0',
                ) ;
}


function WypozyczModel_GetList($filter)
{
  $model =  DB_SelectExecute('select w.wypozycz_id, w.klient_id, w.sprzet_id, w.wypozycz_data, w.wypozycz_datazwrotu,'.
                             's.sprzet_nazwa,'.
                             'k.klient_symbol, k.klient_nazwa, k.klient_adres '.
                             'from 3wd_wypozycz w '.
                             'left join 3wd_sprzet s on s.sprzet_id=w.sprzet_id '.
                             'left join 3wd_klient k on k.klient_id = w.klient_id '.
                             DB_WhereFromArray($filter) . 
                             ' order by w.wypozycz_data desc, w.wypozycz_id desc') ;
  //var_export($model);
  return  $model ;
}

function WypozyczModel_GetId($id)
{
    $model = DB_SelectExecute('select w.wypozycz_id, w.klient_id, w.sprzet_id, w.wypozycz_data, w.wypozycz_datazwrotu,'.
                             ' s.sprzet_nazwa,'.
                             ' k.klient_symbol, k.klient_nazwa, k.klient_adres '.
                             ' from 3wd_wypozycz w '.
                             ' left join 3wd_sprzet s on s.sprzet_id=w.sprzet_id '.
                             ' left join 3wd_klient k on k.klient_id = w.klient_id '.
                             ' where w.wypozycz_id='.$id . 
                             ' order by w.wypozycz_data desc, w.wypozycz_id desc '   
                             ) ;
    //var_export($model[0]) ;
    //exit;
    return $model[0] ;
}

function WypozyczModel_Back($model)
{
 
    DB_QueryExecute('update 3wd_wypozycz set wypozycz_datazwrotu="'.$model['wypozycz_datazwrotu'].'" where wypozycz_id='.$model['wypozycz_id']);
    //DB_QueryExecute('');
    $sql = 'update 3wd_sprzet set wypozycz_id=0 where sprzet_id='.$model['sprzet_id'] ;
    DB_QueryExecute($sql);
}

function WypozyczModel_Add($post)
{
    DB_InsertFromArray( array('table'=> '3wd_wypozycz',
                              'columns'=> array( 'klient_id'=> $post['klient_id'],
                                                'sprzet_id' => $post['sprzet_id'],
                                                'wypozycz_data' => '"'.$post['wypozycz_data'].'"', 
                                                ))
                       ) ;
    $lastId = DB_LastInsertedID() ;
    if(isset($lastId) and $lastId !== '' )
    {
      DB_QueryExecute('update 3wd_sprzet set wypozycz_id='.$lastId.' where sprzet_id='.$post['sprzet_id'] ) ;

    }
}

?>