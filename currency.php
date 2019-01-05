<?php 
extract($_POST);
if(isset($submit))
{
	switch($currency)
	{
		case 'United State Dollar':
		$res=$fnumber/69.81;
		break;
		
		case 'vietnames dogs':
        $res=$fnumber*332.29;
		break;
		
		case 'West African':
        $res=$fnumber*8.24;
        break;
        
        case 'Yemini Rial':
        $res=$fnumber*3.59;
        break;
        
        
		
	}
	
}
 
?>
<!DOCTYP html>
<html>
	<head>
		<title>Currency Convertor</title>
		<article>
  <header>
    <h1 align="center"><font color="red" >Currency Convertor</font></h1>
    </header>
	</head>
	<body>
		<form method="post">
		<table bgcolor="#00FF00" border="1" align="center">
      
			
			<tr>
           	<th>Enter Indian Rupees</th>
				<th><input type="number" name="fnumber" value="<?php  echo @$fn;?>"/></th>
			</tr> 
			
			<tr>
				<th>Select Operator</th>
				<th>
				<select name="currency">
					<option>United State Dollar</option>
					<option>vietnames dogs</option>
					<option>West African</option>
                    <option>Yemini Rial</option>
					
				</select>
				</th>
			</tr>
			<tr>
				
				<th colspan="2">
				<input type="submit" 
				name="submit" value="Show Output"/>
				</th>
			</tr>
            <tr>
				<th>Result</th>
				<th><input type="number" readonly="readonly" disabled="disabled" value="<?php  echo @$res;?>"/></th>
			</tr> 
		</table>
		</form>
	</body>
</html>