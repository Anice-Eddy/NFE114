<header>
    <nav>
        <ul>
            <li><a href="/utilisateurs_avec_ctrl_simple">Liste des utilisateurs avec controlleur simple</a></li>
            <li><a href="/users">Liste des utilisateurs avec controlleur REST</a></li>
            <li><a href="/groupes">Gestion des groupes</a></li>
            <li><a href="/entreprises">Gestion des entreprises</a></li>
        </ul>
    </nav>
    @if(isset($erreurs))
        @include('layouts.erreurs')
    @endif
</header>