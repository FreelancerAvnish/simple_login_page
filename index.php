<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- main css -->
    <link rel="stylesheet" href="assets/style.css">
    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- sweetalert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Login</title>
   
</head>

<body>
    <header id="button">
        <div class="container">
            <div class="row my-5">
                <div class="col-12">
                    <div class="loginbackground glassmor">
                        <img src="images/icon/bg.gif" alt="" width="100%">
                        <div class="absolutebutton">
                            <div class="form">
                                <h3 class="text-center">Login</h3>
                                <hr>
                                <form class="loginform">
                                       <!-- trying -->
                                    <div class="input-group">
                                        <input type="text" name="username" id="username" required class="input-c form-control my-2">
                                        <label for="username" class="input-label-c">User Name</label>
                                    </div>
                                    <!-- end trying -->
                                    <div class="input-group">
                                        <input type="text" name="password" id="password" required class="input-c form-control my-2">
                                        <label for="password" class="input-label-c">Password</label>
                                    </div>

                                    <button type="submit" class="form-control btn btn-info my-2">Submit</button>


                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <script>
        $(document).ready(function () {
            $(".loginform").submit(function (e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "loginbackend.php",
                    data: $(this).serialize(),
                    success: function (response) {
                    // alert(response);
                        if (response == 1) {
                            swal("Great!", "You are Welcome", "success");
                            location.href = "mrdashboard.php";
                        }
                        else {
                            swal("Sorry!", "User Name or Password is wrong", "error");
                        }
                    }
                });

            });


        });
    </script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>
