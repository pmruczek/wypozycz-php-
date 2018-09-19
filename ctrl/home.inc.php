<?php


/// ogólne

/// akcje: 
/// edit - edycja danych, dodanie nowego
/// list - lista, grid
/// save - zapis danych
/// delete - usuniecie wiersza

/// formy:
/// edit - edycja danych
/// list - lista
/// list_wiersz - lista dla jednego rekordu



function Home_Index($get)
{
  switch($get['mod'])
  {
    case 'sprzet' :
        {
            _3wd_IncludeCtrl('sprzet') ;
            Sprzet_Index($get) ;
        }
        break ;
    case 'klient' :
        {
            _3wd_IncludeCtrl('klient') ;
            Klient_Index($get) ;
        }
        break ;
    case 'wypozycz':
    default :
        {
            _3wd_IncludeCtrl('wypozycz') ;
            Wypozycz_Index($get) ;
        }
  }
}

?>