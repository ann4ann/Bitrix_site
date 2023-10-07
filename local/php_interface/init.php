<?include("include/addUserToGroup.php")?>

<?
RegisterModuleDependences(
  "main", 
  "OnAfterUserRegister", 
  "my_module_id", 
  "UserRegister", 
  "OnAfterUserRegisterHandler"
);
?>