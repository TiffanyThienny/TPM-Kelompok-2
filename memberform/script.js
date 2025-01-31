// Generate birth date options
function generateBirthDateOptions() {
  const select = document.getElementById("birthDate");
  const currentYear = new Date().getFullYear();

  // Generate last 100 years
  for (let year = currentYear; year >= currentYear - 100; year--) {
    for (let month = 12; month >= 1; month--) {
      const daysInMonth = new Date(year, month, 0).getDate();

      for (let day = 1; day <= daysInMonth; day++) {
        const date = `${year}-${month.toString().padStart(2, "0")}-${day
          .toString()
          .padStart(2, "0")}`;
        const option = document.createElement("option");
        option.value = date;
        option.textContent = date;
        select.appendChild(option);
      }
    }
  }
}

// File upload handling
function handleFileUpload(inputId) {
  const input = document.getElementById(inputId);
  input.addEventListener("change", function (e) {
    const file = e.target.files[0];
    if (file) {
      // Validate file size (max 5MB)
      if (file.size > 5 * 1024 * 1024) {
        alert("File size must be less than 5MB");
        input.value = "";
        return;
      }

      // Validate file type
      const validTypes = ["image/jpeg", "image/png", "application/pdf"];
      if (!validTypes.includes(file.type)) {
        alert("Invalid file type. Please upload PDF, JPG, or PNG files only.");
        input.value = "";
        return;
      }
    }
  });
}

// Form validation
function validateForm(event) {
  event.preventDefault();

  // Validate WhatsApp number
  const whatsapp = document.getElementById("whatsapp").value;
  if (!/^\d{10,15}$/.test(whatsapp)) {
    alert("Please enter a valid WhatsApp number (10-15 digits)");
    return false;
  }

  // Validate email
  const email = document.getElementById("email").value;
  if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
    alert("Please enter a valid email address");
    return false;
  }

  // Check if files are uploaded
  const requiredFiles = ["cv", "flazzCard", "idCard"];
  for (const fileId of requiredFiles) {
    const file = document.getElementById(fileId).files[0];
    if (!file) {
      alert(
        `Please upload your ${fileId.replace(/([A-Z])/g, " $1").toLowerCase()}`
      );
      return false;
    }
  }

  // If all validations pass, proceed to next page
  window.location.href = "next-page.html"; // Replace with your next page URL
  return false;
}

// Initialize
document.addEventListener("DOMContentLoaded", function () {
  generateBirthDateOptions();
  ["cv", "flazzCard", "idCard"].forEach(handleFileUpload);
});
