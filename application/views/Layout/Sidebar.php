 <?php
 $menu = [

  [
    "title"=> "Dashboard",
    "icon" => "fa fa-dashboard",
    "link" => base_url('Home'),
    "role" => "public"
  ],
  [
    "title"=> "User",
    "icon" => "fa fa-user",
    "link" => base_url('User'),
    "role" => "ADMIN"
  ],
   [
    "title"=> "Kontraktor",
    "icon" => "fa fa-drivers-license",
    "link" => base_url('Kontraktor'),
    "role" => "ADMIN"
  ],
  [
    "title"=> "Proyek",
    "icon" => "fa fa-building",
    "link" => base_url('Proyek'),
    "role" => "ADMIN"
  ],
   [
    "title"=> "Pengerjaan",
    "icon" => "fa fa-book",
    "link" => base_url('Pengerjaan'),
    "role" => "KONTRAKTOR"
  ],
  [
    "title"=> "Laporan",
    "icon" => "fa fa-book",
    "link" => base_url('Laporan'),
    "role" => "PIMPINAN"
  ],
  [
    "title"=> "Laporan",
    "icon" => "fa fa-book",
    "link" => base_url('Laporan'),
    "role" => "ADMIN"
  ],
  [
    "title"=> "Logout",
    "icon" => "fa fa-sign-out",
    "link" => base_url('Login/logout'),
    "role" => "public"
  ]

];

?>


<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-left ms-3" id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute right-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href="../pages/dashboard.html">
      <span class="ms-1 font-weight-bold">PROYEK</span>
    </a>
  </div>
  <hr class="horizontal dark mt-0">
  <div class="collapse navbar-collapse  w-auto" id="sidenav-collapse-main">
    <ul class="navbar-nav">
     <?php foreach ($menu as $value) {
      if($value['role'] != 'public' && $value['role'] == $this->session->userdata('role')){
        ?>
        <li class="nav-item">
          <a class="nav-link  active" href="<?=$value['link']?>">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center" style="display: flex; justify-content: center; align-items: center;">
              <i class="<?=$value['icon']?>"></i>
            </div>
            <span class="nav-link-text ms-1"><?=$value['title']?></span>
          </a>
        </li>
      <?php }elseif($value['role'] == 'public'){?>
        <li class="nav-item">
          <a class="nav-link  active" href="<?=$value['link']?>">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center" style="display: flex; justify-content: center; align-items: center;">
              <i class="<?=$value['icon']?>"></i>
            </div>
            <span class="nav-link-text ms-1"><?=$value['title']?></span>
          </a>
        </li>
      <?php }} ?>
      </ul>
    </div>

  </aside>