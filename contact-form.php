<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Empfänger-E-Mail-Adresse
  $to = 'paalwie@outlook.de';

  // Formulardaten auslesen
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // E-Mail-Inhalt zusammenstellen
  $subject = 'Kontaktformular Nachricht';
  $body = "Name: $name\nE-Mail: $email\nNachricht:\n$message";
  $headers = 'From: ' . $email . "\r\n" . 'Reply-To: ' . $email . "\r\n" . 'Content-Type: text/plain; charset=UTF-8';

  // E-Mail versenden
  if (mail($to, $subject, $body, $headers)) {
    echo 'Vielen Dank für Ihre Nachricht!';
  } else {
    echo 'Beim Senden der Nachricht ist ein Fehler aufgetreten.';
  }
}

