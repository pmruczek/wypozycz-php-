<?php

function Klient_Index($get)
{
  _3wd_IncludeModel('klient') ;
  switch( $get['action'])
  {
    case 'save' :
      {
        //var_export($_POST) ;
        KlientModel_Save($_POST) ;
        KlientCtrl_ViewList();
      }
      break ;
    case 'filtr' :
        KlientCtrl_ViewList($_POST);
      break ;
    case 'edit' : 
       KlientCtrl_Edit($get['id']) ;
       break ;
    case 'list' :
    default :
      {
        KlientCtrl_ViewList() ;
      }
  }
}


function KlientCtrl_ViewList($post)
{
      
  AddViewModel('klient_list', KlientModel_List(DB_PostToFiltrArray($post, KlientModel_Type(), KlientModel_Oper())) ) ;
  ShowView( 'klient', 'list') ;
}

function KlientCtrl_Edit($id)
{
  AddViewModel( 'klient_form', KlientModel_GetId($id) ) ;
  ShowView( 'klient', 'edit' ) ;
  
}



?>