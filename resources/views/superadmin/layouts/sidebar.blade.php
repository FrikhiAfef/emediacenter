<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img  class="img-circle" >
            </div>
            <div class="pull-left info">
                <p>SUPER ADMIN</p>

            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Rechercher...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Menu De Navigation SuperAdmin</li>
            <li class="active treeview">
                <a href="{{route ('administrateur.index')}}">
                    <i class="fa fa-files-o"></i> <span>Utilisateur</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class=""> <a href="{{route ('administrateur.index')}}"> <i class="fa fa-circle-o text-red"></i> Ajouter un utilisateur</a></li>
                    <li class=""> <a href=""> <i class="fa fa-circle-o text-yellow"></i> ​​Modifier un utilisateur</a></li>
                    <li class=""> <a href=""> <i class="fa fa-circle-o text-aqua"></i> Supprimer un utilisateur</a></li>
                </ul>
            </li>





            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i> <span>Investisseur </span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class=""> <a href="{{route('investisseur.index')}}"> <i class="fa fa-circle-o text-red"></i>Demande De Validation </a></li>
                    <li class=""> <a href="{{route('valider')}}"> <i class="fa fa-circle-o text-yellow"></i>Investisseurs Validées</a></li>
                    <li class=""> <a href="{{route('investisseur.desactiver')}}"> <i class="fa fa-circle-o text-aqua"></i>Investisseurs Désactivées</a></li>
                    <li class=""> <a href=""> <i class="fa fa-circle-o text-red"></i>Contact</a></li>

                </ul>
            </li>

            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i> <span>Entreprise </span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class=""> <a href="{{route('entreprise.index')}}"> <i class="fa fa-circle-o text-red"></i>Demande De Validation </a></li>
                    <li class=""> <a href="{{route('entreprise.valider')}}"> <i class="fa fa-circle-o text-yellow"></i>Entreprises Validées</a></li>
                    <li class=""> <a href="{{route('entreprise.desactiver')}}"> <i class="fa fa-circle-o text-aqua"></i>Entreprises Désactivées</a></li>
                    <li class=""> <a href=""> <i class="fa fa-circle-o text-red"></i>Contact</a></li>

                </ul>
            </li>

            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i> <span>Porteur D'Idée </span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class=""> <a href="{{route('porteur.index')}}"> <i class="fa fa-circle-o text-red"></i>Liste Des Inscrits</a></li>

                    <li class=""> <a href="{{route('affecter')}}"> <i class="fa fa-circle-o text-yellow"></i>Liste Des Porteur Affectée</a></li>

                    <li class=""> <a href=""> <i class="fa fa-circle-o text-aqua"></i>Contact</a></li>
                </ul>
            </li>
        </ul>

            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">Menu De Navigation Responsable Radio</li>
            <!--web radio-->
            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i> <span>WEB RADIO</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class=""> <a href="{{route ('emission.index')}}"> <i class="fa fa-circle-o"></i> EMISSIONS</a></li>
                    <li class=""> <a href="{{route ('evenement.index')}}"> <i class="fa fa-circle-o"></i> ​​ÉVÉNEMENTS</a></li>
                    <li class=""> <a href="{{route ('programme.index')}}"> <i class="fa fa-circle-o"></i> PROGRAMMES</a></li>
                    <li class=""> <a href="{{route ('podcast.index')}}"> <i class="fa fa-circle-o"></i> PODCASTS</a></li>
                    <li class=""> <a href="{{route ('galerie.index')}}"> <i class="fa fa-circle-o"></i> GALERIE</a></li>
                </ul>
            </li>
            </ul>

        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Menu De Navigation Responsable TV</li>

            <!--web tv-->
            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i> <span>WEB TV</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class=""> <a href=""> <i class="fa fa-circle-o"></i> EMISSIONS</a></li>
                    <li class=""> <a href=""> <i class="fa fa-circle-o"></i> ​​ÉVÉNEMENTS</a></li>
                    <li class=""> <a href=""> <i class="fa fa-circle-o"></i> PROGRAMMES</a></li>
                    <li class=""> <a href=""> <i class="fa fa-circle-o"></i> PODCASTS</a></li>
                    <li class=""> <a href=""> <i class="fa fa-circle-o"></i> GALERIE</a></li>
                </ul>
            </li>
        </ul>
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Autre</li>
            <li><a href="{{route ('apropo.index')}}"><i class="fa fa-circle-o text-red"></i> <span>À PROPOS </span></a></li>
            <li><a href="{{route ('equipe.index')}}"><i class="fa fa-circle-o"></i> <span>ÉQUIPE </span></a></li>
            <li><a href="{{route ('actualite.index')}}"><i class="fa fa-circle-o text-yellow"></i> <span>ACTUALITÉS</span></a></li>
            <li><a href="{{route ('jumpin.index')}}"><i class="fa fa-circle-o text-aqua"></i> <span>JUMP IN INCUBATOR</span></a></li>
            <li><a href="{{route ('medialab.index')}}"><i class="fa fa-circle-o text-red"></i> <span>DIGITAL MEDIA LAB </span></a></li>
            <li><a href="{{route ('contact.index')}}"><i class="fa fa-circle-o text-red"></i> <span>CONTACTS </span></a></li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>