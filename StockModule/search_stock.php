<?php
require("header.php");
include 'db_lib.php';

$needfooter = 1;
$backlink = "user_home.php"
?>
<?php
//$article = new Article();
//$article->insert_system_sentiment(128, 1);
?>
<br>
<ul id="stock_autocomplete" data-role="listview" data-inset="true" data-filter="true" data-filter-reveal="true" data-filter-placeholder="Search stock...">
   <!--  <li data-filtertext="AAPL Apple Inc."><a href="view_analysis.php?stock=AAPL">Apple Inc. (AAPL)</a></li>
    <li data-filtertext="CSCO Cisco Inc."><a href="view_analysis.php?stock=AAPL">Cisco Inc. (CSCO)</a></li> -->
<li data-filtertext='ATVI Activision Blizzard, Inc'><a href='view_analysis.php?stock=ATVI'>Activision Blizzard, Inc (ATVI)</a></li>
<li data-filtertext='ADBE Adobe Systems Incorporated'><a href='view_analysis.php?stock=ADBE'>Adobe Systems Incorporated (ADBE)</a></li>
<li data-filtertext='ALTR Altera Corporation'><a href='view_analysis.php?stock=ALTR'>Altera Corporation (ALTR)</a></li>
<li data-filtertext='AMZN Amazon.com, Inc.'><a href='view_analysis.php?stock=AMZN'>Amazon.com, Inc. (AMZN)</a></li>
<li data-filtertext='AMGN Amgen Inc.'><a href='view_analysis.php?stock=AMGN'>Amgen Inc. (AMGN)</a></li>
<li data-filtertext='APOL Apollo Group, Inc.'><a href='view_analysis.php?stock=APOL'>Apollo Group, Inc. (APOL)</a></li>
<li data-filtertext='AAPL Apple Inc.'><a href='view_analysis.php?stock=AAPL'>Apple Inc. (AAPL)</a></li>
<li data-filtertext='AMAT Applied Materials, Inc.'><a href='view_analysis.php?stock=AMAT'>Applied Materials, Inc. (AMAT)</a></li>
<li data-filtertext='ADSK Autodesk, Inc.'><a href='view_analysis.php?stock=ADSK'>Autodesk, Inc. (ADSK)</a></li>
<li data-filtertext='BBBY Bed Bath & Beyond Inc.'><a href='view_analysis.php?stock=BBBY'>Bed Bath & Beyond Inc. (BBBY)</a></li>
<li data-filtertext='BIIB Biogen Idec Inc.'><a href='view_analysis.php?stock=BIIB'>Biogen Idec Inc. (BIIB)</a></li>
<li data-filtertext='BRCM Broadcom Corporation'><a href='view_analysis.php?stock=BRCM'>Broadcom Corporation (BRCM)</a></li>
<li data-filtertext='CHRW C.H. Robinson Worldwide, Inc.'><a href='view_analysis.php?stock=CHRW'>C.H. Robinson Worldwide, Inc. (CHRW)</a></li>
<li data-filtertext='CDNS Cadence Design Systems, Inc.'><a href='view_analysis.php?stock=CDNS'>Cadence Design Systems, Inc. (CDNS)</a></li>
<li data-filtertext='CELG Celgene Corporation'><a href='view_analysis.php?stock=CELG'>Celgene Corporation (CELG)</a></li>
<li data-filtertext='CHKP Check Point Software Technologies Ltd.'><a href='view_analysis.php?stock=CHKP'>Check Point Software Technologies Ltd. (CHKP)</a></li>
<li data-filtertext='CTAS Cintas Corporation'><a href='view_analysis.php?stock=CTAS'>Cintas Corporation (CTAS)</a></li>
<li data-filtertext='CSCO Cisco Systems, Inc.'><a href='view_analysis.php?stock=CSCO'>Cisco Systems, Inc. (CSCO)</a></li>
<li data-filtertext='CTXS Citrix Systems, Inc.'><a href='view_analysis.php?stock=CTXS'>Citrix Systems, Inc. (CTXS)</a></li>
<li data-filtertext='CTSH Cognizant Technology Solutions Corporation'><a href='view_analysis.php?stock=CTSH'>Cognizant Technology Solutions Corporation (CTSH)</a></li>
<li data-filtertext='CMCSA Comcast Corporation'><a href='view_analysis.php?stock=CMCSA'>Comcast Corporation (CMCSA)</a></li>
<li data-filtertext='COST Costco Wholesale Corporation'><a href='view_analysis.php?stock=COST'>Costco Wholesale Corporation (COST)</a></li>
<li data-filtertext='DELL Dell Inc.'><a href='view_analysis.php?stock=DELL'>Dell Inc. (DELL)</a></li>
<li data-filtertext='XRAY DENTSPLY International Inc.'><a href='view_analysis.php?stock=XRAY'>DENTSPLY International Inc. (XRAY)</a></li>
<li data-filtertext='DISCA Discovery Communications, Inc.'><a href='view_analysis.php?stock=DISCA'>Discovery Communications, Inc. (DISCA)</a></li>
<li data-filtertext='DISH DISH Network Corporation'><a href='view_analysis.php?stock=DISH'>DISH Network Corporation (DISH)</a></li>
<li data-filtertext='EBAY eBay Inc.'><a href='view_analysis.php?stock=EBAY'>eBay Inc. (EBAY)</a></li>
<li data-filtertext='EXPE Expedia, Inc.'><a href='view_analysis.php?stock=EXPE'>Expedia, Inc. (EXPE)</a></li>
<li data-filtertext='EXPD Expeditors International of Washington, Inc.'><a href='view_analysis.php?stock=EXPD'>Expeditors International of Washington, Inc. (EXPD)</a></li>
<li data-filtertext='ESRX Express Scripts Holding Company'><a href='view_analysis.php?stock=ESRX'>Express Scripts Holding Company (ESRX)</a></li>
<li data-filtertext='FB Facebook, Inc.'><a href='view_analysis.php?stock=FB'>Facebook, Inc. (FB)</a></li>
<li data-filtertext='FAST Fastenal Company'><a href='view_analysis.php?stock=FAST'>Fastenal Company (FAST)</a></li>
<li data-filtertext='FISV Fiserv, Inc.'><a href='view_analysis.php?stock=FISV'>Fiserv, Inc. (FISV)</a></li>
<li data-filtertext='FLEX Flextronics International Ltd.'><a href='view_analysis.php?stock=FLEX'>Flextronics International Ltd. (FLEX)</a></li>
<li data-filtertext='GRMN Garmin Ltd.'><a href='view_analysis.php?stock=GRMN'>Garmin Ltd. (GRMN)</a></li>
<li data-filtertext='GILD Gilead Sciences, Inc.'><a href='view_analysis.php?stock=GILD'>Gilead Sciences, Inc. (GILD)</a></li>
<li data-filtertext='GLUU Glu Mobile Inc.'><a href='view_analysis.php?stock=GLUU'>Glu Mobile Inc. (GLUU)</a></li>
<li data-filtertext='GOOG Google Inc.'><a href='view_analysis.php?stock=GOOG'>Google Inc. (GOOG)</a></li>
<li data-filtertext='IACI IAC/InterActiveCorp'><a href='view_analysis.php?stock=IACI'>IAC/InterActiveCorp (IACI)</a></li>
<li data-filtertext='INTC Intel Corporation'><a href='view_analysis.php?stock=INTC'>Intel Corporation (INTC)</a></li>
<li data-filtertext='INTU Intuit Inc.'><a href='view_analysis.php?stock=INTU'>Intuit Inc. (INTU)</a></li>
<li data-filtertext='JDSU JDS Uniphase Corporation'><a href='view_analysis.php?stock=JDSU'>JDS Uniphase Corporation (JDSU)</a></li>
<li data-filtertext='KLAC KLA-Tencor Corporation'><a href='view_analysis.php?stock=KLAC'>KLA-Tencor Corporation (KLAC)</a></li>
<li data-filtertext='LRCX Lam Research Corporation'><a href='view_analysis.php?stock=LRCX'>Lam Research Corporation (LRCX)</a></li>
<li data-filtertext='LAMR Lamar Advertising Company'><a href='view_analysis.php?stock=LAMR'>Lamar Advertising Company (LAMR)</a></li>
<li data-filtertext='LBTYA Liberty Global, Inc.'><a href='view_analysis.php?stock=LBTYA'>Liberty Global, Inc. (LBTYA)</a></li>
<li data-filtertext='LLTC Linear Technology Corporation'><a href='view_analysis.php?stock=LLTC'>Linear Technology Corporation (LLTC)</a></li>
<li data-filtertext='MRVL Marvell Technology Group Ltd.'><a href='view_analysis.php?stock=MRVL'>Marvell Technology Group Ltd. (MRVL)</a></li>
<li data-filtertext='MXIM Maxim Integrated Products, Inc.'><a href='view_analysis.php?stock=MXIM'>Maxim Integrated Products, Inc. (MXIM)</a></li>
<li data-filtertext='MCHP Microchip Technology Incorporated'><a href='view_analysis.php?stock=MCHP'>Microchip Technology Incorporated (MCHP)</a></li>
<li data-filtertext='MSFT Microsoft Corporation'><a href='view_analysis.php?stock=MSFT'>Microsoft Corporation (MSFT)</a></li>
<li data-filtertext='MNST Monster Beverage Corporation'><a href='view_analysis.php?stock=MNST'>Monster Beverage Corporation (MNST)</a></li>
<li data-filtertext='NTAP NetApp, Inc.'><a href='view_analysis.php?stock=NTAP'>NetApp, Inc. (NTAP)</a></li>
<li data-filtertext='NIHD NII Holdings, Inc.'><a href='view_analysis.php?stock=NIHD'>NII Holdings, Inc. (NIHD)</a></li>
<li data-filtertext='NVDA NVIDIA Corporation'><a href='view_analysis.php?stock=NVDA'>NVIDIA Corporation (NVDA)</a></li>
<li data-filtertext='ORCL Oracle Corporation'><a href='view_analysis.php?stock=ORCL'>Oracle Corporation (ORCL)</a></li>
<li data-filtertext='PCAR PACCAR Inc.'><a href='view_analysis.php?stock=PCAR'>PACCAR Inc. (PCAR)</a></li>
<li data-filtertext='PDCO Patterson Companies, Inc.'><a href='view_analysis.php?stock=PDCO'>Patterson Companies, Inc. (PDCO)</a></li>
<li data-filtertext='PTEN Patterson-UTI Energy, Inc.'><a href='view_analysis.php?stock=PTEN'>Patterson-UTI Energy, Inc. (PTEN)</a></li>
<li data-filtertext='PAYX Paychex, Inc.'><a href='view_analysis.php?stock=PAYX'>Paychex, Inc. (PAYX)</a></li>
<li data-filtertext='PETM PetSmart, Inc'><a href='view_analysis.php?stock=PETM'>PetSmart, Inc (PETM)</a></li>
<li data-filtertext='QCOM QUALCOMM Incorporated'><a href='view_analysis.php?stock=QCOM'>QUALCOMM Incorporated (QCOM)</a></li>
<li data-filtertext='ROST Ross Stores, Inc.'><a href='view_analysis.php?stock=ROST'>Ross Stores, Inc. (ROST)</a></li>
<li data-filtertext='SNDK SanDisk Corporation'><a href='view_analysis.php?stock=SNDK'>SanDisk Corporation (SNDK)</a></li>
<li data-filtertext='SHLD Sears Holdings Corporation'><a href='view_analysis.php?stock=SHLD'>Sears Holdings Corporation (SHLD)</a></li>
<li data-filtertext='SIRI Sirius XM Radio Inc.'><a href='view_analysis.php?stock=SIRI'>Sirius XM Radio Inc. (SIRI)</a></li>
<li data-filtertext='SPLS Staples, Inc.'><a href='view_analysis.php?stock=SPLS'>Staples, Inc. (SPLS)</a></li>
<li data-filtertext='SBUX Starbucks Corporation'><a href='view_analysis.php?stock=SBUX'>Starbucks Corporation (SBUX)</a></li>
<li data-filtertext='SYMC Symantec Corporation'><a href='view_analysis.php?stock=SYMC'>Symantec Corporation (SYMC)</a></li>
<li data-filtertext='TLAB Tellabs, Inc.'><a href='view_analysis.php?stock=TLAB'>Tellabs, Inc. (TLAB)</a></li>
<li data-filtertext='URBN Urban Outfitters, Inc.'><a href='view_analysis.php?stock=URBN'>Urban Outfitters, Inc. (URBN)</a></li>
<li data-filtertext='VRSN VeriSign, Inc.'><a href='view_analysis.php?stock=VRSN'>VeriSign, Inc. (VRSN)</a></li>
<li data-filtertext='WYNN Wynn Resorts, Limited'><a href='view_analysis.php?stock=WYNN'>Wynn Resorts, Limited (WYNN)</a></li>
<li data-filtertext='XLNX Xilinx, Inc.'><a href='view_analysis.php?stock=XLNX'>Xilinx, Inc. (XLNX)</a></li>
<li data-filtertext='YHOO Yahoo! Inc.'><a href='view_analysis.php?stock=YHOO'>Yahoo! Inc. (YHOO)</a></li>
<li data-filtertext='ZNGA Zynga Inc.'><a href='view_analysis.php?stock=ZNGA'>Zynga Inc. (ZNGA)</a></li>

</ul>

<?php
require("footer.php");
?>