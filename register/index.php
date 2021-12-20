<?php
session_start();
if (!isset($_SESSION['verification'])) {
    header("location: ./verification.php");
}
include_once "../conn.php";

// include "./cookieToS.php";
include_once "./header.php" ?>

<style>
    .preview_container {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
    }

    .imagePreview {
        width: 100px;
        margin: 10px 0;
        border: 1px solid;
        border-radius: 0.25rem;
        /* min-height: 100px; */
    }

    .imagePreview::after {
        content: "sd";
        background-color: rgba(0, 0, 0, .5);
        width: 100%;
        height: 100%;
        position: absolute;

    }

    .remove__PreviewImage {
        top: 12px;
        right: 3px;
        width: 25px;
        height: 25px;
        line-height: 1em;
        text-align: center;
        position: absolute;
        font-weight: bolder;
        font-size: 16px;
        background-color: #fff;
        border-radius: 50%;
        cursor: pointer;
        border: 1px solid #000;

    }

    .previewImageItem {
        position: relative;
    }

    #yourSlug {
        display: inline-block;
    }
</style>
<div class="container mt-2">
    <h2 class="text-center"><a href="../index.php">Register Business</a></h2>

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <?php
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $sql = "SELECT * FROM listmeon WHERE id = '$id' AND status != 1";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    $data = mysqli_fetch_array($result);
                    // echo print_r($data);

                } else {
                    echo "Don't be oversmart (sql)";
                    die();
                }
            }

            ?>
            <form action="process.php" method="post" enctype="multipart/form-data">

                <!--Text input -->
                <div class="form-outline mb-1">
                    <label class="form-label" for="firm_name">Firm Name<sup class="text-danger">*</sup>
                        <div id="yourSlug"></div>
                    </label>
                    <input type="text" id="firm_name" class="form-control" onblur="createSlug()" name="firm_name" value="<?= isset($data['firm_name']) ? $data['firm_name'] : ''; ?>" required />

                    <input type="hidden" id="generated_slug" name="slug">
                </div>
                <!--Text input -->
                <div class="form-outline mb-1">
                    <label class="form-label" for="subhead">Tagline </label>
                    <input type="text" id="subhead" class="form-control" name="subhead" value="<?= isset($data['subhead']) ? $data['subhead'] : ''; ?>" />
                </div>
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row mb-1">
                    <div class="col">
                        <label class="form-label" for="whatsapp">Whatsapp Number<sup class="text-danger">*</sup></label>
                        <div class="input-group mb-3">

                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">+91</span>
                            </div>
                            <input type="tel" id="whatsapp" class="form-control" placeholder="Enter Number" name="whatsapp" value="<?= isset($data['whatsapp']) ? $data['whatsapp'] : ''; ?>" minlength="10" maxlength="10" pattern="^[6789]\d{9}$" aria-label="whatsapp" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="pincode">Pincode</label>
                            <input type="number" id="pincode" class="form-control" name="pincode" value="<?= isset($data['pincode']) ? $data['pincode'] : ''; ?>" minlength="6" maxlength="6" />
                        </div>
                    </div>
                </div>

                <!--Text input -->
                <div class="form-outline mb-1">
                    <label class="form-label" for="subhead">Address<sup class="text-danger">*</sup> </label>
                    <input type="text" id="address" class="form-control" name="address" value="<?= isset($data['address']) ? $data['address'] : ''; ?>" required />
                </div>

                <!--Text input -->
                <div class="form-outline">
                    <label class="form-label" for="form6Example1">Firm Logo
                    </label><small> should be under 1MB</small>
                    <input type="file" id="form6Example1" class="form-control" name="firm_logo" value="<?= isset($data['img']) ? $data['img'] : ''; ?>" accept="image/*" />

                </div>
                <!--Text input -->
                <div class="form-outline">
                    <label class="form-label" for="otherImg">Other Images<sup class="text-danger">*</sup></label><small>Gallery images should be under 1MB</small>
                    <input type="file" id="otherImg" class="form-control" name="otherImg[]" value="<?= isset($data['link']) ? $data['img'] : ''; ?>" accept="image/*" onchange="imageData(event)" multiple required />
                    <div class="preview_container" id="displayImages"></div>
                </div>
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row mb-1">
                    <!-- <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="firm_logo">Email<sup class="text-danger">*</sup></label>
                                <div>
                                    <label class="btn btn-secondary" for="firm_logo">Chooose file</label></div>
                                <input type="file" id="firm_logo" class="form-control" style="display:none" name="link" value="" required />
                            </div>
                        </div> -->
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="form6Example1">Name<sup class="text-danger">*</sup></label>
                            <input type="text" id="form6Example1" class="form-control" name="userName" value="<?= isset($data['name']) ? $data['name'] : ''; ?>" required />


                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="email">Email</label>
                            <input type="email" id="email" class="form-control" name="email" value="<?= isset($data['email']) ? $data['email'] : ''; ?>" />
                        </div>
                    </div>

                </div>
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row mb-1">

                    <div class="col">
                        <label class="form-label" for="number">Number<sup class="text-danger">*</sup></label>
                        <div class="input-group mb-3">

                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">+91</span>
                            </div>
                            <input type="tel" id="number" class="form-control" placeholder="Enter Number" name="number" value="<?= isset($data['number']) ? $data['number'] : ''; ?>" minlength="10" maxlength="10" pattern="^[6789]\d{9}$" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="form6Example2">Location Name<sup class="text-danger">*</sup></label>
                            <input type="text" id="form6Example2" class="form-control" name="location_link" value="<?= isset($data['location_link']) ? $data['location_link'] : ''; ?>" required />
                        </div>
                    </div>
                </div>


                <!-- Message input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form6Example7">Remark</label>
                    <textarea class="form-control" id="form6Example7" rows="2" name="remark"><?= isset($data['remark']) ? $data['remark'] : ''; ?></textarea>
                    <!--data id -->
                    <input type="hidden" name="dataid" value="<?= isset($data['id']) ? $data['id'] : ''; ?>">
                </div>

                <!--update button condition-->
                <?php if (isset($_GET['id'])) { ?>
                    <button type="submit" name="update" class="btn btn-primary btn-block mb-4 w-100">
                        Update
                    </button>
                <?php } else { ?>
                    <!-- Submit button -->
                    <button type="submit" name="register" class="btn btn-primary btn-block mb-4 w-100" id="register_btn">
                        Submit
                    </button>
                <?php } ?>

                <?php if (isset($_GET['msg'])) {
                ?>

                    <div class="alert alert-success alert-dismissible fade show" id="infomsg" role="alert">
                        <strong>Inserted</strong> <?= $_GET['msg'] ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php } ?>
            </form>

        </div>
    </div>
</div>
<script src="formValidation.js"> </script>
<?php include_once "./footer.php" ?>