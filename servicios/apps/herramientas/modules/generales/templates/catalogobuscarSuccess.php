<!-- provided by miki -->
<html>
<head>
<title></title>
</head>
<body>
<br>
<br>

<form name="f1" action=""
onSubmit="if(this.t1.value!=null && this.t1.value!='')
findString(this.t1.value);return false"
>
<input type="text" id=t1 name=t1 value="" size=50 maxlength=50>
<input type="submit" id=b1 name=b1 value="Buscar">
<div style="height:400px; border:0px solid; overflow:scroll;">
<table border="1">

<tr>
<?
if ($seguir)
{
	$nom=array_keys($arre[0]);
	$objetos=split("-",$objs);
	$campo=split("-",$campos);

	foreach ($nom as $n)
	{
	?>
	      <th><? print ucfirst($n); ?></th>
	<?
	}
}
else
{

	print '<br><br><strong>0 Registros Encontrados!!!</strong>';
}
?>
</tr>


<?
if ($seguir)
{
	foreach ($arre as $fila)
	{
	?>
	    <tr>
	    	<?
	    		$cadena='';
	    		$i=0;
	    		while ($i<=count($campo)-1)
	    		{
	    			$cadena=$cadena.$fila[$campo[$i]].'***';
		    		$i++;
	    		}
				foreach ($fila as $col)
				{
			?>
	    		  <th><a href="javascript: aceptar('<? print $cadena; ?>');"><? print $col; ?></a></th>
	    	<?
				}
			?>
	    </tr>

	<?
	}
}
?>

</table>
</div>
</form>

<script language="JavaScript" type="text/javascript">
  function aceptar(tira)
  {
  	 objs='<? print $objs; ?>';
  	 obj=objs.split('-');
  	 tira=tira.split('***');

  	 for (i=0;i<=obj.length-1;i++)
  	 {
  	 	donde=obj[i];
  	 	valor=tira[i];
		opener.document.getElementById(donde).value=valor;
  	 }
  	 foco=obj[0];
  	 opener.document.getElementById(foco).focus();
  	 close();
  }
</script>

<script language="JavaScript">

var TRange=null

function findString (str) {
 if (parseInt(navigator.appVersion)<4) return;
 var strFound;
 if (navigator.appName=="Netscape") {

  // NAVIGATOR-SPECIFIC CODE

  strFound=self.find(str);
  if (!strFound) {
   strFound=self.find(str,0,1)
   while (self.find(str,0,1)) continue
  }
 }
 if (navigator.appName.indexOf("Microsoft")!=-1) {

  // EXPLORER-SPECIFIC CODE

  if (TRange!=null) {
   TRange.collapse(false)
   strFound=TRange.findText(str)
   if (strFound) TRange.select()
  }
  if (TRange==null || strFound==0) {
   TRange=self.document.body.createTextRange()
   strFound=TRange.findText(str)
   if (strFound) TRange.select()
  }
 }
 if (!strFound) alert ("String '"+str+"' not found!")
}

$('t1').focus();

</script>

</body>
</html>
<!-- provided by miki -->