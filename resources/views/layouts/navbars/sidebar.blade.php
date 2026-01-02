<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3" id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="#" target="_blank">
            <span class="ms-1 font-weight-bold">Tataxa Dashboard</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100 " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Administrator</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link  {{ $isDashboard ?? '' }}" href="{{ route('dashboard') }}">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="13.5px" height="12px" viewBox="0 0 576 512"><path fill="{{ $isIconColor ?? '#000' }}" d="M288 32C128.94 32 0 160.94 0 320c0 52.8 14.25 102.26 39.06 144.8c5.61 9.62 16.3 15.2 27.44 15.2h443c11.14 0 21.83-5.58 27.44-15.2C561.75 422.26 576 372.8 576 320c0-159.06-128.94-288-288-288m0 64c14.71 0 26.58 10.13 30.32 23.65c-1.11 2.26-2.64 4.23-3.45 6.67l-9.22 27.67c-5.13 3.49-10.97 6.01-17.64 6.01c-17.67 0-32-14.33-32-32S270.33 96 288 96M96 384c-17.67 0-32-14.33-32-32s14.33-32 32-32s32 14.33 32 32s-14.33 32-32 32m48-160c-17.67 0-32-14.33-32-32s14.33-32 32-32s32 14.33 32 32s-14.33 32-32 32m246.77-72.41l-61.33 184C343.13 347.33 352 364.54 352 384c0 11.72-3.38 22.55-8.88 32H232.88c-5.5-9.45-8.88-20.28-8.88-32c0-33.94 26.5-61.43 59.9-63.59l61.34-184.01c4.17-12.56 17.73-19.45 30.36-15.17c12.57 4.19 19.35 17.79 15.17 30.36m14.66 57.2l15.52-46.55c3.47-1.29 7.13-2.23 11.05-2.23c17.67 0 32 14.33 32 32s-14.33 32-32 32c-11.38-.01-20.89-6.28-26.57-15.22M480 384c-17.67 0-32-14.33-32-32s14.33-32 32-32s32 14.33 32 32s-14.33 32-32 32"/></svg>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $isOrganization ?? '' }}" href="{{ route('organization') }}">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12px" height="12px" viewBox="0 0 48 48"><path fill="{{ $isIconColorOrganization ?? '#000' }}" fill-rule="evenodd" d="M19.499 8.5a6.5 6.5 0 1 1-13 0a6.5 6.5 0 0 1 13 0m-6.5 8c-2.373 0-4.205.083-5.557.184c-2.074.154-3.702 1.644-4.142 3.655A85 85 0 0 0 1.708 30.66a3.27 3.27 0 0 0 3.045 3.583q.842.058 1.92.11l.668 9.021c.11 1.499 1.186 2.799 2.743 2.97a27 27 0 0 0 5.831-.001c1.557-.17 2.633-1.47 2.744-2.969l.081-1.101A56 56 0 0 1 18.5 37c0-2.142.113-3.933.24-5.276c.274-2.882 2.13-5.403 4.89-6.403a84 84 0 0 0-.931-4.983c-.44-2.01-2.067-3.5-4.142-3.654A75 75 0 0 0 13 16.5Zm15.603 8.857a22 22 0 0 0-.827 2.343c-.822.06-1.517.13-2.1.2c-2.19.264-3.747 1.99-3.948 4.108A53 53 0 0 0 21.5 37c0 2.038.107 3.733.227 4.992c.201 2.117 1.757 3.844 3.948 4.109c1.697.204 4.353.399 8.325.399s6.628-.195 8.325-.4c2.19-.264 3.747-1.99 3.948-4.108c.12-1.259.227-2.954.227-4.992s-.107-3.733-.227-4.992c-.201-2.117-1.757-3.844-3.948-4.109a46 46 0 0 0-2.1-.2a22 22 0 0 0-.827-2.342c-.58-1.411-1.844-2.55-3.511-2.748A16 16 0 0 0 34 22.5c-.72 0-1.353.045-1.886.109c-1.667.198-2.93 1.337-3.512 2.748M34 25.5c-.594 0-1.109.038-1.533.088c-.44.052-.864.36-1.09.911c-.135.327-.272.68-.401 1.042q1.364-.04 3.024-.041c1.66-.001 2.114.015 3.025.041a23 23 0 0 0-.4-1.042c-.227-.55-.652-.859-1.092-.911A13 13 0 0 0 34 25.5" clip-rule="evenodd"/></svg>
                    </div>
                    <span class="nav-link-text ms-1">Organizations</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $isUser ?? '' }}" href="{{ route('user') }}">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa fa-users" aria-hidden="true" style="color: {{ $isIconColorUser ?? '#000' }}"></i>
                    </div>
                    <span class="nav-link-text ms-1">Users</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $isProfile ?? '' }}" href="{{ route('profile') }}">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa fa-user" style="color: {{ $isIconColorProfile ?? '#000' }};"></i>
                    </div>
                    <span class="nav-link-text ms-1">Profile Admin</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $isSetting ?? '' }}" href="{{ route('setting') }}">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12px" height="12px" viewBox="0 0 24 24"><path fill="{{ $isIconColorSetting ?? '#000' }}" d="M19.9 12.66a1 1 0 0 1 0-1.32l1.28-1.44a1 1 0 0 0 .12-1.17l-2-3.46a1 1 0 0 0-1.07-.48l-1.88.38a1 1 0 0 1-1.15-.66l-.61-1.83a1 1 0 0 0-.95-.68h-4a1 1 0 0 0-1 .68l-.56 1.83a1 1 0 0 1-1.15.66L5 4.79a1 1 0 0 0-1 .48L2 8.73a1 1 0 0 0 .1 1.17l1.27 1.44a1 1 0 0 1 0 1.32L2.1 14.1a1 1 0 0 0-.1 1.17l2 3.46a1 1 0 0 0 1.07.48l1.88-.38a1 1 0 0 1 1.15.66l.61 1.83a1 1 0 0 0 1 .68h4a1 1 0 0 0 .95-.68l.61-1.83a1 1 0 0 1 1.15-.66l1.88.38a1 1 0 0 0 1.07-.48l2-3.46a1 1 0 0 0-.12-1.17ZM18.41 14l.8.9l-1.28 2.22l-1.18-.24a3 3 0 0 0-3.45 2L12.92 20h-2.56L10 18.86a3 3 0 0 0-3.45-2l-1.18.24l-1.3-2.21l.8-.9a3 3 0 0 0 0-4l-.8-.9l1.28-2.2l1.18.24a3 3 0 0 0 3.45-2L10.36 4h2.56l.38 1.14a3 3 0 0 0 3.45 2l1.18-.24l1.28 2.22l-.8.9a3 3 0 0 0 0 3.98m-6.77-6a4 4 0 1 0 4 4a4 4 0 0 0-4-4m0 6a2 2 0 1 1 2-2a2 2 0 0 1-2 2"/></svg>
                    </div>
                    <span class="nav-link-text ms-1">Setting</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Owner</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link  " href="../pages/profile.html">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg width="12px" height="12px" viewBox="0 0 46 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>customer-support</title>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                    <g transform="translate(1716.000000, 291.000000)">
                                        <g transform="translate(1.000000, 0.000000)">
                                            <path class="color-background opacity-6" d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z"></path>
                                            <path class="color-background" d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z"></path>
                                            <path class="color-background" d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z"></path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
