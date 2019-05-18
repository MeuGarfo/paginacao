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
        $('#horse').jscroll({
            loadingHtml: '<img src="loading.gif" alt="Loading" /> Loading...',
            padding: 20,
            nextSelector: '.next:last',
            // contentSelector: 'li'
        });
    });
    </script>
</head>
<body>
    <div id="horse" class="centered">
        <div id="links">
            <li>old</li>
        </div>
        <a class="next" href="server.php?id=1"></a>
    </div>
</body>
</html>
