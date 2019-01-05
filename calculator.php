<?php 
extract($_POST);
if(isset($submit))
{
	switch($operator)
	{
		case '+':
		$res=$fnumber+$snumber;
		break;
		
		case '-':
        $res=$fnumber-$snumber;
		break;
		
		case '*':
        $res=$fnumber*$snumber;
        break;
        
        case '/':
        $res=$fnumber/$snumber;
        break;
        
        case '%':
        $res=$fnumber%$snumber;
		break;
		
	}
	
}
 
?>
<!DOCTYP html>
<html>
	<head>
		<title>Calculator</title>
		<article>
  <header>
    <h1 align="center"><font color="red" >Calculator</font></h1>
    </header>
	</head>
	<body>
		<form method="post">
		<table bgcolor="#00FF00" border="1" align="center">
      
			
			<tr>
           	<th>Enter First number</th>
				<th><input type="number" name="fnumber" value="<?php  echo @$fn;?>"/></th>
			</tr> 
			<tr>
				<th>Enter Second number</th>
				<th><input type="number" name="snumber" value="<?php  echo @$sn;?>"/></th>
			</tr>
			<tr>
				<th>Select Operator</th>
				<th>
				<select name="operator">
					<option>+</option>
					<option>-</option>
					<option>*</option>
                    <option>/</option>
					<option>%</option>
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