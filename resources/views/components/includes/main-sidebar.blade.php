<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('home') }}" class="brand-link">
        <span class="brand-text font-weight-light">{{ env('APP_NAME') }}</span>
    </a>
    <div class="sidebar">
      <div class="pb-3 mt-3 mb-3 user-panel d-flex">
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>
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
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item
                {{
                    Request::route()->getName() === "trace-category" ? 'menu-open' :
                    (Request::route()->getName() === "view-add-form-trace" ? 'menu-open' :
                    (Request::route()->getName() === "view-add-form-trace-category" ? 'menu-open' : ''))
                }}"
            >
            <a href="#" class="nav-link
                {{
                    Request::route()->getName() === "trace-category" ? 'active' :
                    (Request::route()->getName() === "view-add-form-trace" ? 'active' :
                    (Request::route()->getName() === "view-add-form-trace-category" ? 'active' : ''))
                }}"
            >
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Trace Category
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('trace-category') }}" class="nav-link
                    {{
                        Request::route()->getName() === "trace-category" ? 'active' :
                        (Request::route()->getName() === "view-add-form-trace" ? 'active' :
                        (Request::route()->getName() === "view-add-form-trace-category" ? 'active' : ''))
                    }}"
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form Categories</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </aside>
