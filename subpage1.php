<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: login.php');
    exit();
}
?>


<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela z układem</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            text-align: justify;
            table-layout: fixed;
        }
        th, td {
            border: 1px solid black;
            padding: 5px;
            text-align: left;
            height: 100px;
        }
        img {
            width: 100%; 
            max-height: 200px; 
            object-fit: contain; 
    }
        
    </style>
</head>
<body>

<table>

    <p><a href="index.html">Powrót do poprzedniej strony</a></p>
    <tr>
        <td colspan="12">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pharetra massa a vulputate tincidunt. Cras fermentum mauris feugiat vulputate finibus. Nunc erat justo, accumsan sed posuere sed, molestie sit amet augue. Quisque felis tellus, dictum sed diam et, sodales sollicitudin sapien. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris placerat, ex at mattis aliquet, ipsum enim porta sem, nec maximus lacus turpis et nulla. Ut hendrerit leo in dapibus venenatis. Nunc sit amet mauris, in consequat tellus mauris vel velit. Ipsum eget libero fringilla venenatis. Suspendisse sodales, justo a ultrices mattis, dolor orci non malesuada nulla pulvinar at pulvinar mauris, in consequat tellus mauris vel velit. Duis volutpat viverra enim, non malesuada nulla pulvinar at. Fusce sed neque tempor turpis non malesuada nulla pulvinar at ultricies ullamcorper vel ac mauris. </td>
    </tr>

    <tr>
        <td colspan = "3">Etiam euismod gravida pharetra. Donec imperdiet maximus tincidunt. Aliquam at lacus nisi. Ut blandit dui mi, vel porta arcu interdum ut. Sed mauris libero, dapibus at aliquam in, venenatis nec lorem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.  </td>
        <td colspan = "3">Morbi in ultrices justo. Ut cursus dolor quis est auctor, et hendrerit diam pellentesque. Mauris pellentesque justo quis sapien suscipit facilisis vel sed neque. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent pharetra gravida nisi, vitae tempor sapien auctor eget.</td>
        <td colspan = "3">Nulla rutrum ullamcorper eros, sit amet euismod tellus lacinia eu. Sed dictum faucibus consequat. Sed tempus eu tortor ac commodo. Nam non sem tristique lacus luctus vestibulum. Mauris urna mauris, faucibus eu purus non, laoreet facilisis nunc. In interdum neque quis risus consectetur, a commodo tortor facilisis.  </td>
        <td colspan = "3">Quisque ac diam eros. Proin a pharetra est. Proin ut ex eget ligula elementum cursus a et eros. Vestibulum laoreet tortor non risus interdum, in finibus ipsum eleifend. Curabitur pellentesque tristique lorem, non feugiat eros ullamcorper ac. Vivamus orci nisl, consectetur non tempus non, molestie nec nunc.  </td>
    </tr>
    
    <tr>
        <td colspan = "4">Praesent iaculis orci augue, et tincidunt ex mollis sed. In hac habitasse platea dictumst. Phasellus vel lacus tempor sem ultricies pulvinar sed eu felis. Nullam vulputate, leo a feugiat viverra, neque urna vestibulum sem, id convallis sapien eros a dui. Donec ornare ipsum quis odio blandit sollicitudin. Morbi efficitur ut lectus in vulputate. </td>
        <td colspan = "4">Mauris quis bibendum tortor, sed cursus lorem. Suspendisse venenatis metus ligula, non posuere lorem condimentum sed. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec in nisl laoreet, maximus risus ut, tempus enim. Suspendisse egestas justo sem, non bibendum nisi imperdiet ut. </td>
        <td colspan = "4">Phasellus mollis nisl et libero rhoncus, eget luctus neque efficitur. Cras ut justo velit. Donec a ipsum vehicula, gravida ligula non, venenatis odio. Integer placerat fringilla purus, mollis iaculis eros auctor in. Nulla eu nunc non sem scelerisque faucibus. Phasellus porttitor posuere molestie. Morbi vitae erat at dui vestibulum ultrices.</td>
    </tr>

    <tr>
        <td colspan = "3">
            <figure>
                <img src="images\owczarek-szkocki.jpg" alt="owczarek szkocki">
                <figcaption>Owczarek szkocki</figcaption>
            </figure>
        </td>     
        <td colspan = "3">
            <figure>
                <img src="images\owczarek_australijski.jpg" alt="owczarek australijski">
                <figcaption>Owczarek australijski</figcaption>
            </figure>
        </td>
        <td colspan = "3">
            <figure>
                <img src="images\golden-retriever.jpg" alt="golden retriever">
                <figcaption>Golden </figcaption>
            </figure>
        </td>    
        <td colspan = "3">
            <figure>
                <img src="images\border-collie.jpg" alt="border collie">
                <figcaption>Border collie</figcaption>
            </figure>
        </td>    

    </tr>

</table>

</body>
</html>
