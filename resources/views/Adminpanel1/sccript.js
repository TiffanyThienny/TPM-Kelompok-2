
const rows = document.querySelectorAll('.rowcounter'); 
const rowcount = rows.length;

const teamcount = document.getElementById('teamcount');
teamcount.innerHTML = rowcount;



const general = document.querySelector(".toggle-btn");

general.addEventListener("click", function () {
  document.querySelector("#sidebar").classList.toggle("expand");
});

const masterCheckbox = document.getElementById('masterCheckbox');


masterCheckbox.addEventListener('change', function() {
    const checkboxes = document.querySelectorAll('.checkboxchild input'); 
    checkboxes.forEach(checkbox => {
        checkbox.checked = masterCheckbox.checked; 
    });
});