  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route("home")}}">
                <i class="bi bi-grid"></i>
                <span>Home</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="">
              <i class="bi bi-menu-button-wide"></i><span>Dashboard</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="">
                        <i class="ri-bank-line"></i><span>Jakarta</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="ri-bank-line"></i><span>Bandung</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="ri-bank-line"></i><span>Makassar</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route("data-peserta")}}">
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
