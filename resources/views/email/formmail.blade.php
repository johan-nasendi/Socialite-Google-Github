<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Send Mail</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
        <div class="container">
                <table class="table table-stripsed">
                    <form action=" {{ route('post.email') }}" method="POST">
                        {{ csrf_field() }}
                    <tr>
                        <td width="190px">Kepada</td><td><input type="enail" class="form-control" name="penerima" placeholder="Masukan email penerima"></td>
                    </tr>
                    <tr>
                        <td>Pesan</td>
                        <td>
                            <textarea class="form-control" name="pesan" placeholder="Pesan anda"></textarea>
                        </td>
                    </tr>
                    <tr>
                            <td colspan="2"><input type="submit" value="Kirim" class="btn btn-primary"></td>
                    </tr>
                </table>
            </form>
        </div>
</body>
</html>
