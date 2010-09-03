<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
  <xsl:output method="html"/>

  <xsl:template match="//track">
  <div style="clear:left; width: 300px; padding:5px; 
      margin:5px; background:#ddd;">
	  <xsl:value-of select="/artist/name" />
    </div>    
  </xsl:template>

</xsl:stylesheet>