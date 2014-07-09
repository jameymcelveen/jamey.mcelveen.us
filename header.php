<?php
/**
 * Created by PhpStorm.
 * User: jameymcelveen
 * Date: 7/9/14
 * Time: 1:41 AM
 */
$dir    = '/articles';
$articles = scandir($dir);

print_r($articles);
?>
<html>
<head>
    <title>Jamey McElveen</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>