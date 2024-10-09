<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $qname = "Marcus Aurelius"; 
    ?>
    <p>{{$name}}</P>
    <p>Welcome Page</P>
    <x-button title="welcome">
        Try me
    </x-button>
    <x-blog.blog :name="$qname">
        Stoicism
    </x-blog.blog>

</body>
</html>

