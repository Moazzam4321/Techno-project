<div class="left-side-bar">
    <div class="brand-logo justify-content-center">
        <h2 class="text-white mt-2 pl-4">Admin</h2>				
        {{-- <a href="index.html">
            <img src="/template/vendors/images/deskapp-logo.svg" alt="" class="dark-logo" />
            <img
                src="/template/vendors/images/deskapp-logo-white.svg"
                alt=""
                class="light-logo"
            />
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div> --}}
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li>
                    <a href="{{ url('example-page') }}" class="dropdown-toggle">
                        <span class="micon bi bi-house"></span
                        ><span class="mtext">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('department-index') }}" class="dropdown-toggle">
                        <span class="micon bi bi-house"></span
                        ><span class="mtext">Departments</span>
                    </a>
                    {{-- <ul class="submenu">
                        <li><a href="index.html">Dashboard style 1</a></li>
                        <li><a href="index2.html">Dashboard style 2</a></li>
                        <li><a href="index3.html">Dashboard style 3</a></li>
                    </ul> --}}
                </li>
                <li class="dropdown">
                    <a href="{{ url('semester-index') }}" class="dropdown-toggle">
                        <span class="micon bi bi-textarea-resize"></span
                        ><span class="mtext">Semester</span>
                    </a>
                    {{-- <ul class="submenu">
                        <li><a href="form-basic.html">Form Basic</a></li>
                        <li>
                            <a href="advanced-components.html">Advanced Components</a>
                        </li>
                        <li><a href="form-wizard.html">Form Wizard</a></li>
                        <li><a href="html5-editor.html">HTML5 Editor</a></li>
                        <li><a href="form-pickers.html">Form Pickers</a></li>
                        <li><a href="image-cropper.html">Image Cropper</a></li>
                        <li><a href="image-dropzone.html">Image Dropzone</a></li>
                    </ul> --}}
                </li>
                <li class="dropdown">
                    <a href="{{ url('course-index') }}" class="dropdown-toggle">
                        <span class="micon bi bi-table"></span
                        ><span class="mtext">Courses</span>
                    </a>
                    {{-- <ul class="submenu">
                        <li><a href="basic-table.html">Basic Tables</a></li>
                        <li><a href="datatable.html">DataTables</a></li>
                    </ul> --}}
                </li>
                <li>
                    <a href="{{ url('upload-result-index') }}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-calendar4-week"></span
                        ><span class="mtext">Upload Results</span>
                    </a>
                </li>
                
            </ul>
        </div>
    </div>
</div>

<div class="main-container">
    @yield('content')
</div>