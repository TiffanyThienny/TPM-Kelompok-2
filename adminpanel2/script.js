document.addEventListener("DOMContentLoaded", () => {
  const profileData = [
    {
      type: "Leader",
      name: "Mas Bro",
      email: "Dummy",
      whatsapp: "Dummy",
      lineId: "Dummy",
      birthPlace: "Dummy",
      birthDate: "Dummy",
    },
    {
      type: "Member",
      memberNumber: 1,
      name: "Mas Bro",
      email: "Dummy",
      whatsapp: "Dummy",
      lineId: "Dummy",
      birthPlace: "Dummy",
      birthDate: "Dummy",
    },
    {
      type: "Member",
      memberNumber: 2,
      name: "Mas Bro",
      email: "Dummy",
      whatsapp: "Dummy",
      lineId: "Dummy",
      birthPlace: "Dummy",
      birthDate: "Dummy",
    },
    {
      type: "Member",
      memberNumber: 3,
      name: "Mas Bro",
      email: "Dummy",
      whatsapp: "Dummy",
      lineId: "Dummy",
      birthPlace: "Dummy",
      birthDate: "Dummy",
    },
  ];

  const profileCardsContainer = document.getElementById("profile-cards");

  function createProfileCard(profile) {
    const card = document.createElement("div");
    card.className = "profile-card";

    const title =
      profile.type === "Leader"
        ? "Leader Profile"
        : `Member Profile (${profile.memberNumber})`;

    card.innerHTML = `
        <div class="profile-card-header">
          <h2 class="profile-card-title">${title}</h2>
        </div>
        <div class="profile-info">
          <div class="profile-avatar">
            <img src="assets/profile.png" alt="Profile" class="profile-picture">
          </div>
          <div>
            <span class="profile-status">Active</span>
            <div class="profile-name">${profile.name}</div>
          </div>
        </div>
        ${[
          "Email",
          "Whatsapp number",
          "Email",
          "Line Id",
          "Birth Place",
          "Birth date",
        ]
          .map(
            (field) => `
              <div class="profile-field">
                <div class="field-label">${field}</div>
                <div class="field-value">${
                  profile[field.toLowerCase().replace(" ", "")] || "Dummy"
                }</div>
              </div>
            `
          )
          .join("")}
        ${["Curriculum Vitae", "ID Card", "Flazz Card"]
          .map(
            (doc) => `
              <div class="profile-field">
                <div class="field-label">${doc}</div>
                <button class="view-button">View</button>
              </div>
            `
          )
          .join("")}
        <div class="profile-actions">
          <button class="edit-button">Edit</button>
          <button class="delete-button">Delete</button>
        </div>
      `;

    return card;
  }

  function renderProfileCards() {
    profileCardsContainer.innerHTML = ""; // Clear existing cards

    const row1 = document.createElement("div");
    row1.className = "profile-row";
    const row2 = document.createElement("div");
    row2.className = "profile-row";

    profileData.forEach((profile, index) => {
      const card = createProfileCard(profile);
      if (index < 2) {
        row1.appendChild(card);
      } else {
        row2.appendChild(card);
      }
    });

    profileCardsContainer.appendChild(row1);
    profileCardsContainer.appendChild(row2);
  }

  renderProfileCards();

  // Add event listeners for buttons
  document
    .querySelectorAll(".edit-button, .delete-button")
    .forEach((button) => {
      button.addEventListener("click", () => {
        console.log(`${button.textContent.trim()} clicked`);
      });
    });

  document.querySelector(".save-all-button").addEventListener("click", () => {
    console.log("Save All clicked");
  });

  // Sidebar toggle functionality for mobile
  const sidebarToggle = document.querySelector(".toggle-btn");
  const sidebar = document.getElementById("sidebar");

  if (sidebarToggle && sidebar) {
    sidebarToggle.addEventListener("click", () => {
      sidebar.classList.toggle("active");
    });
  }
});
