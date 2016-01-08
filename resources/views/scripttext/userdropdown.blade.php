<li class="dropdown" id="user-header">
    <a href="#" class="dropdown-toggle c-white" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
        <img src="{{ Gravatar::get(Auth::user()->email)  }}" alt="user avatar" width="" class="circ">
        <span class="username">{{ Auth::user()->name }}</span>
        <i class="fa fa-angle-down p-r-10"></i>
    </a>
    <ul class="dropdown-menu">
        <li>
            <a href="profil.html">
                <i class="glyph-icon flaticon-account"></i> My Profile
            </a>
        </li>
        <li>
            <a href="calendar.html">
                <i class="glyph-icon flaticon-calendar"></i> My Calendar
            </a>
        </li>
        <li>
            <a href="profil_edit.html">
                <i class="glyph-icon flaticon-settings21"></i> Account Settings
            </a>
        </li>
        <li class="dropdown-footer clearfix">
          <a href="javascript:;" class="toggle_fullscreen" title="Fullscreen">
            <i class="glyph-icon flaticon-fullscreen3"></i>
          </a>
          <a href="lockscreen.html" title="Lock Screen">
            <i class="glyph-icon flaticon-padlock23"></i>
          </a>
          <a href="{{ URL::to('/auth/logout') }}" title="Keluar">
            <i class="fa fa-power-off"></i>
          </a>
        </li>
    </ul>
</li>
