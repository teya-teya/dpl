<?php
$url = explode("/", $_SERVER['REQUEST_URI']);

if ($url[1] == "v_asaeva") {
  $content = file_get_contents("pages/index.html");
} else if ($url[1] == "gallery") {
  $content = file_get_contents("pages/gallery.html");
} else if ($url[1] == "black&white") {
  $content = file_get_contents("pages/blackwhite.html");
} else if ($url[1] == "colour") {
  $content = file_get_contents("pages/colour.html");
} else if ($url[1] == "public") {
  $content = file_get_contents("pages/public.html");
} else if ($url[1] == "services") {
  $content = file_get_contents("pages/services.html");
} else if ($url[1] == "reviews") {
  $content = file_get_contents("pages/reviews.html");
} else if ($url[1] == "contacts") {
  $content = file_get_contents("pages/contacts.html");
} else {
  $content = file_get_contents("pages/index.html");
}
if (!empty($content))
  require_once("template.php");