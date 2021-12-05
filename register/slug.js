function createSlug() {
  const firm_name = document.querySelector("#firm_name");
  const yourSlug = document.querySelector("#yourSlug");
  const generated_slug = document.querySelector("#generated_slug");
  const register_btn = document.querySelector("#register_btn");
  if (true) {
    var newSlug = string_to_slug(firm_name.value);
    const data = {
      checkslug: true,
      query: newSlug,
    };
    fetch("./checkSlug.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
        "Access-Control-Allow-Origin": "*",
      },
      body: JSON.stringify(data),
    })
      .then((res) => res.json())
      .then((response) => {
        if (response.status) {
          yourSlug.innerHTML = `<div class="alert alert-danger py-0" role="alert">
                            Already taken <u>${newSlug}</u>
                        </div>`;
          register_btn.setAttribute("disabled", true);
        } else {
          yourSlug.innerHTML = `<div class="alert alert-success py-0" role="alert">
                            ${newSlug}
                        </div>`;
          generated_slug.setAttribute("value", newSlug);
          register_btn.removeAttribute("disabled");
        }
      })
      .catch(function (errorMsg) {
        console.warn(errorMsg);
      });

    yourSlug.innerHTML = `<div class="alert alert-success py-0" role="alert">
                            ${newSlug}
                        </div>`;
  } else {
    yourSlug.innerHTML = `<div class="alert alert-danger py-0" role="alert">
                            First character should be aplhabet
                        </div>`;
  }
}

//convert string to slug ------
function string_to_slug(str) {
  str = str.replace(/^\s+|\s+$/g, ""); // trim
  str = str.toLowerCase();

  // remove accents, swap ñ for n, etc
  var from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;";
  var to = "aaaaeeeeiiiioooouuuunc------";
  for (var i = 0, l = from.length; i < l; i++) {
    str = str.replace(new RegExp(from.charAt(i), "g"), to.charAt(i));
  }

  str = str
    .replace(/[^a-z0-9 -]/g, "") // remove invalid chars
    .replace(/\s+/g, "-") // collapse whitespace and replace by -
    .replace(/-+/g, "-"); // collapse dashes
  return str;
}
