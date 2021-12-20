
    function imageData(e) {
        register_btn = document.querySelector("#register_btn");
        const imageLength = e.target.files.length;

        // count files length here -------------
        if (imageLength === 0 || imageLength < 3 || imageLength > 10) {
            alert("Please Upload image in between 3 and 10");
            register_btn.setAttribute("disabled", "true");
            clearInputImages();
            return;
        } else {
            checkSizeMakePreview(e.target.files)
        }
    }
    // return true if extension is allowed
    function checkExtension(fileName) {
        const allowedExtensions = ["jpg", "png", "jpeg", "gif"];
        const extension = fileName.slice(fileName.lastIndexOf(".") + 1).toLowerCase();
        return allowedExtensions.includes(extension);
    }

    function checkSizeMakePreview(files) {
        //preview image container
        const displayImages = document.getElementById("displayImages");
        register_btn = document.querySelector("#register_btn");
        let allImagesHtml = "";


        for (let [key, file] of Object.entries(files)) {
            // check size and extension here
            if (file.size > 1000000) {
                alert("Please select Image under 1mb " + file.name + " is bigger than 1mb");
                console.log("Image size is more than 1 mb")
                clearInputImages()
                break
            } else if (!checkExtension(file.name)) {
                alert(file.name + "'s extension is not allowed");
                clearInputImages()
                break
            } else {
                var currentImgSrc = URL.createObjectURL(file);
                allImagesHtml += `<div class="previewImageItem" title="${file.name}">
                                <img class="imagePreview" src='${currentImgSrc}' width="50px" />
                </div>`;
                displayImages.innerHTML = allImagesHtml;
                register_btn.removeAttribute("disabled");
                currentImgSrc.onload = function() {
                    URL.revokeObjectURL(currentImgSrc);
                }
            }
        }
    }

    function clearInputImages() {
        document.getElementById("otherImg").value = "";
        document.getElementById("displayImages").innerHTML = "";
    }


    function removePreviewImage(imageIndex) {
        debugger;
        const displayImages = document.getElementById("otherImg");
        const allFiles = Array.from(displayImages.files);
        const tempFiles = new DataTransfer();
        for (file of displayImages.files) {
            let currentFile = new File(["content"], file.name)
            tempFiles.items.add(currentFile);
        }
        console.log("temporary files ", tempFiles)
        displayImages.files = tempFiles;
    }

    function checkSize(e) {
        const displayImages = document.getElementById("displayImages");
        console.log(displayImages);
        // 1024*1024*5 = 5242880
        if (e.target.files[0].size < (5242880)) {
            let imageHtml = "";
            console.log("eligible", e.target.files[0].size);
            var currentImgSrc = URL.createObjectURL(event.target.files[0]);
            imageHtml += `<img class="imagePreview" src='${currentImgSrc}' width="50px"  />`;
            displayImages.innerHTML = imageHtml;
        } else {
            console.log("not eligible", e.target.files[0].size);
        }
    }
