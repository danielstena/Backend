<?php

function createLista($array){
  
  sort($array);
  $antal = count($array);
  
  for ($i = 0; $i < $antal; $i++) {
      echo "Film: $array[$i] <br>";
  } 
  
}
createLista($filmer);