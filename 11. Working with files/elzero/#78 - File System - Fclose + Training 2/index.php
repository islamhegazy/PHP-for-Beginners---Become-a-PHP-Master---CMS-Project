<?php  
/*
    fwrite(handel ,string, length);
    fseek(handel, ofsset, whence)
    Mode:
        r: read only starting from begining of the file [file must be exist]
        r+:read and write starting from begining of the file [file must be exist]
        w: write only and [create file if not exist and delete file if exist and make new one with clear content]
        w+: write and read [create file if not exist and delete file if exist and make new one with clear content]
        a: write only [create file if not exist and not clear content and write to the end of file]
        a+ write and read [create file if not exist  and not clear content and write to the end of file]
        x: write only [create a new file and file must be exist and give error if exist ]
        x+:write and read [create a new file and file must be exist and give error if exist ]
*/

$fileHandel = fopen('islam.txt', 'r+');
$write = fwrite($fileHandel, 'L');
fclose($fileHandel);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>

<body>




</body>

</html>