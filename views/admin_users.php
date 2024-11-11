
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

<div class="container mt-5  p-4 rounded">
    <a href="/admin/users/add" class="btn btn-success">Add user</a>
</div>


<div class="container mt-1 mb-5  p-4 rounded shadow-lg" style="overflow:scroll;">
<table id="example" class="table table-striped  table-hover" style="width:100%">
        <thead>
            <tr>
            <th>Id</th>
      <th>Firstname</th>
      <th>Lastname</th>
      <th>Email</th>
      <th>Sexe</th>
      <th>Date naissance</th>
      <th>Modifier</th>
      <th>Supprimer</th>
            </tr>
        </thead>
        <tbody>
        <?php 
    foreach ($users as $user) {
?>
            <tr>
                <th scope="row"><?php echo $user['id'] ?></th>
                <td><?php echo $user['firstname'] ?></td>
                <td><?php echo $user['lastname'] ?></td>
                <td><?php echo $user['email'] ?></td>
                <td><?php echo $user['sexe'] ?></td>
                <td><?php echo $user['date_naissance'] ?></td>
                <td ><a href="/admin/users/edit?id=<?=$user['id']?>" class="btn btn-warning">modifier</a></td>
                <td ><a href="/admin/users/detete?id=<?=$user['id']?>" class="btn btn-danger">supprimer</a></td>
            </tr>
    <?php    }
?>
    
    </tbody>
    <tfoot>
        <tr>
        <th>Id</th>
      <th>Firstname</th>
      <th>Lastname</th>
      <th>Email</th>
      <th>Sexe</th>
      <th>Date naissance</th>
      <th>Modifier</th>
      <th>Supprimer</th>
        </tr>
    </tfoot>
</table>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>


<script>
        $(document).ready(function () {
    // Setup - add a text input to each footer cell
    $('#example thead tr')
        .clone(true)
        .addClass('filters')
        .appendTo('#example thead');
 
    var table = $('#example').DataTable({
        orderCellsTop: true,
        fixedHeader: true,
        initComplete: function () {
            var api = this.api();
 
            // For each column
            api
                .columns()
                .eq(0)
                .each(function (colIdx) {
                    // Set the header cell to contain the input element
                    var cell = $('.filters th').eq(
                        $(api.column(colIdx).header()).index()
                    );
                    var title = $(cell).text();
                    $(cell).html('<input type="text" placeholder="' + title + '" />');
 
                    // On every keypress in this input
                    $(
                        'input',
                        $('.filters th').eq($(api.column(colIdx).header()).index())
                    )
                        .off('keyup change')
                        .on('change', function (e) {
                            // Get the search value
                            $(this).attr('title', $(this).val());
                            var regexr = '({search})'; //$(this).parents('th').find('select').val();
 
                            var cursorPosition = this.selectionStart;
                            // Search the column for that value
                            api
                                .column(colIdx)
                                .search(
                                    this.value != ''
                                        ? regexr.replace('{search}', '(((' + this.value + ')))')
                                        : '',
                                    this.value != '',
                                    this.value == ''
                                )
                                .draw();
                        })
                        .on('keyup', function (e) {
                            e.stopPropagation();
 
                            $(this).trigger('change');
                            $(this)
                                .focus()[0]
                                .setSelectionRange(cursorPosition, cursorPosition);
                        });
                });
        },
    });
});
    </script>