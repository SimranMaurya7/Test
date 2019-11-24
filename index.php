<!DOCTYPE>
<html>
<head>
<title>Java</title>
</head>
<body>
<script type="text/javascript">
	var store=prompt("Enter a number");
	var num=parseInt(store);
		var count=0;
		for(var i=1;i<=num;i++)
		{
			if(num%i==0)
				count++;
		}
		if(count==2)
		{
			document.write(store+" is prime");
		}
		else
		{
			document.write(store+" is non-prime");
		}
</script>
</body>
</html>
