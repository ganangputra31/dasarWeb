document.addEventListener("DOMContentLoaded", function() {
  const form = document.getElementById("competitionForm");

  form.addEventListener("submit", function(e) {
    let valid = true;
    document.querySelectorAll(".error-msg").forEach(el => el.remove());

    const name = document.getElementById("name");
    const email = document.getElementById("email");
    const phone = document.getElementById("phone");
    const category = document.getElementById("category");

    if (name.value.trim() === "") {
      name.insertAdjacentHTML("afterend", "<span class='error-msg' style='color:red;'>⚠️ Name required</span>");
      valid = false;
    }
    if (email.value.trim() === "") {
      email.insertAdjacentHTML("afterend", "<span class='error-msg' style='color:red;'>⚠️ Email required</span>");
      valid = false;
    } else if (!email.value.includes("@")) {
      email.insertAdjacentHTML("afterend", "<span class='error-msg' style='color:red;'>⚠️ Invalid email</span>");
      valid = false;
    }
    if (phone.value.trim() === "") {
      phone.insertAdjacentHTML("afterend", "<span class='error-msg' style='color:red;'>⚠️ Phone required</span>");
      valid = false;
    }
    if (category.value.trim() === "") {
      category.insertAdjacentHTML("afterend", "<span class='error-msg' style='color:red;'>⚠️ Select a category</span>");
      valid = false;
    }

    if (!valid) e.preventDefault();
  });
});
