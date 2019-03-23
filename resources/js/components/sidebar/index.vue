<template>
  <nav>
    <div class="menu">
      <div class="main-menu">
        <a class="logo" href="/">
          <span><feather type="aperture"/></span>
        </a>
        <div class="main-menu-content">
          <ul>
            <sidebar-item
              v-for="(item, index) in mainMenu"
              :key="index"
              :icon="item.icon"
              :title="item.title"
              :path="item.path"
              :isActive="item.isActive"/>
          </ul>
        </div>
        <div class="main-menu-footer">
          <ul>
            <sidebar-item
              v-for="(item, index) in settingMenu"
              :key="index"
              :icon="item.icon"
              :title="item.title"
              :path="item.path"
              :isActive="item.isActive"/>
          </ul>
        </div>
      </div>
      <div class="sub-menu">
        <div class="sub-menu-content">
          <h1 class="page-title">Dashboard</h1>
          <section>
            <h1 class="section-title">UI Elements</h1>
            <ul>
              <li>
                <a href="/pages/cards.html">Cards</a>
              </li>
              <li>
                <a href="/pages/table.html">Table</a>
              </li>
              <li>
                <a href="/pages/modal.html">Modal</a>
              </li>
              <li>
                <a href="/pages/notification.html">Notification</a>
              </li>
              <li>
                <a href="/pages/widget.html">Widget</a>
              </li>
              <li>
                <a href="/pages/forms.html">Forms</a>
              </li>
            </ul>
          </section>
          <section>
            <h1 class="section-title">Pages</h1>
            <ul>
              <li>
                <a href="/">Dashboard</a>
              </li>
              <li>
                <a href="/pages/login.html">Login</a>
              </li>
              <li class="active">
                <a href="/pages/blank.html">Blank</a>
              </li>
              <li>
                <a href="/pages/error.html">Error</a>
              </li>
            </ul>
          </section>
        </div>
      </div>
    </div>
  </nav>
</template>

<script>
import SidebarItem from './item'
export default {
  components: {
    SidebarItem
  },
  data() {
    return {
      mainMenu: [
        { title: 'Dashboard', icon: 'home', path: '/', isActive: true },
        { title: 'Components', icon: 'box', path: '/' },
        { title: 'User', icon: 'users', path: '/' },
        { title: 'System', icon: 'settings', path: '/' },
        { title: 'Extension', icon: 'package', path: '/'  }
      ],
      settingMenu: [
        { title: 'System', icon: 'server', path: '/' },
        { title: 'Extensions', icon: 'zap', path: '/' },
      ]
    }
  }
}
</script>
