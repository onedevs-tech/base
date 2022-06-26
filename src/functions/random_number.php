<?php

   function random_number($length = 22)
   {
      $random_number = '';
      for ($i=0; $i<$length; $i++) {
         $random_number .= \rand(0, 9);
      }
      return $random_number;
   }
