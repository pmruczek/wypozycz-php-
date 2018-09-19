<?php


function SprzetModel_Type()
{
    return array('typefiltr_sprzet_id'=>'0',
                'typefiltr_sprzet_nazwa'=>1) ;
}

function SprzetModel_Oper()
{
    return array('operfiltr_sprzet_id'=>'0',
                'operfiltr_sprzet_nazwa'=>1) ;
}



function SprzetModel_GetId($id)
{
    if(isset($id))
      $model = DB_SelectExecute('select sprzet_id, sprzet_nazwa, wypozycz_id from 3wd_sprzet where sprzet_id='.$id) ;
    return $model[0] ;
}

function SprzetModel_GetList($filtr,$order)
{
    $model = DB_SelectExecute('select sprzet_id, sprzet_nazwa, wypozycz_id from 3wd_sprzet ' .
                              DB_WhereFromArray($filtr) .
                              DB_OrderFromArray($order) ) ;
    return $model ;
}


function SprzetModel_Save($model)
{ 
  if(isset($model['sprzet_id']) && $model['sprzet_id']!=='')
    {
        DB_UpdateFromArray( array('table'=> '3wd_sprzet',
                              'columns'=> array('sprzet_nazwa'=>'"'.$model['sprzet_nazwa'].'"', ),
                              'where' => ' sprzet_id='.$model['sprzet_id'], 
                              )
                        ) ;
     }
     else
     {
        DB_InsertFromArray( array('table'=> '3wd_sprzet',
                              'columns'=> array('sprzet_nazwa'=>'"'.$model['sprzet_nazwa'].'"' ),
                              )
                        ) ;
     }
}
?>