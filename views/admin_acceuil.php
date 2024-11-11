
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
<style>
    .link:hover {
        background-color:#000;
        color: #fff;
        transition:.3s;
    }
</style>

<ul class="bg-light shadow-lg fixed-top" style="padding:10px;display:flex;flex-direction:row;gap:30px;justify-content:center;margin-bottom:20px;">
    <a class="btn link" href="/admin/acceuil">Acceuil</a>
    <a class="btn link" href="/admin/users">Users</a>
    <a class="btn link" href="/admin/users_validation">Validation users</a>
    <a class="btn link" href="/admin/admin_users">Admins</a>
    <a class="btn link" href="/admin/recettes">Recettes</a>
    <a class="btn link" href="/admin/recettes_validation">Validation recettes</a>
    <a class="btn link" href="/admin/nutritions">Ingrediants</a>
    <a class="btn link" href="/admin/news">News</a>
    <a class="btn link" href="/admin/parametres">Parametres</a>
    <a class="btn btn-dark" href="/admin/logout">Logout</a>
</ul>

<div class="container mt-5" style="display:flex;flex-direction:column;gap-10px;">
    <div style="margin-top:60px;display:flex;flex-direction:row; align-items:center;justify-content:start;gap:100px;">
        <h1>Nombre des utilisateurs valide :</h1>
        <p style="font-size:2.5rem;"><?=count($users)?></p>
    </div>
    <div style="margin-top:10px;display:flex;flex-direction:row; align-items:center;justify-content:start;gap:100px;">
        <h1>Nombre des utilisateurs pas encore valider :</h1>
        <p style="font-size:2.5rem;"><?=count($new_users)?></p>
    </div>
    <div style="margin-top:10px;display:flex;flex-direction:row; align-items:center;justify-content:start;gap:100px;">
        <h1>Nombre des recettes valide :</h1>
        <p style="font-size:2.5rem;"><?=count($recettes)?></p>
    </div>
    <div style="margin-top:10px;display:flex;flex-direction:row; align-items:center;justify-content:start;gap:100px;">
        <h1>Nombre des recettes pas encore valider :</h1>
        <p style="font-size:2.5rem;"><?=count($recettes_valid)?></p>
    </div>
    <div style="margin-top:10px;display:flex;flex-direction:row; align-items:center;justify-content:start;gap:100px;">
        <h1>Nombre des ingrediants :</h1>
        <p style="font-size:2.5rem;"><?=count($nutritions)?></p>
    </div>
</div>