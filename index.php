<!DOCTYPE html>
<html lang="pt" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/jquery.jscroll.min.js"></script>
    <script type="text/javascript">
    $(function () {
        $('#links tbody tr').jscroll({
            loadingHtml: '<img src="img/loading.png" alt="Loading" />',
            padding: 20,
            nextSelector: 'a.next:last',
            contentSelector: 'tr'
        });
    });
    </script>
</head>
<body>
    <table id="links" class="table table-striped" style="width:100%">
        <tbody>
            <tr>
                <td>
                    <a href="#">Link 1</a>
                </td>
            </tr>
            <tr>
                <td>
                    <a class="next" href="server.php?id=1"></a>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>
