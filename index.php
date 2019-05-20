<!DOCTYPE html>
<html lang="pt" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/jquery.jscroll.js"></script>
    <script type="text/javascript">
    $(function () {
        $('#links').jscroll({
            pagingSelector:'.paging',
            nextSelector: '.next:last',
            callback:function(){

            },
            debug:true
        });
    });


    </script>
    <style>
    .table td,.table .jscroll-added td{
        display: block;
        width: 100%;
    }
    .table tr,.table .jscroll-added tr{
        display: block;
        width: 100%;
    }
    .table-zabrada tbody > .jscroll-added > tr:nth-child(odd) > td,
    .table-zabrada tbody > tr:nth-child(odd) > td {
        background-color: red;
    }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="span12">
                <table class="table table-hover" id="linksTable">
                    <tbody id="links">
                        <tr>
                            <td>
                                <a href="#">Link1</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">Link2</a>
                            </td>
                        </tr>
                        <tr class="paging">
                            <td>
                                <a class="next" href="server.php?id=3"></a>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</body>
</html>
