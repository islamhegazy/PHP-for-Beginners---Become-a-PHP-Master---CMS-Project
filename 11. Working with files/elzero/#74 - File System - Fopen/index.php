<?php  
/*
    fopen(filename or link, , mode, include_path, context);

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

//$handel = fopen('islam.txt', 'r'); //لازم يكون ملف بنفس الاسم
//$handel = fopen('islam.txt', 'r+');// r+ -> read and write
$handel = fopen('islam2.txt', 'x');

?>

