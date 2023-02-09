<?php

function convertSize($bytes, $precision = 2) {
  // on déclare un tableau avec les différentes métriques pour les tailles de fichiers
  $sizeArray = ["KB", "MB", "GB", "TB", "PB", "EB", "ZB", "YB"];
  // on part du postulat de base qu'aucune division possible = c'est un fichier de x B
  $metric = 'B';
  if($bytes < 1024) return $bytes . " {$metric}";
  
  // tant que x est divisible par 1024, on peut simplifier l'écriture de sa taille 
  // $i permet d'accéder à la bonne métrique dans le tableau, c'est pour cela qu'on part de $i = 0 et non 1
  for ($i=0; $bytes >= 1024 ; $i++) { 
    $bytes = $bytes / 1024;
    $metric = $sizeArray[$i];
  }
  // l'utilisation finale d'une variable permet de rendre la fonction dynamique tant que l'on respecte le tableau
  // des sécurités supplémentaires seraient nécessaires pour ne pas casser le script avec un fichier trop grand
  return round($bytes, $precision) . " {$metric}"; 
}
