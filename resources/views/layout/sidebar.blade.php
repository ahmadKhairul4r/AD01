  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route("home")}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route("data.peserta")}}">
            <i class="bi bi-person"></i>
            <span>Data Peserta</span>
            </a>
        </li>
        <!-- End Components Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route("data.instruktur")}}">
            <i class="bxs-user-rectangle"></i>
            <span>Data Instruktur</span>
            </a>
        </li>
        <!-- End Components Nav -->


      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route("data.event")}}">
          <i class="bi bi-envelope"></i>
          <span>Kelola Data Event</span>
        </a>
      </li><!-- End Event Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Kelola Data Blog</span>
        </a>
      </li><!-- End Blog Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-faq.html">
          <i class="bi bi-question-circle"></i>
          <span>Kelola Data Gallery</span>
        </a>
      </li><!-- End Gallery Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->
