<?php

function Wypozycz_Index($get)
{
     _3wd_IncludeModel('wypozycz') ;
  switch($get['action'])
  {
    case 'edit' :
        // wyswietla farmularz dodania nowego wypozyczenia
        {
          $wypozycz_form = array() ;
          if($get['klient_id']!=='')
          {
               $wypozycz_form  = $wypozycz_form + array('klient_id'=>$get['klient_id']) ;
          }
          if($get['sprzet_id']!=='')
          {
               $wypozycz_form  = $wypozycz_form + array('sprzet_id'=>$get['sprzet_id']) ;
          }
          ShowView('wypozycz', 'edit', array( 'wypozycz_form', $wypozycz_form) ) ;
        }
        break ;
    case 'filtr' :
     WypozyczCtrl_ViewList($_POST) ;
     break ;
    case 'save' :
        {
            WypozyczModel_Add($_POST) ;
            WypozyczCtrl_ViewList() ;
        }
        break ;
    case 'back_form' :
        {
            ShowView('wypozycz', 'back_form', array('wypozycz_backform', WypozyczModel_GetId($get['id'])) )  ;
        }
        break ;
    case 'back' :
        {
            //var_export($_POST) ;
            WypozyczModel_Back($_POST);
        }
        header('location: index.php') ;
        break ;
    case 'list' :
    default :
    {
         WypozyczCtrl_ViewList();
    }
  }
}

function WypozyczCtrl_ViewList($post)
{
      AddViewModel( 'wypozycz_list', WypozyczModel_GetList(DB_PostToFiltrArray($post, WypozyczModel_Type(), WypozyczModel_Oper() ) ) ) ;
      ShowView('wypozycz', 'list' ) ;   
    
}

?>