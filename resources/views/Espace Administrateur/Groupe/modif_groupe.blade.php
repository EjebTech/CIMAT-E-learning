@extends('menu-admin')


@section('content')
    <main>
        <div class="formulaire_creation">
            <div class="form_header">
                <h2><i class="fa-solid fa-pen-to-square"></i> Modifier le groupe</h2>
                <a href="{{route('Admin.groups')}}"><i class="fa-solid fa-arrow-left"></i> Retour à la liste</a>
            </div>

            <form action="" class="form" method="post">
                <div class="form-group">
                    <label>Nom du groupe *</label>
                    <input type="text" name="nom_groupe"  required>
                </div>

                <div class="form-group">
                    <label>Formation associée *</label>
                    <select name="formation_id" required>
                        <option value="1">Billetterie</option>
                        <option value="2">Anglais</option>
                        <option value="3" selected>Informatique</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Description du groupe</label>
                    <input type="text" name="description_groupe" value="">
                </div>

                <div class="form-row">
                    <button type="submit"><i class="fa-solid fa-floppy-disk"></i> Modifier le groupe</button>

                </div>
            </form>
        </div>
    </main>

@endsection
