<template>
    <div>
        <app-sidebar/>
        <main>
            <header>
                <span class="menu-toggle float-left">
                    <feather type="menu" size="30"/>
                </span>
                <ol class="breadcrumb float-left py-0 mb-0">
                    <li class="breadcrumb-item">
                        <a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Library</a>
                    </li>
                    <li class="breadcrumb-item active">Data</li>
                </ol>
            </header>
            <div class="main-container">
                <router-view></router-view>
            </div>
        </main>
    </div>
</template>

<script>
import AppSidebar from './components/sidebar'
export default {
    components: {
        AppSidebar
    }
};
</script>

