<?php
/*Esta función evita ataques XSS, 
mediante la trasnformación de los
carácteres especiales en su versión HTML.*/
function escapar($html) {
  return htmlspecialchars($html, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
}
?>