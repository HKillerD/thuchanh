<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Chào các bạn</title>
        <style>
            *{
                font-family: Tahoma;
            }
            table{
                width: 400px;
                margin: 100px auto;
            }
            table th{
                background: #66CCFF;
                padding: 10px;
                font-size: 18px;
            }
        </style>
    </head>

    <body>
        <?php
            $sd_ten='';		
            if (isset($_POST["ten"]))
            {
                $ten=filter_input(INPUT_POST, 'ten');
                $sd_ten="Chào bạn ".$ten;
            }
        ?>
        <form action="vidu.php" method="post" >
            <table width="271" border="1">
                <tr>
                    <th colspan="2">IN LỜI CHÀO</th>
                </tr>
                <tr>
                    <td width="91">Họ tên bạn</td>
                <td width="164">
                    <input type="text" name="ten" id="chao3" /></td>
                </tr>
                <tr>
                    <td colspan="2">
                    <label><?php echo $sd_ten; ?></label></td>
                </tr>
                <tr>
                    <td colspan="2" align="center" valign="middle"><input type="submit" name="chao" id="chao" value="Xuất" /></td>
                </tr>
            </table>
        </form>
    </body>
</html>
