
<div class="container d-flex justify-content-center">
    <form action="" style="width:50vw; min-width:300px;" method="post">
        <div class="row">
            <div class="col">
                <label class="form-label">Fisrtname</label>
                <input type="text" class="form-control" name="firstname"/>
            </div>
            <div class="col">
                <label class="form-label">Lastname</label>
                <input type="text" class="form-control" name="lastname"/>
            </div>
        </div>
        <div class="mb-3 form-group">
            <label class="form-label">Email</label>
            <input type="text" class="form-control" name="email"/>
        </div>
        <div>
            <button class="btn btn-success" type="submit" name="submit">
                save
            </button>
            <a class="btn btn-danger" href="/admin">cancel</a>
        </div>
    </form>
</div>
