<?php 
$message="<message id=\"1392736500822-tyrone@imyourdoc.com-fahim@imyourdoc.com\" type=\"chat\" from=\"fahim@imyourdoc.com/1aacc47c\" to=\"tyrone@imyourdoc.com\"><body>Hi this is Dr rahim I'm testing our connection</body><x xmlns=\"jabber:x:event\"><offline/><delivered/><displayed/><composing/></x></message>";

$doc=new DOMDocument;

$doc->loadXML($message);



$tag=$doc->getElementsByTagName("message");

foreach ($tag as $value) 
{
echo $type=$value->getAttribute("type");

if($type=='chat')
{
	echo $sender=$value->getAttribute('from');
	echo $reciver=$value->getAttribute('to');
	
	echo "<br>";
	$reciver=explode("@", $reciver);
	
}
}

?>