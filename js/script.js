function validation()
{
	var result = true;
	
	var it = document.getElementById('item').value.length;
	
	if(it == 0)
	{
		result = false;
		
		alert("please enter search item");
		
		return result;
	}
}