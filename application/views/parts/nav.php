      <aside class="sidebar-menu fixed">
        <div class="sidebar-inner scrollable-sidebar">
          <div class="main-menu">
            <ul class="accordion">
              <li class="menu-header">
                Main Menu
              </li>
              <li class="bg-palette1 active">
                <a href="<?php echo base_url()?>">
                  <span class="menu-content block">
                    <span class="menu-icon"><i class="block fa fa-home fa-lg"></i></span>
                    <span class="text m-left-sm">Dashboard</span>
                  </span>
                  <span class="menu-content-hover block">
                    Home
                  </span>
                </a>
              </li>
             
              <li class="openable bg-palette3">
                <a href="#">
                  <span class="menu-content block">
                    <span class="menu-icon"><i class="block fa fa-list fa-lg"></i></span>
                    <span class="text m-left-sm">Data </span>
                    <span class="submenu-icon"></span>
                  </span>
                  <span class="menu-content-hover block">
                    Data
                  </span>
                </a>
                <ul class="submenu bg-palette4">
                  <li><?php echo anchor('datapelanggan','Data Pelanggan ') ?></li>
                  <li><?php echo anchor('dataprodusen','Data Produsen ') ?></li>
                  <li><?php echo anchor('dataproduk','Data Produk ') ?></li>
                  <li><a href="<?php echo base_url()?>assets/form_element.html"><span class="submenu-label">Form Element</span></a></li>
                  <li><a href="<?php echo base_url()?>assets/form_validation.html"><span class="submenu-label">Form Validation</span></a></li>
                  <li><a href="<?php echo base_url()?>assets/form_wizard.html"><span class="submenu-label">Form Wizard</span></a></li>
                  <li><a href="<?php echo base_url()?>assets/dropzone.html"><span class="submenu-label">Dropzone</span></a></li>
                </ul>
              </li>
              <li class="openable bg-palette4">
                <a href="#">
                  <span class="menu-content block">
                    <span class="menu-icon"><i class="block fa fa-exchange fa-lg"></i></span>
                    <span class="text m-left-sm">Pelanggan </span>
                    <span class="submenu-icon"></span>
                  </span>
                  <span class="menu-content-hover block">
                    Pelanggan
                  </span>
                </a>
                <ul class="submenu">
                  <li><?php echo anchor('pelangganpembelian','Pembelian ') ?></li>
                  <li><a href="<?php echo base_url()?>assets/ui_element.html"><span class="submenu-label">Basic Elements</span></a></li>
                  <li><a href="<?php echo base_url()?>assets/button.html"><span class="submenu-label">Button & Icons</span></a></li>
                  <li class="openable">
                    <a href="#">
                      <small class="badge badge-success badge-square bounceIn animation-delay2 m-left-xs pull-right">2</small>
                      <span class="submenu-label">Tables</span>
                    </a>
                    <ul class="submenu third-level">
                      <li><a href="<?php echo base_url()?>assets/static_table.html"><span class="submenu-label">Static Table</span></a></li>
                      <li><a href="<?php echo base_url()?>assets/datatable.html"><span class="submenu-label">DataTables</span></a></li>
                    </ul>
                  </li>
                  <li><a href="<?php echo base_url()?>assets/widget.html"><span class="submenu-label">Widget</span></a></li>
                  <li><a href="<?php echo base_url()?>assets/tab.html"><span class="submenu-label">Tab</span></a></li>
                  <li><a href="<?php echo base_url()?>assets/calendar.html"><span class="submenu-label">Calendar</span></a></li>
                  <li><a href="<?php echo base_url()?>assets/treeview.html"><span class="submenu-label">Treeview</span></a></li>
                  <li><a href="<?php echo base_url()?>assets/nestable_list.html"><span class="submenu-label">Nestable Lists</span></a></li>
                </ul>
              </li>
              <li class="bg-palette1">
                <a href="<?php echo base_url()?>assets/inbox.html">
                  <span class="menu-content block">
                    <span class="menu-icon"><i class="block fa fa-envelope fa-lg"></i></span>
                    <span class="text m-left-sm">Inboxs</span>
                    <small class="badge badge-danger badge-square bounceIn animation-delay5 m-left-xs">5</small>
                  </span>
                  <span class="menu-content-hover block">
                    Inboxs
                  </span>
                </a>
              </li>
              <li class="bg-palette2">
                <a href="<?php echo base_url()?>assets/<?php echo base_url()?>assets/timeline.html">
                  <span class="menu-content block">
                    <span class="menu-icon"><i class="block fa fa-clock-o fa-lg"></i></span>
                    <span class="text m-left-sm">Timeline</span>
                    <small class="badge badge-warning badge-square bounceIn animation-delay6 m-left-xs pull-right">7</small>
                  </span>
                  <span class="menu-content-hover block">
                    Timeline
                  </span>
                </a>
              </li>
              <li class="menu-header">
                Others
              </li>
              <li class="openable bg-palette3">
                <a href="#">
                  <span class="menu-content block">
                    <span class="menu-icon"><i class="block fa fa-gift fa-lg"></i></span>
                    <span class="text m-left-sm">Extra Pages</span>
                    <span class="submenu-icon"></span>
                  </span>
                  <span class="menu-content-hover block">
                    Pages
                  </span>
                </a>
                <ul class="submenu">
                  <li><a href="<?php echo base_url()?>assets/signin.html"><span class="submenu-label">Sign in</span></a></li>
                  <li><a href="<?php echo base_url()?>assets/signup.html"><span class="submenu-label">Sign Up</span></a></li>
                  <li><a href="<?php echo base_url()?>assets/lockscreen.html"><span class="submenu-label">Lock Screen</span></a></li>
                  <li><a href="<?php echo base_url()?>assets/profile.html"><span class="submenu-label">Profile</span></a></li>
                  <li><a href="<?php echo base_url()?>assets/gallery.html"><span class="submenu-label">Gallery</span></a></li>
                  <li><a href="<?php echo base_url()?>assets/blog.html"><span class="submenu-label">Blog</span></a></li>
                  <li><a href="<?php echo base_url()?>assets/single_post.html"><span class="submenu-label">Single Post</span></a></li>
                  <li><a href="<?php echo base_url()?>assets/pricing.html"><span class="submenu-label">Pricing</span></a></li>
                  <li><a href="<?php echo base_url()?>assets/invoice.html"><span class="submenu-label">Invoice</span></a></li>
                  <li><a href="<?php echo base_url()?>assets/error404.html"><span class="submenu-label">Error404</span></a></li>
                  <li><a href="<?php echo base_url()?>assets/blank.html"><span class="submenu-label">Blank</span></a></li>
                </ul>
              </li>
              <li class="openable bg-palette4">
                <a href="#">
                  <span class="menu-content block">
                    <span class="menu-icon"><i class="block fa fa-list fa-lg"></i></span>
                    <span class="text m-left-sm">Menu Level</span>
                    <span class="submenu-icon"></span>
                  </span>
                  <span class="menu-content-hover block">
                    Menu
                  </span>
                </a>
                <ul class="submenu">
                  <li class="openable">
                    <a href="<?php echo base_url()?>assets/signin.html">
                      <span class="submenu-label">menu 2.1</span>
                      <small class="badge badge-success badge-square bounceIn animation-delay2 m-left-xs pull-right">3</small>
                    </a>
                    <ul class="submenu third-level">
                      <li><a href="#"><span class="submenu-label">menu 3.1</span></a></li>
                      <li><a href="#"><span class="submenu-label">menu 3.2</span></a></li>
                      <li class="openable">
                        <a href="#">
                          <span class="submenu-label">menu 3.3</span>
                          <small class="badge badge-danger badge-square bounceIn animation-delay2 m-left-xs pull-right">2</small>
                        </a>
                        <ul class="submenu fourth-level">
                          <li><a href="#"><span class="submenu-label">menu 4.1</span></a></li>
                          <li><a href="#"><span class="submenu-label">menu 4.2</span></a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="#"><span class="submenu-label">menu 2.2</span></a></li>
                </ul>
              </li>
            </ul>
          </div>  
          <div class="sidebar-fix-bottom clearfix">
            <div class="user-dropdown dropup pull-left">
              <a href="#" class="dropdwon-toggle font-18" data-toggle="dropdown"><i class="ion-person-add"></i>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a href="<?php echo base_url()?>assets/inbox.html">
                    Inbox
                    <span class="badge badge-danger bounceIn animation-delay2 pull-right">1</span>
                  </a>
                </li>       
                <li>
                  <a href="#">
                    Notification
                    <span class="badge badge-purple bounceIn animation-delay3 pull-right">2</span>
                  </a>
                </li>       
                <li>
                  <a href="#" class="sidebarRight-toggle">
                    Message
                    <span class="badge badge-success bounceIn animation-delay4 pull-right">7</span>
                  </a>
                </li>           
                <li class="divider"></li>
                <li>
                  <a href="#">Setting</a>
                </li>           
              </ul>
            </div>
            <a href="<?php echo base_url()?>assets/lockscreen.html" class="pull-right font-18"><i class="ion-log-out"></i></a>
          </div>
        </div><!-- sidebar-inner -->
      </aside>