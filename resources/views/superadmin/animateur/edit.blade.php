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

                        <form role="form" method="post"  enctype="multipart/form-data" action="{{route('animateur.update',$animateurs->id)}}">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="PUT">

                            <div class="box-body">
                                <div class="form-group"  @if($errors->get('nomAnim')) has-error @endif >
                                    <label for="exampleInputEmail1">Nom</label>
                                    <input type="text" name="nomAnim" class="form-control" value="{{$animateurs->nomAnim}}" >
                                    @if($errors->get('nomAnim'))
                                        @foreach($errors->get('nomAnim') as $message)
                                            <li>{{$message}}</li>
                                        @endforeach
                                    @endif
                                </div>

                                <div class="form-group"  @if($errors->get('tel')) has-error @endif>
                                    <label for="exampleInputPassword1">Telephone</label>
                                    <input type="text" name="tel" class="form-control" value="{{$animateurs->tel}}">
                                    @if($errors->get('tel'))
                                        @foreach($errors->get('tel') as $message)
                                            <li>{{$message}}</li>
                                        @endforeach
                                    @endif
                                </div>

                                <div class="form-group" @if($errors->get('email')) has-error @endif>
                                    <label for="prenomAnim">E-mail</label>
                                    <input type="email" name="email" class="form-control" value="{{$animateurs->email}}"  >
                                    @if($errors->get('poste'))
                                        @foreach($errors->get('poste') as $message)
                                            <li>{{$message}}</li>
                                        @endforeach
                                    @endif
                                </div>


                                <div class="form-group" @if($errors->get('image')) has-error @endif >
                                    <label for="image">Image</label>
                                    <input name="image" type="file" value="{{$animateurs->image}}" >
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
                                <button type="submit" class="btn btn-primary">Modifier</button>
                                <a href="{{route('animateur.index')}}" type="reset" class="btn btn-primary" value="Anuler">Annuler</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection