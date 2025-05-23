<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">

    <html>
        <style>
            table{
                border-collapse :collapse;
                width :50%;
            }
            th,td{
                border : 2px solid black;
            }

        </style>
        <body>
            <table>
            <tr>
                <th>Name</th>
                <th>Class</th>
                <th>CGPA</th>
            </tr>

            <xsl:for-each select="Students/stud">
            <xsl:sort select="name"/>
            <xsl:if test="cgpa &gt; 8">
                 <tr>
                    <td><xsl:value-of select="name"/></td>
                    <td><xsl:value-of select="class"/></td>
                    <td><xsl:value-of select="cgpa"/></td>
                </tr>

            </xsl:if>
            </xsl:for-each>
            </table>
        </body>
    </html>

    </xsl:template>
</xsl:stylesheet>