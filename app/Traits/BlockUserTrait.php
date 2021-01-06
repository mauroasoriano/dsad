<?php

namespace App\Traits;

trait BlockUserTrait{

 public function block_by_attempts($name){
  $name = hash('ripemd160', $name);

  if (isset($_COOKIE[$name.'d'])) {
   return true;
  }

  if (isset($_COOKIE[$name.'a'])) {
   if (isset($_COOKIE[$name.'b'])) {
    if (isset($_COOKIE[$name.'c'])) {
     if (isset($_COOKIE[$name.'d'])) {
      return true;
     }else{
      setcookie($name.'d', $name.'d', time() + (60*5));
     }
    }else{
     setcookie($name.'c', $name.'c', time() + (60*1));
    }
   }else{
    setcookie($name.'b', $name.'b', time() + (60*1));
   }
  }else{
   setcookie($name.'a', $name.'a', time() + (60*1));
  }
  #pass
  return false;
 }

}
