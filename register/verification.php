<?php
session_start();
include_once "./header.php";
if (isset($_POST['check_code'])) {
    if ($_POST['verification_code'] === "web2rise_code") {
        $_SESSION['verification'] = true;
        header("location: ./index.php");
    } else {
        header("location: ./" . basename($_SERVER['PHP_SELF']) . "?msg=" . $_POST['verification_code'] . " wrong code");
    }
}
?>
<style>
    .veri_form {
        min-height: 85vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
</style>

<div class="container mt-5">
    <h2 class="text-center"><a href="../index.php">Register Business code</a></h2>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form class="veri_form" action="<?= $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                <!--Text input -->
                <div class="form-outline mb-1 w-100">
                    <label class="form-label" for="verification_code">Your verification code<sup class="text-danger">*</sup> </label>
                    <input type="text" id="verification_code" class="form-control" name="verification_code" required />
                    <div id="yourSlug"></div>
                </div>
                <button type="submit" name="check_code" class="btn btn-primary btn-block mb-4 w-100">
                    Verify
                </button>
                <?php if (isset($_GET['msg'])) {
                ?>
                    <div class="alert alert-danger alert-dismissible fade show w-100" id="infomsg" role="alert">
                        <?= $_GET['msg'] ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php } ?>
            </form>

        </div>
    </div>
</div>
<?php include_once "./footer.php" ?>