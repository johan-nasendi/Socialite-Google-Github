<html>
    <head>
        <title>SaCode Sosialite Auth</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body class="bg-dark">
        
        <!-- BERANDA -->
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <!-- start card -->
                    <div class="card">
                        <div class="card-header">
                            <h1>SaCode Sosialite Auth</h1>
                        </div>
                        <div class="card-body py-5">
                            <a href="#" class="btn btn-dark mx-5"><h1>Masuk</h1></a>
                            <a href="#" class="btn btn-dark bg-light text-dark mx-5"><h1>Daftar</h1></a>
                        </div>
                        <div class="card-footer">
                            Copyright &copy; 2021. Developted by <a href="#">Johan Nasendi</a>
                        </div>
                    </div>
                    <!-- endcard -->
                </div>
            </div>
        </div>
        <!-- END BERANDA -->

        <!-- MASUK -->
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <!-- start card -->
                    <div class="card text-center">
                        <div class="card-header">
                            <h1>Masuk</h1>
                        </div>
                        <div class="card-body py-5">


                            <form id="" action="member-berhasil-daftar.html" method="get">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Email"
                                                required="required">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="kata-sandi"
                                                placeholder="Kata sandi" required="required">
                                        </div>

                                    </div>
                                    <div class="col-12">
                                        <input type="submit" value="Masuk" class="btn btn-dark btn-bordered w-100 mt-3 mt-sm-4">

                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label contact-bottom" for="exampleCheck1"><span
                                                    class="d-inline-block mt-3">Dengan mendaftarkan diri, Anda setuju
                                                    dengan <a href="#" class="text-primary">ketentuan yang berlaku.</a>
                                        </div>

                                        <div class="mt-3">
                                            <a href="#" class="btn-light bg-danger text-light px-2 py-1"
                                                style="border-radius: 10px;">
                                                <i class="fab fa-google mr-2"></i>  Google</a>
                                            <a href="#" class="btn-light bg-dark text-light px-2 py-1"
                                                style="border-radius: 10px;">
                                                <i class=" fab fa-github mr-2"></i> GitHub</a>
                                        </div>
                                        <div class="contact-bottom">
                                            <span class="d-inline-block mt-3">Belum punya akun? <a
                                                    href="member-daftar.html" class=" text-primary">Daftar</a></span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer">
                            Copyright &copy; 2021. Developted by <a href="#">Johan Nasendi</a>
                        </div>
                    </div>
                    <!-- endcard -->
                </div>
            </div>
        </div>
        <!-- END MASUK -->


        <!-- DAFTAR -->
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <!-- start card -->
                    <div class="card text-center">
                        <div class="card-header">
                            <h1>Daftar</h1>
                        </div>
                        <div class="card-body py-5">

                            <form id="" action="member-berhasil-daftar.html" method="get">
                                <div class="contact-top">
                                    <h2 class="contact-title">Daftar</h2>
                                    <h5 class="text-secondary fw-3 py-3">Lengkapi Formulir berikut <br> dengan baik dan
                                        benar.</h5>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="nama" placeholder="Nama"
                                                required="required">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Email"
                                                required="required">
                                        </div>

                                        <div class="form-group">
                                            <input type="password" class="form-control" name="kata-sandi"
                                                placeholder="Kata sandi" required="required">
                                        </div>

                                        <div class="form-group">
                                            <input type="password" class="form-control" name="ulangi-kata-sandi"
                                                placeholder="Ulangi Kata sandi" required="required">
                                        </div>

                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label contact-bottom" for="exampleCheck1"><span
                                                    class="d-inline-block mt-3">Dengan mendaftarkan diri, Anda setuju
                                                    dengan <a href="#" class="text-primary">ketentuan yang berlaku.</a>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <input type="submit" value="Daftar" class="btn btn-dark btn-bordered w-100 mt-3 mt-sm-4">
                                        <div class="mt-3">
                                            <a href="#" class="btn-light bg-danger text-light px-2 py-1"
                                                style="border-radius: 10px;">
                                                <i class="fab fa-google mr-2"></i>
                                                Google</a>
                                            <a href="#" class="btn-light bg-dark text-light px-2 py-1"
                                                style="border-radius: 10px;">
                                                <i class=" fab fa-github mr-2"></i>
                                                GitHub</a>
                                        </div>
                                        <div class="contact-bottom">
                                            <span class="d-inline-block mt-3">Belum punya akun? <a
                                                    href="member-daftar.html" class=" text-primary">Daftar</a></span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            
                        </div>
                        <div class="card-footer">
                            Copyright &copy; 2021. Developted by <a href="#">Johan Nasendi</a>
                        </div>
                    </div>
                    <!-- endcard -->
                </div>
            </div>
        </div>
        <!-- END DAFTAR -->
        
        <!-- PESAN BERHASIL -->
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <!-- start card -->
                    <div class="card">
                        <div class="card-header">
                            <h1>Berhasil!</h1>
                        </div>
                        <div class="card-body py-5">
                            <div class="alert alert-success">
                                <p><b>Nice!</b> Anda telah berhasil mendaftar.</p>
                            </div>
                        </div>
                        <div class="card-footer">
                            Copyright &copy; 2021. Developted by <a href="#">Johan Nasendi</a>
                        </div>
                    </div>
                    <!-- endcard -->
                </div>
            </div>
        </div>
        <!-- END PESAN BERHASIL -->

        <!-- PESAN GAGAL -->
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <!-- start card -->
                    <div class="card">
                        <div class="card-header">
                            <h1>Gagal!</h1>
                        </div>
                        <div class="card-body py-5">
                            <div class="alert alert-danger">
                                <p><b>Oops!</b> Anda telah berhasil mendaftar.</p>
                            </div>
                        </div>
                        <div class="card-footer">
                            Copyright &copy; 2021. Developted by <a href="#">Johan Nasendi</a>
                        </div>
                    </div>
                    <!-- endcard -->
                </div>
            </div>
        </div>
        <!-- END PESAN GAGAL -->

    </body>
</html>