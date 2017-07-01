    <ul id="gn-menu" class="gn-menu-main">
      <li class="gn-trigger">
        <a id="menu-toggle" class="gn-icon gn-icon-menu">
          <div id="hamburger">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <div id="cross">
            <span></span>
            <span></span>
          </div>
        </a>
        <nav class="gn-menu-wrapper">
          @include('layouts.sidebar')
        </nav>
      </li>
      <li>
        <a href="index.html" class="logo">ANIMEZ-ONE<i class="fa fa-toggle-on"></i></a>
      </li>
      <li class="top-clock">
        <span class="current-time"></span>
      </li>
      <li class="pull-right">
        <ul class="nav navbar-right right-menu">
          <li class="lang">
            <select class="cs-select cs-skin-elastic">
              <option value="english" data-class="flag-england" selected>English</option>
              <option value="german" data-class="flag-germany">German</option>
              <option value="french" data-class="flag-france">French</option>
            </select>
          </li>
          <li class="dropdown notifications">
            <a class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i> <span class="label label-warning">4</span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <h4 class="zero-m text-center">Notifications</h4>
              </li>
              <li>
                <div class="messages">
                  <div class="member-info">
                    <img src="img/team/admin.png" alt="admin" class="img-circle pull-left">
                    <span class="member-name">Sash Ficus</span>
                    <p class="members-message zero-m">Research is done!</p>
                  </div>
                  <div class="member-info">
                    <img src="img/team/member.png" alt="admin" class="img-circle pull-left">
                    <span class="member-name">Vivien Hulk</span>
                    <p class="members-message zero-m">Working hard</p>
                  </div>
                  <div class="member-info">
                    <img src="img/team/admin.png" alt="admin" class="img-circle pull-left">
                    <span class="member-name">Sash Ficus</span>
                    <p class="members-message zero-m">Research is done!</p>
                  </div>
                  <div class="member-info">
                    <img src="img/team/member.png" alt="admin" class="img-circle pull-left">
                    <span class="member-name">Vivien Hulk</span>
                    <p class="members-message zero-m">Working hard</p>
                  </div>
                </div>
              </li>
            </ul>
          </li>
          <li class="dropdown some-btn">
            <a class="fullscreen">
              <i class="mdi mdi-fullscreen"></i>
            </a>
          </li>
        </ul>
      </li>
    </ul>