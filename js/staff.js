function showSection(sectionId) {
  document.querySelectorAll('.section').forEach(section => {
    section.style.display = 'none';
  });
  document.getElementById(sectionId).style.display = 'block';
  document.querySelectorAll('.sidebar .nav-link').forEach(link => {
    link.classList.remove('active');
  });
  const activeLink = document.querySelector(`.sidebar .nav-link[onclick="showSection('${sectionId}')"]`);
  if (activeLink) activeLink.classList.add('active');
}
document.addEventListener("DOMContentLoaded", () => {
  showSection('dashboard');
});
function toggleDropdown(event, submenuId) {
  event.preventDefault(); 
  const submenu = document.getElementById(submenuId);

  if (submenu.style.display === "block") {
    submenu.style.display = "none";
  } else {
    submenu.style.display = "block";
  }
}
document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("disbursementForm");
    if (form) {
      form.addEventListener("submit", function (e) {
        e.preventDefault();
        alert("Your disbursement request has been submitted successfully!");
        form.reset();
      });
    }
  });