<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Tiny MCE</title>
        <script type="text/javascript" src="/js/tinymce/tinymce.min.js"></script>
        <script type="text/javascript">
        tinymce.init({
            selector: "div#editable",
            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        });
        </script>
    </head>
    <body>
        <div id="editable" style="position: relative;">
            <table width="600" align="center" bgcolor="#FFFFFF" cellpadding="0" cellspacing="0" style="border-collapse:collapse;">
  <tr>
    <td>
    	<table width="600" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td>
            	<span style="color:black;background:none !important;font-size:16px; font-weight:bold;font-family: 'Myriad Pro', Arial Narrow, Arial, Helvetica,sans-serif; font-style: italic; outline:none;">
                	Уважаемый <? echo $data->client; ?>!
                </span>
                <br>
                <span style="color:#6E7071;background:none !important;font-size:16px; font-weight:normal;font-family: 'Myriad Pro', Arial Narrow, Arial, Helvetica,sans-serif; font-style: italic; outline:none;">
                        <? echo $data->header; ?>
                </span>
            </td>
            <td width="170"><span style="text-decoration: none;"><a target="_blank" style="text-decoration: none;" href="http://www.lbr.ru/"><img border="0" src="http://www.lbr.ru/images/kp/logo.jpg" alt="Логотип ЛБР-Агромаркет" width="150" height="100"/></a></span></td>
          </tr>
    	</table>
    </td>
  </tr>
  <tr>
    <td><img src="file:///C|/Users/cheshenkov/Desktop/akzent.png" width="580" height="329" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
        </div>
    </body>
</html>
