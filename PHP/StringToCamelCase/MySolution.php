<?php

function toCamelCase($str){
  $words = preg_split('/[_-]/', $str);

  return array_reduce($words, function ($carry, $word) {
    return $carry . ($carry === '' ? $word : ucfirst($word));
  }, '');
}

// Original kata: https://www.codewars.com/kata/517abf86da9663f1d2000003
// My solution: https://www.codewars.com/kata/reviews/5af529b442d45e8ca300134e/groups/684a6edd21acfac97cddb389
