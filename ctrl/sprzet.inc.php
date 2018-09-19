<?php
function Sprzet_Index($get)
{
  _3wd_IncludeModel('sprzet') ;
 
  switch( $get['action'])
  {
    case 'save' :
      {
        //var_export($_POST) ; 
        SprzetModel_Save($_POST) ;
        SprzetCtrl_ViewList();
      }
      break ;
    case 'filtr' :
      SprzetCtrl_ViewList($_POST);
      break ;
    case 'edit' : 
       SprzetCtrl_Edit($get['id']) ;
       break ;
    case 'list' :
    default :
      {
        SprzetCtrl_ViewList(null, $get['order']) ;
      }
  }
}

function SprzetCtrl_ViewList($post,$order)
{
    ShowView('sprzet', 'list', array('sprzet_list', SprzetModel_GetList(DB_PostToFiltrArray($post, SprzetModel_Type(), SprzetModel_Oper() ), $order))) ;
}


function SprzetCtrl_Edit($id)
{
    ShowView('sprzet', 'edit', array('sprzet_item', SprzetModel_GetId($id))) ;
}    
?>