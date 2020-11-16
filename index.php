<?php	
	include "getDataFromBitrix.php";
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Тестовое задание</title>
	<link rel="shortcut icon" href="favicon.png" type="image/png">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="fonts/sf_ui_display/style.css">
	<link rel="stylesheet" href="fonts/awesome/Awesome_4.7.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
</head>
<body>
	<?php
		tableLeads($listLeads);
		tableDeals($listDeals);
		tableDeals($listDeals,"EXECUTING");
		tableDeals($listDeals,"WON");
	?>
	<script id="bx24_form_inline" data-skip-moving="true">
       (function(w,d,u,b){w['Bitrix24FormObject']=b;w[b] = w[b] || function(){arguments[0].ref=u;
               (w[b].forms=w[b].forms||[]).push(arguments[0])};
               if(w[b]['forms']) return;
               var s=d.createElement('script');s.async=1;s.src=u+'?'+(1*new Date());
               var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
       })(window,document,'https://b24-ke0xv2.bitrix24.ru/bitrix/js/crm/form_loader.js','b24form');

       b24form({"id":"7","lang":"ru","sec":"w4lhqk","type":"inline"});
</script>
</body>
</html>