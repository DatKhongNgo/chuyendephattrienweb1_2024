<?php
// Start the session
session_start();
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL; //Add new user
$_id = NULL;
if (!empty($_GET['id'])) {
    $_id =  base64_decode($_GET['id']);
    $user = $userModel->findUserById($_id); //Update existing user

}


if (!empty($_POST['submit'])) {

    if (!empty($_id)) {
        $userModel->updateUser($_POST);
    } else {
        $userModel->insertUser($_POST);
    }
    header('location: list_users.php');
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>User form</title>
    <?php include 'views/meta.php' ?>
</head>

<body>
    <?php include 'views/header.php' ?>
    <div class="container">

        <?php if ($user || !isset($_id)) { ?>
            <div class="alert alert-warning" role="alert">
                User form
            </div>
            <form method="POST">
                <input type="hidden" name="id" value="<?php echo $_id ?>">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input
                        class="form-control"
                        name="name"
                        placeholder="<?php foreach ($user as $value) {
                                            echo $value['name'];
                                        }  ?>"
                        value='<?php if (!empty($user['name'])) echo htmlspecialchars($user['name']); ?>'
                        required
                        pattern="^[A-Za-z0-9]{5,15}$"
                        minlength="5"
                        maxlength="15"
                        title="Tên phải nhập vào tối thiểu 5 kí tự, Kí tự A-Z và từ 0 - 9">

                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input
                        type="password"
                        name="password"
                        class="form-control"
                        placeholder="Password"
                        required
                        pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[~!@#$%^&*()]).{5,10}$"
                        minlength="5"
                        maxlength="10"
                        title="Password phải nhập tối thiểu 5 kí tự, tối đa 10 kí tự, tối thiểu 1 chữ hoa, 1 chữ thường, 1 chữ số và 1 kí tự đặc biệt.">
                </div>

                <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
            </form>
        <?php } else { ?>
            <div class="alert alert-success" role="alert">
                User not found!
            </div>
        <?php } ?>
    </div>
</body>

</html>