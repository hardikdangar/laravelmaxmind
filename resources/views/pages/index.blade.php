<!DOCTYPE html>
<html>
<head>
	<title>{{ $page->title }}</title>
	<meta name="description" content="{{ $page->description }}">

</head>
<body>	
	{!!html_entity_decode($page->content)!!}
</body>
</html>