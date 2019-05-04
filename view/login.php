<div class="container">
        <div class="row justify-content-center align-items-center" style="height:50vh">
            <div class="col-4">
                <div class="card">
                    <div class="card-header" id="" style="">
                        Login Admin
                    </div>
                    <div class="card-body">
                        <form action="" autocomplete="off" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" name="id_admin" placeholder="ID Admin">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <button type="submit" name="login" class="btn btn-primary">login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>





<?php 

if (isset($_POST['login'])) {
    
    $id_admin = $_POST['id_admin'];
    $password = $_POST['password'];

    $login = $objAdmin->login($id_admin, $password);

    if ($login) {
        echo '<script> alert("Login berhasil"); window.location="?view=home"; </script>';
    }else{

        echo '<script> alert("error login"); </script>';
    }

}


