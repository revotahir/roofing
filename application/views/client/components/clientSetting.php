 <!-- Theme Settings -->
 <div class="offcanvas offcanvas-end" tabindex="-1" id="theme-settings-offcanvas" style="width: 260px;">
        <div class="bg-primary d-flex align-items-center gap-2 p-3 offcanvas-header">
            <h5 class="flex-grow-1 text-white mb-0">Theme Settings</h5>

            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body p-3 h-100" data-simplebar>
            <div class="mb-3">
                <h5 class="mb-3 font-16 fw-bold">Color Scheme</h5>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-color-light" value="light">
                    <label class="form-check-label" for="layout-color-light">Light</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-color-dark" value="dark">
                    <label class="form-check-label" for="layout-color-dark">Dark</label>
                </div>
            </div>


            <div class="mb-3">
                <h5 class="mb-3 font-16 fw-bold">Topbar Color</h5>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="data-topbar-color" id="topbar-color-light" value="light">
                    <label class="form-check-label" for="topbar-color-light">Light</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="data-topbar-color" id="topbar-color-dark" value="dark">
                    <label class="form-check-label" for="topbar-color-dark">Dark</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="data-topbar-color" id="topbar-color-brand" value="brand">
                    <label class="form-check-label" for="topbar-color-brand">Brand</label>
                </div>
            </div>

            <div class="mb-3">
                <h5 class="mb-3 font-16 fw-bold">Menu Color</h5>

                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="data-menu-color" id="sidenav-color-light" value="light">
                    <label class="form-check-label" for="sidenav-color-light">Light</label>
                </div>

                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="data-menu-color" id="sidenav-color-dark" value="dark">
                    <label class="form-check-label" for="sidenav-color-dark">Dark</label>
                </div>

                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="data-menu-color" id="sidenav-color-brand" value="brand">
                    <label class="form-check-label" for="sidenav-color-brand">Brand</label>
                </div>
            </div>

            <div class="mb-3" id="sidebarSize">
                <h5 class="mb-3 font-16 fw-bold">Sidebar Size</h5>

                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="data-sidenav-size" id="sidenav-size-default" value="default">
                    <label class="form-check-label" for="sidenav-size-default">Default</label>
                </div>

                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="data-sidenav-size" id="sidenav-size-compact" value="compact">
                    <label class="form-check-label" for="sidenav-size-compact">Compact</label>
                </div>

                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="data-sidenav-size" id="sidenav-size-small" value="condensed">
                    <label class="form-check-label" for="sidenav-size-small"> Condensed</label>
                </div>

                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="data-sidenav-size" id="sidenav-size-small-hover" value="sm-hover">
                    <label class="form-check-label" for="sidenav-size-small-hover">Hover View</label>
                </div>

                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="data-sidenav-size" id="sidenav-size-full" value="full">
                    <label class="form-check-label" for="sidenav-size-full">Full Layout</label>
                </div>

                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="data-sidenav-size" id="sidenav-size-fullscreen" value="fullscreen">
                    <label class="form-check-label" for="sidenav-size-fullscreen">Hidden</label>
                </div>
            </div>

            <div class="mb-3">
                <h5 class="mb-3 font-16 fw-bold">Layout Mode</h5>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-fluid" value="fluid">
                    <label class="form-check-label" for="layout-mode-fluid">Fluid</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-boxed" value="boxed">
                    <label class="form-check-labe" for="layout-mode-boxed">Boxed</label>
                </div>
            </div>
        </div>

        <div class="d-flex align-items-center gap-2 px-3 py-2 offcanvas-header border-top border-dashed">
            <button type="button" class="btn w-50 btn-danger" id="reset-layout">Reset</button>
        </div>

    </div>