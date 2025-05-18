<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
      xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

  <xsl:output method="html" indent="yes"/>

  <xsl:template match="/">
    <html>
      <body>
        <h2>XPath Axes Demo</h2>

        <!-- child::book -->
        <h3>Books (child::book)</h3>
        <ul>
          <xsl:for-each select="library/child::book">
            <li>
              <b>Title:</b> <xsl:value-of select="child::title"/><br/>
              <b>Language:</b> <xsl:value-of select="attribute::lang"/>
            </li>
          </xsl:for-each>
        </ul>

        <!-- descendant::price -->
        <h3>Prices (descendant::price)</h3>
        <ul>
          <xsl:for-each select="library/descendant::details">
            <li><xsl:value-of select="."/></li>
            <!-- <li><xsl:value-of select="."/>Price:</li> -->
          </xsl:for-each>
        </ul>

        <!-- child::*/child::price -->
        <h3>Prices via child::*/child::price</h3>
        <ul>
          <xsl:for-each select="library/book/child::*/child::address">
            <li><xsl:value-of select="."/></li>
          </xsl:for-each>
        </ul>

        <!-- ancestor::library (fixed) -->
        <h3>Title and its Ancestor Library</h3>
        <ul>
          <xsl:for-each select="library/book/title">
            <li>
              <xsl:variable name="lib" select="ancestor::library"/>
              <b><xsl:value-of select="."/></b> belongs to:
              <xsl:value-of select="name($lib)"/>
            </li>
          </xsl:for-each>
        </ul>

        <!-- ancestor-or-self::book -->
        <h3>Ancestor-or-self of Title</h3>
        <ul>
          <xsl:for-each select="library/book/title">
            <li>
              <b><xsl:value-of select="."/></b> is inside book with language:
              <xsl:value-of select="ancestor-or-self::book/@lang"/>
            </li>
          </xsl:for-each>
        </ul>

      </body>
    </html>
  </xsl:template>

</xsl:stylesheet>
