<?


class UserRegister
{
  // создаем обработчик события 
  public static function OnAfterUserRegisterHandler(&$arFields)
  {
    if ($arFields["UF_ROLE"]=="SELLER_ROLE")
    {
      $arFields["GROUP_ID"] = 6;    
      
    }
    elseif ($arFields["UF_ROLE"]=="BUYER_ROLE")
    {
      $arFields["GROUP_ID"] = 7;    

    }
  }
}
?>