@extends('template-admin')

@section('content')
    <main>
        <div class="formulaire_creation">
            <div class="form_header">
                <h2><i class="fa-solid fa-book"></i> Ajouter une formation</h2>
                <a href="{{route('Admin.programs')}}"><i class="fa-solid fa-arrow-left"></i> Retour à la liste</a>
            </div>
            <form action="" class="form" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Titre de la formation *</label>
                    <input type="text" name="" required>
                </div>


                <div class="form-row">
                    <button type="submit"><i class="fa-solid fa-floppy-disk"></i> Enregistrer la formation</button>

                </div>

            </form>

        </div>
    </main>
@endsection
