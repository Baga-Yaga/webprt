<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
    
    <html>
        <style>
            .table{
                border-collapse:collapse;
                width :50%;
                box-shadow : 2px 2px 12px red;
            }
            td, th{
                border : 2px solid black;
                padding :5px;
                color : red;
                font-weight : bold;
                text-align : center;
            }
        </style>
        
        <body>
            <h1> Employees Data in a Tabular Format</h1>
            <table class="table">
                <tr>
                    <th>Name</th>
                    <th>Salary</th>
                </tr>

                <xsl:for-each select="Employees/emp">
                <xsl:sort select="name"/>
                <xsl:if test="salary &gt; 88000">
                    <tr>
                        <td><xsl:value-of select="name"></xsl:value-of></td>
                        <td><xsl:value-of select="salary"></xsl:value-of></td>
                    </tr>
                </xsl:if>
                </xsl:for-each>
            </table>
        </body>
    </html>

    </xsl:template>
</xsl:stylesheet>