var XMLHttpRequestObject = false;

if (window.XMLHttpRequest) {

	XMLHttpRequestObject = new XMLHttpRequest();

} else if (window.ActiveXObject) {
	
	XMLHttpRequestObject = new ActiveXObject("Microsoft.XMLHTTP");
}
 

function getData(dataSource){
	if(XMLHttpRequestObject) {
		XMLHttpRequestObject.open("GET", dataSource);
		XMLHttpRequestObject.onreadystatechange = function(){
			if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200){
				var node = document.createElement("li");
				var textnode = document.createTextNode(XMLHttpRequestObject.responseText);
				node.appendChild(textnode);
				document.getElementById("messages").appendChild(node); 
			}
		}
		XMLHttpRequestObject.send(null);
	}
}

function get_reply(){
	var msg = document.getElementById('msg');
	var msg_ = "/reply?message="+msg.value;

	// me
	var node = document.createElement("li");
	var textnode = document.createTextNode("me: "+msg.value);
	node.appendChild(textnode);
	document.getElementById("messages").appendChild(node); 

	// bot
	var reply = getData(msg_);
}