<?php 
use Language\Lang;
use Admin\SearchEngine;

Lang::setSection('administration');
$title = $_APP['app_name'] .' > '. Lang::getKey('administration');
Lang::setSection('admin_search_engines');
$title = $title .' > '. Lang::getKey('edit_search_engine');
?>

<!DOCTYPE html>
<html>
    <head>
        <?php include("res/php/head.php"); ?>
        <link rel="stylesheet" href="res/css/page.css" />
        <link rel="stylesheet" href="res/css/admin/main.css" />
        <link rel="stylesheet" href="res/css/admin/search-engines.css" />
        <title><?= $title ?></title>
    </head>

    <body>
        <?php include("res/php/header.php"); ?>
        <?php Lang::setSection('admin_search_engines'); ?>
        <script>setCurrentPage('#accountPage');</script>
		
		<div class="presentation" style="background-image: url(res/img/login.png);">
			<h1><?= Lang::getKey('edit_search_engine'); ?></h1>
		</div>
		
		<div class="page">
            <?php
            ?>
            <h1><?= Lang::getKey('edit_search_engine'); ?></h1>
            <?php
            if(isset($_POST['status']))
            {
                $status = $_POST['status'];
                $bgColor = '';
                $msg = '';
                if(isset($status['success']))
                {
                    $bgColor = 'green';
                    $msg = $status['success'];
                }
                else if(isset($status['error']))
                {
                    $bgColor = 'red';
                    $msg = $status['error'];
                }
                else if(isset($status['warning']))
                {
                    $bgColor = 'orange';
                    $msg = $status['warning'];
                }
                ?><p class="info <?= $bgColor ?>"><?= $msg ?></p><?php
            }
            ?>
            <ul class="toolbar">
                <li><a href="admin-list-search-engine.php"><button class="flat"><?= Lang::getKey('back'); ?></button></a></li>
            </ul>
            <?php $engine = SearchEngine::find($_GET['id']); ?>
            <form method="post" action="admin-update-search-engine.php">
                <input type="hidden" name="id" value="<?= $engine['id'] ?>" />
                <table class="decorated" id="editForm">
                    <tr></tr>
                    <tr>
                        <th><?= Lang::getKey('name'); ?></th>
                        <td colspan="2"><input type="text" name="name" value="<?= $engine['title'] ?>" /></td>
                    </tr>
                    <tr>
                        <th><?= Lang::getKey('icon'); ?></th>
                        <td>res/img/</td>
                        <td><input type="text" name="icon" value="<?= $engine['icon'] ?>" /></td>
                    </tr>
                    <tr>
                        <th><?= Lang::getKey('prefix'); ?></th>
                        <td colspan="2"><input type="text" name="prefix" value="<?= $engine['prefix'] ?>" /></td>
                    </tr>
                    <tr>
                        <th><?= Lang::getKey('suffix'); ?></th>
                        <td colspan="2"><input type="text" name="suffix" value="<?= $engine['suffix'] ?>" /></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td colspan="2"><input type="submit" value="<?= Lang::getKey('submit'); ?>"/></td>
                    </tr>
                </table>
            </form>
		</div>
    </body>
</html>