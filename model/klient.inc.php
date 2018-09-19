<?php

function KlientModel_Type()
{
    return array('typefiltr_klient_id'=>'0',
                'typefiltr_klient_nazwa'=>1,
                'typefiltr_klient_symbol'=>1,
                'typefiltr_klient_adres'=>1,
                ) ;
}

function KlientModel_Oper()
{
    return array('operfiltr_klient_id'=>'0',
                'operfiltr_klient_nazwa'=>1,
                'operfiltr_klient_symbol'=>1,
                'operfiltr_klient_adres'=>1,
                ) ;
}

function KlientModel_GetId($id)
{
    if(isset($id))
    $model = DB_SelectExecute('select klient_id, klient_symbol, klient_nazwa, klient_nazwa, klient_adres ' .
                            ' from 3wd_klient '. 
                            ' where klient_id = ' . $id  ) ;
    //var_export($model[0]);
    return $model[0] ;
}

function KlientModel_List($filtr)
{
    return DB_SelectExecute('select klient_id, klient_symbol, klient_nazwa, klient_nazwa, klient_adres
                            from 3wd_klient' .
                            DB_WhereFromArray($filtr) . '
                            order by klient_symbol  ' ) ;
    
}

function KlientModel_Save($model)
{
    if( isset( $model['klient_delsubmit']) && ($model['klient_delsubmit'] !== '' ) )
    {
        KlientModel_Delete($model['klient_id'] ) ;
    }
    if( isset( $model['klient_editsubmit']) && ($model['klient_editsubmit'] !== '' ) )
    {
        if(isset($model['klient_id']) && $model['klient_id']!== '' )
        {
        $array =             array('table'=>'3wd_klient',
                  'columns'=>array(
                                   'klient_symbol'=> '"'.$model['klient_symbol'].'"' ,
                                   'klient_nazwa'=> '"'.$model['klient_nazwa'].'"'  ,
                                   'klient_adres'=> '"'.$model['klient_adres'].'"'  ,
                                   ),
                  'where'=>'klient_id='.$model['klient_id']
                 ) ;
        DB_UpdateFromArray( $array )  ;
        }
        else
        {
        $array =             array('table'=>'3wd_klient',
                  'columns'=>array(
                                   'klient_symbol'=> '"'.$model['klient_symbol'].'"' ,
                                   'klient_nazwa'=> '"'.$model['klient_nazwa'].'"'  ,
                                   'klient_adres'=> '"'.$model['klient_adres'].'"'  ,
                                   ),
                 ) ;
        DB_InsertFromArray( $array )  ;
        }
    }
}

function KlientModel_Delete($id)
{
      DB_SelectExecute('delete from 3wd_klient where klient_id = ' . $id ) ;  
    
}

?>