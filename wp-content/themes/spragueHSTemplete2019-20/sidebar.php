<!-- Sidebar -->
<div class="bg-light border-right" id="sidebar-wrapper">
  <div class="sidebar-heading">Sprague High School.</div><!--Navbar Title-->
    <!--Navbar content-->
    <div class="list-group list-group-flush">
      <a href="index.php" class="list-group-item list-group-item-action bg-light">Home</a>
      <a href="#" class="list-group-item list-group-item-action bg-light">Student</a>
      <a href="#" class="list-group-item list-group-item-action bg-light">Parent</a>
      <a href="#" class="list-group-item list-group-item-action bg-light">Information</a>
      <a class="list-group-item list-group-item-action bg-light dropdown-btn" data-toggle="collapse" href="#collapseQuicklinks" role="button" aria-expanded="false" aria-controls="collapseQuicklinks">Quicklinks</a>
        <!--Dropdown menu options for section 'Quicklinks'-->
        <div class="dropdown-container collapse" id="collapseQuicklinks">
          <a class="list-group-item list-group-item-action bg-light" href="https://sis-portal.salkeiz.k12.or.us" target="_blank">StudentVue</a>
          <a class="list-group-item list-group-item-action bg-light" href="#">Link 2</a>
          <a class="list-group-item list-group-item-action bg-light" href="#">Link 3</a>
        </div>
    </div>
</div>
<!-- /#sidebar-wrapper -->

<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>