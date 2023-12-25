<body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">PT OOWL INDONESIA</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="<?php echo base_url() ?>setting">Settings</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="<?php echo base_url() ?>auth">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="<?php echo base_url('dashboard') ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Beranda
                            </a>
                            <!-- Nav Item - Data Barang -->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayoutss" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-shopping-bag"></i></div>
                                Purchasing
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayoutss" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php echo base_url('Usulan') ?>">Usulan</a>
                                    <a class="nav-link" href="<?php echo base_url('purchase_order') ?>">Purchase Order</a>
                                    <a class="nav-link" href="<?php echo base_url('Spk') ?>">SPK</a>
                                    <a class="nav-link" href="<?php echo base_url('Laporan') ?>">Laporan Penerima Barang</a>
                                    <a class="nav-link" href="<?php echo base_url('ppharga') ?>">Permintaan Penawaran Harga</a>
                                    <a class="nav-link" href="<?php echo base_url('Laporankeluar')?>">Laporan Keluar</a>
                                </nav>
                            </div>
                     <!-- Nav Item - Karyawan -->
                            <li class="nav-item">
                                <a class="nav-link collapsed" href="<?php echo base_url('Karyawan') ?>" data-toggle="collapse" data-target="#collapseKaryawan"
                                    aria-expanded="false" aria-controls="collapseTransaksi">
                                    <i class="fas fa-user" style="margin-right: 10px;"></i> <!-- Tambahkan margin-right di sini -->
                                    <span>Data Karyawan</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link collapsed" href="<?php echo base_url('supplier') ?>" data-toggle="collapse" data-target="#collapseSupplier"
                                    aria-expanded="false" aria-controls="collapseTransaksi">
                                    <i class="fas fa-network-wired" style="margin-right: 10px;"></i> <!-
                                    <span>Data Supplier</span>
                                </a>
                            </li>
                            <!-- Nav Item - Kendaraan -->
                              <li class="nav-item">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsetransportasi"
                                    aria-expanded="false" aria-controls="collapsetransportasi">
                                   <div class="sb-nav-link-icon"><i class="fas fa-car"></i></div> 
                                   Transportasi
                                   <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapsetransportasi" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                        <a class="nav-link" href="<?php echo base_url('kendaraan') ?>">Merk kendaraan</a>
                                        <a class="nav-link" href="<?php echo base_url('loogbok') ?>">Loogbook Harian</a>
                                        <a class="nav-link" href="<?php echo base_url('bbm') ?>">BBM</a>
                            </li>

                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Inventory
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Data Barang
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="<?php echo base_url('barang/non_asset') ?>">ASSET</a>
                                            <a class="dropdown-item" href="<?php echo base_url('barang/masuk') ?>">NON ASSET</a>
                                            <!-- Tambahkan tautan tambahan sesuai kebutuhan -->
                                        </div>
                                    </li>
                                    <a class="nav-link" href="<?php echo base_url('inventory/peminjaman') ?>">Peminjaman</a>
                                    <a class="nav-link" href="<?php echo base_url('inventory/pengembalian') ?>">Pengembalian</a>
                                </nav>
                            </div>
                            <li class="nav-item">
                                <a class="nav-link collapsed" href="<?php echo base_url('Tandaterima') ?>" data-toggle="collapse" data-target="#collapseSupplier"
                                    aria-expanded="false" aria-controls="collapseTransaksi">
                                    <i class="fas fa-check" style="margin-right: 10px;"></i> <!-
                                    <span>Tanda Terima</span>
                                </a>
                            </li>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                    </a>
                                </nav>
                            </div>
                    </div>
                </nav>
            </div>