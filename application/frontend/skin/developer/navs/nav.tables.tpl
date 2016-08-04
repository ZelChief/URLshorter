{**
 * Навигация на странице настроек
 *}

{component 'nav'
    name       = 'tables'
    activeItem = $sMenuSubItemSelect
    mods       = 'pills'
    items = [
        [ 'url' => "{router page='admin'}domen1/", 'text' => {lang name='tables.domen1'}, 'name' => 'domen1' ],
        [ 'url' => "{router page='admin'}domen2/", 'text' => {lang name='tables.domen2'}, 'name' => 'domen2' ],
        [ 'url' => "{router page='admin'}domen3/", 'text' => {lang name='tables.domen3'}, 'name' => 'domen3' ],
        [ 'url' => "{router page='admin'}domen4/", 'text' => {lang name='tables.domen4'}, 'name' => 'domen4' ],
        [ 'url' => "{router page='admin'}domen5/", 'text' => {lang name='tables.domen5'}, 'name' => 'domen5' ],
        [ 'url' => "{router page='admin'}domen6/", 'text' => {lang name='tables.domen6'}, 'name' => 'domen6' ],
        [ 'url' => "{router page='admin'}others/", 'text' => {lang name='tables.others'}, 'name' => 'others' ]
    ]}