<?php

session_start();
include_once "../conn.php";
// include "./cookieToS.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!--<title>Mohit Electrovision Work Related Portal</title>-->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mobile Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- <link href="./compiled.min.css" rel="stylesheet" /> -->

    <!-- select -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />

    <style>
        /* .form-outline {
        border-bottom: 1px solid #000 !important;
      } */
        .selectize-input {
            padding: 0.55rem 0.75rem;
        }

        a {
            text-decoration: none;
        }

        .form-label {
            margin-bottom: 0.1rem;
        }

        .input-group-text {
            padding: .375rem 0.50rem;
        }
    </style>
</head>

<body>
    <div class="container ">
        <!-- <div class="row">
            <div class="col-8">
                <a href="data.php" class="btn btn-primary" onclick="window.history.back()">View Data</a>
                
            </div>
            <div class="col-4"><a href="logout.php" class="btn btn-primary"><i class="fa fa-signout"></i>Sign Out</a></div>
        </div> -->
    </div>
    <div class="container mt-2">
        <h2 class="text-center"><a href="index.php">Register Business</a></h2>


        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <?php
                // is_null($var1) ? print_r("True\n") : print_r("False\n")
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
                <form action="process.php" method="post">

                    <!--Text input -->
                    <div class="form-outline mb-1">
                        <label class="form-label" for="firm_name">Firm Name<sup class="text-danger">*</sup> </label>
                        <input type="text" id="firm_name" class="form-control" name="firm_name" value="<?= isset($data['firm_name']) ? $data['firm_name']:''; ?>" required />
                    </div>
                    <!--Text input -->
                    <div class="form-outline mb-1">
                        <label class="form-label" for="subhead">Tagline<sup class="text-danger">*</sup> </label>
                        <input type="text" id="subhead" class="form-control" name="subhead" value="<?= isset($data['subhead']) ? $data['subhead']:''; ?>" required />
                    </div>
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="row mb-1">
                        <div class="col">
                            <label class="form-label" for="whatsapp">Whatsapp Number<sup class="text-danger">*</sup></label>
                            <div class="input-group mb-3">

                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">+91</span>
                                </div>
                                <input type="tel" id="whatsapp" class="form-control" placeholder="Enter Number" name="whatsapp" value="<?= isset($data['whatsapp']) ? $data['whatsapp']:''; ?>" minlength="10" maxlength="10" pattern="^[6789]\d{9}$" aria-label="whatsapp" aria-describedby="basic-addon1" >
                            </div>
                        </div>
                        <!-- <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="form6Example2">Whatsapp Number<sup class="text-danger">*</sup></label>
                                <input type="tel" id="form6Example2" class="form-control" name="whatsapp" minlength="10" maxlength="10" pattern="^[6789]\d{9}$" value="" required />
                            </div>
                        </div> -->
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="pincode">Pincode</label>
                                <input type="number" id="pincode" class="form-control" name="pincode" value="<?= isset($data['pincode']) ? $data['pincode']:''; ?>" minlength="6" maxlength="6" />
                            </div>
                        </div>
                    </div>

                    <!--Text input -->
                    <div class="form-outline mb-1">
                        <label class="form-label" for="subhead">Address<sup class="text-danger">*</sup> </label>
                        <input type="text" id="address" class="form-control" name="address" value="<?= isset($data['address']) ? $data['address']:''; ?>" required />
                    </div>

                    <!--Text input -->
                    <div class="form-outline">
                        <label class="form-label" for="form6Example1">Firm Logo<sup class="text-danger">*</sup></label>
                        <input type="file" id="form6Example1" class="form-control" name="link" value="<?= isset($data['link']) ? $data['link']:''; ?>" accept="image/*" required />

                        <!--data id -->
                        <input type="hidden" name="dataid" value="<?= isset($data['id']) ? $data['id']:''; ?>">
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
                                <input type="text" id="form6Example1" class="form-control" name="userName" value="<?= isset($data['name']) ? $data['name']:''; ?>" required />

                                
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="email">Email<sup class="text-danger">*</sup></label>
                                <input type="email" id="email" class="form-control" name="email" value="<?= isset($data['email']) ? $data['email']:''; ?>" required />
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
                                <input type="tel" id="number" class="form-control" placeholder="Enter Number" name="number" value="<?= isset($data['number']) ? $data['number']:''; ?>" minlength="10" maxlength="10" pattern="^[6789]\d{9}$" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="form6Example2">Location Link<sup class="text-danger">*</sup></label>
                                <input type="text" id="form6Example2" class="form-control" name="location_link" value="<?= isset($data['location_link']) ? $data['location_link']:''; ?>" required />
                            </div>
                        </div>
                    </div>


                    <!-- Message input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form6Example7">Remark</label>
                        <textarea class="form-control" id="form6Example7" rows="2" name="remark"><?= isset($data['remark']) ? $data['remark']:''; ?></textarea>
                    </div>

                    <!-- Checkbox
            <div class="form-check d-flex justify-content-center mb-4">
              <input
                class="form-check-input me-2"
                type="checkbox"
                value=""
                id="form6Example8"
                checked
              />
              <label class="form-check-label" for="form6Example8">
                Create an account?
              </label>
            </div> -->

                    <!--update button condition-->
                    <?php if (isset($_GET['id'])) { ?>
                        <button type="submit" name="update" class="btn btn-primary btn-block mb-4 w-100">
                            Update
                        </button>
                    <?php } else { ?>
                        <!-- Submit button -->
                        <button type="submit" name="register" class="btn btn-primary btn-block mb-4 w-100">
                            Submit
                        </button>
                    <?php } ?>



                    <?php if (isset($_GET['msg'])) {
                    ?>

                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Inserted</strong> <?= $_GET['msg'] ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php } ?>
                </form>

            </div>
        </div>



        <!--<a href="data.php" class="mt-5 m-auto d-block btn btn-success btn-block mb-4 w-50">-->
        <!--  View Data-->
        <!--</a>-->

    </div>





    <script>
        $(document).ready(function() {
            $("select").selectize({
                sortField: "text",
            });
            setTimeout(() => {
                $(".alert").slideUp()
            }, 4000);



        });

        // function changeType() {
        //     if (document.querySelector('#checkBox').checked) {
        //         $('#imei').attr('type', 'text');
        //         $('#imei').attr('pattern', '[A-z0-9]{15,20}');
        //         $('#imei').attr('maxlength', '20');
        //     } else {
        //         $('#imei').attr('type', 'tel');
        //         $('#imei').attr('pattern', '[0-9]{15,15}');
        //         $('#imei').attr('maxlength', '15');
        //     }
        // }
        // changeType();
        // $('checkBox').change(function() {
        //     if ($(this).is(':checked')){
        //         console.log("hellos");
        //     }

        // })
    </script>
</body>

</html>