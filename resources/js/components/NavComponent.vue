<template>
    <div class="navbar-fixed primary" style="position: fixed; left: 0; right: 0;">
        <nav class="transparent">
            <div class="transparent container navbar-wrapper overflow-visible">

                <logo-component></logo-component>

                <a href="#" data-target="slide-out" class="sidenav-trigger black-text valign-wrapper full-height right" style="">
                    <img src="/svg/icons/menu.svg" style="height: 64px;">
                </a>

                <ul class="right hide-on-med-and-down overflow-visible">
                    <li class="">
                        <a href="/" class="cursor-click valign-wrapper white-text">
                            HOME
                        </a>
                    </li>
                    <li class="">
                        <a href="/#services" class="cursor-click valign-wrapper white-text">
                            SERVICES
                        </a>
                    </li>
                    <li class="">
                        <a href="/contact" class="cursor-click valign-wrapper white-text">
                            CONTACT
                        </a>
                    </li>
                    <li class="valign-wrapper">
                        <a href="/exclusive/members" class="white outline btn-large">
                            Client Area
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <side-nav-component></side-nav-component>

    </div>
</template>

<script>
    export default {
        name: "NavComponent"
    }
</script>

<style scoped>

</style>
