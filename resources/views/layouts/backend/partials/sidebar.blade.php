 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/')}}" class="brand-link">
      <!-- <img src="{{ asset('assets/backend/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
      <span class="brand-text font-weight-light">Corporate</span>
    </a>
      <!-- Sidebar admin -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="" class="d-block">username</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link @yield('dashboard')">
               <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link @yield('author_home')")>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Home</p>
                </a>
              </li>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link @yield('account')">
             <i class="fa fa-user"></i>
              <p>
                Account
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link @yield('create_admin')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Admin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link @yield('user_manage')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage User</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link @yield('admininformation')">
             <i class="fa fa-user"></i>
              <p>
                AdminInformation
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
             <li class="nav-item">
                <a href="" class="nav-link @yield('create_information')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Information</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{ " class="nav-link @yield('manage_information')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Information</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link @yield('social_media')">
             <i class="fa fa-user"></i>
              <p>
                Social Media
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
             <li class="nav-item">
                <a href="{{ route('create/media')}}" class="nav-link @yield('create_social_media')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Social Media</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('manage/media')}}" class="nav-link @yield('manage_social_media')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Social Media</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link @yield('company_information')">
             <i class="fa fa-user"></i>
              <p>
                Company Information
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
             <li class="nav-item">
                <a href="{{ route('create/info')}}" class="nav-link @yield('create_company_information')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Company Information</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('manage/info')}}" class="nav-link @yield('manage_company_information')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Company Information</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link @yield('slider')">
             <i class="fa fa-user"></i>
              <p>
                Slider
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
             <li class="nav-item">
                <a href="{{ route('create/slider')}}" class="nav-link @yield('create_slider')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Slider</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('manage/slider')}}" class="nav-link @yield('manage_slider')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Slider</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link @yield('achievement')">
             <i class="fa fa-user"></i>
              <p>
                Company Achievement <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
             <li class="nav-item">
                <a href="{{ route('create/achiev')}}" class="nav-link @yield('create_achievement')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Achievement</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('manage/achiev')}}" class="nav-link @yield('manage_achievement')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Achievement</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link @yield('about')">
             <i class="fa fa-user"></i>
              <p>
                About <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
             <li class="nav-item">
                <a href="{{ route('create/about')}}" class="nav-link @yield('create_about')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create About </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('manage/about')}}" class="nav-link @yield('manage_about')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage About</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link @yield('choose_us')">
             <i class="fa fa-user"></i>
              <p>
                Choose Us <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
             <li class="nav-item">
                <a href="{{ route('create/choose_us')}}" class="nav-link @yield('create_choose_us')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Choose Us </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('manage/choose_us')}}" class="nav-link @yield('manage_choose_us')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Choose Us</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link @yield('service')">
             <i class="fa fa-user"></i>
              <p>
               Our Service <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
             <li class="nav-item">
                <a href="{{ route('create/service')}}" class="nav-link @yield('create_service')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Service </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('manage/service')}}" class="nav-link @yield('manage_service')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Service</p>
                </a>
            </li>
            </ul>
          </li>
            <li class="nav-item">
                <a href="#" class="nav-link @yield('plan')">
                 <i class="fa fa-user"></i>
                  <p>
                   Plan <i class="right fas fa-angle-left"></i>
                  </p>
                </a>

                <ul class="nav nav-treeview">
                 <li class="nav-item">
                    <a href="{{ route('create/plan')}}" class="nav-link @yield('create_plan')">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Create Plan </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('manage/plan')}}" class="nav-link @yield('manage_plan')">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Manage Plan</p>
                    </a>
                </li>

               </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link @yield('pricing_plan')">
                 <i class="fa fa-user"></i>
                  <p>
                   Pricing Plan <i class="right fas fa-angle-left"></i>
                  </p>
                </a>

                <ul class="nav nav-treeview">
                 <li class="nav-item">
                    <a href="{{ route('create/pricing_plan')}}" class="nav-link @yield('create_pricing_plan')">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Create Pricing Plan </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('manage/pricing_plan')}}" class="nav-link @yield('manage_pricing_plan')">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Manage Pricing Plan</p>
                    </a>
                </li>

               </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link @yield('testimonial')">
                 <i class="fa fa-user"></i>
                  <p>
                   Testimonial <i class="right fas fa-angle-left"></i>
                  </p>
                </a>

                <ul class="nav nav-treeview">
                 <li class="nav-item">
                    <a href="{{ route('create/testimonial')}}" class="nav-link @yield('create_testimonial')">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Create Testimonial </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('manage/testimonial')}}" class="nav-link @yield('manage_testimonial')">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Manage Testimonial</p>
                    </a>
                </li>

               </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link @yield('team_member')">
                 <i class="fa fa-user"></i>
                  <p>
                   Team Member <i class="right fas fa-angle-left"></i>
                  </p>
                </a>

                <ul class="nav nav-treeview">
                 <li class="nav-item">
                    <a href="{{ route('create/team_member')}}" class="nav-link @yield('create_team_member')">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Create Team Member </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('manage/team_member')}}" class="nav-link @yield('manage_team_member')">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Manage Team Member</p>
                    </a>
                </li>

               </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link @yield('category')">
                 <i class="fa fa-user"></i>
                  <p>
                   Blog Category <i class="right fas fa-angle-left"></i>
                  </p>
                </a>

                <ul class="nav nav-treeview">
                 <li class="nav-item">
                    <a href="{{ route('create/blog/category')}}" class="nav-link @yield('create_category')">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Create Blog Category </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('manage/blog/category')}}" class="nav-link @yield('manage_category')">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Manage Blog Category</p>
                    </a>
                </li>

               </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link @yield('blog')">
                 <i class="fa fa-user"></i>
                  <p>
                   Blog<i class="right fas fa-angle-left"></i>
                  </p>
                </a>

                <ul class="nav nav-treeview">
                 <li class="nav-item">
                    <a href="{{ route('create/blog')}}" class="nav-link @yield('create_blog')">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Create Blog </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('manage/blog')}}" class="nav-link @yield('manage_blog')">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Manage Blog </p>
                    </a>
                </li>

               </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link @yield('blog_comment')">
                 <i class="fa fa-user"></i>
                  <p>
                   Blog Comment<i class="right fas fa-angle-left"></i>
                  </p>
                </a>

                <ul class="nav nav-treeview">
                 <li class="nav-item">
                    <a href="{{ route('create/blog')}}" class="nav-link @yield('create_blog_comment')">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Create Blog </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('manage/blog')}}" class="nav-link @yield('manage_blog_comment')">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Manage Blog </p>
                    </a>
                </li>

               </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link @yield('brand')">
                 <i class="fa fa-user"></i>
                  <p>
                   Brand <i class="right fas fa-angle-left"></i>
                  </p>
                </a>

                <ul class="nav nav-treeview">
                 <li class="nav-item">
                    <a href="{{ route('create/brand')}}" class="nav-link @yield('create_brand')">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Create Brand</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('manage/brand')}}" class="nav-link @yield('manage_brand')">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Manage Brand </p>
                    </a>
                </li>

               </ul>
            </li>







        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>

    <!-- /.sidebar -->

  </aside>
