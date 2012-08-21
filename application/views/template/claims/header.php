<!-- Basic Page Needs
  ================================================== -->
<meta charset="utf-8">

<title><?php if (isset($metatitle) && $metatitle != NULL) {
    echo $metatitle;
} else {
    if(isset($title) && $title != NULL) { 
        echo $title;
    } else {
        echo "Accident Claims and Advice";
    }
} ?></title>
<meta name="description" content="<?php if (isset($meta_description) && $meta_description != NULL) {
    echo $meta_description;
} else {
    echo "Accident Claims and Advice";
} ?>">

<meta name="keywords" content="<?php if (isset($meta_keywords) && $meta_keywords != NULL) {
    echo $meta_keywords;
} else {
    
} ?>">
<meta name="author" content="Redstudio Design Limited">

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="<?= base_url() ?>css/claims/base.css">
<link rel="stylesheet" href="<?= base_url() ?>css/claims/skeleton.css">
<link rel="stylesheet" href="<?= base_url() ?>css/claims/layout.css">
<link rel="stylesheet" href="<?= base_url() ?>css/jqcloud.css">
<link rel="stylesheet" href="<?= base_url() ?>css/claims/template.css">

<!-- Google Web Font
================================================== -->
<link href='http://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Favicons
================================================== -->
<link rel="shortcut icon" href="<?= base_url() ?>images/favicon.ico">
<link rel="apple-touch-icon" href="<?= base_url() ?>images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?= base_url() ?>images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?= base_url() ?>images/apple-touch-icon-114x114.png">



</script>