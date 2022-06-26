<?php

   function separator($pixels = 100, $spaces = 0)
   {
      $spaces = \str_repeat(' ', $spaces);

      $separator = <<<HTML


{$spaces}<!-- SEPARATOR --><div style="height: {$pixels}px;"></div>
HTML;

      return $separator;
   }
