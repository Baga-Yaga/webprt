<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
    xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

  <xsl:output method="html" indent="yes"/>

  <xsl:template match="/">
    <html>
      <body>
        <h2>XPath Functions Demo</h2>

        <ul>
          <xsl:for-each select="library/book">
            <li>
              <b>Title:</b> <xsl:value-of select="title"/><br/>

              <!-- string-length() -->
              <b>Title Length:</b> <xsl:value-of select="string-length(title)"/><br/>

              <!-- contains() -->
              <b>Contains 'Java'?</b> 
              <xsl:choose>
                <xsl:when test="contains(title, 'Java')">Yes</xsl:when>
                <xsl:otherwise>No</xsl:otherwise>
              </xsl:choose><br/>

              <!-- starts-with() -->
              <b>Starts with 'Python'?</b> 
              <xsl:choose>
                <xsl:when test="starts-with(title, 'Python')">Yes</xsl:when>
                <xsl:otherwise>No</xsl:otherwise>
              </xsl:choose><br/>

              <!-- substring() -->
              <b>First 5 characters:</b> <xsl:value-of select="substring(title, 1, 5)"/><br/>

              <!-- translate() -->
              <b>Remove vowels:</b> <xsl:value-of select="translate(title, 'aeiouAEIOU', '')"/><br/>

              <!-- concat() -->
              <b>Author Line:</b> <xsl:value-of select="concat('Author: ', author)"/><br/>

              <!-- position() -->
              <b>Book #</b> <xsl:value-of select="position()"/>
            </li>
            <br/>
          </xsl:for-each>
        </ul>

      </body>
    </html>
  </xsl:template>

</xsl:stylesheet>
