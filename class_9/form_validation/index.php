<?php

if(isset($_POST['submit'])){
    echo $_POST['f_name'];
    echo $_POST['l_name'];
}
  



 


?>




<!doctype html>
<html lang="en">

<head>
    <title>User Registion forme</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="cotainer mt-5 wrap">
        <h2 class="text-center ">User Registaion Form</h2>
        <form action="" method="post">
            <div class="row px-4 py-2">

                <div class="col-6">
                    <input type="text" placeholder="Frist Name" class="form-control" name="f_name" autocomplete="off">
                </div>
                <div class="col-6">
                    <input type="text" placeholder="Frist Name" class="form-control" name="l_name" autocomplete="off">
                </div>
            </div>
            <div class="row px-4 py-2">
                <div class="col-12">
                    <input type="email" placeholder="User Email" class="form-control" name="u_email" autocomplete="off">
                </div>
            </div>
            <div class="row px-4 py-2">
                <div class="col-12">
                    <input type="password" placeholder="password" class="form-control" name="u_password"
                        autocomplete="off">
                </div>
            </div>
            <div class="row px-4 py-2 mb-3">
                <div class="col-12">
                    <input type="password" placeholder="Re-type password" class="form-control" name="R_u_password"
                        autocomplete="off">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col margin_left">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                            value="male">
                        <label class="form-check-label" for="inlineRadio1">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                            value="female">
                        <label class="form-check-label" for="inlineRadio2">Female</label>
                    </div>
                </div>
            </div>
            <div class="row px-4 mb-4">
                <div class="col-12 ">
                    <select class="form-control">
                        <option>select country </option>
                        <option>Bangladesh </option>
                        <option>Pakistan </option>
                    </select>
                </div>
            </div>
            <div class="row mb-4">
                <dic class="col margin_left">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            I agre with terms and conditions
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                            I agre with terms with condition
                        </label>
                    </div>
                </dic>
            </div>
            <div class="row px-4 ">
                <div class="col-12 ">
                    <!-- <a href=" " class="btn btn-warning btn-block " name="submit">Submit</a> -->
                    <button class="btn btn-warning btn-block" name="submit">submit</button>
                </div>
            </div>
        </form>

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js "
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous ">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js "
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1 " crossorigin="anonymous ">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js "
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM " crossorigin="anonymous ">
    </script>
</body>

</html>