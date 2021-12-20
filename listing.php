<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ListMeOn</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" rel="stylesheet">
    <link href="./style.css" rel="stylesheet">

</head>

<body>
    <?php
    if (isset($_GET['msg'])) {
    ?>
        <div id="notificationMsg" class="notificationMsg alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Message</strong> <?= $_GET['msg'] ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php
    }
    ?>

    <section>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="./index.php">Listmeon</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">Disabled</a>
                        </li>
                    </ul>
                    <a href="./register/index.php" class="btn btn-outline-primary me-2"><i class="fa fa-user p-2"></i>Log In</a>
                    <a href="./register/index.php" class="btn btn-primary"><i class="fa fa-user p-2"></i>Sign Up</a>
                    <!-- <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form> -->

                </div>
            </div>
        </nav>
    </section>

    <div class="container mt-5">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-8">
                <div class="search"> <i class="fa fa-search"></i>
                    <input type="text" class="form-control" placeholder="Search Business.." id="searchBusiness"> <button class="btn btn-primary">Search</button>
                </div>
            </div>
        </div>
    </div>
    <main>
        <div class="container-fluid bg-trasparent my-4 p-3" style="position: relative;">
            <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3" id="businessCards">


                <!-- <div class="col">
                    <div class="card h-100 shadow-sm"> <img src="https://www.freepnglogos.com/uploads/notebook-png/download-laptop-notebook-png-image-png-image-pngimg-2.png" class="card-img-top" alt="...">
                        <div class="label-top shadow-sm">Asus Rog</div>
                        <div class="card-body">
                            <div class="clearfix mb-3"> <span class="float-start badge rounded-pill bg-success">12354.00€</span> <span class="float-end"><a href="#" class="small text-muted">Reviews</a></span> </div>
                            <h5 class="card-title">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam quidem eaque ut eveniet aut quis rerum. Asperiores accusamus harum ducimus velit odit ut. Saepe, iste optio laudantium sed aliquam sequi.</h5>
                            <div class="text-center my-4"> <a href="#" class="btn btn-warning">Check offer</a> </div>
                            <div class="clearfix mb-1"> <span class="float-start"><i class="far fa-question-circle"></i></span> <span class="float-end"><i class="fas fa-plus"></i></span> </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-sm"> <img src="https://www.freepnglogos.com/uploads/notebook-png/notebook-laptop-png-images-you-can-download-mashtrelo-14.png" class="card-img-top" alt="...">
                        <div class="label-top shadow-sm">DELL</div>
                        <div class="card-body">
                            <div class="clearfix mb-3"> <span class="float-start price-hp">12354.00€</span> <span class="float-end"><a class="text-muted small" href="#">Reviews</a></span> </div>
                            <h5 class="card-title">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam quidem eaque ut eveniet aut quis rerum. Asperiores accusamus harum ducimus velit odit ut. Saepe, iste optio laudantium sed aliquam sequi.</h5>
                            <div class="text-center my-4"> <a href="#" class="btn btn-warning">Check offer</a> </div>
                            <div class="clearfix mb-1"> <span class="float-start"><i class="far fa-question-circle"></i></span> <span class="float-end"><i class="fas fa-plus"></i></span> </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </main>
    <script>
        window.onload = function() {
            //notification msg
            const notificationMsg = document.querySelector("#notificationMsg");
            setTimeout(() => {
                notificationMsg.style.display = "none";
            }, 4000);

            const searchBusines = document.querySelector("#searchBusiness");

            function debounce(func, delay) {
                let timeoutId;
                return function() {
                    if (timeoutId) {
                        clearTimeout(timeoutId);
                    }
                    timeoutId = setTimeout(() => {
                        func(...arguments);
                    }, delay);
                }
            }
            async function getData(url = "", data = "") {
                let formData = new FormData();
                formData.append('query', data);
                const response = await fetch(url, {
                        method: 'POST',
                        body: formData
                    })
                    .then(res => res.json())
                    .catch(err => err)
                    .then(res => res)
                    .catch(err => err);


                var html = "";
                if (response.length > 0) {
                    response.forEach((el) => {
                        html += `<div class="col">
                            <div class="card h-100 shadow-sm"> 
                            <img src="./uploads/images/${el.img}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <div class="clearfix"> 
                                        <h4 class="float-start card__headingElipses">${el.firm_name.toUpperCase()}</h4> 
                                        <span class="float-end price-hp"></span> 
                                    </div>
                                    <i class="card-title">
                                     ${el.subhead}
                                    </i>
                                    <div class="mt-3 text-center">
                                        <a href="tel:${el.number}" class="m-2 border p-2 rounded-circle border-primary">
                                            <i class="fas fa-phone-alt"></i>
                                        </a>
                                        <a href="${el.location_link}" class=" m-2 border p-2 rounded-circle border-primary">
                                            <i class="fas fa-directions"></i>
                                        </a>
                                        <a href="https://wa.me/91${el.whatsapp}" class="m-2 border p-2 rounded-circle border-primary">
                                            <i class="fab fa-whatsapp"></i>
                                        </a>
                                        <a href="whatsapp://send?text=listmeon.com my link ...///" class="m-2 border p-2 rounded-circle border-primary">
                                             <i class="fas fa-share-alt"></i>
                                        </a>
                                    </div>
                                    <div class="text-center my-4">
                                        <a href="./p/${el.slug}" class="btn btn-warning">Check offer</a>
                                    </div>
                                </div>
                            </div>
                        </div>`
                    })
                } else {
                    html += `<h1 class="w-100 text-center">No Records Found</h1>`;
                }
                document.querySelector("#businessCards").innerHTML = html;
                // return html;

            }

            searchBusines.addEventListener("input", debounce(e => {
                const data = e.target.value?.length > 2 &&
                    getData("./process/search.php", e.target.value);
                if (searchBusines.value.length == 0) {
                    getData("./process/search.php", "")
                }
            }, 1000))
            if (searchBusines.value.length == 0) {
                getData("./process/search.php", "")
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>