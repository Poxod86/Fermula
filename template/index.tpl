<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="template/assets/libs/carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="template/assets/libs/notyf/notyf.css">
    <link rel="stylesheet" href="template/assets/libs/carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="template/assets/css/main.css">
    <link rel="stylesheet" href="template/assets/fonts/TTNorms/stylesheet.css">
    
    <title> Fermula | {$page_name}</title>
</head>

<body>

{if $is_logged === true }
  {include file="user/navbar.tpl"} 
  {include file="user/header.tpl"}
  {include file="user/main.tpl"} 
  {include file="user/footer.tpl"}   
{else}
  {include file="guest/main.tpl"} 
{/if}


<script src="template/assets/libs/jquery/jquery.min.js"></script>
<script src="template/assets/libs/carousel/owl.carousel.min.js"></script>
<script src="template/assets/libs/notyf/notyf.js"></script>
<script src="template/assets/js/main.js"></script>


</body>

</html>