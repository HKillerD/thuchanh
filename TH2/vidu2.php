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
                width: 630px;
                margin: 100px auto;
            }
        </style>
     </head>

    <body>
        <?php 
            if (isset($_POST["a"]) && isset($_POST["b"]))
            {
                $a=filter_input(INPUT_POST, 'a');
                $b=filter_input(INPUT_POST, 'b');
                if ($a==0)
            {
            if ($b==0)
                $nghiem="Phương trình có vô số nghiệm";
                if ($b<>0)
                    $nghiem="Phương trình vô nghiệm";
                }
                else 
                {
                    $x= -($b/$a);
                    $x=round($x,2);
                    $nghiem= "x= $x";
                }
            }
        ?>
        <form action="vidu2.php" method="post" >
            <table width="744" border="1">
                <tr>
                    <td colspan="3" bgcolor="#66CCFF" align="center" valign="middle"><strong>Giải phương trình bậc 1 
                    </strong></td>
                </tr>
                <tr>
                    <td width="120">Phương trình </td>
                    <td width="250">
                        <input name="a" type="text" />
                    X + </td>
                    <td width="352"><label for="textfield"></label>
                        <input name="b" type="text" id="textfield" />
                    = 0</td>
                </tr>
                <tr>
                    <td colspan="3">
                    Nghiệm 
                    <label for="textfield2"></label>
                    <input name="kq" type="text" id="textfield2" value="<?php  if(isset($nghiem)) echo $nghiem; ?>" 
                    size="70"/>
				</tr>
                <tr>
                    <td colspan="3" align="center" valign="middle"><input type="submit" name="chao" id="chao" value="Xuất" /></td>
                </tr>
            </table>
        </form>
    </body>
</html>
