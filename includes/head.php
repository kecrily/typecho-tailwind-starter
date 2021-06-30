<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<!DOCTYPE HTML>
<html>

<head>
  <meta charset="<?php $this->options->charset(); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="renderer" content="webkit">
  <meta name="HandheldFriendly" content="true">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title><?php $this->options->title() ?></title>
  <meta name="author" content="<?php $this->author(); ?>" />
  <meta name="description" content="<?php $this->options->description() ?>" />
  <?php $this->header(); ?>
  <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/style.css'); ?>" />
</head>

<body>