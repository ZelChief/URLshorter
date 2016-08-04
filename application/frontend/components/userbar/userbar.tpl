{**
 * Юзербар
 *}

<div class="userbar">
    <div class="userbar-inner clearfix" style="min-width: {Config::Get('view.grid.fluid_min_width')}; max-width: {Config::Get('view.grid.fluid_max_width')};">
        {if ! Config::Get( 'view.layout_show_banner' )}
            <h1 class="userbar-logo">
                <a href="{router page='/'}">{Config::Get('view.name')}</a>
            </h1>
        {/if}

        <nav class="userbar-nav">
            {if $oUserCurrent}
                {$items = [
                    [
                        'text'       => "<img src=\"{$oUserCurrent->getProfileAvatarPath(24)}\" alt=\"{$oUserCurrent->getDisplayName()}\" class=\"avatar\" /> {$oUserCurrent->getDisplayName()}",
                        'url'        => "{$oUserCurrent->getUserWebPath()}",
                        'classes'    => 'nav-item--userbar-username',
                        'menu'       => [
                            [ 'name' => 'settings',   'text' => {lang name='user.profile.nav.settings'},     'url' => "{router page='settings/account'}" ],
                            [ 'name' => 'admin',      'text' => {lang name='admin.title'},                   'url' => "{router page='admin'}", 'is_enabled' => $oUserCurrent && $oUserCurrent->isAdministrator() ]
                        ]
                    ],
                    [ 'text' => $aLang.auth.logout,  'url' => "{router page='auth'}logout/?security_ls_key={$LIVESTREET_SECURITY_KEY}" ]
                ]}
            {else}
                {$items = [
                    [ 'text' => $aLang.auth.login.title,        'classes' => 'js-modal-toggle-login',        'url' => {router page='auth/login'} ],
                    [ 'text' => $aLang.auth.registration.title, 'classes' => 'js-modal-toggle-registration', 'url' => {router page='auth/register'} ]
                ]}
            {/if}

            {component 'nav' name='userbar' activeItem=$sMenuHeadItemSelect mods='userbar' items=$items}
        </nav>
    </div>
</div>

{if $oUserCurrent}
    {component 'modal-create'}
{/if}