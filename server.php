<?php
header('Content-Type: application/json');

$jsonFilePath = 'dischi.json';

// Funzione per leggere il file JSON e decodificarlo
function readAlbumsFromFile($filePath)
{
  if (!file_exists($filePath)) {
    return [];
  }

  $jsonString = file_get_contents($filePath);
  $albums = json_decode($jsonString, true) ?: [];
  return $albums;
}

function saveAlbumsToFile($filePath, $albums)
{ //JSON_PRETTY_PRINT serve per formattare il file json in modo che sia più leggibile
  file_put_contents($filePath, json_encode($albums, JSON_PRETTY_PRINT));
}

if (isset($_POST['title'])) {
  // La richiesta POST contiene dati dell'album

  // Leggi gli album esistenti dal file
  $list = readAlbumsFromFile($jsonFilePath);

  // Prepara i dati del nuovo album
  $newAlbum = [
    'title' => $_POST['title'],
    'author' => $_POST['author'] ?? '',
    'year' => $_POST['year'] ?? '',
    'genre' => $_POST['genre'] ?? '',
    'poster' => $_POST['poster'] ?? ''
  ];

  // Aggiungi il nuovo album alla lista esistente
  array_push($list, $newAlbum);

  // Salva la lista aggiornata nel file
  saveAlbumsToFile($jsonFilePath, $list);

  // Invia una risposta con i dati del nuovo album
  echo json_encode($newAlbum);
} else {

  // Invia l'elenco degli album esistenti come risposta

  $list = readAlbumsFromFile($jsonFilePath);
  echo json_encode($list);
}
