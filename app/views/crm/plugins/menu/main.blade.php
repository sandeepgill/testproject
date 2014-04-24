<nav class="top-bar" data-topbar>
    <ul class="title-area">
        <li class="name">
            <h1><a href="#">{{ t('master.sitetitle') }}</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#">{{ t('master.menu') }}</a></li>
    </ul>

    <section class="top-bar-section">
        <!-- Right Nav Section -->
        <ul class="right">
            <li class="active"><a href="#">{{ t('master.crm') }}</a></li>
            <li class="has-dropdown">
                <a href="#">{{ t('master.settings') }}</a>
                <ul class="dropdown">
                    <li><a href="#">{{ t('master.administration') }}</a></li>
                    <li><a href="#">{{ t('master.profile') }}</a></li>
                    <li><a href="#">{{ t('master.changepassword') }}</a></li>
                </ul>
            </li>
        </ul>

        <!-- Left Nav Section -->
        <ul class="left">
            <li><a href="#">{{ t('crm.leads') }}</a></li>
            <li><a href="#">{{ t('crm.potentials') }}</a></li>
            <li><a href="#">{{ t('crm.accounts') }}</a></li>
            <li><a href="#">{{ t('crm.contacts') }}</a></li>
        </ul>
    </section>
</nav>