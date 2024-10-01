<?php
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL; //Add new user
$id = NULL;
// Cách 1 dùng Post
if (!empty($_POST['id'])) {
    $id = $_POST['id'];
    $userModel->deleteUserById($id);//Delete existing user
}
//Cách 2 dùng base64
// if (!empty($_GET['id'])) {
//     $id = base64_decode($_GET['id']);
//     $userModel->deleteUserById($id); // Xóa người dùng
// }
header('location: list_users.php');
?>