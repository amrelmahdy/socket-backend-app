<template>
    <b-navbar toggleable="md" type="dark">
        <b-navbar-toggle target="nav_collapse"></b-navbar-toggle>

        <b-navbar-brand href="#">RealTBox</b-navbar-brand>

        <b-collapse is-nav id="nav_collapse">

            <b-navbar-nav>

                <router-link to="/" tag="li"  class="navbar-item" exaxt>
                    <a class="nav-link">Dashboard</a>
                </router-link>


                <router-link to="/chat"  tag="li" class="navbar-item">
                    <a class="nav-link">Chat</a>
                </router-link>


                <b-nav-item-dropdown text="Dropdown">
                    <b-dropdown-item href="#">EN</b-dropdown-item>
                    <b-dropdown-item href="#">ES</b-dropdown-item>
                    <b-dropdown-item href="#">RU</b-dropdown-item>
                    <b-dropdown-item href="#">FA</b-dropdown-item>
                </b-nav-item-dropdown>

            </b-navbar-nav>

            <!-- Right aligned nav items -->
            <b-navbar-nav class="ml-auto">
                <b-nav-item-dropdown right>
                    <!-- Using button-content slot -->
                    <template slot="button-content">
                        <span>User</span>
                    </template>
                    <b-dropdown-item href="#">Profile</b-dropdown-item>
                    <b-dropdown-item href="#">Signout</b-dropdown-item>
                </b-nav-item-dropdown>
            </b-navbar-nav>

        </b-collapse>
    </b-navbar>
</template>


<script>

</script>


<style>
    .navbar-dark{
        background-color: #5C337F !important;
    }
</style>