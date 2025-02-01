function convertToPassword(inputID) {
    event.preventDefault();
    let input = document.getElementById(inputID);
    if (input) {
      input.type = input.type === "password" ? "text" : "password";
    }
  }
  
  function delay(ms) {
    return new Promise((resolve) => setTimeout(resolve, ms));
  }
  
  async function registerValidation(event) {
    event.preventDefault();
  
    const team = document.getElementById("team");
    const pass = document.getElementById("passwordID");
    const confirmPass = document.getElementById("confirmPasswordID");
  
    const passValue = pass.value.trim();
    const confirmPassValue = confirmPass.value.trim();
  
    if (passValue === confirmPassValue) {
      alert("Registration Successful!");
      location.href = "/UserDashboard/index.html"; // Replace with your dashboard
    } else {
      let registerFailed = document.getElementById("register-failed");
      if (registerFailed) {
        registerFailed.classList.add("register-failed-wrapper-alert");
        await delay(3000);
        registerFailed.classList.remove("register-failed-wrapper-alert");
      }
    }
  }