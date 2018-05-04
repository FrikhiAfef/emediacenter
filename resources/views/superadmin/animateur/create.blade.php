@extends('superadmin.layouts.app')

@section('main-content')
    <!-- contenu de l'entete de page -->
    <div class="content-wrapper">

        <section class="content-header">
            <h1>
                Bienvenue
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
                <li class="active">Autre</li>
                <li class="active">Animateur</li>
            </ol>
            <br>
            <br>
            <!-- formulaire de creation de nouveau emission -->
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Nouvelle Animateur </h3>
                        </div>

                        <form role="form" method="post"  action="{{route('animateur.store')}}">
                            {{csrf_field()}}

                            <div class="form-group" @if($errors->get('nomAnim')) has-error @endif>
                                <label for="nomAnim">Nom Et Prenom</label>
                                <input type="text" name="nomAnim" class="form-control"  placeholder="Nom & Prenom">
                                @if($errors->get('nomAnim'))
                                    @foreach($errors->get('nomAnim') as $message)
                                        <li>{{$message}}</li>
                                    @endforeach
                                @endif
                            </div>

                                 <div class="form-group" @if($errors->get('tel')) has-error @endif>
                                    <label for="tel">Telephone</label>
                                    <input type="text" name="tel" class="form-control"  placeholder="son telephone">
                                    @if($errors->get('tel'))
                                        @foreach($errors->get('tel') as $message)
                                            <li>{{$message}}</li>
                                        @endforeach
                                    @endif
                                </div>

                                <div class="form-group" @if($errors->get('email')) has-error @endif>
                                    <label for="email">E-mail</label>
                                    <input type="email" name="email" class="form-control"  placeholder="son email">
                                    @if($errors->get('email'))
                                        @foreach($errors->get('email') as $message)
                                            <li>{{$message}}</li>
                                        @endforeach
                                    @endif
                                </div>


                                <div class="form-group" @if($errors->get('image')) has-error @endif>
                                    <label for="image">Image</label>
                                    <input name="image" type="file" >
                                    @if($errors->get('image'))
                                        @foreach($errors->get('image') as $message)
                                            <li>{{$message}}</li>
                                        @endforeach
                                    @endif

                                </div>


                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> valider
                                    </label>
                                </div>

                    </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Enregistrer</button>

                                <a href="{{route('animateur.index')}}" type="reset" class="btn btn-primary" value="Anuler">Annuler</a>
                            </div>
                    </form>

                    </div>
                </div>

        </section>


    </div>

@endsection