<html>
<head>
  <title>XML Parser</title>
</head>
<body>
  <h2>Enter XML Code Here :</h2>
  <form action="" method="post">
    <textarea name="xml" rows="10" cols="50"></textarea><br/>
    <input type="submit" value="Submit"/>
  </form>

<?php

  if(!empty($_POST["xml"])) {
    libxml_disable_entity_loader (false); 
    $xmlfile = $_POST["xml"];
    $dom = new DOMDocument();
    $dom->loadXML($xmlfile, LIBXML_NOENT | LIBXML_DTDLOAD);
    $book = simplexml_import_dom($dom);
  }

?>

</body>
</html>
