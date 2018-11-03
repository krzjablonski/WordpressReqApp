<header class="banner">
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark col">
                <a class="navbar-brand" href="#">{{ get_bloginfo() }}</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                @if (has_nav_menu('primary_navigation'))
                    {!! wp_nav_menu([
                      'theme_location' => 'primary_navigation',
                      'menu_class' => 'navbar-nav ml-auto',
                      'container' => 'div',
                      'container_class' => 'collapse navbar-collapse',
                      'container_id' => 'navbarSupportedContent'
                      ]) !!}
                @endif
            </nav>
        </div>
    </div>
</header>
