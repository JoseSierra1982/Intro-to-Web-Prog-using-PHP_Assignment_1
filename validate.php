<?php
class validate
{
  public function checkEmpty($data)
  {
    $msg = null;
    foreach ($data as $key => $value)
     {
      if (empty($value))
       {
        $msg .= "<p>$key field empty</p>";
       }
     }
    return $msg;
  }

  
  public function validCustomer($customer)
  {
    $lenr = strlen($customer);
    if ($lenr <= 25)
    {
      return true;
    }else
    {
      return false;
    }
  }
  // check to see if our email follows the email format
  public function validEmail($email)
  {
    if (filter_var($email, FILTER_VALIDATE_EMAIL))
    {
      return true;
    }
    return false;
  }
 
  public function validBank_id($bank_id)
  {
    $id = strlen($bank_id);
    if($id == 6)
    {
        return true;
    }
    return false;
  }
  public function validBank_acct($bank_acct)
  {
    $id = strlen($bank_acct);
    if($id == 6)
    {
        return true;
    }
    return false;
  }
  public function validBalance($balance)
  {
    if($balance < 0)
    {
        return false;
    }
    return true;

  }

















}
?>