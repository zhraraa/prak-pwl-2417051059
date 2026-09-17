<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: 500;
        }
        
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #ffffff;
        }

        .profile-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: fit-content;
            background-color: rgba(255, 255, 255, 0.4);
            padding: 40px;
            border-radius: 15px;
        }
        
        .avatar-box {
            width: 140px;
            height: 140px;
            border-radius: 50%;
            border: 3px solid #5A363F;
            overflow: hidden;
            margin-bottom: 28px;
            background-color: #dcdcdc;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .avatar-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .info-box {
            width: 200px;
            background-color: #dcdcdc;
            color: #000000;
            text-align: center;
            padding: 10px 0;
            margin-bottom: 16px;
            font-size: 15px;
            color: #5A363F;
            border-radius: 15px;
            background-color: #ffffff;
        }
        
        .info-box:last-child {
            margin-bottom: 0;
        }
    </style>
</head>
<body style="background-color: #FFECF1;">

    <div class="profile-container">
        <div class="avatar-box">
            <img src="{{ asset('images/pp.png')}}" alt="Foto Profil" class="avatar-img">
        </div>

        <div class="info-box">
            {{ $nama ?: 'Nama' }}
        </div>

        <div class="info-box">
            {{ $kelas ?: 'Kelas' }}
        </div>

        <div class="info-box">
            {{ $npm ?: 'NPM' }}
        </div>
    </div>

</body>
</html>