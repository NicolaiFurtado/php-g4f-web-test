<?php
/**
 * Created by PhpStorm.
 * Project: g4f-php
 * File: header.php
 * User: Nicolai
 * Date: 21/06/2023
 * Time: 22:10
 */

/**
 * @var $ARCHIVE_IN_USE
 */

$ARCHIVE_IN_USE = 'header.php';
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- /BOOTSTRAP -->

    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- /FONTAWESOME -->

    <!-- SYSTEM_STYLE -->
    <link rel="stylesheet" href="<?=base_url('public/system/css/style.css')?>" />
    <!-- /SYSTEM_STYLE -->
    <title>Prova Prática - Nicolai Furtado</title>
</head>
<body>
