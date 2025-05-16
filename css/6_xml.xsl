<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <head>
                <style>
                    table {
                        border-collapse: collapse;
                        width: 100%;
                    }
                    th, td {
                        border: 1px solid black;
                        padding: 8px;
                        text-align: center;
                    }
                    #cgp {
                        background-color: lightcoral;
                    }
                </style>
            </head>
            <body>
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Class</th>
                        <th>CGPA</th>
                    </tr>
                    <xsl:for-each select="Students/stud">
                        <tr>
                            <td><xsl:value-of select="name"/></td>
                            <td><xsl:value-of select="class"/></td>
                            <td>
                                <xsl:choose>
                                    <xsl:when test="cgpa &lt; 8">
                                        <xsl:attribute name="id">cgp</xsl:attribute>
                                    </xsl:when>
                                </xsl:choose>
                                <xsl:value-of select="cgpa"/>
                            </td>
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
