<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/manageRoom.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

</head>

<body>
    <div class="row-manageroom">


        <div class="box01">
            <input type="text" class="search_room" name="roomname" placeholder="ค้าหาห้อง">
        </div>

        <select name="typeroome" class="typeroom">
            <option value="all">ทั้งหมด</option>
            <option value="public">ทั่วไป</option>
            <option value="private">ภายในองค์กร</option>
        </select>




        <div class="box02">
            <button class="searchroom-btn">ค้าหา</button>
        </div>

        <div class="box03">
            <button class="optionroom-btn">ตั้งค่าขนาดห้อง</button>
        </div>

        <div class="box04">
            <button class="addroom-btn">เพิ่มห้อง</button>
        </div>

    </div>





    <br><br><br>
    <div class="gen_rooms">
        <div class="rooms">
            <div>
                <img src="" alt="">
            </div>
            <div>
                <p>ชื่อห้อง : </p>
                <p>ขนาด : </p>
                <p>แบ่งครึ่งห้อง : </p>
                <p>ราคา : </p>
                <p>สถานะ : </p>
                <p>ประเภทของห้อง : </p>
            </div>
            <div class="icon-manage">
                <a class="delete-icon"  title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                <a class="edit-icon" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
            </div>
        </div>
        <div class="rooms">
            <div>
                <img src="" alt="">
            </div>
            <div>
                <p>ชื่อห้อง : </p>
                <p>ขนาด : </p>
                <p>แบ่งครึ่งห้อง : </p>
                <p>ราคา : </p>
                <p>สถานะ : </p>
                <p>ประเภทของห้อง : </p>
            </div>
            <div class="icon-manage">
                <a class="delete-icon"  title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                <a class="edit-icon" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
            </div>
        </div><div class="rooms">
            <div>
                <img src="" alt="">
            </div>
            <div>
                <p>ชื่อห้อง : </p>
                <p>ขนาด : </p>
                <p>แบ่งครึ่งห้อง : </p>
                <p>ราคา : </p>
                <p>สถานะ : </p>
                <p>ประเภทของห้อง : </p>
            </div>
            <div class="icon-manage">
                <a class="delete-icon"  title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                <a class="edit-icon" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
            </div>
        </div><div class="rooms">
            <div>
                <img src="" alt="">
            </div>
            <div>
                <p>ชื่อห้อง : </p>
                <p>ขนาด : </p>
                <p>แบ่งครึ่งห้อง : </p>
                <p>ราคา : </p>
                <p>สถานะ : </p>
                <p>ประเภทของห้อง : </p>
            </div>
            <div class="icon-manage">
                <a class="delete-icon"  title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                <a class="edit-icon" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
            </div>
        </div><div class="rooms">
            <div>
                <img src="" alt="">
            </div>
            <div>
                <p>ชื่อห้อง : </p>
                <p>ขนาด : </p>
                <p>แบ่งครึ่งห้อง : </p>
                <p>ราคา : </p>
                <p>สถานะ : </p>
                <p>ประเภทของห้อง : </p>
            </div>
            <div class="icon-manage">
                <a class="delete-icon"  title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                <a class="edit-icon" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
            </div>
        </div>



    </div>


</body>

</html>
