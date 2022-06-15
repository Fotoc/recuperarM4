<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
  <xsl:template match="/">
  <html>
    <head>
      <title>Pelicules</title>
      <link rel="stylesheet" href="../pelis.css"/>
       <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      
    </head>

  <body>
    <header>
      <h1 class="pelicules">Pelicules Disponibles</h1>
        <ul>
          <li id="llista"><a href="../pelis.php"> Llista</a></li>
          <li><a href="../pelicules.php">Torna al principi</a></li>
  </ul> 
      </header>
    <div id="pelis">
      <xsl:for-each select="pelicules/pelicula">
      <xsl:sort select="titol"></xsl:sort>
      <div class="pelis1">
        <h4>Titol: <span><xsl:value-of select="titol"></xsl:value-of></span></h4>
        <h4>Any: <span><xsl:value-of select="any"></xsl:value-of></span></h4>
        <h4>Gènere: <span><xsl:value-of select="genere"></xsl:value-of></span></h4>
        <img id="foto" src="img/{foto}" alt="pelis"/>
        <li id="llista"><a href="../afegeix.php">Afegeix</a></li>
      </div>
        </xsl:for-each>
  </div>
   <script src="../javaS/algo.js"></script>
      </body>
  </html>
  </xsl:template>
</xsl:stylesheet>
